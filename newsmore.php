<?php
include 'head2.php';
include 'db_conn.php';

if (isset($_POST["submit"])) {
	$idss = $_POST["cor"];
	$_SESSION['eidd'] = $_POST["cor"];
}
elseif (isset($_SESSION['eidd'])) {
    $idss = $_SESSION['eidd'];
    }

else {
	header("location: news");
}

$sql2 = "SELECT * FROM announcements WHERE id=?";
				$stmt = $connn->prepare($sql2); 
				$stmt->bind_param("s", $idss);
				$stmt->execute();
				$result = $stmt->get_result();
				while ($row = $result->fetch_assoc()) {
				    $newsTitle = $row['newsTitle'];
				    $newsDesc = $row['newsDesc'];
						$newsPic = $row['newsPic'];
						$curdate = $row['curdate'];
					}
					$stmt->close();
?>
<!--
<div class="float-parent-element">
  <div class="float-child-element asdffd">
    <div class="red"> <img class="logoo3" src="image/logoo.png">Barangay Ayos Lomboy</div>
  </div>
  <div class="float-child-element">
    <div class="yellow">
         <nav>
  <ul>
      <li><a class="ac" href="news">Back</a></li>
   
  </ul>
</nav>
    </div>
  </div>
</div>
-->
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
                        <a href="news" class="nav-item nav-link">Go Back</a>                     
                    </div>
                </div>
            </nav>
        </div>

<div class="homepage docud">
	<div class="docu-homenew">
		<div>
				<img src="image/<?= $newsPic ?>">
			</div>
		<div class="docu-formnew">
			<div>
				<h1><?= $newsTitle ?></h1>
				<p style="color: #454545;"><?= $curdate ?></p>
			</div>
			<div>
				<hr>
				<p><?= $newsDesc ?></p>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>