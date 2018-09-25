<?php 
     include_once 'header.php'; 
 ?>
  <section class="main-container">
    <div class="main-wrapper">
       <h2>Home</h2>
       <?php
       if (isset($_SESSION['u_id'])) {
         echo "You're loged in";
       
       }
       ?><br><br><br>
       
         <form action="location/index.html">
           <button id="sub">Locate</button>
         </form>
       </div>
       
    </div>
    
  </section>
<?php 
     include_once 'footer.php'; 
 ?>
