<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidebar {
  margin-top: 105px !important;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: #111; */
  background: linear-gradient(40deg,rgb(18, 19, 26),rgb(241, 241, 241));
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  /* color: #818181; */
  color:black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">PlatForm Beds</a>
  <a href="#">Trundle Beds</a>
  <a href="#">Four Poster Beds</a>
  <a href="#">Futon Beds</a>
  <!-- <a href="#">Bunk Beds</a>
  <a href="#">King's Beds</a>
  <a href="#">Queen's Beds</a>
  <a href="#">Kid's Beds</a>
  <a href="#">Adult Beds</a>
  <a href="#">Single Beds</a> -->

  <a href="#">Futon Beds</a>
  <a href="#">Futon Beds</a>
</div>

<div id="main">
  <a href="#" style="position:absolute;right:150px;top: 150px;"  onclick="openNav()">more</a>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
