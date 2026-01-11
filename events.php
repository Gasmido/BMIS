<?php
include 'head2.php';
include 'db_conn.php';

unset($_SESSION['eidd']);
?>

<body>
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
	
	<div id="s" class="Services">
		<div class="servtitle">
			<h1>
				EVENTS
			</h1>
			<p style="background-color: #fff;width: 100%;">
				See latest events in Ayos Lomboy.
			</p>
		</div>
		
	

<div class="container-xxl py-5">
<div class="container">
	<div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">

                        	<?php
                    $sql = "SELECT id, eventTitle, eventDesc, eventPic from announcements where eventTitle != '' && removed IS NULL";
                    $result = $connn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo '
                            
                            
                            	<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    
                                    <form action="eventsmore" method="post" style="height:100%">
                                    <input type="text" name="cor" value="'. $row['id'] .'" hidden></input>
                                    <div class="position-relative overflow-hidden">
                                        <button type="submit" name="submit" style="border:none;"><img class="img-fluid" src="image/'. $row['eventPic'] .'" alt="" style="min-height:300px;max-height:330px;">
                                        	<div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Read More</div>
                                        </button>
                                    </div>
									<div class="p-4 pb-0">
                                        <button type="submit" name="submit" style="border:none;background:none">
                                        	<p class="d-block h5 mb-2">'. $row['eventTitle'] .'</p>
                                        </button>
                                    </div>
                                   	</form>  
										
										</div>
										</div>
						
										';

                        }
                    }
                    else {
                        echo "<p style='text-align:center;font-size:25px;padding:10px;background-color:white;'>There are currently no Events at the moment</p>";
                    }
                    $connn-> close();
                   ?>	
									   
                                        
                                    
                                
                           
                            
                        </div>
                    </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include 'footer.php';
?>