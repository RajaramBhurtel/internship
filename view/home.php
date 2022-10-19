<?php 
	if ( ! isLoggedIn() ){
		header( 'location:?action=login' );
	}
 	
 	if (! isAdmin() ){
 		include "view/header.php"; 
 ?>

<div class="container-fluid text-center" id="homebd">
	<h1>Changing the World Through Our Services</h1>
	<p class="lead">We All Want To Make A Difference. But Do We?<span id="dots">.....</span><span id="more">Humans of every walk of life have a nagging longing to make a difference in the lives or others, in Truth, to make a difference in the world. But how do we know if we are, or better yet, how do we make that difference? This question is one I am asked repeatedly. The simple answer is, “because you are here.” You might think this too simple an answer for such a thought provoking question.
	The Truth is because you are here. You, me, none of us would be here if there wasn’t a purpose for our being here. And in serving that purpose we make a difference in our own life, the lives of those around us, in the whole of humanity and the world at large.</span></p>
	<div>
		<a href="#" class="btn btn-large btn-info" id="btnlm"  onclick="myFunction()" > Read More </a>
	</div>
</div>

<?php }else{ ?>
	<div class="container text-center ">
		<h3>Welcome to admin dashboard</h3>
	</div>
	<div class="row">
		<div class="col">
			<p class="text-center">You can manage website from here.</p>
		</div>
	</div>
<?php } ?>
<script type="text/javascript">
	function myFunction() {
	  var dots = document.getElementById( "dots" );
	  var moreText = document.getElementById( "more" );
	  var btnText = document.getElementById( "btnlm" );

	  if ( dots.style.display === "none" ) {
	    dots.style.display = "inline";
	    btnText.innerHTML = "Read more";
	    moreText.style.display = "none";
	  } else {
	    dots.style.display = "none";
	    btnText.innerHTML = "Read less";
	    moreText.style.display = "block";
	  }
	}
</script>






