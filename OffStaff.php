<?php
include 'headAdmin.php';
include 'topbarAdmin.php';
include 'sidebar.php';
include 'db_conn.php';
unset($_SESSION['iss']);
unset($_SESSION['dele']);
?>
<script type="text/javascript">
        localStorage.removeItem("bt")
        localStorage.removeItem("loi")
        localStorage.removeItem("dof")

        localStorage.removeItem("day")
        localStorage.removeItem("month")
        localStorage.removeItem("year")
        localStorage.removeItem("o1")
        localStorage.removeItem("o2")
        localStorage.removeItem("o3")
        localStorage.removeItem("o4")
        localStorage.removeItem("o5")
        localStorage.removeItem("o6")
        localStorage.removeItem("o7")
        localStorage.removeItem("o8")
        localStorage.removeItem("o9")
        localStorage.removeItem("o10")
        localStorage.removeItem("o11")

        localStorage.removeItem("qo1")
        localStorage.removeItem("qo2")
        localStorage.removeItem("qo3")
        localStorage.removeItem("qo4")
        localStorage.removeItem("qo5")
        localStorage.removeItem("qo6")
        localStorage.removeItem("qo7")
        localStorage.removeItem("qo8")
        localStorage.removeItem("qo9")
        localStorage.removeItem("qo10")
        localStorage.removeItem("qo11")

        localStorage.removeItem("wo1")
        localStorage.removeItem("wo2")
        localStorage.removeItem("wo3")
        localStorage.removeItem("wo4")
        localStorage.removeItem("wo5")
        localStorage.removeItem("wo6")
        localStorage.removeItem("wo7")
        localStorage.removeItem("wo8")
        localStorage.removeItem("wo9")
        localStorage.removeItem("wo10")
        localStorage.removeItem("wo11")

        localStorage.removeItem("eo1")
        localStorage.removeItem("eo2")
        localStorage.removeItem("eo3")
        localStorage.removeItem("eo4")
        localStorage.removeItem("eo5")
        localStorage.removeItem("eo6")
        localStorage.removeItem("eo7")
        localStorage.removeItem("eo8")
        localStorage.removeItem("eo9")
        localStorage.removeItem("eo10")
        localStorage.removeItem("eo11")

    </script>
<div class="home-section">
<div class="admin-home-title">
        <h1>
            OFFICIALS PAGE
        </h1>
    </div>
    <div class="admin-home">	
     <div class="adddel">
<?php
        if (isset($_SESSION['statu'])) {
                        echo "<p style='text-align:center;font-size:20px;font-weight:bold;padding-top:15px;color:red;' id='ha'>";
                        echo $_SESSION['statu']; echo "</p>";
                        unset($_SESSION['statu']);
        }
        elseif (isset($_SESSION['statuss'])) {
                echo "<p style='text-align:center;font-size:20px;font-weight:bold;padding-top:15px;color:green;' id='ha'>";
                echo $_SESSION['statuss']; echo "</p>";
                unset($_SESSION['statuss']);
        }
        
    ?>
    <a href="brgyofficial.htm" style="font-size: 35px;margin-left: 50px; margin-top: 15px;border: 1px solid black" onclick="saveInputValue();"><i class='bx bx-printer'></i></a>
      </div> 

<div style="height: 70px;width: 100%;padding:10px;padding-left:20px">
    <h1>
        Barangay Officials
    </h1>
    
