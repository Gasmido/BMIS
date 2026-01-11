<?php
include 'head2.php';
include 'db_conn.php';

$iid = $_SESSION['ID'];

// Assuming you already have a database connection ($conn) as a mysqli object
$query = "SELECT user_email FROM users WHERE user_id = ?";
$stmt = $connn->prepare($query); // Prepare the query
$stmt->bind_param("i", $iid); // Bind the session ID parameter
$stmt->execute(); // Execute the query

// Fetch result
$stmt->bind_result($userEmail);
$stmt->fetch(); // Fetch the result
$stmt->close();
?>

<body>
<div class="container-fluid nav-bar bg-transparent sticky-top" style="margin-top:0;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="Home-page" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/logoo.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Ayos Lomboy</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="Home-page" class="nav-item nav-link">Home</a>
                        <a href="news" class="nav-item nav-link">News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                            <div class="dropdown-menu rounded-0 m-0" style="min-width: 120px;max-width: 120px;">
                                <?php 
                                  if (isset($_SESSION['ID'])) {
                                    echo "<a href='AccSetting' class='dropdown-item'>Setting</a>";
                                    echo "<a href='logout' class='dropdown-item'>Log-Out</a>";
                                  }
                                  else {
                                    echo "<a href='login' class='dropdown-item'>Log-In</a>";
                                    echo "<a href='register' class='dropdown-item'>Sign-Up</a>";
                                  }
                                ?>
                            </div>
                        </div>                    
                    </div>
                </div>
            </nav>
        </div>

<div class="homepage"  style="margin-top:0;">
	
<!-- Complaint Form Section -->
<div class="container my-5">
    <div class="card mx-auto shadow-sm" style="max-width: 600px;">
        <div class="card-body">
            
            <h2 class="text-center mb-4">Submit a Complaint</h2>
           <?php
if (isset($_SESSION['good'])) {
    echo "<h3 id='goodMessage' style='font-size:20px;color:green;text-align:center'>";
    echo $_SESSION['good'];
    echo "</h3>";
    unset($_SESSION['good']);
} elseif (isset($_SESSION['bad'])) {
    echo "<h3 id='goodMessage' style='font-size:20px;color:red;text-align:center'>";
    echo $_SESSION['bad'];
    echo "</h3>";
    unset($_SESSION['bad']);
} 
?>

<script>
    // Check if the element exists
    window.onload = function() {
        var message = document.getElementById('goodMessage');
        if (message) {
            // Hide the message after 3 seconds
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000); // 3000 milliseconds = 3 seconds
        }
    };
</script>
<?php
    if ($status === "Approved") {
?>
            <form id="complaintForm" action="complaint_process" method="post">
                <!-- Complaint Title -->
                <div class="mb-3">
                    <label for="complaintTitle" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="complaintSubject" name="complaint_subject" 
                        placeholder="Enter complaint subject" maxlength="100" onkeyup="this.value = this.value.replace(/[&*<>']/g, '')" required>
                </div>

                <!-- Complaint Details -->
                <div class="mb-3">
                    <label for="complaintDetails" class="form-label">Complaint Description</label>
                    <textarea class="form-control" id="complaintDetails" name="complaint_details" rows="4" cols="50" type="text" onkeyup="this.value = this.value.replace(/[&*<>']/g, '')" pattern="[A-Za-z ]{1,300}"
                        rows="4" maxlength="1000" placeholder="Explain your complaint (max. 1000 characters)" required></textarea>
                </div>
                <input type="text" name="userid" value="<?php echo htmlspecialchars($iid); ?>" hidden> 
                <input type="text" name="useremail" value="<?php echo htmlspecialchars($userEmail); ?>" hidden> 
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit Complaint</button>
                </div>
            </form>
            <?php
        } elseif ($status === "Denied") {  ?>
            <div style="text-align: center;">
            <p style="width:100%">Sorry but your account have been denied to access this service.</p>
            </div>
            <?php
        } else {
            ?>
            <div style="text-align: center;">
            <p style="width:100%">Please wait for admin to approve your account to access this service.</p>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>
<div class="container my-5">
    <h3 class="text-center">Your Complaints</h3>
    <style>
        .table-container {
            max-width: 100%;
            margin: 0 auto;
            overflow-x: auto; /* Adds horizontal scroll if needed */
        }
        .table td {
            word-wrap: break-word; /* Wrap long words */
            word-break: break-word; /* Break long words if necessary */
            white-space: normal; /* Allow wrapping */
            color: black;
        }
        table th {
            color: black;
        }
        .table td.description {
            max-width: 400px; /* Limit width of the description column */
        }
    </style>
    <?php
    // Query the complaints for the logged-in user
    $complaintQuery = "SELECT complaint_id, complaint_subject, complaint_details, datetoday FROM complaints WHERE userid = ?";
    $complaintStmt = $connn->prepare($complaintQuery);
    $complaintStmt->bind_param("i", $iid);
    $complaintStmt->execute();
    $complaintStmt->store_result(); // Store the result to check number of rows
    $noo = 1;
    // Check if there are no complaints for the user
    if ($complaintStmt->num_rows === 0) {
        echo "<p class='text-center'>You haven't submitted any complaints yet</p>";
    } else {
        // Bind the result variables
        $complaintStmt->bind_result($complaintId, $complaintSubject, $complaintDetails, $dateSubmitted);

        echo '<div class="table-container">';
        echo '<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Date Submitted</th>
                    </tr>
                </thead>
                <tbody>';
        
        // Display complaints in a table
        while ($complaintStmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $noo . "</td>";
            echo "<td>" . htmlspecialchars($complaintSubject) . "</td>";
            echo "<td>" . htmlspecialchars($complaintDetails) . "</td>";
            echo "<td>" . htmlspecialchars($dateSubmitted) . "</td>";
            echo "</tr>";
            $noo++;
        }

        echo "</tbody></table>";
        echo '</div>';
    }

    $complaintStmt->close();
    ?>
</div>



<?php
include 'footer.php';
?>