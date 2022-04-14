<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            text-align: center;
            font-size: 20px;
            font-style: italic;
            background-color: cadetblue;

        }
        /* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
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
.asd{
  text-align: center;
}
 
 

 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Please select one</p>
    <div class="dropdown">
        <button class="dropbtn">Guideline</button>
        <div class="dropdown-content">
          <a href="Guideline.html">Food</a>
          <a href="Weather.php">Weather Information</a>
          <a href="#">Culture</a>
        </div>
      </div>
      <p>
          There are some General instruction before going to visit any where. <br>
          You should Know about the weather , food or culture of that place.

      </p>
      <br>
      <p>Some famous food of North India</p>
      <li>Chole Bhature</li> 
        <li> Chicken Dum Biryani</li>
        <li> Aloo Samosa</li>
        <li> Butter Chicken</li>
        <li> Shahi paneer</li>
        <li> Rajma</li>
        <li> Rogan josh</li>
      
      <div class="row">
        <div class="column1">
          <img src="dish1.jpg" alt="Snow" style="width:100%; border-radius: 20%;">
          <div class="text"></div>
        </div>
        <div class="column">
          <img src="dish2.jpg" alt="Forest" style="width:100%;border-radius: 20%;">
          <div class="text"></div>
        </div>
        <div class="column">
          <img src="dish3.jpg"  alt="Mountains" style="width:100%;border-radius: 20%;">
          <div class="text"></div>
    </div>
    </div>
          <br>
          <p class="asd">Some famous food of South India</p>
        <li> Masala dosae</li> 
        <li> Chicken 65</li>
        <li> Sambar</li>
        <li> Pulihora</li>
        <li> Upmar</li>
        <li> Hyderabadi biryani</li>
        <li> Idli</li>
       <div class="f1">
         <img src="south1.jpg" style="width: 40%; height: 50%; border-radius: 20%; padding: 10px;">
         <img src="south2.jpg" style="width: 40%; height: 50%; border-radius: 20%;">
      
        
       </div>

       <p class="asd">Some famous food of East India</p>
       <tr>
       <th>Momos</th> <br>
        <th>Rasgulla</th><br>
        <th>Assamese Fish Curry</th><br>
        <th>Rasmalai</th><br>
        <th>Litti Chokha</th><br>
        <th>Kheer</th><br>
        <th>Jalfrezi</th>
      </tr>
      <div class="east">
        <img src="east3.jpg" style="width: 40%; height: 50%; border-radius: 20%; padding: 10px;">
        <img src="east4.jpg" style="width: 40%; height: 50%; border-radius: 20%; padding: 10px;">
      </div>
       
      </div>
      <p class="asd">Some famous food of West India</p>
      <tr>
      <th>Dhokla</th> <br>
       <th>Bebinca.</th><br>
       <th>Bombay Duck</th><br>
       <th>Goan Fish Curry</th><br>
       <th>Bhelpuri</th><br>
       <th>Pav bhaji</th><br>
       <th>Chana masala</th>
     </tr>
     <div class="east">
      <img src="west1.jpg" style="width: 40%; height: 50%; border-radius: 20%; padding: 10px;">
      <img src="west2.jpg" style="width: 40%; height: 50%; border-radius: 20%; padding: 10px;">
    </div>
       

</body>
</html>