</div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                <tr>
                    <th>Name</th>
                    
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                 <?php
                    $sql = "SELECT * from officials WHERE committee = 'Official'";
                    $result = $connn-> query($sql);

                    if ($result-> num_rows > 0) {
                        $i = 1;
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["name"] ."</td><td>". $row["position"] ."</td>
                            <td>". $row["status"] ."</td>
                                    <td>
                                        <form action='OffStaffmore' method='POST'>
                                            <input name='id' value='". $row['id'] ."' hidden>
                                            <button class='editt' name='submit' type='submit'>MORE</button>
                                        </form>
                                    </td>
                                    </tr>";

                                    ${"official_name_" . $i} = $row["name"];
                                    ${"position_" . $i} = $row["position"];
                                    ${"TS_" . $i} = $row["termstart"];
                                    ${"TE_" . $i} = $row["termend"];
                                    $i++;
                        }
                    }
                    else {
                        echo "<p style='text-align:center;font-size:25px;padding-bottom:15px;'>There are currently no officials data at the moment</p>";
                    }


                        $date = getdate(); 
  
                        // Extract day, month, and year 
                        $day = $date['mday']; 
                        $month1 = $date['mon'];
                        if ($month1 == '1') {
                            $month = "January";
                        } 
                        elseif ($month1 == '2') {
                            $month = "February";
                        } 
                        elseif ($month1 == '3') {
                            $month = "March";
                        } 
                        elseif ($month1 == '4') {
                            $month = "April";
                        } 
                        elseif ($month1 == '5') {
                            $month = "May";
                        } 
                        elseif ($month1 == '6') {
                            $month = "June";
                        } 
                        elseif ($month1 == '7') {
                            $month = "July";
                        } 
                        elseif ($month1 == '8') {
                            $month = "August";
                        } 
                        elseif ($month1 == '9') {
                            $month = "September";
                        } 
                        elseif ($month1 == '10') {
                            $month = "October";
                        } 
                        elseif ($month1 == '11') {
                            $month = "November";
                        } 
                        else {
                            $month = "December";
                        } 
                        $year = $date['year'];
                   ?>

            
        </tbody>
        </table>
        <input type="text" name="o1" id="o1" value="<?= $official_name_1 ?>" hidden>
        <input type="text" name="o2" id="o2" value="<?= $official_name_2 ?>" hidden>
        <input type="text" name="o3" id="o3" value="<?= $official_name_3 ?>" hidden>
        <input type="text" name="o4" id="o4" value="<?= $official_name_4 ?>" hidden>
        <input type="text" name="o5" id="o5" value="<?= $official_name_5 ?>" hidden>
         <input type="text" name="o6" id="o6" value="<?= $official_name_6 ?>" hidden>
        <input type="text" name="o7" id="o7" value="<?= $official_name_7 ?>" hidden>
        <input type="text" name="o8" id="o8" value="<?php echo $official_name_8; ?>" hidden>
        <input type="text" name="o9" id="o9" value="<?php echo $official_name_9; ?>" hidden>
        <input type="text" name="o10" id="o10" value="<?php echo $official_name_10; ?>" hidden>
        <input type="text" name="o11" id="o11" value="<?php echo $official_name_11; ?>" hidden>
        <input type="text" name="day" id="day" value="<?= $day ?>" hidden>
        <input type="text" name="month" id="month" value="<?= $month ?>" hidden>
        <input type="text" name="year" id="year" value="<?= $year ?>" hidden>

        <input type="text" name="qo1" id="qo1" value="<?= $position_1 ?>" hidden>
        <input type="text" name="qo2" id="qo2" value="<?= $position_2 ?>" hidden>
        <input type="text" name="qo3" id="qo3" value="<?= $position_3 ?>" hidden>
        <input type="text" name="qo4" id="qo4" value="<?= $position_4 ?>" hidden>
        <input type="text" name="qo5" id="qo5" value="<?= $position_5 ?>" hidden>
         <input type="text" name="qo6" id="qo6" value="<?= $position_6 ?>" hidden>
        <input type="text" name="qo7" id="qo7" value="<?= $position_7 ?>" hidden>
        <input type="text" name="qo8" id="qo8" value="<?php echo $position_8; ?>" hidden>
        <input type="text" name="qo9" id="qo9" value="<?php echo $position_9; ?>" hidden>
        <input type="text" name="qo10" id="qo10" value="<?php echo $position_10; ?>" hidden>
        <input type="text" name="qo11" id="qo11" value="<?php echo $position_11; ?>" hidden>

        <input type="text" name="wo1" id="wo1" value="<?= $TS_1 ?>" hidden>
        <input type="text" name="wo2" id="wo2" value="<?= $TS_2 ?>" hidden>
        <input type="text" name="wo3" id="wo3" value="<?= $TS_3 ?>" hidden>
        <input type="text" name="wo4" id="wo4" value="<?= $TS_4 ?>" hidden>
        <input type="text" name="wo5" id="wo5" value="<?= $TS_5 ?>" hidden>
         <input type="text" name="wo6" id="wo6" value="<?= $TS_6 ?>" hidden>
        <input type="text" name="wo7" id="wo7" value="<?= $TS_7 ?>" hidden>
        <input type="text" name="wo8" id="wo8" value="<?php echo $TS_8; ?>" hidden>
        <input type="text" name="wo9" id="wo9" value="<?php echo $TS_9; ?>" hidden>
        <input type="text" name="wo10" id="wo10" value="<?php echo $TS_10; ?>" hidden>
        <input type="text" name="wo11" id="wo11" value="<?php echo $TS_11; ?>" hidden>

        <input type="text" name="eo1" id="eo1" value="<?= $TE_1 ?>" hidden>
        <input type="text" name="eo2" id="eo2" value="<?= $TE_2 ?>" hidden>
        <input type="text" name="eo3" id="eo3" value="<?= $TE_3 ?>" hidden>
        <input type="text" name="eo4" id="eo4" value="<?= $TE_4 ?>" hidden>
        <input type="text" name="eo5" id="eo5" value="<?= $TE_5 ?>" hidden>
         <input type="text" name="eo6" id="eo6" value="<?= $TE_6 ?>" hidden>
        <input type="text" name="eo7" id="eo7" value="<?= $TE_7 ?>" hidden>
        <input type="text" name="eo8" id="eo8" value="<?php echo $TE_8; ?>" hidden>
        <input type="text" name="eo9" id="eo9" value="<?php echo $TE_9; ?>" hidden>
        <input type="text" name="eo10" id="eo10" value="<?php echo $TE_10; ?>" hidden>
        <input type="text" name="eo11" id="eo11" value="<?php echo $TE_11; ?>" hidden>
                </div>
            </div>
             <hr style="margin-top:50px">
             <div style="height: 70px;width: 100%;padding:10px;padding-left:20px;display:flex;margin-bottom:20px">
                <h1 style="width:50%">
                    Barangay Tanod
                </h1>
                <div style="display:;width:50%; text-align:right;height:60px;float:right;" >
                    <button class="addd" onclick="document.location='TanodAdd'" style="height:100%">ADD TANOD</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                 <?php
                    $sql = "SELECT * from officials WHERE position = 'Tanod' AND removed IS NULL";
                    $result = $connn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["name"] ."</td><td>". $row["position"] ."</td>
                            <td>". $row["status"] ."</td>
                                    <td>
                                        <form action='TanodStaffmore' method='POST'>
                                            <input name='id' value='". $row['id'] ."' hidden>
                                            <button class='editt' name='submit' type='submit'>MORE</button>
                                        </form>
                                    </td>
                                    </tr>";
                        }
                    }
                    else {
                        echo "<p style='text-align:center;font-size:25px;padding-bottom:15px;'>There are currently no tanod information at the moment</p>";
                    }
                    
                   ?>

            
        </tbody>
        </table>
                </div>
            </div>  
