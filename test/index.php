<html lang="en">

<head>
<style>
body {
  font-family: Arial, sans-serif;
  background-size: cover;
  height: 100vh;
}
.server-status {
    padding: 20.5px 15px!important;
    text-align: center;
    font-size: 12px;
}
h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 100px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 80%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Growtopia Private Server
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="index-page">
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
          <img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/logo_header.png" style="width:100px;height:50px;">
		  <div class="server-status text-white">Server is Online |  <div><a><?php include('player.txt'); ?></a></div> Players online!</div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-info">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/logo_header.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="javascript:;">
                  <i class="fa fa-facebook-square"></i>
                  <span class="nav-link-inner--text">Facebook</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="javascript:;">
                  <i class="fa fa-twitter"></i>
                  <span class="nav-link-inner--text">Twitter</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="javascript:;">
                  <i class="fa fa-instagram"></i>
                  <span class="nav-link-inner--text">Instagram</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	  <div class="wrapper">
     <div style="background-image:url(https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/grow_header.jpg)">
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/logo_header.png" draggable="false">
                <p class="lead text-white">Growtopia is a free-to-play sandbox MMO game with almost endless possibilities for world creation, customization and having fun with your friends. Enjoy thousands of items, challenges and events.</p>
                
                <div class="btn-wrapper mt-5">
					<a class="btn btn-default" href="#popup1">Download</a>
				</div>

				<div id="popup1" class="overlay">
					<div class="popup">
					<h2>Download Growtopia Private Server</h2>
					<a class="close" href="#">&times;</a>
					<div class="content">
						<p>Growtopia is a universe of unlimited worlds, all connected to each other. Play Growtopia on any of the platforms below. If you create and use Grow ID, your game will be synchronized across devices.</p>
						<img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/google_badge.png" draggable="false"> <img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/windows_badge.png">
					</div>
				</div>
			</div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <footer id="footer">
    <div class="common-box footer">
      <div class="container text-center"> 
        <!-- footer logo -->
        <div class="logo"><h6>© 2021 (Server Name). All Rights Reserved. Template By Kaizaru</h6></div>
        </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>
