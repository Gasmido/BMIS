
<?php
   require_once 'GoogleAPI/vendor/autoload.php';
    require_once "config.php";

    session_start();
    unset($_SESSION['otp']);
     unset($_SESSION['uuusss']);
    if (isset($_SESSION['ID'])) {
        header("Location: Homepage");
        exit();
    }
    else {
        unset($_SESSION['uuusss']);
        $csstime = date ("Y-m-d\TH-i", filemtime($_SERVER["DOCUMENT_ROOT"] . '/CSS/style.css'));
?>
<!DOCTYPE html>
<html lang="en" oncopy="return false;" oncut="return false;" onpaste="return false;">
  <head>
    <meta charset="UTF-8">
     <link rel="icon" href="image/logoo.png" type="image/icon type">
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
        localStorage.removeItem("txt000")
        localStorage.removeItem("txt111")
        localStorage.removeItem("txt1")
		localStorage.removeItem("txt3")
		localStorage.removeItem("txt2")
    localStorage.removeItem("txt4")
    localStorage.removeItem("txt7")
    localStorage.removeItem("txt8")
    localStorage.removeItem("txt9")
</script>
<script type="text/javascript">
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
    <style>
       p {
           margin-bottom: 0;
           font-size: 15px;
       }
   </style>
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
      <li><a class="ac" href="Homepage">Home</a></li>
   
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
                    <h1 class="m-0 text-primary">Barangay Ayos Lomboy</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="Home-page" class="nav-item nav-link">Home</a>
                         <a href="register" class="nav-item nav-link">Sign-up</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                            <div class="dropdown-menu rounded-0 m-0" style="min-width: 120px;max-width: 120px;">
                                <a href="news" class="dropdown-item">News</a>
                                <a href="events" class="dropdown-item">Events</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </nav>
        </div>

<div class="loginmain">
  <div class="login" style="margin-bottom: 50px;">
  <div>
<h1 class="ttle">LOGIN</h1>
</div>
<div class="loginspace">
<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "Empty_input") {
			echo "<p class='example'>Fill in all fields!</p>";
		}
		else if ($_GET["error"] == "User_not_found") {
			echo "<p class='example'>Wrong e-mail or password!</p>";
		}
    else if ($_GET["error"] == "Success") {
      echo "<p id='ha' class='example2'>Registered Successfully!</p>";
    }
     else if ($_GET["error"] == "Successp") {
      echo "<p id='ha' class='example2'>Password Changed Successfully!</p>";
    }
    else if ($_GET["error"] == "robot") {
      echo "<p id='ha' class='example'>Too Many Attempts!</p>";
    }
    else if ($_GET["error"] == "wrongf") {
      echo "<p class='example'>Please verify reCAPTCHA!</p>";
    }
    else if ($_GET["error"] == "wrong") {
      echo "<p class='example'>reCAPTCHA verification failed!</p>";
    }
    else if ($_GET["error"] == "Email_alreadytaken") {
      echo "<p class='example'>Email is already registered!</p>";
    }
	/*	else if ($_GET["error"] == "none") {
			echo "<p style='color:white; background: #8b0f0f;padding:5px;border-style:solid;border-width:2px;border-color:rgba(253, 114, 146, 1);'>Log-in successful!</p>";
		} */
	}
?>
</div>
<form action="Login_process" method="post">
<div class="inputs">
  
  <p>E-mail:</p>
  <input id="txt5" type="text" name="user1" onkeyup="saveValue(this);" placeholder="Enter E-mail"></input>
   <p>Password:</p>
  <input id="txt6" type="password" name="pass" onkeyup="saveValue(this);" maxlength="60" placeholder="Enter password" pattern="[a-zA-Z0-9_]{1,60}" title="Only letters(A-z), underscore(_), and numbers(0-9)."></input><br>
    <label style="display: flex; align-items: center; cursor: pointer;">
    <input type="checkbox" onclick="myFunctions()" style="width: 13px; margin-right: 5px;">
    Show Password
</label>

  <p style="text-align: right;margin-top: 3px;"> <a href="loginforgot" style="color:#00FFFF">Forgot password?</a></p>

  <input type="hidden" id="token" name="token">
  <div class="form-input" style="text-align:center;">
        <!-- Google reCAPTCHA box -->
        <div class="g-recaptcha" data-sitekey="6LdC5r4pAAAAAPW8GIo3MuebpQWE9RDrxO7jg-Ua" style="display: inline-block;margin-top: 20px;"></div>
    </div>
    </div>
  <section class="loginbtn">
				<button class="btnlog" type="submit" name="submit" style="margin-top: 0px;">LOGIN</button>

		</section>
		<br />
		<p style="text-align: center;color:#C7DAD4;">Don't have an account? <a href="register" style="color:#00FFFF">Sign-up</a></p>
  </form>
   
        
        <div style="width: 100%; height: 16px; border-bottom: 1px solid grey; text-align: center; margin-top: 10px;">
  <span style="font-size: 20px; padding: 0px 10px; color: grey;background-color: #0E2E50;">
    OR<!--Padding is optional-->
  </span>
</div>
 <section style="text-align:center;margin-top: 10px;">
    <?php
     echo "<a href='".$client->createAuthUrl()."' onclick='return callValidation();'>";
     ?>
        <input type="submit" name="google" value="Login with Google" class="btnlog2">
        </a>
    </section>
</div>
</div>
<script>
    function myFunctions() {
  var x = document.getElementById("txt6");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script type="text/javascript">

    function callValidation(){

            if(grecaptcha.getResponse().length == 0){

            window.location.replace("https://new.ayos-lomboy.com/login.php?error=wrongf");

            return false;

        }

        return true;

    }

</script>
  <script type="text/javascript">
                const input = document.getElementById("txt5");
                input.addEventListener("keyup", () => {
                  input.value = input.value.replace(/ +/g, "");
                });

                const input2 = document.getElementById("txt6");
                input2.addEventListener("keyup", () => {
                  input2.value = input2.value.replace(/ +/g, "");
                });
    </script>
   <script type="text/javascript">
        document.getElementById("txt5").value = getSavedValue("txt5"); 
        document.getElementById("txt6").value = getSavedValue("txt6");  
		
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
</body>
</html>
<?php
}
?>