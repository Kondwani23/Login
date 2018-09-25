<?php 

session_start();
 ?>
<!DOCTYPY html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    
      <div class="main-wrapper">
        <?php  
           if (isset($_SESSION['u_id'])) {
             echo '<form action="includes/logout.inc.php" method="POST">
                   <button type="submit" name="submit">Logout</button>
                    </form>';
           } else {
              echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" id="user" name="uid" placeholder="Username"/ required>
                    <input type="password" id="pass" name="pwd" placeholder="Password"/ required >
                    <button type="submit" name="submit" id="sub">Login</button>  
                    </form>';

           }
           ?>
          
        
</div>
      
  </header>