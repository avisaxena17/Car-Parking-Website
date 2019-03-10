<?php include('server.php');?>

<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
<style>
body {
  font-family: Arial, Helvetica, sans-serif; 
  }

* {box-sizing: border-box;}

body {
    background-image: url("p6.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	max-width: 100%;
	position: relative;
 }

input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


button {
    background-color: black;
    color: white;
    padding: 20px 20px;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
    
    border-radius: 10px;
    font-size: 20px;
    font-family:'Special Elite';
    transition: 0.2s;

}

button:hover {
    opacity:1;
}


.cancelbtn {
    padding: 20px 20px;
    background-color: #f44336;
}


.cancelbtn, .signupbtn{
  float: left;
  width: 50%;
}


.container {
    padding: 16px;
}


.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: #474e5d;
    padding-top: 50px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.btn{
    background-color: black;
    color: white;
    padding: 20px 40px;
    margin-top: 120px;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
    
    border-radius: 10px;
    font-size: 20px;
    font-family:'Special Elite';
    transition: 0.2s;

}

.btn:hover {
    opacity:1;
    transition: 1.2s;
    border-radius: 100px;
}



</style>
<body>



  <h2 style="color:black;font-family: 'Special Elite';font-size: 70px;padding-left: 130px;">Welcome to Alpha Base ORD-3492</h2>
<div style="margin-left: 120px">
  <button class="btn" onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
   <button class="btn" onclick="document.getElementById('id02').style.display='block'">Login</button>
</div>
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/car parking/signup.php" method="post">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password_1" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_2" required>
      
        <?php include('errors.php');?>
      
        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="register" value="Register">Sign Up</button>
        </div>
      </div>
    </form>
  </div>


 

  <div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/car parking/signup.php" method="post">
      <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form to Login to your account.</p>
        <hr>
        
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    
        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="login_user" value="login_user">Login</button>
        </div>
      </div>
    </form>
  </div>



<script>

var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
</script>

</body>
</html>
