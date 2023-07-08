<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<style type="text/css">
    h1{

font-weight:normal;
font-size:35px;
position:relative;
margin: 40px 0px;

}

h1::before{
content:'';
position:absolute;
width:100px;
height:3px;
background-color: burlywood;
bottom: -10px;
left:50%;
transform: translateX(-50%);
animation: animate 4s linear infinite;
}
@keyframes animate{

0%{
width:100px;
}
50%{
width:200px;
}
100%{
width:100px;
}
}
</style>
<body style="background-image: url(a1.png);">
    <div class="contact-form"><br>
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter Your Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Your Email"> <br>
           <input type="text" name="no"  class="form-control" placeholder="Enter Phone no"> <br>
           <input type="text" name="fb"  class="form-control" placeholder="Enter Your FeedBack"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>


    <nav>
<div class="logo">RESCIPE RESCUER</div>
<ul>
<li><a href="home.php" class="active">HOME</a></li>
<li><a href="recipe.php">RECIPE FINDER</a></li>
<li><a href="GALLERY.php">GALLERY</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="logout.php">LOGOUT</a></li>


</ul>
</nav>

</body>
</html>