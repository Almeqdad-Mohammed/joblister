<?php include 'inc/header.php'; ?>
  <div class="container">
    <form class="form-signin ">

     <div class="col-md-10">
       <div class="form-label-group">
         <label for="inputEmail">Email address</label>
         <input type="email"  class="form-control" placeholder="Email address" required autofocus>
       </div>
     </div>

     <div class="col-md-10">
       <div class="form-label-group">
         <label for="inputPassword">Password</label>
         <input type="password"  class="form-control" placeholder="Password" required>
       </div>
     </div>

     <div class="checkbox mb-3">
       <label>
         <input type="checkbox" value="remember-me"> Remember me
       </label>
     </div>

     <div class="col-md-10">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     </div>

    </form>

  </div>
  <br><br>
  <hr>
<?php include 'inc/footer.php'; ?>
