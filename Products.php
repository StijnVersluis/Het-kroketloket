<?php
/**
 * Created by PhpStorm.
 * User: stijn versluis
 * Date: 2/12/2019
 * Time: 1:05 PM
 */
$kroketten = [
        'Rotterdamse kaas kroket' . '<img src="img/" alt="Rotterdamse kaas kroket">' => 3.00,
    'Tomaat mozzerella kroket' . '<img src="" alt="Tomaat mozzerella kroket">' => 3.00,
    'Truffel paddenstoel kroket' . '<img src="" alt="Truffel paddenstoel kroket">' => 3.25,
    'Garnalen kroket' . '<img src="" alt="Garnalen kroket">' => 3.75,
    'Tonijn kroket' . '<img src="" alt="Tonijn kroket">' => 3.25,
    'Rendang kroket' . '<img src="" alt="Rendang kroket">' => 3.25,
    'Smoor kroket' . '<img src="" alt="Smoor kroket">' => 3.25,
    'Peking eend kroket' . '<img src="" alt="Peking eend kroket">' => 3.25,
    'Pittige kip kroket' . '<img src="" alt="Pittige kip kroke">' => 3.25,
    'Rundvlees kroket' . '<img src="" alt="Rundvlees kroket">' => 2.50,
    'Kroketten proeverij (6 kroketjes)' . '<img src="" alt="Kroketten proeverij (6 kroketjes)">' => 6.50,
    'Kroket van de maand' . '<img src="" alt="Kroket van de maand">' => 3.25,
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Het Kroket Loket</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="images">
            <div class="image">

            </div>
        </div>
        <!-- <div class="contacts">
          <div class="contact">
            <img class="num" src="img/phone_icon.png">
            <p>+31 76 573 34 44</p>
          </div>
          <div class="contact">
            <img class="mail" src="img/mail_icon.png">
            <p>radiuscollege@rocwb.nl</p>
          </div>
        </div> -->
    </div>
</div>

<!-- nav bar -->
<div>
    <div class="container">
        <div class="navigation">

            <div class="nav">
                <h1>Het Kroket Loket</h1>
                <a href="index.php">Home</a>
                <a href="Products.php">Producten</a>
                <a href="locations.php">Locaties</a>
                <a href="order.php">Bestellen</a>
                <a href="history.php">Onze Geschiedenis</a>
                <div class="image">
                    <a href="https://www.facebook.com/hetkroketloket/" target="blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/explore/locations/168811490255752/het-kroket-loket/" target="blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <input class="sign_in" type="button" value="Sign In">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="items">
            <h3></h3>
            <?php
            foreach ($kroketten as $kroket => $price) {
                $price = number_format($price, 2);
                echo "<div class='item'> <a class='name'>$kroket</a> <p class='price'>$price</p></div>";
            }
            ?>
            <div class="item">
                <p>Bij alle kroketten kunt u een broodje naar keuze kunnen bestellen <span class="bread">(wit of bruin)</span> voor <span class="cost_bread">€0,50</span></p>
            </div>
        </div>
    </div>
</div>
</body></html>