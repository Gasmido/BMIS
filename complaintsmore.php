<?php
include 'headAdmin.php';
include 'topbarAdmin.php';

if (isset($_SESSION['iss'])) {
    $idd = $_SESSION['iss'];
}
elseif (!isset($_POST['submit'])) {
    header('location: Complaints');            
}
elseif (isset($_POST['id'])) {
    $idd = $_POST['id'];
    if (!isset($_SESSION['iss'])) {
        $_SESSION['iss'] = $_POST['id'];
    }
} 
else {
    header('location: Complaints');
}
include 'sidebar.php';
include 'db_conn.php';
?>

<div class="home-section">  
    <div class="admin-home-blot">
        <?php
            // Modify the SQL query to fetch complaints details
            $sql3 = "SELECT * FROM complaints WHERE complaint_id=".$idd;
            $result3 = $connn->query($sql3);
            if ($result3->num_rows > 0) {
                while ($row = $result3->fetch_assoc()) {
                    $id = $row['complaint_id'];
                    $subject = $row['complaint_subject'];
                    $details = $row['complaint_details'];
                    $dateSubmitted = $row['datetoday'];
                }
            } else {
                echo "<p style='text-align:center;font-size:25px;padding-bottom:15px;'>There are currently no complaint records at the moment</p>";
            }
            $connn->close();
        ?>

        <div id="myModalblot" class="modal4">
            <!-- Modal content -->
            <div class="modal-contentRr3">
                <a href="complaints">
                    <span class="closer">&times;</span>
                </a>
                <h2>Complaint Information</h2>
                <form method="post" action="ComplaintDetails.php">
                    <div class="modal-inside">
                        <div class="models">
                            <div class="inputpop" style="min-width:95%; align-items: center;">
                                <label>Subject:</label><br>
                                <input id="bt" class="inpu" type="text" name="subject" value="<?= $subject ?>" readonly placeholder="Enter Complaint Subject" required><br>
                                <label>Date Submitted:</label><br>
                                <input id="cp" class="inpu" type="text" name="dateSubmitted" value="<?= $dateSubmitted ?>" readonly placeholder="Enter Date Submitted" required><br>
                                <label>Complaint Details:</label><br>
                                <textarea id="cpd" class="inpuer" style="width:100%" name="details" readonly placeholder="Enter Complaint Details" required><?= $details ?></textarea><br>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function Edit(){
        let subject = document.getElementById("bt");
        let dateSubmitted = document.getElementById("cp");
        let details = document.getElementById("cpd");

        subject.removeAttribute("readonly");
        dateSubmitted.removeAttribute("readonly");
        details.removeAttribute("readonly");

        document.getElementById("edi").style.display = "none";
        document.getElementById("edi2").style.display = "block";
    }
    
    function cancel() {
        location.reload();
    }
</script>
