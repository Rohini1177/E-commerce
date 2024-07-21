
<?php include_once ('./navbar.php')?>
<?php include_once ('./head.php')?>

<style>
  
  .image1:hover{
    border: 20px;
    border-radius: 20px;
    box-shadow: 0,2px,0,2px black;
    transition: 0.6s ease;
    transform: scale(0.5s);
  }
  iframe{
  width: 100%;
  /* margin-left: 5px;
  margin-right: 5px; */
  height: 100%;
  }
</style>

    <hr class="hr2">
    <div class="horzintal-div item" style="padding-left:110px;">
        <div class="btn3" style="margin-bottom: 9px;">
            <label style="font-size: large;font-weight: 600;">Shop for</label>
       <a href="wood.php"> <button class="btn btn-outline-dark px-3 ml-2">Wood Dining</button></a>
       <a href="Marble.php"> <button class="btn btn-outline-dark px-3 ml-2">Marble Dining</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Rectangle Dining</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Nordic Dining</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Glass Dining</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Traditional Dining</button></a>
       <?php include_once ('./sidebar.php')?>
       <!-- <a href="sidebar.php">more</a> -->
        </div>
    </div>

    <hr class="hr2">
    <!-- <h1 id="id1">Grab it!</h1>
  <hr id="hr1">
    <div style="margin: 10px;">
      <img class="image1" style="padding:15px;box-shadow:0 0 10px rgba(0,45,0,0.5);" width="100%" height="100%" src="https://brabbu.com/blog/wp-content/uploads/2021/12/Marble-or-Wood-What-Type-of-Dining-Table-Should-You-Buy-4.jpg" >
    </div>
    <br> -->
    <hr class="hr1">
    <div class="emi1">
      <img class="img-fluid"  height="auto" src="image/beds/emi.png" >
    </div>
<hr class="hr1">
    <h1 id="id1">Must have it!</h1>
  <hr id="hr1">

  <div id="carousel" class="carousel slide  carousel-fade-from-bottom" data-ride="carousel" style="background-color: black;display: block; margin-bottom: 28px; height: 570px;margin: auto;padding: auto;width:80%;">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="https://plus.unsplash.com/premium_photo-1661963358222-b7b71946bb92?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGluaW5nJTIwdGFibGV8ZW58MHx8MHx8fDA%3D" class="d-block w-100" alt="imag" height="100%">
      </div>
      <div class="carousel-item ">
        <div class="carousel-caption d-none  d-md-block">
          <h4 style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight: 600;">New Collections Arrived</h4>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
        </div>
        <img src="https://img.freepik.com/premium-photo/simple-ecostyle-coffee-table-with-few-cups-cappuccino-living-room-interior-blur-backdrop-generative-ai_116317-25695.jpg" class="d-block w-100" alt="imag1" height="100%">
        
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carousel" data-slide="next">
      <!-- <i class="bi bi-arrow-right-circle-fill"></i> -->
      <span class="carousel-control-next-icon bi-arrow-right-circle-fill" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <hr class="hr2">
  <br>
  
  <h1 id="id1">Have A Look!</h1>
  <hr id="hr1">
  <br>
  <iframe src="dining.mp4" allow="autoplay" frameborder="1"></iframe>
  <hr class="hr2">
  
  <h1 id="id1">Explore It!</h1>
  <hr id="hr1">
  <br>
  <div class="div1" style="margin-bottom: 10px;">
    
    <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="card card2 card1" style="height: 350px;">
      <img src="https://i.pinimg.com/originals/86/fe/09/86fe093b27c58d4301a5e8f7d8782d69.jpg" alt="i1"  height="190px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Marble Dining </h5>
        <p id="get" class="card-text">Rs. 46,499 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

    <div class="card card2 card1" style="height: 350px;">
      <img src="https://images-cdn.ubuy.co.in/6536a908997c9d1279609e71-gracenook-lift-table-elevating-type.jpg" alt="i2" height="190px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Expandable Dining </h5>
        <!-- <small muted-text="45,000"> -->
        <p id="get" class="card-text">Rs. 26,499 <br><small class="text-muted"><strike>Rs. 40,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4" >Buy now</button>
    </div>

    <div class="card card2 card1" style="height: 350px;">
      <img src="https://maharajafurniture.com/wp-content/uploads/2021/04/3-1.jpg" alt="i3" height="190px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Stylish And Durable </h5>
        <p id="get" class="card-text">Rs. 78,499 <br><small class="text-muted"><strike>Rs. 80,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

    <div class="card card2 card1" style="height: 350px;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQETV_7xkqV_GLSX_rUc9ihINHkQiNYvxT2AkPPgdNKQA&s" alt="i4" height="190px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Wooden Dinings </h5>
        <p id="get" class="card-text">Rs. 35,499 <br><small class="text-muted"><strike>Rs. 40,000</strike></small></p>
      </div>
        <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

  </div>
  </div>
<hr class="hr2">


<?php include_once ('./footer.php')?>