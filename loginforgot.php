<?php
session_start();
if (isset($_SESSION['ID'])) {
        header("Location: Home-page");
        exit();
    }

$csstime = date ("Y-m-d\TH-i", filemtime($_SERVER["DOCUMENT_ROOT"] . '/CSS/style.css'));
?>

<!DOCTYPE html>
<html lang="en" oncopy="return false;" oncontextmenu="return myRightClick();" oncut="return false;" onpaste="return false;">
  <head>
    <meta charset="UTF-8">
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
     

<!--	<script type="text/javascript">
    function myRightClick() {
      alert("Right click is not allowed.");
      return false;
    }

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
-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
<body class="loginbod">

  <!--
<div class="float-parent-element">
  <div class="float-child-element">
    <div class="red"><img class="logoo3" src="image/logoo.png">Barangay Ayos Lomboy</div>
  </div>
  <div class="float-child-element">
    <div class="yellow">
         <nav>
  <ul>
      <li><a class="ac" href="login">Back to Login</a></li>
   
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
                        <a href="login" class="nav-item nav-link active">Back to login</a>                     
                    </div>
                </div>
            </nav>
        </div>

<div class="loginmain">
  <div class="login">
  <div>
<h1 class="ttle">Password Reset</h1>
</div>
<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "Empty_input") {
			echo "<p class='example'>Fill in Fields!</p>";
		}
		else if ($_GET["error"] == "Invalid_E-mail") {
			echo "<p class='example'>Invalid E-mail!</p>";
		}
    else if ($_GET["error"] == "noE-mail") {
      echo "<p class='example'>User does not exists!</p>";
    }
    else if ($_GET["error"] == "Nopass") {
      echo "<p class='example'>Email is Used in Google Login!</p>";
    }
    else if ($_GET["error"] == "wrongf") {
      echo "<p class='example'>Please verify reCAPTCHA!</p>";
    }
    else if ($_GET["error"] == "wrong") {
      echo "<p class='example'>reCAPTCHA verification failed!</p>";
    }
		
	/*	else if ($_GET["error"] == "none") {
			echo "<p style='color:white; background: #8b0f0f;padding:5px;border-style:solid;border-width:2px;border-color:rgba(253, 114, 146, 1);'>Log-in successful!</p>";
		} */
	}
?>
<form action="loginforgot2" method="post">
<div class="inputs">
  
  <label>Email:</label><br>
  <input id ="txt1" type="text" name="user" onkeyup="saveValue(this);" placeholder="Enter your email" maxlength="50"></input><br>
  </div>
    <div class="form-input" style="text-align:center;">
        <!-- Google reCAPTCHA box -->
        <div class="g-recaptcha" data-sitekey="6LdC5r4pAAAAAPW8GIo3MuebpQWE9RDrxO7jg-Ua" style="display: inline-block;margin-top: 20px;"></div>
    </div>
  <section class="loginbtn">
				<button class="btnlog" type="submit" name="submitv" >SUBMIT</button>

		</section>
		<br>
  </form>
  </div>
  </div>
  <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript">
  <script type="text/javascript">
                const input = document.getElementById("txt1");
                input.addEventListener("keyup", () => {
                  input.value = input.value.replace(/ +/g, "");
                });

    </script>
   <script type="text/javascript">
        document.getElementById("txt1").value = getSavedValue("txt1"); 
		
        function saveValue(e){
            var id = e.id;  
            var val = e.value; 
            localStorage.setItem(id, val);
        }

        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";
            }
            return localStorage.getItem(v);
        }
</script>
</body>
</html>
