<?php
include 'headAdmin.php';
include 'topbarAdmin.php';
include 'sidebar.php';
require_once "db_conn.php";
unset($_SESSION['iss']);
unset($_SESSION['iiii']);
unset($_SESSION['iiiia']);
unset($_SESSION['iii']);
unset($_SESSION['iiiias']);
?>
<div class="home-section">
    <div class="admin-home-title">
        <h1>
            COMPLAINTS RECORD PAGE
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
            ?> 
        </div> 
        <div style="height: 20px;width: 100%;"></div>        
        <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <style>
                #example {
                    max-width: 95%;
                    margin: 0 auto;
                    overflow-x: auto; /* Enables horizontal scroll if needed */
                }
                #example td {
                    word-wrap: break-word; /* Wrap long words */
                    word-break: break-word; /* Break long words if necessary */
                    white-space: normal; /* Allow wrapping */
                }
                #example td.description {
                    max-width: 400px; /* Limit width of the description column */
                }
                .editt {
                    background-color: #007bff; /* Example style for the button */
                    color: white;
                    border: none;
                    padding: 5px 10px;
                    border-radius: 4px;
                    cursor: pointer;
                }
                .editt:hover {
                    background-color: #0056b3;
                }
            </style>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Complaint ID</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Date Submitted</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM complaints";
                    $result = $connn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row["complaint_id"]) . "</td>
                                    <td>" . htmlspecialchars($row["complaint_subject"]) . "</td>
                                    <td class='description'>" . htmlspecialchars($row["complaint_details"]) . "</td>
                                    <td>" . htmlspecialchars($row["datetoday"]) . "</td>
                                    <td>
                                        <form action='complaintsmore' method='POST'>
                                            <input name='id' value='" . htmlspecialchars($row['complaint_id']) . "' hidden>
                                            <button class='editt' name='submit' type='submit'>MORE</button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' style='text-align:center;font-size:25px;'>There are currently no complaints at the moment</td></tr>";
                    }
                    $connn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    </div>
</div>

<script type="text/javascript">
    window.onload = function() {
        timedHide(document.getElementById('ha'), 3);
    }

    function timedHide(element, seconds) {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds * 1000);
        }
    }
</script>
<script src="Datatables/js/jquery.js"></script>
<script src="Datatables/js/jquery.dataTables.js"></script>
<script src="Datatables/js/bootstrap.js"></script>
<script src="Datatables/js/dataTables.bootstrap.js"></script>
<script src="Datatables/js/script.js"></script>
