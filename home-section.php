<?php
include 'headAdmin.php';
include 'topbarAdmin.php';
include 'sidebar.php';
include 'db_conn.php';
unset($_SESSION['iss']);
unset($_SESSION['iiii']);
unset($_SESSION['iiiia']);
unset($_SESSION['iii']);
unset($_SESSION['iiiias']);
?>
<?php
$query6 = "SELECT * FROM resident WHERE sex='Male'";
        $result6 = mysqli_query($connn, $query6); 
         
        if ($result6) 
        { 
            $male = mysqli_num_rows($result6); 
            mysqli_free_result($result6); 
        }
        $query7 = "SELECT * FROM resident WHERE sex='Female'";
        $result7 = mysqli_query($connn, $query7); 
         
        if ($result7) 
        { 
            $female = mysqli_num_rows($result7); 
            mysqli_free_result($result7); 
        }
        $query8 = "SELECT * FROM resident";
        $result8 = mysqli_query($connn, $query8); 
         
        if ($result8) 
        { 
            $pop = mysqli_num_rows($result8); 
            mysqli_free_result($result8); 
        }  

       
        $maleratio =$male / $pop;
        $maleper=$maleratio * 100;
        $femaleratio =$female / $pop;
        $femaleper=$femaleratio * 100;
        $dataPoints = array( 

        
        array("label"=>"Male", "y"=>$maleper),
        array("label"=>"Female", "y"=>$femaleper)

)
?>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Male and Female Percentage"
    },
    subtitles: [{
        text: ""
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="home-section">
    <div class="admin-home-title">
        <h1>
            HOME PAGE
        </h1>
    </div>
<div class="admin-home">
    <?php
        $query = "SELECT id FROM blotter"; 
        $result = mysqli_query($connn, $query); 
          
        if ($result) 
        { 
            $blotter = mysqli_num_rows($result); 
            mysqli_free_result($result); 
        }
        $query2 = "SELECT id FROM docreq WHERE Status = 'Processing'"; 
        $result2 = mysqli_query($connn, $query2); 
          
        if ($result2) 
        { 
            $docreq = mysqli_num_rows($result2); 
            mysqli_free_result($result2); 
        } 
        $query3 = mysqli_query($connn, 'SELECT SUM(amountpaid) AS value_sum FROM revenues'); 
        $row = mysqli_fetch_assoc($query3); 
        $sum = $row['value_sum'];

        $query4 = "SELECT * FROM users WHERE NOT user_id=5";
        $result4 = mysqli_query($connn, $query4); 
         
        if ($result4) 
        { 
            $users = mysqli_num_rows($result4); 
            mysqli_free_result($result4); 
        }   
        $query5 = "SELECT id FROM officials WHERE status='Active'"; 
        $result5 = mysqli_query($connn, $query5); 
          
        if ($result5) 
        { 
            $officials = mysqli_num_rows($result5); 
            mysqli_free_result($result5); 
        } 
        
      
       // Query to count the number of families
        $query9 = "SELECT COUNT(*) AS HouseNo FROM household";
        $result9 = mysqli_query($connn, $query9);

        if ($result9) {
            $row = mysqli_fetch_assoc($result9);
            $families = $row['HouseNo'];
            mysqli_free_result($result9);
        } else {
            $families = 0;
        }

        // Query to calculate the average number of inhabitants per household
        $query10 = "SELECT COUNT(*) AS inhabitants FROM household2 GROUP BY houseID";
        $result10 = mysqli_query($connn, $query10);

        $total_inhabitants = 0;
        $total_households = 0;

        if ($result10) {
            while ($row = mysqli_fetch_assoc($result10)) {
                $total_inhabitants += $row['inhabitants'];
                $total_households++;
            }
            mysqli_free_result($result10);
        }

        $average_inhabitants = $total_households > 0 ? $total_inhabitants / $total_households : 0;
        // Initialize counters for each age group
        $senior_citizens = 0;
        $adults = 0;
        $young_adults = 0;
        $teenagers = 0;
        $children = 0;

        // Get the current date
        $current_year = date('Y');
        $current_month = date('m');
        $current_day = date('d');

        // Query the resident table for birthdates
        $query = "SELECT birthdate FROM resident";
        $result = mysqli_query($connn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $birthdate = $row['birthdate'];
                $birth_year = date('Y', strtotime($birthdate));
                $birth_month = date('m', strtotime($birthdate));
                $birth_day = date('d', strtotime($birthdate));

                // Calculate the age
                $age = $current_year - $birth_year;
                if (($current_month < $birth_month) || ($current_month == $birth_month && $current_day < $birth_day)) {
                    $age--;
                }

                // Categorize by age group
                if ($age >= 60) {
                    $senior_citizens++;
                } elseif ($age >= 30) {
                    $adults++;
                } elseif ($age >= 20) {
                    $young_adults++;
                } elseif ($age >= 13) {
                    $teenagers++;
                } elseif ($age >= 0) {
                    $children++;
                }
            }
            mysqli_free_result($result);
        }
        // Query to count the number of complaints
        $query = "SELECT COUNT(*) AS complaint_id FROM complaints";
        $result = mysqli_query($connn, $query); // Replace $connn with your database connection variable

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $complaints = $row['complaint_id']; // Fetch the count
            mysqli_free_result($result);
        } else {
            $complaints = 0; // Default to 0 if the query fails
        }
    // Initialize an array to store the average monthly requests
        $doc_averages = [
            'Certificate of Residency' => 0,
            'Certificate of Indigency' => 0,
            'Barangay Clearance' => 0,
            'Kasunduan' => 0,
            'BARC Certification' => 0,
        ];
        
        // Define the document types
        $document_types = array_keys($doc_averages);
        
        // Loop through each document type to calculate the average
        foreach ($document_types as $type) {
            $query = "SELECT COUNT(*) / 12 AS average_requests 
                      FROM docreq 
                      WHERE documentType = '$type' AND YEAR(CURDATE()) = YEAR(`CURDATE`)";
            $result = mysqli_query($connn, $query);
        
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $doc_averages[$type] = number_format($row['average_requests'], 2); // Format to 2 decimal places
                mysqli_free_result($result);
            }
        }
     // Query to count inhabitants per purok
