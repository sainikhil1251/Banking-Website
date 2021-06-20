<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:lightgreen;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: powderblue;
}

.container {
  margin-top: auto;
  margin-bottom: auto;
  width:50%;
  margin:5px 10px;
  border-radius: 5px;
  background-color:lightblue;
  padding: 20px;
}
</style>
</head>
<body>
  <div class="big"><i class="fa fa-id-card" aria-hidden="true"></i><h3>Name</h3></div>
<div class="big1">
  <p>Sai Nikhil</p>
</div>
<div class="small"><i class="fa fa-phone" aria-hidden="true"></i><h3>Phone</h3></div>
<div class="small1">
  <p>9441378026</p>
</div>
<div class="large"><i class="fa fa-envelope" aria-hidden="true"></i> <h3>Email</h3></div>
<div class="large1">
  <p>sainikhil1251@gamil.com</p>
</div>

  <h3>Contact Form</h3>

<div class="container">
  <form>
    <label for="name">Name</label>
    <input type="text" id="name" name="Name" >
    <label for="email">Email</label>
    <input type="text" id="email" name="Email" >

     <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>



</body>
</html>
