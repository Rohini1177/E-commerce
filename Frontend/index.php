<?php include_once ('./navbar.php') ?>
<?php include_once ('./head.php') ?>

 <?php include_once('./dbconsole.php')?>  

  <div class="container-fluid" style="background: linear-gradient(50deg,rgb(18, 19, 26),rgb(241, 241, 241));height: 590px;">
    <br>
    <h1 id="id1">Get In Offers</h1>
  <hr id="hr1">
  <div id="carousel" class="carousel slide  carousel-fade-from-bottom" data-ride="carousel" style="background-color: black;display: block; margin: auto;margin-bottom: 28px; height: 400px;max-width: 1200px;">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="image/f15.jpg" class="d-block w-100" alt="imag" height="400px">
      </div>
      <div class="carousel-item ">
        <img src="image/bed6.jpg" class="d-block w-100" alt="imag1" height="400px">
      </div>
      <div class="carousel-item">
        <img src="image/f12.jpg" class="d-block w-100" alt="imag2" height="400px"> 
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carousel" data-slide="next">
      <span class="carousel-control-next-icon bi-arrow-right-circle-fill" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
</div>

  <br>
  <h1 id="id1"> New Arrivals</h1>
  <hr id="hr1">
  <br><br>
  <div class="container" >
    <div class="row row-cols-1 row-cols-md-3 g-6">
      <div class="col">
        <div class="card card1 h-100">
          <span id="id2" class="badge badge-primary">50%</span>
          <img id="id3" src="image/f1.jpg" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title">Wooden Sofa Sheesham Furniture Set</h5>
            <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p>
            <button class="btn btn-outline-dark btn2 card2" style="width: 100%;height: 35px;">Buy now</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card1 h-100">
          <span id="id2" class="badge badge-primary">50%</span>
          <img id="id3" src="image/f2.jpg" class="get1" alt="image">
          <div class="card-body">
            <h5 class="card-title">Wooden Sofa Sheesham</h5>
            <p id="get" class="card-text">Rs. 35,000 <br><small class="text-muted"><strike>Rs. 45,000</strike></small></p>
            <button class="btn btn-outline-dark btn2 card2" style="width: 100%;height: 35px;">Buy now</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card1 h-100">
          <span id="id2" class="badge badge-primary">50%</span>
          <img id="id3" src="image/f3.jpg" class="get1" alt="image">
          <div class="card-body">
            <h5 class="card-title">Wooden Living Room Sheesham</h5>
            <p id="get" class="card-text">Rs. 26,499 <br><small class="text-muted"><strike>Rs. 40,000</strike></small></p>
            <!-- <p class="card-text"></p> -->
            <button class="btn btn-outline-dark btn2 card2" style="width: 100%;height: 35px;">Buy now</button>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div>
     <img src="image/bankad.png" alt="bank" style="width: 100%;height: 100px;">
    </div>
    <br><br>
    <h1 id="id1">Types Of Furnitures</h1>
  <hr id="hr1">
  <br><br>
  
 <!-- types of furnitures -->

    <div class="horizontal-div">
      <div class="item">
      <a href="beds.php"><img class="img1" src="image/bed1.jpg"style="border: 2%; border-color: black;width:252px;height: 215px;"></a>
      <div class="font">Beds</div>
    </div>
    
    <div class="item">
      <a href="dining.php"><img class="img1" src="image/dinni1.jpg"style="border: 2%; border-color: black; height: 215px;width:252px;"></a>
      <div class="font">Dinings</div>
    </div>
    <div class="item">
      <a href="sofa.php"><img class="img1" src="image/sof1.jpg"style="border: 2%; border-color: black; height: 215px; width:252px;"></a>
      <div class="font">Sofa</div>
    </div>
    <div class="item">
      <a href="shoerack.php"><img class="img1" src="image/shoe1.jpg"style="border: 2%; border-color: black; height: 215px;width:252px;"></a>
      <br>
      <div class="font">Shoe Racks</div>
    </div>

   
    
    <div class="item">
      <a href="bowls.php"><img class="img1" src="image/kit1.jpg"style="border: 2%; border-color: black; height: 215px;width:252px;"></a>
      <div class="font">Kitchen Wares</div>
    </div>

    <div class="item">
      <a href=""><img class="img1" src="image/ward1.jpg"style="border: 2%; border-color: black; height: 215px;width:252px;"></a>
      <div class="font">WardRobes</div>
    </div>

    <div class="item">
      <a href=""><img class="img1" src="image/matt1.jpg"style="border: 2%; border-color: black; height: 215px;width:252px;"></a>
      <div class="font">Mattress</div>
    </div>

    <div class="item">
      <a href=""><img class="img1" src="image/decor1.jpg"style="border: 2%; border-color: black; height: 215px;width: 252px;"></a>
      <div class="font">Home Decor</div>
    </div>

  </div>
  </div>
