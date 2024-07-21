<?php include_once ('./header.php') ?>
<?php include_once ('./dbconsole.php') ?>
<?php include_once ('./validate.php')?>



  <div class="container">
    <form action="" method="post" name="form" class="form1" onsubmit="return login(event)" style="position: relative;flex-direction: column;">
        <br><h2 style="text-align: center;">Login</h2>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <small class="muted-text" style="padding-left: 70px;">or use your account</small><br><br>

        <label class="ast label1" id="maillabel" >E-mail</label><br>
        <input class="form-control" id="mail1" type="email" name="email" required  autofocus placeholder="E-mail"><br><br>
  
  
        <label class="ast label1" id="passwordlabel">Password</label><br>
        <input class="form-control" id="password" type="password" name="password" required  autofocus placeholder="Password">
        <span class="show-password" onclick="pass()">
          <i class="fas fa-eye"></i></span>
      
        <br>
    
       <a href=""><small class="muted-text" style="color: blue;">Forget Password?</small></a></a>
       <a href="createaccount.php"><small class="muted-text" >Don't have account?Sign in</small></a></a>
        <br><br>
        <button class="btn btn-outline-info w-100" style="justify-content: center;font-weight: 600;color: black;">Login</button>
    </form>
  </div>
  </div>
