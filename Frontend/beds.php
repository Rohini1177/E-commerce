<?php include_once('./navbar.php') ?>
<?php include_once('./head.php') ?>

    <hr class="hr2">
    <div class="horizontal-div1">
        <div class="btn3" style="margin-bottom: 9px;">
            <label style="font-size: large;font-weight: 600;">Shop for</label>
       <a href="bunkbeds.php"> <button class="btn btn-outline-dark px-3 ml-2">Bunk Bed</button></a>
       <a href="kings.php"> <button class="btn btn-outline-dark px-3 ml-2">King's Bed</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Queen's Bed</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Kid's Bed</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Adult's Bed</button></a>
       <a href=""> <button class="btn btn-outline-dark px-3 ml-2">Single Bed</button></a>
       <!-- <a href=""></a> -->
       <?php include_once('./sidebar.php')?>
        </div>
    </div>

    <hr class="hr2">

    <div>
      <img class="img-fluid" width="100%" height="auto" src="image/beds/imgonline-com-ua-resize-mrNcL5FWbZ1pOqn5.jpg" >
    </div>
    <br>
    <hr class="hr1">
    <div class="emi1">
      <img class="img-fluid"  height="auto" src="image/beds/emi.png" >
    </div>
<hr class="hr1">
    <h1 id="id1">Grab it!</h1>
  <hr id="hr1">

  <div id="carousel" class="carousel slide  carousel-fade-from-bottom" data-ride="carousel" style="background-color: black;display: block; margin-bottom: 28px; height: 540px;margin: auto;padding: auto;">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="image/beds/bed2.jpg" class="d-block w-100" alt="imag" height="100%">
      </div>
      <div class="carousel-item ">
        <div class="carousel-caption d-none  d-md-block">
          <h4 style="color: black;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight: 600;">New Collections Arrived</h4>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
        </div>
        <img src="image/beds/bed4.jpg" class="d-block w-100" alt="imag1" height="100%">
        
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
  
  <h1 id="id1">Explore It!</h1>
  <hr id="hr1">
  <br>

  <div class="div1">
    
    <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="card card2 card1">
      <img src="image/beds/king1.jpg" alt="i1"  height="150px">
      <hr class="hr3">
      <div class="card-body">
        <h5>King's Bed </h5>
        <p id="get" class="card-text">Rs. 50,000 <br><small class="text-muted"><strike>Rs. 55,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

    <div class="card card2 card1">
      <img src="image/beds/kid2.jpg" alt="i2" height="150px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Kid's Bed </h5>
        <p id="get" class="card-text">Rs. 40,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4" >Buy now</button>
    </div>

    <div class="card card2 card1">
      <img src="image/beds/queen1.jpg" alt="i3" height="150px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Queen's Bed </h5>
        <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 55,000</strike></small></p>
      </div>
      <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

    <div class="card card2 card1" >
      <img src="image/beds/bed5.jpg" alt="i4" height="150px">
      <hr class="hr3">
      <div class="card-body">
        <h5>Adult Bed </h5>
        <p id="get" class="card-text">Rs. 30,000 <br><small class="text-muted"><strike>Rs. 35,000</strike></small></p>
      </div>
        <button class="btn btn-outline-dark card1 btn4">Buy now</button>
    </div>

  </div>
  </div>
<?php include_once('./footer.php') ?>