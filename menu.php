
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
       
        

        
    </script>
    <style>
        .topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #2196F3;
  color: white;
}
/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position:initial;
  padding-top:0%;
  right: 0;
  bottom: 0;
  min-width: 50%;
  min-height: 100%;
  
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 50%;
  padding: 10px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
 
body{
            padding: 0%;
            margin: 0%;
            background-color: aliceblue;
            
        }
        .slider-frame{
            overflow: hidden;
            height: 800px;
            width: 3600px;
            margin-left: 360px;
            margin-top: 20px;
            
        }
        /*----------slide animation--------*/
        @-webkit-keyframes slide_animation{
            0%{left: 0px;}
            10%{left:0px}
            20%{left: 1200px;}
            30%{left: 1200px;}
            40%{left: 2400px;}
            50%{left: 2400px;}
            60%{left: 1200px;}
            70%{left: 1200px;}
            80%{left: 0px;}
            90%{left: 0px;}
            100%{left:0px;}

        }
        .slider-image{
            width: 3600px;
            height: 800px;
            margin: 0 0 0 -2400px;
            position: relative;
            -webkit-animation-name: slide_animation;
            -webkit-animation-duration: 25s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -webkit-animation-play-state: running;
        }

        .img-container{
            height: 800px;
            width: 1200px;
            position: relative;
            float: left;
            transition: 1s;
        }

        
        .column {

             float: left;
            border-radius: 50%;
            width: 33.33%;
             padding: 5px;
            }

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.row {
  display: flex;
}

