<?php 
    if ( ! isLoggedIn() ){
        header( 'location:?action=login' );
    }
 ?>
<div class="container">
  <div class="row"></div>
  <div >
    <h3>Feel free to contact us.</h3>
  </div>
  <div class="row cls2">
    <div class="row m-4">
      <form action="">
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" id="fname" class="form-control" name="firstname" placeholder="John">
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label">Last Name</label>
          <input type="text" id="lname" name="lastname" class="form-control" placeholder="Smith">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <select id="age" name="age" class="form-control" style="color: gray">
            <option value="minor" style="color: grey;">Under 18</option>
            <option value="working" style="color: grey;">Between 18 and 60</option>
            <option value="retired" style="color: grey;">Above 60</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Message</label>
          <textarea id="subject" class="form-control" name="subject" placeholder="Type your Message here." style="height:80px"></textarea>
        </div>
        
        <div class="mb-3">
          <button type="button" class="btn btn-warning ">Send Message</button>
        </div>
      </form>
    </div>
  </div>
  
</div>