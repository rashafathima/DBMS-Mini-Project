<!DOCTYPE html>
<html lang="en">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Road Accident<br>Tracker</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Check Out Your Location!</a>
    <a href="stats.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Overview</a>
    <a href="../login/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a>

  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Road Accident Tracker</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Photo grid (modal) -->

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


  <div class="w3-container" id="services" style="margin-top:60px">
    <center><h1 class="w3-xxxlarge w3-text-red"><b>Accident Recorded Till Date</b></h1></center>
    <div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
			</div>
			<div class="height10">
			</div>
			<div class="row">
        <div class="w3-container" id="services">
          <h1 class="w3-xxxlarge w3-text-red">
<center>
						<?php
							include_once('connection.php');
							$sql = "SELECT COUNT(id) AS ACCI FROM acc";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								 echo "".$row['ACCI']."";
							}
              ?>
            </center>
            </h1>
          </div>

            			</div>
            		</div>
            	</div>

  </div>
<br>

<!--2-->
<div class="w3-container" id="services" style="margin-top:60px">
  <center><h1 class="w3-xxxlarge w3-text-red"><b>Casualities Seen Till Date</b></h1></center>
  <div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="row">
    <?php
      if(isset($_SESSION['error'])){
        echo
        "
        <div class='alert alert-danger text-center'>
          <button class='close'>&times;</button>
          ".$_SESSION['error']."
        </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo
        "
        <div class='alert alert-success text-center'>
          <button class='close'>&times;</button>
          ".$_SESSION['success']."
        </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    </div>
    <div class="row">
    </div>
    <div class="height10">
    </div>
    <div class="row">
      <div class="w3-container" id="services">
        <h1 class="w3-xxxlarge w3-text-red">
<center>
          <?php
            include_once('connection.php');
            $sql = "SELECT SUM(Severity) AS SEV FROM acc";

            //use for MySQLi-OOP
            $query = $conn->query($sql);
            while($row = $query->fetch_assoc()){
               echo "".$row['SEV']."";
            }
            ?>
          </center>
          </h1>
        </div>

                </div>
              </div>
            </div>

</div>

<div class="w3-container" id="services" style="margin-top:60px">
  <center><h1 class="w3-xxxlarge w3-text-red"><b>Street With Highest Number of Accident Cases</b></h1></center>
  <div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="row">
    <?php
      if(isset($_SESSION['error'])){
        echo
        "
        <div class='alert alert-danger text-center'>
          <button class='close'>&times;</button>
          ".$_SESSION['error']."
        </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo
        "
        <div class='alert alert-success text-center'>
          <button class='close'>&times;</button>
          ".$_SESSION['success']."
        </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    </div>
    <div class="row">
    </div>
    <div class="height10">
    </div>
    <div class="row">
      <div class="w3-container" id="services">
        <h1 class="w3-xxxlarge w3-text-red">
<center>
          <?php
            include_once('connection.php');
            $sql = "SELECT loc.Street as STRE, MAX(acc.LID) from loc,acc where acc.LID=loc.id";

            //use for MySQLi-OOP
            $query = $conn->query($sql);
            while($row = $query->fetch_assoc()){
               echo "".$row['STRE']."";
            }
            ?>
          </center>
          </h1>
        </div>

                </div>
              </div>
            </div>

</div>









<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
</script>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>
