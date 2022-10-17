<div class="container">
  <div class="row"></div>
  <div style="text-align:center">
    <h3>Feel free to contact us.</h3>
  </div>
  <div class="row">
    <div id="map-container-google-1" class="z-depth-1-half map-container col" style="height : 500px ; width:  500px ;">
        <iframe src="https://maps.google.com/maps?q=sanepa&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col">
    <form action="/action_page.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="John">
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Smith">
      <label for="age">Age</label>
      <select id="age" name="age" style="color: gray">
        <option value="minor" style="color: grey;">Under 18</option>
        <option value="working" style="color: grey;">Between 18 and 60</option>
        <option value="retired" style="color: grey;">Above 60</option>
      </select>
      <label for="subject">Message</label>
      <textarea id="subject" name="subject" placeholder="Type your Message here." style="height:80px"></textarea>
      <button type="button" class="btn btn-info">Send Message</button>
    </form>
  </div>
  </div>
  
</div>
<style>
* {

  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #000;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}

.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
.col {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
  left: 0;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>