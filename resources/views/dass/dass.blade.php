<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}
body {
background-image: url(https://keretaperang.files.wordpress.com/2015/02/brbs-e.jpg);
background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
  font-family: 'Roboto', sans-serif;
}
.sidebar {
  position: fixed;
  width: 230px;
  height: 95%;
  background: #042331;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 22px;
  color: white;
  line-height: 60px;
  text-align: center;
  background: #063146;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 90%;
  width: 90%;
  line-height: 60px;
  font-size: 17px;
  color: white;
  padding-left: 30px;
  box-sizing: border-box;
  border-bottom: 1px solid black;
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 10px;
}
#check{
  display: none;
}

    </style>
</head>
<body>
    <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
     
    <div class="sidebar">
    <header>My App</header>
    <ul>
     <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
     <li><a href="#"><i class="fas fa-link"></i>Buku</a></li>
     <li><a href="#"><i class="fas fa-stream"></i></a></li>
     <li><a href="#"><i class="fas fa-calendar-week"></i></a></li>
     <li><a href="#"><i class="far fa-question-circle"></i></a></li>
     <li><a href="#"><i class="fas fa-sliders-h"></i></a></li>
     <li><a href="#"><i class="far fa-envelope"></i></a></li>
    </ul>
   </div>
   <section></section>
  </body>
</html>
</body>
</html>