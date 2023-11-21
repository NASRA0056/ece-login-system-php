<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: left;
        }
        .myDiv {
            border: 5px outset red;
            background-color: lightblue;    
            text-align:left;
        }
        h1, h2, p {
            text-align: left;
        }

        section {
            margin-bottom: 20px;
        }

        ul, ol {
            margin-left: 20px;
        }



    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
     
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>


    <div>
    <section id="recipe-header">
        <h1>Pilau Recipe</h1>
    </section>

    <section id="ingredients">
        <h2>Ingredients:</h2>
        <div class="myDiv">
        <ul>
            <li>2 cups basmati rice</li>
            <li>1/4 cup vegetable oil</li>
            <li>1 large onion, finely chopped</li>
            <li>2 cloves garlic, minced</li>
            <li>1 teaspoon cumin seeds</li>
            <li>1 teaspoon ground coriander</li>
            <li>1/2 teaspoon turmeric</li>
            <li>Salt and pepper to taste</li>
            <li>4 cups chicken or vegetable broth</li>
        </ul>
        </div>
    </section>

    <section id="instructions">
        <h2>Instructions:</h2>
        <div class="myDiv">
        <ol>
            <li>Rinse the rice under cold water until the water runs clear.</li>
            <li>In a large pot, heat the vegetable oil over medium heat.</li>
            <li>Add the chopped onion and sauté until golden brown.</li>
            <li>Add the minced garlic, cumin seeds, ground coriander, and turmeric. Sauté for another 2 minutes.</li>
            <li>Add the rinsed rice to the pot and stir to coat the rice with the spices.</li>
            <li>Season with salt and pepper to taste.</li>
            <li>Pour in the chicken or vegetable broth and bring to a boil.</li>
            <li>Reduce heat to low, cover, and simmer for 15-20 minutes or until the rice is cooked and the liquid is absorbed.</li>
            <li>Fluff the rice with a fork and let it rest for a few minutes before serving.</li>
        </ol>
        </div>
    </section>
    <img src="img/pilau.jpeg" alt="pilau image">

    <section id="enjoy">
        <h2>Enjoy your delicious Pilau!</h2>
        <p>Serve hot and savor the flavors.</p>
    </section>



    </div>
</body>
</html>