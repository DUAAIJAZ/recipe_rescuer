<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="stylesheet2.css">
<style>
    *{
margin: 0px;
padding:0;
box-sizing:border-box;
font-family:sans-serif;
}

input{
display:none;
}
.galleryyy{

text-align:center;
width:100%;

}
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
background-color: red;
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
.top-content{

background-color: rgb(243 , 243,243);
width:90%;
margin:0 auto 20px auto;
height:60px;
display: flex ;
align-item:center;
border-radius:5px;
box-shadow:3px 3px 5px lightgrey;
}
h3{
height:100%;
background-color:rgb(221,221,221);
line-height:60px;
padding: 0 50px;
color:black;



}
label{
display:inline-block;
height:100%;
margin:0 20px;
line-height: 60px;
font-size:18px;
color:black;
cursor:pointer;
transition: .5s;

}
label:hover{
color: RED;
}
.photogallery{
width:90%;
margin:auto;
display:grid;
grid-template-columns: repeat(4 ,1fr);
grid-gap:20px;

}
.pic{

position:relative;
height:230px;
border-radius:10px;
box-shadow: 3px 3px 5px lightgray;
cursor:pointer;
transition:.5s;

}
.pic img{

width:100%;
height:100%;
border-radius:10px;
transition: .5s;


}
.pic::before{
content:"Food Gallery";
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
color:white;
font-size:20px;
font-weight:bold;
width:100%;
margin-top: -100px;
opacity: 0;
transition:.3s;
transition-delay:.2s;

}
.pic:after{
content:"";
position:absolute;
width:100%;
bottom:0;
left:0;
border-radius:10px;
height:100%;
background-color:rgba(0,0,0,.4);
transition:.3s;
opacity: 100;
}
.pic:hover::after{
height:100%;
}
.pic:hover::before{
margin-top:0;
opacity:150px;


}
#check1:checked ~ .galleryyy .photogallery .pic{

opacity:1;
transform:scale(1);
position:relative;
transition:.5s;
}
</style>
</head>
<body style="background-image: url(./assets/b2.jpg);
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;">


<input type="radio" name="Photo" id="check1" checked>
<input type="radio" name="Photo" id="check2" >
<input type="radio" name="Photo" id="check3" >
<input type="radio" name="Photo" id="check4" >

<div class="galleryyy">
<h1 style="color: whitesmoke;"><br><br><br><br>Cuisine Gallery</h1>

<div class ="top-content">
<h3>Cuisine Gallery</h3>
<label for="check1">All Photo</label>


</div>
<div class="photogallery">

<!--concert-->

    <div class="pic">
    <img src="food1.JPEG" alt="food" >
</div>
        <div class="pic">
    <img src="food2.jpg" alt="food" >
</div>

   
    <div class="pic">
    <img src="food3.jpg" alt="food">
</div>
    <div class="pic">
    <img src="food4.jpg" alt="food">
</div>
    <div class="pic">
    <img src="food5.jpg" alt="food" >
</div>
    <div class="pic ">
    <img src="food6.jpg" alt="food">
</div>
    <div class="pic ">
    <img src="food7.jpg" alt="food">
</div>
    <div class="pic ">
    <img src="food8.jpg" alt="food">
</div>
   
    <div class="pic ">
    <img src="food9.jpg" alt="food">
</div>   

<div class="pic">
    <img src="food10.jpg" >
</div>
    <div class="pic">
    <img src="food11.jpg" >
</div>
    <div class="pic">
    <img src="food12.jpg" >
</div>
    
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

<section></section>
</body>
</HTML>
   