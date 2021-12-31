<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    .parent {
  background-color: #d1d1d1;
  height: 400px;
  display: flex;
}
h1 {
  margin: 0px;
  font-family: monospace;
}
.box-one {
  width: 35%;
  color: white;
  background-color: #252E3B;
  padding: 50px;
}
.box-two {
  width: 80%;

  color: white;
}
img {
  max-width: 100%;
  height: auto;
  border-radius: 50%;
  border: 3px solid #F0DA50;
}
.image {
    height: 250px;
    width: 250px;
    border-radius: 50%;
    margin-top: 8%;
    margin-left: 27%;
}
.color-secondary, a {
  color: #F0DA50;
  text-decoration: none;
}
.contact-link {
  padding: 10px 30px;
  background: #d1d1d1;
  border-radius: 5px;
  font-family: monospace;
  font-weight: 700;
  font-size: 18px;
  color: #000000;
}
    </style>
</head>
<body>
<div class="parent">
  <div class="box-one">
    <h1>
   
   Disease Name:<br>
      <span class="color-secondary">{{$fetch->name}}
      </span>
      <br />
     
    
    </h1>
   
  <div class="box-two">
    
  </div>
</div>
</body>
</html>