$sql = "
    SELECT h.purok, COUNT(h2.houseID) AS inhabitants
    FROM household h
    INNER JOIN household2 h2 ON h.HouseNo = h2.houseID
    GROUP BY h.purok
";
$result = mysqli_query($connn, $sql);

// Prepare data for the chart
$puroks = [];
$inhabitants = [];

while ($row = mysqli_fetch_assoc($result)) {
    $puroks[] = $row['purok'];
    $inhabitants[] = $row['inhabitants'];
}
    ?>

  <!-- Horizontal Flex Container -->
    <div class="horizontal-sections">

       <!-- Residents Section -->
<div class="section residents-section">
    <h2>Residents</h2>
    <div class="admin-home-box-container">
        <a href="ResidentRecord">
        <div class="admin-home-box">
            <h3>Population</h3>
            <p><?php echo $pop; ?></p>
        </div>
    </a>
    <a href="Household">
        <div class="admin-home-box">
            <h3>No. of Families</h3>
            <p><?php echo $families; ?></p>
        </div>
    </a>
    <a href="Household">
        <div class="admin-home-box">
            <h3 style="font-size: 22px;">Average No. of People per Household</h3>
            <p><?php echo number_format($average_inhabitants, 2); ?></p>
        </div>
    </a>
    </div>
    <div id="ageGroupChartContainer" class="chart-box" style="height: 300px; width: 100%;"></div>
    <div id="genderChartContainer" class="chart-box" style="height: 300px; width: 100%;"></div>
    <div class="chart-container" style="min-height:200px;margin-top: 15px;">
        <canvas id="inhabitantsChart"></canvas>
    </div>