<!--
<hr style="margin-top:50px">
             <div style="height: 70px;width: 100%;padding:10px;padding-left:20px;display:flex;margin-bottom:20px">
                <h1 style="width:50%">
                    Removed Barangay Tanod
                </h1>
            </div>
<div class="row">
                <div class="col-xs-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                 <?php
                    $sql = "SELECT * from officials WHERE position = 'Tanod' AND removed = 1";
                    $result = $connn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["name"] ."</td><td>". $row["position"] ."</td>
                            <td>". $row["status"] ."</td>
                                    <td>
                                        <form action='TanodStaffdeleted' method='POST'>
                                            <input name='id' value='". $row['id'] ."' hidden>
                                            <button class='editt' name='submit' type='submit'>MORE</button>
                                        </form>
                                    </td>
                                    </tr>";
                        }
                    }
                    else {
                        echo "<p style='text-align:center;font-size:25px;padding-bottom:15px;'>There are currently no removed tanod information at the moment</p>";
                    }
                    $connn-> close();
                   ?>

            
        </tbody>
        </table>
                </div>
            </div>  
-->
        </div>
       
        
    </div>
</div>
</div>
<script type="text/javascript">
    function saveInputValue() {
        localStorage.setItem("day", document.getElementById("day").value);
        localStorage.setItem("month", document.getElementById("month").value);
        localStorage.setItem("year", document.getElementById("year").value);
        localStorage.setItem("o1", document.getElementById("o1").value);
        localStorage.setItem("o2", document.getElementById("o2").value);
        localStorage.setItem("o3", document.getElementById("o3").value);
        localStorage.setItem("o4", document.getElementById("o4").value);
        localStorage.setItem("o5", document.getElementById("o5").value);
        localStorage.setItem("o6", document.getElementById("o6").value);
        localStorage.setItem("o7", document.getElementById("o7").value);
        localStorage.setItem("o8", document.getElementById("o8").value);
        localStorage.setItem("o9", document.getElementById("o9").value);
        localStorage.setItem("o10", document.getElementById("o10").value);
        localStorage.setItem("o11", document.getElementById("o11").value);

        localStorage.setItem("qo1", document.getElementById("qo1").value);
        localStorage.setItem("qo2", document.getElementById("qo2").value);
        localStorage.setItem("qo3", document.getElementById("qo3").value);
        localStorage.setItem("qo4", document.getElementById("qo4").value);
        localStorage.setItem("qo5", document.getElementById("qo5").value);
        localStorage.setItem("qo6", document.getElementById("qo6").value);
        localStorage.setItem("qo7", document.getElementById("qo7").value);
        localStorage.setItem("qo8", document.getElementById("qo8").value);
        localStorage.setItem("qo9", document.getElementById("qo9").value);
        localStorage.setItem("qo10", document.getElementById("qo10").value);
        localStorage.setItem("qo11", document.getElementById("qo11").value);

        localStorage.setItem("wo1", document.getElementById("wo1").value);
        localStorage.setItem("wo2", document.getElementById("wo2").value);
        localStorage.setItem("wo3", document.getElementById("wo3").value);
        localStorage.setItem("wo4", document.getElementById("wo4").value);
        localStorage.setItem("wo5", document.getElementById("wo5").value);
        localStorage.setItem("wo6", document.getElementById("wo6").value);
        localStorage.setItem("wo7", document.getElementById("wo7").value);
        localStorage.setItem("wo8", document.getElementById("wo8").value);
        localStorage.setItem("wo9", document.getElementById("wo9").value);
        localStorage.setItem("wo10", document.getElementById("wo10").value);
        localStorage.setItem("wo11", document.getElementById("wo11").value);

        localStorage.setItem("eo1", document.getElementById("eo1").value);
        localStorage.setItem("eo2", document.getElementById("eo2").value);
        localStorage.setItem("eo3", document.getElementById("eo3").value);
        localStorage.setItem("eo4", document.getElementById("eo4").value);
        localStorage.setItem("eo5", document.getElementById("eo5").value);
        localStorage.setItem("eo6", document.getElementById("eo6").value);
        localStorage.setItem("eo7", document.getElementById("eo7").value);
        localStorage.setItem("eo8", document.getElementById("eo8").value);
        localStorage.setItem("eo9", document.getElementById("eo9").value);
        localStorage.setItem("eo10", document.getElementById("eo10").value);
        localStorage.setItem("eo11", document.getElementById("eo11").value);
    }  
</script>
<script type="text/javascript">
    window.onload = function() {
        timedHide(document.getElementById('ha'),3);
    }
    function timedHide(element, seconds) {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds*1000);
        }
    }
</script>
<script type="text/javascript">// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closer")[0];
var span1 = document.getElementsByClassName("closer1")[0];
var span2 = document.getElementsByClassName("closer2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
