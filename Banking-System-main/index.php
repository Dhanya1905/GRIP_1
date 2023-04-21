<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SBI BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://tse4.mm.bing.net/th?id=OIP.STPc4aJcIRzM_T8EtmkrigHaEA&pid=Api&P=0" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
          <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.f3DM2upCo-p_NPRwBAwbKQHaHa&pid=Api&P=0" height="300" width="300" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.z-e5hEqoaFSrd74s1ia-QwHaEz&pid=Api&P=0" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.Q-uDl0xLfDsTX5ysMtcYIQHaFj&pid=Api&P=0"  height="400" width="400"  class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
<footer class="text-center mt-5 py-2">
  <p>CONTACT US</p>
  <div class="centerdiv"> 
    <a href="#"> 
      <i class="fa fa-facebook"> </i>
       </a> 
       <a href="#"> 
         <i class="fa fa-twitter"></i> 
         </a>
          <a href="#"> 
            <i class="fa fa-instagram"></i>
             </a> 
             <a href="#"> 
               <i class="fa fa-youtube"></i> 
               </a>
                <a href="#"> 
                  <i class="fa fa-linkedin"></i> 
                  </a> 
                </div> 

  <p>&copy 2023. Made by <b>DHANYA DEEKSHITHA</b> <br><span> SPARK Foundation</span></p>
          
        </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>