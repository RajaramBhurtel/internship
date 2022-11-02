
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
  <div class="container-fluid ">
    <a class="navbar-brand text-light" href="/office/">WeAreHere</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php if ( ! $this->is_admin() ){

         ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/office/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/office/user/products">New</a></li>
            <li><a class="dropdown-item" href="#">Old</a></li>
            <li><a class="dropdown-item" href="#">Best Seller</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="/office/page/about">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="/office/page/contact">Contact Us</a>
        </li>
      <?php }else{ ?>
          <li class='nav-item '>
            <a class='nav-link text-light' href='/office/user/view_all'>Users</a>
          </li>
      <?php } ?>
      </ul>
       <div class="nav-item"> <?php echo ucfirst($_SESSION[ 'user' ]); ?></div>          
      <form action='/office/user/logout' method='POST'> 
          <button type='submit' name='logout' class='btn btn-danger'>Logout</button>
      </form>
          
      
    </div>
  </div>
</nav>