<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <style media ="screen"></style>
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <title>Admin Dashboard Panel</title> 


  <!----===== POPUP MODEL ===== -->
<link rel="stylesheet" href="model/bootstrap.min.css">
<script src="model/jquery.min.js"></script>
<script src="model/bootstrap.min.js"></script>
		<script>
	$(document).ready(function(){
		$("#myModalSMS").modal('show');
	});
</script>
</head>
<body>

 <!----===== POPUP MODEL END ===== -->


  
  <!-- MODEL1-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:-webkit-linear-gradient(left, #21B694, #21B694);">
          <h3 class="modal-title" id="exampleModalLabel" style="color:white;"><img src="logo2.png" width="50"> Ready to Leave?</h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"  style="background: url(side_banner.png);" >
        
        my text here
    
    
    
    </div>
        <div class="modal-footer"  style="background: url(side_banner.png);" >
          <button class="btn btn-primary" style="background:#21B694; border:0px;" type="button" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
		  <a class="btn btn-danger" style="background:#21B694; border:0px;" href="../J-Finance Back Up/backup.php"><i class="fa fa-database"></i> Back Up</a>
          <a class="btn btn-danger" style="background:#21B694; border:0px;" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		  <a onclick="mypopup9()"><button id="me1" class="btn btn-danger" style="background:black; border:0px;"><font size="3"><i class="fa fa-power-off"></i>   Shutdown </font></button></a>
				 
        </div>
      </div>
    </div>
  </div>
  
  <script>
function mypopup9(){
window.close();
}
</script>
  







 <!-- MODEL2-->
<div id="myModalSMS" class="modal fade">
    <div class="modal-dialog" style="width:90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    <i class="fa fa-facebook fa-fw"></i>  
                    <i class="fa fa-twitter fa-fw"></i> 
                    <i class="fa fa-instagram fa-fw"></i> 
                    <i class="fa fa-github fa-fw"></i> 
                    <i class="fa fa-youtube fa-fw"></i> 
                    <i class="fa fa-pinterest fa-fw"></i> 
                
                
                </h4>
            </div>
            <div class="modal-body"  style="background: url(side_banner.png);" >
			<center>
            <img src="man.jpg" width="500">
            <img src="man.jpg" width="500">
             </center>
            <?php 
            include("bot.html");
            ?>
				
				<center>
				
				<a onclick="mypopup()"><button  class="btn btn-primary" style="background:#21B694;  border:2px solid #21B694;"><i class="fa fa-envelope "></i>  View All Messages </button></a>
				
				<button    data-dismiss="modal" aria-hidden="true" class="btn btn-danger" style="background:#21B694;  border:2px solid #21B694;"><i class="fa fa-remove "></i> Cancel</button>
				</center>
				
            </div>
        </div>
    </div>
</div>
</body>
</html>
	
	
	










</head>





<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/LOGO.png" alt="">
            </div>

            <span class="logo_name">klark.io</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a data-toggle="modal" data-target="#logoutModal">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content Library</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Drafts</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">file Manager</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Team Manager</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Reporting</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Myschedules</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">
                        <a data-toggle="modal" data-target="#logoutModal">
                            <button id = "open">Dashboard</button>
                           </a>
                    </span>
                </div>
                <div class="model-container">
                    <div class ="model">
                        <i class = "fas fa-heart"></i>
                        <h3></h3>
                    </div>

                
    </section>

    <script src="script.js"></script>
</body>
</html>