<br>
 
    <h1 id="id1">Look Together</h1>
  <hr id="hr1">
  <br><br>
     <div>
      <div id="carouselset1" class="carousel slide" data-ride="carousel" style="background-color: black;display: block; margin-bottom: 28px; height: 650px;margin-left: 20px;margin-right: 20px;">
      <ol class="carousel-indicators">
        <li data-target="#carouselset1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselset1" data-slide-to="1"></li>
        <li data-target="#carouselset1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/ne4.jpg" class="d-block w-100" alt="imge1" height="650px">
        </div>
        <div class="carousel-item">
          <img src="image/ne6.jpg" class="d-block w-100" alt="imge2" height="650px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselset1" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 40px;width: 40px;"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselset1" data-slide="next" > 
        <span class="carousel-control-next-icon color--black" aria-hidden="true"style="height: 40px;width: 40px;"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    
  </div> 

  <hr class="hr2">
  <h1 id="id1">Kitchen Wares</h1>
  <hr id="hr1">

  <div class="container" style="margin-bottom: 30px;">
  <div class="row row-cols-1 row-cols-md-4 g-4">

    <div class="col">
      <div class="card card3 h-100">
        <!-- <span id="id2" class="badge badge-primary">50%</span> -->
        <img id="id3" src="image/kitchen/kit7.jpg" class="card-img-top" alt="image">
        <div class="card-body">
          <h6 class="card-title">Wooden Bowls</h6>
          <p>A bowl is a typically round dish or container generally used for preparing, serving, storing, or consuming food. <br>
            <small class="text-muted">Starting from Rs.1000</small></p>
          <!-- <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p> -->
         <a href="bowls.html"><button class="btn btn-outline-dark btn5" style="width: 100%;height: 35px;">Expolre</button></a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card3 h-100">
        <!-- <span id="id2" class="badge badge-primary">50%</span> -->
        <img id="id3" src="image/kitchen/kit3.jpeg" class="card-img-top" alt="image">
        <div class="card-body">
          <h6 class="card-title">Chutney Holder</h6>
          <p>Wooden items can be healthier than conventional items because wood has a natural ability to kill germs and bacteria. <br>
            <small class="text-muted">Starting from Rs.600</small></p>
          <!-- <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p> -->
          <button class="btn btn-outline-dark btn5 " style="width: 100%;height: 35px;">Expolre</button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card3 h-100">
        <!-- <span id="id2" class="badge badge-primary">50%</span> -->
        <img id="id3" src="image/kitchen/kit4.jpg" class="card-img-top" alt="image">
        <div class="card-body">
          <h6 class="card-title">Set of Spoons</h6>
          <p>Wooden spoons are ideal for everyday kitchen tasks, including scraping metal pots and pans without scratching the surface. <br>
            <small class="text-muted">Starting from Rs.500</small></p>
          <!-- <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p> -->
          <button class="btn btn-outline-dark btn5 " style="width: 100%;height: 35px;">Expolre</button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card3 h-100">
        <!-- <span id="id2" class="badge badge-primary">50%</span> -->
        <img id="id3" src="image/kitchen/kit6.jpg" class="card-img-top" alt="image">
        <div class="card-body">
          <h6 class="card-title">Wooden Chopper</h6>
          <p>Useful for slicing, dicing, and chopping. Shop Cutting Boards. Shop Charcuterie <Boards class="br"></Boards>
          <small class="text-muted">Starting from Rs.1000</small></p>
          <!-- <p id="get" class="card-text">Rs. 45,000 <br><small class="text-muted"><strike>Rs. 50,000</strike></small></p> -->
          <button class="btn btn-outline-dark btn5 " style="width: 100%;height: 35px;">Expolre</button>
        </div>
      </div>
    </div>

  </div>
  </div>
  <?php include_once ('./footer.php')?>