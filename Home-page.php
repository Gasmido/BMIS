<!DOCTYPE html>
<html lang="en">

<head>
     <?php
session_start();
$csstime = date ("Y-m-d\TH-i", filemtime($_SERVER["DOCUMENT_ROOT"] . '/css2/style2.css'));

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

   if ($purokss == "" && $ciiit == "") {
        header("Location: GoogleAccSettings");
        exit();
    }
    
}

?>
    <meta charset="utf-8">
    <title>Barangay Ayos Lomboy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="css2/style2.css<?='?'.$csstime ?>" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">  
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

     <script type="text/javascript">
        localStorage.removeItem("txt1")
        localStorage.removeItem("txt3")
        localStorage.removeItem("txt2")
        localStorage.removeItem("txt5")
        localStorage.removeItem("txt6")
        localStorage.removeItem("txt000")
        localStorage.removeItem("_grecaptcha")
    </script>

    <?php
        include 'db_conn.php';
        if (isset($_SESSION['user_type'])) {
        if ($_SESSION["user_type"] == "admin") {
            header("Location: home-section");
            exit(); 
         } 
        }
        elseif (isset($_SESSION['ID'])) {
        if ($purokss == "" && $ciiit == "") {
            header("Location: GoogleAccSettings");
            exit();
        }
        }
        if (isset($status)) {
                        $sql = "SELECT Status FROM users WHERE user_id=?"; // SQL with parameters
                        $stmt = $connn->prepare($sql); 
                        $stmt->bind_param("i", $id);
                        $stmt->execute();
                        $result = $stmt->get_result(); // get the mysqli result
                        while ($row = $result->fetch_assoc()) {
                           $status = $row['Status'];
                        }
                        unset($_SESSION['status']);
                        $_SESSION['status'] = $status;
        }
        unset($_SESSION['eidd']);

                    $sql1 = "SELECT * FROM officials WHERE id=1";
                    $result1 = $connn-> query($sql1);
                    if ($result1-> num_rows > 0) {
                        while ($row = $result1-> fetch_assoc()) {
                            $name1 = $row['name'];
                            $position1 = $row['position'];
                            $image1 = $row['image'];
                            $image1 = $row['image'];
                            $status1 = $row['status'];
                        }
                    }
                    $sql2 = "SELECT * FROM officials WHERE id=2";
                    $result2 = $connn-> query($sql2);
                    if ($result2-> num_rows > 0) {
                        while ($row = $result2-> fetch_assoc()) {
                            $name2 = $row['name'];
                            $position2 = $row['position'];
                            $image2 = $row['image'];
                            $status2 = $row['status'];
                        }
                    }
                    $sql3 = "SELECT * FROM officials WHERE id=3";
                    $result3 = $connn-> query($sql3);
                    if ($result3-> num_rows > 0) {
                        while ($row = $result3-> fetch_assoc()) {
                            $name3 = $row['name'];
                            $position3 = $row['position'];
                            $image3 = $row['image'];
                            $status3 = $row['status'];
                        }
                    }
                    $sql4 = "SELECT * FROM officials WHERE id=4";
                    $result4 = $connn-> query($sql4);
                    if ($result4-> num_rows > 0) {
                        while ($row = $result4-> fetch_assoc()) {
                            $name4 = $row['name'];
                            $position4 = $row['position'];
                            $image4 = $row['image'];
                            $status4 = $row['status'];
                        }
                    }
                    $sql5 = "SELECT * FROM officials WHERE id=5";
                    $result5 = $connn-> query($sql5);
                    if ($result5-> num_rows > 0) {
                        while ($row = $result5-> fetch_assoc()) {
                            $name5 = $row['name'];
                            $position5 = $row['position'];
                            $image5 = $row['image'];
                            $status5 = $row['status'];
                        }
                    }
                    $sql6 = "SELECT * FROM officials WHERE id=6";
                    $result6 = $connn-> query($sql6);
                    if ($result6-> num_rows > 0) {
                        while ($row = $result6-> fetch_assoc()) {
                            $name6 = $row['name'];
                            $position6 = $row['position'];
                            $image6 = $row['image'];
                            $status6 = $row['status'];
                        }
                    }
                    $sql7 = "SELECT * FROM officials WHERE id=7";
                    $result7 = $connn-> query($sql7);
                    if ($result7-> num_rows > 0) {
                        while ($row = $result7-> fetch_assoc()) {
                            $name7 = $row['name'];
                            $position7 = $row['position'];
                            $image7 = $row['image'];
                            $status7 = $row['status'];
                        }
                    }
                    $sql8 = "SELECT * FROM officials WHERE id=8";
                    $result8 = $connn-> query($sql8);
                    if ($result8-> num_rows > 0) {
                        while ($row = $result8-> fetch_assoc()) {
                            $name8 = $row['name'];
                            $position8 = $row['position'];
                            $image8 = $row['image'];
                            $status8 = $row['status'];
                        }
                    }
                    $sql9 = "SELECT * FROM officials WHERE id=9";
                    $result9 = $connn-> query($sql9);
                    if ($result9-> num_rows > 0) {
                        while ($row = $result9-> fetch_assoc()) {
                            $name9 = $row['name'];
                            $position9 = $row['position'];
                            $image9 = $row['image'];
                            $status9 = $row['status'];
                        }
                    }
                    $sql10 = "SELECT * FROM officials WHERE id=10";
                    $result10 = $connn-> query($sql10);
                    if ($result10-> num_rows > 0) {
                        while ($row = $result10-> fetch_assoc()) {
                            $name10 = $row['name'];
                            $position10 = $row['position'];
                            $image10 = $row['image'];
                            $status10 = $row['status'];
                        }
                    }
                    $sql11 = "SELECT * FROM officials WHERE id=11";
                    $result11 = $connn-> query($sql11);
                    if ($result11-> num_rows > 0) {
                        while ($row = $result11-> fetch_assoc()) {
                            $name11 = $row['name'];
                            $position11 = $row['position'];
                            $image11 = $row['image'];
                            $status11 = $row['status'];
                        }
                    }
                ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
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
                        <a href="#" onclick="Scrollh();return false;" class="nav-item nav-link">Home</a>
                        <a href="#" onclick="Scrolls();return false;" class="nav-item nav-link">Services</a>
                         <a href="#" onclick="Scrolla();return false;" class="nav-item nav-link">About Us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                            <div class="dropdown-menu rounded-0 m-0" style="min-width: 120px;max-width: 120px;">
                                <a href="news" class="dropdown-item">News</a>
                                <a href="events" class="dropdown-item">Events</a>
                                <?php 
                                      if (isset($_SESSION['ID'])) {
                                        echo '
                                        <a class="dropdown-item" href="doctrack">Requests</a>
                                        <a class="dropdown-item" href="complaintt">Complaint</a>
                                        ';
                                      }
                                ?>
                            </div>
                        </div>
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
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Ayos Lomboy<br><span class="text-primary">Barangay Management Information System</span></h1>
                    <p class="animated fadeIn mb-4 pb-2">A vibrant and close-knit community nestled within the heart of Guimba, Nueva Ecija. Where our barangay has eveloed into a harmonious blend of peace and progress.</p>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid hati" src="image/home.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid hati" src="image/home3.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; background-color: #0E2E50;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <!--
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        -->
                        </div>
                    </div>
                    <div class="col-md-2">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div id="s" class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Services</h1>
                    <p>Explore our online services.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <form action="DocumentRequest" method="post" style="text-align:center">
                            <input type="text" name="cor" value="Certificate of Residency" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                    </div>
                                    <h6>Certificate of Residency</h6>
                                    <span>Request</span>
                                </div>
                                </button>
                            </a>
                            <?php
                                        if (isset($_SESSION['ID'])) {
                                            if ($status == "Approved") {
                                                echo '
                                                <a href="COR.pdf" target="_blank" style="font-size:32px;background-color:whitesmoke;" title="Download">
                                                <i class="bx bxs-download"></i>
                                                </a>
                                                ';
                                            }
                                        }
                                    ?>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <form action="DocumentRequest" method="post" style="text-align:center">
                            <input type="text" name="bc" value="Certificate of Indigency" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit2" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                                    </div>
                                    <h6>Certificate of Indigency</h6>
                                    <span>Request</span>
                                    
                                </div>
                            </button>
                            </a>
                            <?php
                                            if (isset($_SESSION['ID'])) {
                                                if ($status == "Approved") {
                                                    echo '
                                                    <a href="Indigency.pdf" target="_blank" style="font-size:32px;background-color:whitesmoke;" title="Download">
                                                    <i class="bx bxs-download"></i>
                                                    </a>
                                                    ';
                                                }
                                            }
                                        ?>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <form action="DocumentRequest" method="post" style="text-align:center">
                            <input type="text" name="brgyC" value="Barangay Clearance" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit4" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                    </div>
                                    <h6>Barangay Clearance</h6>
                                    <span>Request</span>
                                    
                                </div>
                                </button>
                            </a>
                            <?php
                                        if (isset($_SESSION['ID'])) {
                                            if ($status == "Approved") {
                                            echo '
                                                <a href="Clearance.pdf" target="_blank" style="font-size:32px;background-color:whitesmoke;" title="Download">
                                                    <i class="bx bxs-download"></i>
                                                </a>
                                                ';
                                            }
                                        }
                                    ?>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <form action="DocumentRequest" method="post" style="text-align:center">
                            <input type="text" name="kd" value="Kasunduan" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit5" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                                    </div>
                                    <h6>Kasunduan</h6>
                                    <span>Request</span>
                                   
                                </div>
                            </button>
                            </a>
                             <?php
                                        if (isset($_SESSION['ID'])) {
                                            if ($status == "Approved") {
                                            echo '
                                                <a href="Kasunduan.pdf" target="_blank" style="font-size:32px;background-color:whitesmoke;" title="Download">
                                                    <i class="bx bxs-download"></i>
                                                </a>
                                                ';
                                            }
                                        }
                                    ?>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form action="DocumentRequest" method="post" style="text-align:center">
                            <input type="text" name="barc" value="BARC" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit6" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                                    </div>
                                    <h6>BARC Certification</h6>
                                    <span>Request</span>
                                    
                                </div>
                            </button>
                            </a>
                            <?php
                                        if (isset($_SESSION['ID'])) {
                                            if ($status == "Approved") {
                                            echo '
                                                <a href="BARC.pdf" target="_blank" style="font-size:32px;background-color:whitesmoke;" title="Download">
                                                    <i class="bx bxs-download"></i>
                                                </a>
                                                ';
                                            }
                                        }
                                    ?>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <form action="DocumentRequest" method="post">
                            <input type="text" name="blotter" value="Blotter" hidden></input>
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <button type="submit" name="submit3" style="border:none;width:100%">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                                    </div>
                                    <h6>File Blotter</h6>
                                    <span>Request</span>
                                </div>
                            </button>
                            </a>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Mission And Vision</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    </div>
                </div>
            </div>
        </div>
         About End -->


        <!-- Property List Start 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            
                                  
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
Property List End -->


        <!--
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class='bx bxs-message-rounded'></i>  Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       -->


        <!-- Team Start -->
        <div id="a" class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Meet our Council</h1>
                    <p>Barangay officials include the Punong Barangay (Barangay Captain), the Sangguniang Barangay members (Barangay Councilors), and other officers who collectively work to maintain peace, order, and development within their jurisdiction.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image1 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:200px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name1; ?></h5>
                                <small><?php echo $position1; ?></small><br>
                                <?php
                                    if ($status1 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image2 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">

                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name2; ?></h5>
                                <small><?php echo $position2; ?></small><br>
                                <?php
                                    if ($status2 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image3 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">

                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name3; ?></h5>
                                <small><?php echo $position3; ?></small><br>
                                <?php
                                    if ($status3 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image4 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name4; ?></h5>
                                <small><?php echo $position4; ?></small><br>
                                <?php
                                    if ($status4 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image5 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                   
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name5; ?></h5>
                                <small><?php echo $position5; ?></small><br>
                                <?php
                                    if ($status5 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image6 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name6; ?></h5>
                                <small><?php echo $position6; ?></small><br>
                                <?php
                                    if ($status6 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image7 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                 
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name7; ?></h5>
                                <small><?php echo $position7; ?></small><br>
                                <?php
                                    if ($status7 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image8 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name8; ?></h5>
                                <small><?php echo $position8; ?></small><br>
                                <?php
                                    if ($status8 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image9 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name9; ?></h5>
                                <small><?php echo $position9; ?></small><br>
                                <?php
                                    if ($status9 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image10 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name10; ?></h5>
                                <small><?php echo $position10; ?></small><br>
                                <?php
                                    if ($status10 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="image/<?= $image11 ?>" alt="" style="max-height:300px;min-height: 300px;min-width: 100%;max-width:300px;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                   
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $name11; ?></h5>
                                <small><?php echo $position11; ?></small><br>
                                <?php
                                    if ($status11 == "Active") {
                                        echo '
                                        <p style="display:inline;color:green;">⦿</p>
                                        <p style="display:inline">Active</p>
                                        ';
                                    }
                                    else {
                                        echo '
                                        <p style="display:inline;color:red;">⦿</p>
                                        <p style="display:inline">Inactive</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="Commitee" style="margin-bottom: 40px">More Commitee Information</a>
                            </div>
        <!-- Team End -->


        <!-- Testimonial Start 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Hear What Our Officials Say!</h1>
                    <p>Let us take the time to listen closely to the insights and perspectives of our barangay officials, as their guidance and decisions directly shape the direction and development of our community.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="image/<?= $image1 ?>" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Hon. Richard G. Soliman</h6>
                                    <small>Barangay Captain</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="image/<?= $image10 ?>" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Lerma T. Escobar</h6>
                                    <small>Secretary</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="image/<?= $image9 ?>" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Reenalyn Martinez</h6>
                                    <small>SK Chairperson</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Testimonial End -->
        <div class="weatherWidget" ></div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Brgy. Ayos Lomboy, Guimba, Nueva Ecija, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0947 292 5406</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>barangayayoslomboy@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                         <?php if (isset($_SESSION['user_type'])) {
                        if ($_SESSION['user_type'] != "admin") { 
                        
                        ?>
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a href="Home-page" class="btn btn-link text-white-50">Home</a>
                        <?php
                            if (!isset($_SESSION['ID'])) {
                                echo '<a class="btn btn-link text-white-50" href="login">Login</a>
                                    <a class="btn btn-link text-white-50" href="register">Register</a>';
                            }
                        ?>
                        <a class="btn btn-link text-white-50" href="news">News</a>
                        <a class="btn btn-link text-white-50" href="events">Events</a>
                    
                        <?php 
                            }
                            }
                            else {
                        ?>            
                            <h5 class="text-white mb-4">Quick Links</h5>     
                            <a href="Home-page" class="btn btn-link text-white-50">Home</a>         
                            <a class="btn btn-link text-white-50" href="login">Login</a>
                            <a class="btn btn-link text-white-50" href="register">Register</a>
                            <a class="btn btn-link text-white-50" href="news">News</a>
                            <a class="btn btn-link text-white-50" href="events">Events</a>
                        <?php 
                            }
                        ?>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Map</h5>
                        <div class="row g-2 pt-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30728.7872056418!2d120.74988081179288!3d15.692927852037737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912c5ab3e8dd89%3A0x3109bbaa68b7ceae!2sAyos%20Lomboy%2C%20Guimba%2C%20Nueva%20Ecija!5e0!3m2!1sen!2sph!4v1698208537197!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Ayos Lomboy Barangay Management Information System</a>, All Right Reserved. 
                            
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <br>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                           Designed By <a class="border-bottom" href="groupPage">G5 IT Students</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top 
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js2/main.js"></script>
    <script src="JS/jscode.js"></script>
    <script>(function(){var pp=document.createElement('script'), ppr=document.getElementsByTagName('script')[0]; stid='enhhbWtkV25ZWW41cFc3RnlwRUVjUT09';pp.type='text/javascript'; pp.async=true; pp.src=('https:' == document.location.protocol ? 'https://' : 'http://') + 's01.live2support.com/dashboardv2/chatwindow/'; ppr.parentNode.insertBefore(pp, ppr);})();</script>
<script type="text/javascript">
    myID = document.getElementById("wagna");

var myScrollFunc = function() {
  var y = window.scrollY;
  if (y >= 200) {
     myID.className = "red reddd reder"
  } else {
    myID.className = "red reddd"
  }
};

window.addEventListener("scroll", myScrollFunc);
</script>
<script>
   window.weatherWidgetConfig =  window.weatherWidgetConfig || [];
   window.weatherWidgetConfig.push({
       selector:".weatherWidget",
       apiKey:"4Z2FPK2PXTCSLTQW3WHCVAU4W", //Sign up for your personal key
       location:" Ayos Lomboy, Guimba, Central Luzon, Philippines", //Enter an address
       unitGroup:"metric", //"us" or "metric"
       forecastDays:5, //how many days forecast to show
       title:" Ayos Lomboy, Guimba, Central Luzon, Philippines", //optional title to show in the 
       showTitle:true, 
       showConditions:true
   });
  
   (function() {
   var d = document, s = d.createElement('script');
   s.src = 'https://www.visualcrossing.com/widgets/forecast-simple/weather-forecast-widget-simple.js';
   s.setAttribute('data-timestamp', +new Date());
   (d.head || d.body).appendChild(s);
   })();
</script>
</body>

</html>