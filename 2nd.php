<!DOCTYPE html>
<html>
<head>
<title>otp page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] {
  width: 90%;
  padding: 9px 15px;
  margin: 8px 0;
  display: inline-grid;
 border-radius:5px;
 
}
body
{
      background-image:url("wish.png");
    background-size: cover;
    background-repeat: no-repeat;
}

button {
  background-color:#05d7fc ;
   border-radius:5px;
color: white;
  padding: 10px 0px;
  margin: 20px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: blue;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 1px 0px;
  margin: 10px 0px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<header>
          
    
  </header>


<form action="c.php" method="post">
  <div class="imgcontainer">
    
 <div class="container">
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<h5><b><p style="color:black"style="background-color:red"; align="left"; padding>Please enter the otp recieved in your registered mobile number</p></i></h5>

<input type="text" placeholder="Enter OTP" name="Loginotp" required>
  

 <label>
    <center><button type="submit">Submit</button></center>
    
     
    </label>
  </div>

 
</form>

</body>
</html>