.column1{
  flex: 33.33%;
  border-radius: 50px;
  padding: 5px;
}
.d1 {
    flex: 33.33%;
    height: 500px;
    width: 300px;
  border-radius: 20%;
  padding: 5px;
  float: left;
  transition: 0.5s all ease-in-out;
}
.d1 image{
  width: 30%;
  transition: 0.5s all ease-in-out;
}
.d1:hover img {
        transform: scale(0.5);
}
.container{
            max-width: 1400px;
            margin: auto;
            overflow: auto;
        }
        .gallery{
            margin: 5px;
            border: solid 1px orchid ;
            float: left;
            width: 290px;
            transition: 1s;

        }
        .gallery img{
            width: 100%;
            height: auto;
        }
        .desc{
            padding: 15px;
            text-align: center;
        }
        .gallery img{
            display: block;
            width: 100%;
            border-radius: 5px;
        }
        .gallery:hover{
            transform:scale(1.2);
            z-index: 2;
        }

        .container1{
            border-style: solid;
            border-radius: 20px;
            width: 500px;
            height: 350px;
            padding-top: 10px;
            text-align: center;
            background-repeat: no-repeat;
            background-size: 500px;
            background-image: url( "log.jpj.jpg");
        }
        #usrname{
            border-radius: 20px;
            border-style: solid;
        }
        #psw{
            border-radius: 20px;
            border-style: solid;
        }
        #sub{
            border-radius: 20px;
            border-style: solid;
            width: 80px;
            height: 30px;
        }
        #psw1{
            text-align: left;
            margin-right: 50px;
            border-radius: 20px;
            border-style: solid;

        }
        #male1{
            margin-right: 40px;
             
             
        }
        .para{
          text-align: center;
          font-style: italic;
          background-image: url("mahal1.jpg");
        }
         
         
 
         

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDIA TOURISM!</title>
</head>
<body>
  
    <div class="topnav">
        <a class="active" href="menu.html">Home</a>
        <a href="About.php">About</a>
        <a href="login.php">Login</a>
        <a href="Guideline.php">Guideline</a>
        <a href="Clipvideo.php">Clip Video</a>
        <input type="text" placeholder="Search..">
      </div>
      
      <h1 style="text-align: center;"> INDIA TOURISM!</h1>
      <div class="para"> 
    
      <p> The Tourism and Hospitality industry is one of the largest service industries in India. ... 
        India offers geographical diversity, world heritage sites and niche tourism products like cruises,
         adventure, medical, eco-tourism, etc.
         The main reason why India is famous for tourism means all type of tourist destinations in one place. 
         India is the right place for wild safaris, desert safaris, nature seeking places, honeymoon spot,
          adventurous activities, spiritual places, and historical places of India.
        
        </p>
      <!-- Optional: some overlay text to describe the signup -->


      <div class="container1">
        <h1 id="p1">Please Register Here</h1>
        <form action="/action_page.php">
          <label for="usrname">Username</label>
          <input type="text" id="usrname" name="usrname" required>
          <br>
           <br>
      
          <label for="psw">Password</label>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <br>
      <br>
      
      <label for="psw">Conform Password</label>
      <input type="password" id="psw1" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <br>
      <br>
      <label for="male" id="male1">Gender</label>
          <input type="radio" value="r1" required name="radio1" checked>Male
          <input type="radio" value="r2" name="radio1" required>Female
          <br>
          <br>
          <input type="checkbox" required>Check all the given information is true
          <br>
          <br>
          <a href="menu.php" aria-required="false"></a><input type="submit" id="sub" value="Submit" name="submit"></a>
          <br>
          <br>
          &nbsp;&nbsp;&nbsp;
          <a href="login.html" aria-required="false">Signup</a><label for="signup" id="sign"></label></a>
          &nbsp;&nbsp;&nbsp;
          <label for="already " id="already">Already a User</label>
          </form></div>
      </div>

      <video autoplay muted loop id="myVideo">
        <source src="lake.mp4.mp4" type="video/mp4">
      </video>
      <centre><h1 style="text-align: center;">Most Recently Visit  By Tourist World</h1></centre>
     
      <div class="container">
        <div class="gallery">
            <img src="tamil2.jpg">
            <div class="desc">Sri Subramanya Swami Temple</div>
        </div>
        <div class="gallery">
            <img src="tamil9.jpg">
            <div class="desc">Shri Mahavir Ji Temple</div>
        </div>
        <div class="gallery">
            <img src="ask.jpg" >
            <div class="desc">akshardham temple</div>
        </div>
        <div class="gallery">
            <img src="jaganath-temple.webp">
            <div class="desc">Jaganath Temple</div>
        </div>
        <div class="gallery">
            <img src="golden2.jfif">
            <div class="desc">Golden Temple</div>
        </div>
        <div class="gallery">
            <img src="statue1.JPG">
            <div class="desc">Statue of Unity</div>
        </div>
        <div class="gallery">
            <img src="taj2.jpg">
            <div class="desc">Tajmahal</div>
        </div>
        <div class="gallery">
            <img src="ked.jpg">
            <div class="desc">Kedarnath</div>
        </div>
    </div>
      
          

       
      <div class="slider-frame">
        <div class="slider-image">
            <div class="img-container">
                <img src="slider5.jpj.jpg">
            </div>
            <div class="img-container">
                <img src="slider2.jpj.jpg">
            </div>
            <div class="img-container">
                <img src="slider3.jpj.jpg">
            </div>
            <div class="img-container">
              <img src="slider4.jpj.jpg">
            </div>
            <div class="img-container">
              <img src="slider5.jpj.jpg">
            </div>
        </div>
    </div>
      <!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="swan.mp4.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">
  <h1>Welcome to Tourism in India</h1>
  <p>You are in right track....</p>
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="myBtn" onclick="myFunction()">Know more</button>
</div>

    <centre><h1 style="text-align: center;">Famous Tourist World</h1></centre>
    <div class="row">
        <div class="column1">
          <img src="kerla4.jpj.jpg" alt="Snow" style="width:100%">
          <h1 style="text-align: center;"><div class="text">Goa</div></h1>
        </div>
        <div class="column">
          <img src="kerla7.jpj.jpg" alt="Forest" style="width:100%">
         <h1 style="text-align: center;"> <div class="text">Kerla</div></h1>
        </div>
        <div class="column">
          <img src="kerla2.jpj.jpg"  alt="Mountains" style="width:100%">
          <h1 style="text-align: center;"><div class="text">Jammu</div></h1>
        </div>
        <div class="column">
          <img src="chennai.jpj.jpeg"  alt="Mountains" style="width:100%">
         <h1 style="text-align: center;"> <div class="text">Chennai</div></h1>
        </div>
      </div>
    
     
   
</body>
</html>