<?php include "controller/functions.php"; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
  <div class="container-fluid ">
    <a class="navbar-brand text-light" href="?action=">WeAreHere</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="?action=">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="?action=about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">New</a></li>
            <li><a class="dropdown-item" href="#">Old</a></li>
            <li><a class="dropdown-item" href="#">Best Seller</a></li>
          </ul>
        </li>
      </ul>
       
      <?php 
        if (! isset( $_SESSION[ 'user' ] )) {
         echo "
              <ul class='navbar-nav'>
              <li class='nav-item ' >
                <a class='nav-link text-light' aria-current='page' href='?action=login'>Login</a>
              </li> 
              <li class='nav-item ' >
                <a class='nav-link text-light' aria-current='page' href='?action=signup'>Signup</a>
              </li> 
            </ul>
         ";
        }else{
          echo "". 
            ( $_SESSION ['user'])." &nbsp
            
            <form action='' method='POST'> 
                <button type='submit' name='logout' class='btn btn-danger'>Logout</button>
            </form>
          ";
        }
       ?>
    </div>
  </div>
</nav>