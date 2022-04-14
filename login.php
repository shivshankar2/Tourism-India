<!DOCTYPE html>
<html lang="en">
<head>
    <script>
         
   

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<>, initial-scale=1.0">
    <title>Tourism India</title>
    <style>
        .container{
            border-style: solid;
            border-radius: 20px;
            width: 500px;
            height: 450px;
            padding-top: 140px;
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
         
    </style>
</head>
<body background="mahal1.jpg">

     
    <div class="container">
        <h1 id="p1">Please Login To Visit This Page</h1>
        <form action="/action_page.php">
          <label for="usrname">Username</label>
          <input type="text" id="usrname" name="usrname" required>
          <br>
           <br>
      
          <label for="psw">Password</label>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <br>
      <br>
      <a href="#home.php"><input type="submit" id="sub" value="Submit" name="submit"></a>
          <br>
          <br>
           <label for="signup" id="sign">Signup</label></a>
          &nbsp;&nbsp;&nbsp;
          <label for="already " id="already">Already a User</label>
          

        </form>
      </div>
      
       
         
</body>
</html>