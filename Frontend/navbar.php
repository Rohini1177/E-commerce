 
<nav class="navbar navbar-expand-lg navbar-light" id="id5" style="position: sticky;top: 0; background: linear-gradient(to left,rgb(18, 19, 26),rgb(241, 255, 255))">

<a class="navbar-brand" href="#"><img src="image/Screenshot_2024-03-06_215403-removebg-preview.png" height="80px" style="margin: 0;padding: 0;" ></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<!-- <div class="sidebar" id="sidebar" style="background-color:black;">
         <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        
      </div>
      <button class="toggle-btn" onclick="toggleSidebar()">☰</button> -->

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">

    <li class="nav-item">
      <a class="nav-link" href="index.php" style="color: white;font-size: large;">Home </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="aboutus.php" style="color: white;font-size: large;">About</a>
    </li>
    <li class="nav-item">
      <div class="dropdown">
        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-size: large;">
        Services
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Home Delivery</a>
          <a class="dropdown-item" href="#">Replacement</a>
          <a class="dropdown-item" href="#">Repair</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactus.php" style="color: white;font-size: large;">Contact Us</a>
    </li>
  </ul>
  <a href="login.php"><button class="btn btn1 btn-outline-warning" style="float: right;display: flex;margin-right: 20px;">Login</button></a> 
  
  <a href="checkout.php"> Cart</a>
  <!-- <button class="btn btn-outline-warning btn1" style="float: right;">Create Account</button> -->
</div>

<!-- <div class="sidebar-toggle" onclick="toggleSidebar()">&#9776;</div> -->
</nav>
<script>
    // script.js
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}

</script>