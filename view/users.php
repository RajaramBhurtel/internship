<?php 
  $info = $this->rows_pages();
  $page =(int) filter_var($_GET['query'], FILTER_SANITIZE_NUMBER_INT);
  if (  0 == $page ) {
    $page = 1;
  }
  $i =($page-1)*10;
?>
<div class="row m-4">
  <h3>User Listing</h3>
</div>
  <div class="row m-5">
    <table class="table">
      <thead class="bg-dark text-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
           
            foreach( $data as $row ){
          ?>
        <tr>
          <td><?php echo ++$i ?></td>
          <td><?php echo $row[ 'Username' ]; ?></td>
          <td><?php echo $row[ 'Lastname' ]; ?></td>
          <td><?php echo $row[ 'Email' ]; ?></td>
          <td>

            <a href="/office/user/edit/<?php echo $row[ 'id' ]; ?>" >
              <i class="fa fa-pen-to-square" style="color: green"></i></a> || 
            <a href="/office/user/delete/<?php echo $row[ 'id' ]; ?>">
              <i class="fa fa-trash" style="color: red" ></i>
            </a>
          </td>
        </tr>
      <?php } 
        echo "Showing: ". $i. " of ". $info['row'];
       
      ?>
      </tbody>
    </table>

      <nav >
        <ul class="pagination ">
          <?php 
          for( $page = 1; $page <= $info['page']; $page++ ) {  ?>
            <li class="page-item"><a class="page-link" href="/office/user/view_all/<?php echo $page ?>"><?php echo $page ?>
              
            </a></li>
          <?php } 
          ?>
        </ul>
      </nav>
  </div>

  

