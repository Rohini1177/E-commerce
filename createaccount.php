  <?php include_once('./header.php') ?>
  <?php include_once('./register.php') ?>
  <div class="container">
    <!-- <div class="get2"> -->
    <form action="register.php" method="post" name="form" class="form1" onsubmit="return login(event)" style="position: relative;flex-direction: column;">
        <br><h2 style="text-align: center;">Sign up</h2><br>

        <label class="ast label1" id="namelabel" >Name</label><br>
        <input class="form-control" id="name1" type="text" name="name" required  autofocus placeholder="Name"><br><br>
  

        <label class="ast label1" id="maillabel" >E-mail</label><br>
        <input class="form-control" id="mail1" type="email" name="mail" required  autofocus placeholder="E-mail"><br><br>
  
  
        <label class="ast label1" id="passwordlabel">Password</label><br>
        <input class="form-control" id="password" type="password" name="pass" required  autofocus placeholder="Password">
        <span class="show-password" onclick="pass()">
          <i class="fas fa-eye"></i></span>
      <!-- </div> -->
        <br>
    
       <a href=""><small class="muted-text" style="color: blue;">Forget Password?</small></a></a>
       <a href="login.php"><small class="muted-text" >Already have account?Sign in</small></a></a>
        <br><br>
        <button class="btn btn-outline-info w-100" style="justify-content: center;font-weight: 600;color: black;">Create Account</button>
    </form>
  </div>
  </div>
