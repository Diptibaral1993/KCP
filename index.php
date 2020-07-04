<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 130px;background: #46579a;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="" style="color: white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a style="color: #0ae5a7" href="index.php">
    <H2><b>KCP</b></H2>
  </a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>USER</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-cog w3-xxlarge"></i>
    <p>PARAMETER</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>SITE</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-tasks w3-xxlarge"></i>
    <p>PROJECT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">USER</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">PARAMETER</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">SITE</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">PROJECT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container" id="home">
    <ul class="nav nav-tabs" style="margin-top: 2%;font-weight: bolder;font-size: 16px">
      <li class="active"><a data-toggle="tab" href="#menu1">ADD USER</a></li>
      <li><a data-toggle="tab" href="#menu2">EDIT USER</a></li>
      <li><a data-toggle="tab" href="#menu3">DELETE USER</a></li>
    </ul>

    <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active">
        <table class="w3-table-all w3-card-4" style="margin-top:2%">
          <tr style="color: black">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
          </tr>
          <tr style="color: black">
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr style="color: black">
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr style="color: black">
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
          </tr>
        </table>
      </div>
      <div id="menu2" class="tab-pane fade">
        <table class="w3-table-all w3-card-4" style="margin-top:2%">
          <tr style="color: black">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
          </tr>
          <tr style="color: black">
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr style="color: black">
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr style="color: black">
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
          </tr>
        </table>
      </div>
      <div id="menu3" class="tab-pane fade">
        <table class="w3-table-all w3-card-4" style="margin-top:2%">
          <tr style="color: black">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
          </tr>
          <tr style="color: black">
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr style="color: black">
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr style="color: black">
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
          </tr>
        </table>
      </div>
    </div>

   
  </header>
</div>

  
  
    <!-- Footer -->
  

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
