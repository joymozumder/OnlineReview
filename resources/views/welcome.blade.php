<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
<div class="container">

  <a href="#"><button class="btn btn3">Login</button></a>
  <a href='#'><button class="btn btn2">User Registration</button></a>
  <a href='#'><button class="btn btn3">Add Organization</button></a>
</div>
<style type="text/css">
  .body{
  margin: 0;
  padding: 0;
}
.container{
  text-align: center;
  margin-top: 360px;
}
.header
{
   background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(giphy.gif);
   height:100vh;
   background-size: cover;
   background-position: center; 
}

.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #3498db;
}
.btn3,.btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color: #fff;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}

</style>
  </body>
</html>
