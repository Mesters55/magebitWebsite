<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>

    <img src="photos/image_summer.png" alt="background">

    <!-- Header and it's navbar-->
    <header>
        <img class = "pinaple" src = "photos/Union.png" atl = " "><a href="#" class="nosaukums">pineapple.</a>
        <nav class="navbar">
                <a class = "about" href="#">About</a>
                <a class = "how" href="#">How it works</a>
                <a class = "contact" href="#">Contact</a>
        </nav>
    </header>
   

        <!-- Text for Subscribing to the newsletter-->
       <div id = "sub" class = "subscribe">
           <h1>Subscribe to newsletter</h1>
                <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
       </div>

      <div id = "thanks" class = "subscribed">
                <img class = "success" src = "photos/ic_success.png" atl = " ">
                <h1>Thanks for subscribing!</h1>
                <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
       </div>
       

       <!-- Box Container for the input of email-->
       <form action="" method="post">
                <input id ="ievadesLauks" name="Ievade" type="text" maxlength="100" value = "Type your email address here..." onfocus="this.value='';"/>
                <input id = "poga" type = "button"  onclick = "hideElements()"  name = "emailSubmit" value = "."/>
                <div id = "line" class = "line"></div>
       </form>
            
        <!-- Checkmark and terms of service -->
        <div id = "sub1" class = "terms">
            <p>I agree to <a href = "#">terms of service</a></p>
        </div>

        <label id = "sub2" class="container">
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
        </label>


       <div class = "hline"></div>

       <!-- footer -->
        <div class = "footer">
            <a class="fac" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="ins" href="#"><i class="fab fa-instagram"></i></a>
            <a class="twi" href="#"><i class="fab fa-twitter"></i></a>
            <a class="you" href="#"><i class="fab fa-youtube"></i></a>
        </div>
       

      


       

    
</body>
</html>