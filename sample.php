<?php
$DB="details";
$USER="root";
$PASSWORD="";
$HOST="localhost";
$connect = mysqli_connect('localhost', 'root','' , 'details');


if (!$connect) {
    echo "Not Connected ";
}
if(isset($_POST['submit'])){
  $fname=$_POST['fname']; 
  $lname=$_POST['lname'];

  $email=$_POST['email'];
  $password=$_POST['password'];
  
    $apu = "INSERT INTO reg (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
   
  
	if(mysqli_query($connect,$apu)){
		
		echo "<script>alert('Registration Successful')</script> ";
		 } else {
		   echo "Not OK!";
		 }
		 
		 
 
       
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
     
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 26px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="sample.php" method="post">
    <div class="form-group">
        <label for="fname">FirstName:</label>
        <input type="text" id="fname" name="fname" required>
      </div>
      <div class="form-group">
        <label for="lname">LastName:</label>
        <input type="text" id="lname" name="lname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="submit">submit</button> 
    </form>
  </div>
</body>
</html>
