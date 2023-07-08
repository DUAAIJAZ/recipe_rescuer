<?php
if (isset($_POST['ingredient'])) {
    $ingredient = urlencode($_POST['ingredient']);

    // Make API request
    $app_id = '69e889fd';
    $app_key = 'd5b9a1ef13096dc3210b31bcab35f72a';
    $url = "https://api.edamam.com/api/recipes/v2?type=public&app_id=$app_id&app_key=$app_key&q=$ingredient";
    $response = file_get_contents($url);
    $recipes = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
    <title>RECIPE RESCUER</title>

    <!-- JavaScript link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts link -->
    <link rel="stylesheet" href="https://fontawesome.com/search?q=FOOD&o=r"/>
    <link rel="stylesheet" href="stylesheet3.css">
    <script>
        $(document).ready(function() {
            $(".dropdown").click(function() {
                $(this).toggleClass("show");
            });
            $(document).click(function(event){
                if (!$(event.target).closest(".dropdown").length) {
                    $(".dropdown").removeClass("show");
                }
            });
        });
    </script>
    <style>
    	body {
            background-image:url("./assets/b1.jpg");
            background-position: center; 
            background-repeat: repeat; 
            background-size: cover; 
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            background: linear-gradient(90deg, #F3C6D1, #E3B4C0, #E77893);
        	padding: 20px;
            box-shadow: 0 0 20px 2px rgba(0, 0, 0, 0.5);
            width: 800px;
            margin-top: 100px;
        }

        h5 {
        	font-family: arial;
        }

        h2{
            font-weight:normal;
            font-size:35px;
            position:relative;
            font-display: center;
            margin: 40px 0px;
            text-align: center;
            color: white;


        }
        h2::before{
            content:'';
            position:absolute;
            width:100px;
            text-align: center;
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
        p {
            font-family: arial;
        }
        form {
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            align-items: center;
        }

        .col-md-8 {
            flex-grow: 1;
        }

        .btn-primary {
            margin-top: 10px;
        }

        .recipe-list {
            margin-top: 20px;
        }

        .card {
            margin-top: 20px;
        }

        .card-body {
            padding: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        ul.list-group {
            margin-bottom: 10px;
        }

        .list-group-item {
            padding: 5px;
        }

        ol {
            margin-bottom: 0;
        }

        li {
            margin-bottom: 5px;
        }
        input[type="text"]{
        	width: 250px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid white;
            color: #fff;
            font-size: 18px;
            margin-bottom: 18px;


        }
        button[type="submit"]{
        	width: 200px;
        	border-radius: 10px;
        	box-sizing: border-box;
        	font-size: 16px;
        	font-family: arial;


        }

    </style>
</head>
<body >


<div class="container">
        <h2>Recipe Rescuer</h2><br><br>

        
        <form method="POST" action="" onsubmit="return validateForm()">
  <input type="text" name="ingredient" id="ingredientInput" placeholder="Enter Ingredients" required>
  <button type="submit">Search</button>
</form>

        <?php
        if (isset($recipes) && isset($recipes['hits']) && !empty($recipes['hits'])) {
            echo '<h3>Recipes:</h3>';
            foreach ($recipes['hits'] as $hit) {
                $recipe = $hit['recipe'];
                echo '<div class="card">';
                echo '<h4 class="card-title">' . htmlentities($recipe['label']) . '</h4>';
                echo '<h5>Ingredients:</h5>';
                echo '<ul>';
                foreach ($recipe['ingredientLines'] as $ingredientLine) {
                    echo '<li>' . htmlentities($ingredientLine) . '</li>';
                }
                echo '</ul>';
                echo '<h5>Instructions:</h5>';
                if (isset($recipe['url'])) {
                    echo '<p><a href="' . htmlentities($recipe['url']) . '" target="_blank">View Instructions</a></p>';
                } else {
                    echo '<p>No instructions available</p>';
                }
                echo '</div>';
            }
        }
        ?>
    </div>

<div>
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

</div>
</div>

</body>
</html>