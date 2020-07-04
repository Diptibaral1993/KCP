<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-center" style="background-color: cadetblue">
    <p style="font-weight: bold;font-size: 40px">KCP</p>
  </div>
  <div class="w3-bar-block">
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>User Master</a> 
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body" style="padding-left: 60px">
          <a onclick="Menuloader('user_master/add_user')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-plus fa-fw w3-margin-right"></i>Add User</a>
          <a onclick="Menuloader('user_master/edit_user')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>Edit User</a>
          <a onclick="Menuloader('user_master/delete_user')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-trash fa-fw w3-margin-right"></i>Delete User</a> 
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-cog fa-fw w3-margin-right"></i>Parameter Master</a> 
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body" style="padding-left: 60px">
          <a onclick="Menuloader('parameter_master/add_parameter')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-plus fa-fw w3-margin-right"></i>Add Parameter</a>
          <a onclick="Menuloader('parameter_master/edit_parameter')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>Edit Parameter</a>
          <a onclick="Menuloader('parameter_master/delete_parameter')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-trash fa-fw w3-margin-right"></i>Delete Parameter</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-eye fa-fw w3-margin-right"></i>Site Master</a> 
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body" style="padding-left: 60px">
          <a onclick="Menuloader('site_master/add_site')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-plus fa-fw w3-margin-right"></i>Add Site</a>
          <a onclick="Menuloader('site_master/edit_site')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>Edit Site</a>
          <a onclick="Menuloader('site_master/delete_site')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-trash fa-fw w3-margin-right"></i>Delete Site</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-tasks fa-fw w3-margin-right"></i>Project Master</a> 
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body" style="padding-left: 60px">
          <a onclick="Menuloader('project_master/add_project')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-plus fa-fw w3-margin-right"></i>Add Project</a>
          <a onclick="Menuloader('project_master/edit_project')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>Edit Project</a>
          <a onclick="Menuloader('project_master/delete_project')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-trash fa-fw w3-margin-right"></i>Delete Project</a>
        </div>
      </div>
    </div>
  </div> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="background.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container" id="mainContainer">

    </div>
  </header>

 


  
 

<!-- End page content -->
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
</script>

<script type="text/javascript">
  
  function Menuloader(page)
  {
    $("#mainContainer").load(page+".php");
  }
</script>

</body>
</html>
