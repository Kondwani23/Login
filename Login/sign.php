<?php 
     include_once 'header.php'; 
 ?>
  <section class="main-container">
    <div class="main-wrapper">
       <h2>Sign Up </h2>
       <form class="sign-up" action="includes/sign-up.php" method="POST">
       	<input type="text" name="first" placeholder="First Name">
       	<input type="text" name="last" placeholder="Last Name">
       	<input type="text" name="email" placeholder="E-mail">
       	<input type="text" name="uid" placeholder="Username">
       	<input type="password" name="pwd" placeholder="Password">
       	<button type="submit" name="submit" id="sub">Sign up</button>
       </form>
    </div>
    
  </section>
<?php 
     include_once 'footer.php'; 
 ?>
