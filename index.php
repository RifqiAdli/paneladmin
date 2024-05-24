<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
$user = $_POST['username'];
$pass = $_POST['password'];}
  
 if($user == 'Akradia' AND $pass == '55346') {
   // membuat session
session_start();
$_SESSION['Berhasil'] = true;
   
 header("Location: admin.php");
 }
      
      



?>







<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 0;
      margin: 0;
    }
    
    .login-container {
      width: 300px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
    }
    
    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="" method="POST">
      <p><strong>Username:</strong></p>
      <input type="text" name="username" placeholder="Username">
      <p><strong>Password:</strong></p>
      
      <input type="password" name="password" placeholder="Password" required>
      <center>
      <button type="submit" name="login">LOGIN</button>
      </center>
    </form>
  </div>
</body>
</html>

