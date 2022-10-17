<?php 
  // include "controller/functions.php";
  if ( ! isset( $_SESSION[ 'user' ] ) ){
      header( 'location:?action=login' );
  }
  if( 'admin' != $_SESSION['user']){
    header( 'location:?action=home');
  }
 
  if (!isset ( $_GET[ 'page' ] ) ) {  
      $page = 1;  
  } else {  
      $page = $_GET[ 'page' ];  
  }
  $total_pages = $user->get_total_pages();
  $i = 1;
?>
<div class="row m-4">
  <h3>User Listing</h3>
</div>
  <div class="row m-5">
    <table class="table">
      <thead class="bg-dark text-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
            $result = $user-> get( $page );
            foreach( $result as $row ){?>
        <tr>
          <td><?php echo $i++;?></td>
          <td><?php echo $row['Username']; ?></td>
          <td><?php echo $row['Lastname']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><a href="?action=edit&&editid=<?php echo $row['id']; ?>"><i class="fa fa-pen-to-square" style="color: green"></i></a> || <a href="?action=users&&delid=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="color: red" ></i></a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
   
      <nav >
        <ul class="pagination ">
          <?php for($temp = 1; $temp <= $total_pages; $temp++) {  ?>
            <li class="page-item"><a class="page-link" href="?action=users&&page=<?php echo $temp ?>"><?php echo $temp ?></a></li>
          <?php } ?>
        </ul>
      </nav>
 
    
  </div>
  

