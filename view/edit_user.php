<?php 

	foreach( $data as $row ){

	
?>
<div class="row m-4 cls2">
	<div class="row mb-3"> <h3>Edit Users Details</h3></div>
	<div class="row m-4">
		<form method="post" action="">
			<div class="mb-3">
			    <input type="hidden" class="form-control" name="id" value="<?php echo $row[ 'id' ]; ?>" >
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">First Name</label>
		    <input type="text" class="form-control" name="username" value="<?php echo $row[ 'Username' ]; ?>" readonly="readonly">
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">Last Name</label>
		    <input type="text" class="form-control" name="lastname" value="<?php echo $row[ 'Lastname' ]; ?>">
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">Email</label>
		    <input type="email" class="form-control" name="email" value="<?php echo $row[ 'Email' ]; ?>">
		  </div>
		  <div class="mb-3">
		  	<input type="submit" name="update" class="btn btn-warning center" value="Update">
		  </div> 
		</form>
	</div>
</div>
<?php } ?>