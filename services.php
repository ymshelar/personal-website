<?php
    include('sidebar.html');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Services </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="details">
        <h2>Services</h2>
        <p>Our company offer web design and development</p>
      </div>
      <div class="main-box">
        <div class="box box-grey">
          <div class="icon">
            <i class="fas fa-desktop"></i>
          </div>
          <h2>Web Design</h2>
          <hr>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
          <a href="#">Read More</a>
        </div>

        <div class="box box-red">
          <div class="icon">
            <i class="fas fa-globe"></i>
          </div>
          <h2>Web Design</h2>
          <hr>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
          <a href="#" class="white-border">Read More</a>
        </div>
        
        <div class="box box-grey">
          <div class="icon">
            <i class="fas fa-search"></i>
          </div>
          <h2>Web Design</h2>
          <hr>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
          <a href="#">Read More</a>
        </div>

      </div>

    </div>
    
<style type="text/css">
  /* #243238
 #404044
 #D50000
*/


body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.container{
  width:80%;
  margin: 0 auto;
}

.details{
  text-align: center;
}

.details h2{
  color:#243238;
  font-size:50px;
  margin: 0;
}

.main-box{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.box{
  width: 300px;
  height: 400px;
  margin: 10px;
  text-align: center;
  padding: 40px 20px;
  color: #ffffff;
  position: relative;
  z-index: 2;
  border-radius: 5px;

}
.box > * {
  position: relative;
  z-index: 2;
  color: #ffffff;
}

.box::before{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  border: 2px solid rgba(255, 255, 255, 0.5);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}

.box:hover::before{
  width: 95%;
  height: 95%;
  transition: all ease .50s;
}

.box .icon{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: #ffffff;
  text-align: center;
  display: inline-block;
  position: relative;
}

.box .icon .fas{
  color: #404044;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

hr{
  margin-top: 25px;
  margin-bottom: 25px;
  display: block;
  width: 70%;
  border: 1px solid rgba(255,255,255, 0.1);

}

.box a{
  text-decoration: none;
  color: #ffffff;
  text-transform: uppercase;
  background-color:#D50000 ;
  padding: 10px 25px;
  border-radius: 25px;
  margin-top: 25px;
  display: inline-block;
  font-weight: 600 ;
}
.box a:hover{
  background-color:#243238 ;
}

.box .white-border{
  border: 1px solid #ffffff;
}


.box-grey{
  background-color:#404044 ;
}

.box-red{
  background-color:#D50000;
}
</style>

  </body>
</html>