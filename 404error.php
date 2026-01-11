<?php

    session_start();   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">   
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
    localStorage.removeItem("txt4")
    localStorage.removeItem("txt7")
    localStorage.removeItem("txt8")
    localStorage.removeItem("txt9")
</script>
   </head>
<body class="loginbod">

  <!--
<div class="float-parent-element">
  <div class="float-child-element asdffd">
    
    <div class="red"> <img class="logoo3" src="image/logoo.png">Barangay Ayos Lomboy</div>
  </div>
  <div class="float-child-element">
    <div class="yellow">
         <nav>
  <ul>
    
   
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

                        <?php
                        if (isset($_SESSION["user_type"])) {
                            if ($_SESSION["user_type"] == "admin") {
                                echo '
                            <a class="ac" href="home-section">Home</a>
                            ';
                            }
                            else {
                                echo '
                            <a class="ac" href="Home-page">Home</a>
                            ';
                            }
                        }
                        else {
                            echo '
                            <a class="ac" href="Home-page">Home</a>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>

<div class="loginmain" style="text-align:center">
    <i class='bx bxs-dizzy' style="font-size:120px"></i>
	<div class="errr" style="margin-bottom: 0px;">
	    
		<h1 style="display:inline-flex">404</h1>
	</div>
	<div class="errr" style="margin-top:10px">
 		<h3>Page Not Found</h3>
 	</div>
 

  </div>
</body>
<?php
include "footer.php";
?>