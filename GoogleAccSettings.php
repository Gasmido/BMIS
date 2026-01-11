<?php

require_once "db_conn.php";

session_start();

if (isset($_SESSION['ID']) && (isset($_SESSION['user_token']))){
$iddd = $_SESSION['ID'];
?>

<html lang="en" oncopy="return false;" oncontextmenu="return myRightClick();" oncut="return false;">

<head>
	<title>
		Ayos Lomboy Barangay Management System
	</title>
					    <?php

$csstime = date ("Y-m-d\TH-i", filemtime($_SERVER["DOCUMENT_ROOT"] . '/CSS/style.css'));

if (isset($_SESSION['ID'])) {
$id = $_SESSION['ID'];
$status = $_SESSION['status'];
$lastname = $_SESSION['lastname'];
$firstnames = $_SESSION['firstname'];
$middlename = $_SESSION['middlename'];
$extensionname = $_SESSION['extensionname'];
$purokss = $_SESSION['purok'];
$ciiit = $_SESSION['citizenship'];
$uttt = $_SESSION['user_type'];

 /*   if ($purokss == "" && $ciiit == "") {
    	header("Location: GoogleAccSettings");
    	exit();
    }
    */
}

?>
	

	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="CSS/style.css<?='?'.$csstime ?>">   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css2/style2.css" rel="stylesheet">


    <script type="text/javascript">
    	localStorage.removeItem("txt1")
		localStorage.removeItem("txt3")
		localStorage.removeItem("txt2")
        localStorage.removeItem("txt5")
		localStorage.removeItem("txt6")
	</script>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script type="text/javascript">
    

    document.onkeydown = function(e) {
      if(event.keyCode == 123) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
      }
    }
  </script>
</head>
<!--
<div class="float-parent-element">
  <div class="float-child-element asdffd">
    <div class="red"><img class="logoo3" src="image/logoo.png"><p>Barangay Ayos Lomboy</p></div>
  </div>
  <div class="float-child-element">
    <div class="yellow">
         <nav>
  <ul>
      <li><a class="ac" href="logout">Log-out</a></li>
   
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
                        <ahref="Home-page" class="nav-item nav-link active">Log-out</a>
                    </div>
                </div>
            </nav>
        </div>
<div class="homepage docud" style="margin-top:40px">
  <div class="docu-home" style="height:1000px" >
    <div class="docu-form" style="margin-top:0px;height:950px">
      
        
        
        <?php
          $sql1 = "SELECT * FROM users WHERE user_id=". $iddd;
                  $result1 = $connn-> query($sql1);
                  if ($result1-> num_rows > 0) {
                        while ($row = $result1-> fetch_assoc()) {
                            $f2name = $row['First_name'];
                            $m2name = $row['Middle_name'];
                            $l2name = $row['Last_name'];
                            $e2name = $row['Extension_name'];
                            $bday = $row['birthdate'];
                            $sex = $row['sex'];
                            $citi = $row['citizenship'];
                            $purokss = $row['purok'];
                        }
                    }   
        ?>
          <h1>ACCOUNT SETTING</h1>
          <div style="height:50px; text-align:center">
          <h3 style="color:grey">(Please fill up form before continuing)</h3>
          
          </div>
          <form action="AccSettingedit2.php" method="post">
          <label>First Name:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
        <input style="height:10px" id="1" type="text" minlength="2" maxlength="20" name="fname" class="inputt" value="<?= $f2name ?>"  pattern="[A-Za-z ]{1,32}" title="Only letters" placeholder="e.g. Juan" required></input>
        <label>Middle Initial/Name:</label>
        <input style="height:10px"  id="2" type="text" minlength="1" maxlength="10" name="mname" class="inputt" value="<?= $m2name ?>" pattern="^[a-zA-Z\.]*$" title="Only letters and periods" placeholder="e.g. S. or Santiago"></input>
        <label>Last Name:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
        <input style="height:10px"  id="4" type="text" minlength="2" maxlength="20" name="lname" class="inputt" value="<?= $l2name ?>" pattern="[A-Za-z ]{1,32}" title="Only letters" placeholder="e.g. Natividad" required></input>
        <label>Extension Name:</label>
        <input style="height:10px"  id="5" type="text" minlength="1" maxlength="10" name="ename" class="inputt" value="<?= $e2name ?>" pattern="^[a-zA-Z\.]*$" title="Only letters" placeholder="e.g. Jr."></input>
        <label>Birth Date:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
        <input style="height:10px"  id="3" type="date" name="bday" class="inputt" value="<?= $bday ?>" max="<?php echo date("Y-m-d"); ?>" min="1934-12-31" required></input>
        <label>Sex:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
        <select style="height:10px"  id="6" class="inputt" name="sex" required>
                  <option <?php if ($sex=="Male") echo 'selected="selected"';?>>Male</option>
                  <option <?php if ($sex=="Female") echo 'selected="selected"';?>>Female</option>
                </select>
        <label>Citizenship:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
        <select style="height:10px"  id="7" class="inputt" name="citizenship" required>
                  <option <?php if ($citi=="Natural-Born-Citizen") echo 'selected="selected"';?>>Natural-Born-Citizen</option>
                  <option <?php if ($citi=="Naturalized-Citizen") echo 'selected="selected"';?>>Naturalized-Citizen</option>
                </select>
                <label>Purok:</label><label style="color:red;font-size: 18px;font-weight: 500;"> *</label>
                <select style="height:10px"  class="inputt" name="purok" required>
                  <option <?php if ($purokss=="1") echo 'selected="selected"';?>>1</option>
                  <option <?php if ($purokss=="2") echo 'selected="selected"';?>>2</option>
                  <option <?php if ($purokss=="3") echo 'selected="selected"';?>>3</option>
                  <option <?php if ($purokss=="4") echo 'selected="selected"';?>>4</option>
                </select>
               <input type="text" name="idd" value="<?= $iddd ?>" hidden></input>
        <section>
          
    </section>
        <section>
        <button id="editsub" type="submit" name="submits" class="docusub">Submit</button>
        
      </section>
      </form>
    


    </div>

  </div>
</div>
<?php
    include 'footer.php';
}
else {
  header('location: Home-page');
}
?>