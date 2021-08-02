<?php include('dbcon.php') ?>
<?php        

$select = " SELECT * FROM `categories` ";
$query = mysqli_query($conn,$select);
if(!$query){
  ?>
  <script>
  alert("Query Failed")
  </script>
  <?php
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNow</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="topnav topnav-dark bg-light bg-gradient"> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient">
      <div id="topnav" class="container-fluid">
        <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link h-6" href="#">About Us</a>
        </li>
       <li class="nav-item">
          <a class="nav-link h-6" href="#">Privacy</a>
        </li>
       <li class="nav-item">
          <a class="nav-link h-6" href="#">FAQ</a>
        </li>
       <li class="nav-item">
          <a class="nav-link h-6" href="#">Careers</a>
        </li>
      </ul>
      <ul class="navbar-nav" id="navigation">
      <li class="nav-item"><a class="nav-link" href="#">My Wishlist</a></li>
      <li class="nav-item"><a class="nav-link" href="#">|</a></li>
      <li class="nav-item"><a class="nav-link" href="trackorder.php">Track Your Order</a></li>
      <li class="nav-item"><a class="nav-link" href="#">|</a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i id="facebook" class="fab fa-facebook"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i id="twitter" class="fab fa-twitter"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i id="instagram" class="fab fa-instagram"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i id="linkedin"class="fab fa-linkedin"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i id="youtube"class="fab fa-youtube"></i></a></li>
      </ul>
    </nav>
</div>
    </div>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient">
  
     
    <a class="navbar-brand" href="#"><i class="fas fa-shopping-cart text-danger"></i> ShopNow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php while ($row = mysqli_fetch_assoc($query)){
              ?>
                  <li>
                    <a class="nav-link" href="<?php echo $row['page'] ?>"><?php echo $row['categories'] ?></a>
                  </li>
<?php
            }
            ?>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        </li>
        <div class="signin">
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sign In <i class="fas fa-sign-in-alt"></i></a>
        </li></div>
      </ul>      
     </ul>
    </div>
      <ul id="leftlogos" class="navbar-nav">
          <li class="nav-item"><a id="search" class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
          <li class="nav-item"><a id="user" class="nav-link" href="#"><i class="fas fa-user"></i></a></li>
          <li class="nav-item"><a id="cart" class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>
  </div>
</nav>
