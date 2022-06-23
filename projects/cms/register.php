<?php
$host = "localhost";
$port = "5432";
$dbname = "sis_db";
$user = "postgres";
$password = ""; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.user(name,email,add,pcon,stream,course,prn,year,div,password,mobno)values('".$_POST['name']."','".$_POST['email']."','".$_POST['add']."','".$_POST['pcon']."','".$_POST['stream']."','".$_POST['course']."','".$_POST['prn']."','".$_POST['year']."','".$_POST['div']."','".md5($_POST['pwd'])."','".$_POST['mobno']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    }
	else{
        
            echo "Something Went Wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register Here </h2>
  <form action="html.php" method="post">

<div class="form-group">
      <label for="prn">Enrollment No:</label>
      <input type="number" class="form-control" id="prn" placeholder="Enter Enrollment NO:" name="prn">
    </div>

  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" requuired>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

   <div class="form-group">
      <label for="stream">Stream:</label>
      <input type="text" class="form-control" id="stream" placeholder="Enter Stream" name="stream">
    </div>    

   <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
    </div>
 
  <div class="form-group">
      <label for="year">Academic Year:</label>
      <input type="text" class="form-control" id="year" placeholder="Enter Academic Year:" name="year">
    </div>

	<div class="form-group">
      <label for="div">Div:</label>
      <input type="text" class="form-control" id="div" placeholder="Enter Div" name="div">
    </div>

	<div class="form-group">
      <label for="add">Address:</label>
      <input type="text" class="form-control" id="add" placeholder="Enter Address:" name="add">
    </div>
<div class="form-group">
      <label for="pcon">Parent Contact Number:</label>
      <input type="number" class="form-control" id="pcon" placeholder="Enter Contact No" name="pcon">
    </div>
    <div class="form-group">
      <label for="mobno">Mobile No:</label>
      <input type="number" class="form-control" id="mobno" placeholder="Enter Mobile Number:" name="mobno">
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
	
  </form>
</div>

</body>
</html>