</div>


        <!-- Blotter Section -->
        <div class="section blotter-section">
            <h2>Blotter</h2>
            
             <div class="admin-home-box-container">
                <a href="Blotter">
            <div class="admin-home-box">
                <h3>No. of Blotter</h3>
                <p><?php echo $blotter; ?></p>
            </div>
               </a>
               <a href="blotterSettled">
            <div class="admin-home-box">
                <h3>Settled Cases</h3>
                <p>
            <?php
                $sql= "SELECT Status FROM blotter WHERE Status ='Settled'";
                $result = mysqli_query($connn, $sql);

                $num_rows = mysqli_num_rows($result);

                echo $num_rows;
            ?>
        </p>
            </div>
        </a>
        <a href="blotterActive">
            <div class="admin-home-box">
                <h3>Active Cases</h3>
                <p>
            <?php
                $sql= "SELECT Status FROM blotter WHERE Status ='Active'";
                $result = mysqli_query($connn, $sql);

                $num_rows = mysqli_num_rows($result);

                echo $num_rows;
            ?>
        </p>
            </div>
        </a>
        <a href="blotterRequest">
            <div class="admin-home-box">
                <h3>Blotter Filing Requests</h3>
                <p>
            <?php
                $sql= "SELECT Status FROM blotter WHERE Status ='Processing'";
                $result = mysqli_query($connn, $sql);

                $num_rows = mysqli_num_rows($result);

                echo $num_rows;
            ?>
        </p>
            </div>
        </a>
        </div>
         </div>

        <!-- Officials Section -->
        <div class="section officials-section">
            <h2>Officials</h2>
            
             <div class="admin-home-box-container">
                <a href="OffStaff">
            <div class="admin-home-box">
                <h3>No. of Active Officials</h3>
                <p><?php echo $officials; ?></p>
            </div>
            </a>
        </div>
    
        </div>

        <!-- Document Requests Section -->
        <div class="section document-requests-section">
            <h2>Document Requests</h2>
           
             <div class="admin-home-box-container">
                 <a href="DocReq">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">No. of Document Requests</h3>
                <p><?php echo $docreq; ?></p>
            </div>
              </a>
              <a href="DocReqCOR">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">Certificate of Residency Requests</h3>
                <p><?php
                    $sql= "SELECT documentType FROM docreq WHERE documentType ='Certificate of Residency'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows;
                ?></p>
            </div>
              </a>
              <a href="DocReqCOI">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">Certificate of Indigency Requests</h3>
                <p><?php
                    $sql= "SELECT documentType FROM docreq WHERE documentType ='Certificate of Indigency'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows;
                ?></p>
            </div>
              </a>
              <a href="DocReqBC">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">Barangay Clearance Requests</h3>
                <p><?php
                    $sql= "SELECT documentType FROM docreq WHERE documentType ='Barangay Clearance'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows;
                ?></p>
            </div>
              </a>
              <a href="DocReqK">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">Kasunduan Requests</h3>
                <p><?php
                    $sql= "SELECT documentType FROM docreq WHERE documentType ='Kasunduan'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows;
                ?></p>
            </div>
              </a>
              <a href="DocReqB">
            <div class="admin-home-box">
                <h3 style="font-size: 22px;">BARC Certification Requests</h3>
                <p><?php
                    $sql= "SELECT documentType FROM docreq WHERE documentType ='BARC Certification'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows;
                ?></p>
            </div>
              </a>
              
               <!-- New boxes for average monthly requests -->
       
        
         <!-- Add a canvas for the chart -->
    <div class="chart-container" style="width: 100%; margin: 20px auto;">
        <canvas id="docRequestsChart" style="width: 100%; height: 500px;"></canvas>
    </div>
        </div>
 <script>
        // Chart 1: Inhabitants per Purok
        const puroks = <?php echo json_encode($puroks); ?>;
        const inhabitants = <?php echo json_encode($inhabitants); ?>;

        const inhabitantsCtx = document.getElementById('inhabitantsChart').getContext('2d');
        const inhabitantsChart = new Chart(inhabitantsCtx, {
            type: 'bar',
            data: {
                labels: puroks,
                datasets: [{
                    label: 'Number of Residents per Purok',
                    data: inhabitants,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Residents'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Purok'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });

        // Chart 2: Average Monthly Requests
        const docAverages = <?php echo json_encode($doc_averages); ?>;

        const docLabels = Object.keys(docAverages);
        const docData = Object.values(docAverages);

        const docRequestsCtx = document.getElementById('docRequestsChart').getContext('2d');
        const docRequestsChart = new Chart(docRequestsCtx, {
            type: 'bar',
            data: {
                labels: docLabels,
                datasets: [{
                    label: 'Average Monthly Requests',
                    data: docData,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Average Requests'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    </script>
        </div>

        <!-- Revenue Section -->
        <div class="section revenue-section">
            <h2>Revenue</h2>
            
             <div class="admin-home-box-container">
                <a href="Revenues">
            <div class="admin-home-box">
                <h3>Total Revenue</h3>
                <p>&#8369; <?php echo isset($sum) ? $sum : "0"; ?></p>
            </div>
              </a>
        </div>
  
        </div>
        <!-- Complaints Section -->
        <div class="section complaints-section">
            <h2>Complaints</h2>
            
             <div class="admin-home-box-container">
                <a href="complaints">
            <div class="admin-home-box">
                <h3>No. of Complaints</h3>
                <p><?php echo $complaints; ?></p>
            </div>
             </a>
        </div>
       
        </div>

        <!-- User Section -->
        <div class="section users-section">
            <h2>Users</h2>
            
             <div class="admin-home-box-container">
                <a href="UserAcc">
            <div class="admin-home-box">
                <h3>No. of Users</h3>
                <p><?php $sql= "SELECT user_id FROM users WHERE NOT user_id = 5";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows; ?></p>
            </div>
            </a>
            <a href="UserAccDenied">
            <div class="admin-home-box">
                <h3>Denied Users</h3>
                <p><?php $sql= "SELECT user_id FROM users WHERE NOT user_id = 5 AND Status = 'Denied'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows; ?></p>
            </div>
            </a>
            <a href="UserAccApp">
            <div class="admin-home-box">
                <h3>Approved Users</h3>
                <p><?php $sql= "SELECT user_id FROM users WHERE NOT user_id = 5 AND Status = 'Approved'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows; ?></p>
            </div>
            </a>
            <a href="UserAccPro">
            <div class="admin-home-box">
                <h3 style="font-size:22px">Users with Pending Approval</h3>
                <p><?php $sql= "SELECT user_id FROM users WHERE NOT user_id = 5 AND Status = 'Processing'";
                    $result = mysqli_query($connn, $sql);

                    $num_rows = mysqli_num_rows($result);

                    echo $num_rows; ?></p>
            </div>
            </a>
        </div>
    
        </div>
    </div>
</div>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
window.onload = function () {
    // First Pie Chart: Age Group Distribution
    var seniorCitizens = <?php echo $senior_citizens; ?>;
    var adults = <?php echo $adults; ?>;
    var youngAdults = <?php echo $young_adults; ?>;
    var teenagers = <?php echo $teenagers; ?>;
    var children = <?php echo $children; ?>;

    var ageGroupChart = new CanvasJS.Chart("ageGroupChartContainer", {
        animationEnabled: true,
        title: {
            text: "Age Group Distribution"
        },
        data: [{
            type: "pie",
            yValueFormatString: "#,##0\"\"",
            indexLabel: "{label} ({y})",
            dataPoints: [
                { label: "Senior Citizens (60+)", y: seniorCitizens },
                { label: "Adults (30-59)", y: adults },
                { label: "Young Adults (20-29)", y: youngAdults },
                { label: "Teenagers (13-19)", y: teenagers },
                { label: "Children (0-10)", y: children }
            ]
        }]
    });
    ageGroupChart.render();

    // Second Pie Chart: Male vs Female Percentage
    var malePercentage = <?php echo $maleper; ?>;
    var femalePercentage = <?php echo $femaleper; ?>;

    var genderChart = new CanvasJS.Chart("genderChartContainer", {
        animationEnabled: true,
        title: {
            text: "Male and Female Percentage"
        },
        data: [{
            type: "pie",
            yValueFormatString: "#,##0.00\"%\"",
            indexLabel: "{label} ({y})",
            dataPoints: [
                { label: "Male", y: malePercentage },
                { label: "Female", y: femalePercentage }
            ]
        }]
    });
    genderChart.render();
}
</script>

<style>
    .horizontal-sections {
        flex-wrap: nowrap;
        gap: 20px;
        padding: 20px;
        overflow-x: auto;
        width: 100%;
    }

    .section {
    display: flex;
    flex-direction: column;
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    min-width: 300px;
    flex: 0 0 auto;
    margin-bottom: 20px;
}

.section h2 {
    margin-bottom: 15px;
}

/* Flex container for admin-home-box */
.section .admin-home-box-container {
    display: flex;
    flex-wrap: wrap; /* Allows wrapping if there are too many boxes */
    gap: 10px; /* Adds space between the boxes */
}

.admin-home-box {
    background-color: #fff;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    flex: 1; /* Makes all boxes equal width */
    max-width: 150px; /* Optional: Limits the width of each box */
}


    .admin-home-box h3 {
        margin-bottom: 10px;
    }

    .chart-box {
        margin-top: 15px;
    }
</style>



</div>
 <!--
<div class="query">
    <div class="asdfq">
        <h1>QUERY</h1>
    </div>
    <button>SEARCH</button>
   <label for="items"></label>
    <select id="items">
      <option value="volvo">List of Registered Voters</option>
      <option value="saab">List of Filed to Action Blotters</option>
      <option value="opel">List of Senior Citizen Registered in the Barangay</option>
      <option value="audi">List of Male Residents</option>
      <option value="audi">List of Female Residents</option>
    </select>
</div>
 <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Civil Status</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </tfoot>
        </tbody>
        </table>
                </div>
            </div>
        </div>
        <div class="spacer">
            
        </div>

</div>
-->
<?php  mysqli_close($connn); ?>
<script type="text/javascript">
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<script src="Datatables/js/jquery.js"></script>
<script src="Datatables/js/jquery.dataTables.js"></script>
<script src="Datatables/js/bootstrap.js"></script>
<script src="Datatables/js/dataTables.bootstrap.js"></script>
<script src="Datatables/js/script.js"></script>