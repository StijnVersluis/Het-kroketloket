<?php
/**
 * Created by PhpStorm.
 * User: stijn versluis
 * Date: 2/12/2019
 * Time: 1:05 PM
 */
$kroketten = [
        "<a class='name' href=''><h2>Rotterdamse kaas kroket</h2> <img class='image_Rotterdamsekaaskroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/9ca4af7788db5a73a493b83aa8e7550a' alt='Rotterdamse kaas kroket'></a>" => 3.00,
    "<a class='name' href=''><h2>Tomaat mozzerella kroket</h2>  <img class='image_Tomaatmozzerellakroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/9ca4af7788db5a73a493b83aa8e7550a' alt='Tomaat mozzerella kroket'></a>" => 3.00,
    "<a class='name' href=''><h2>Truffel paddenstoel kroket</h2> <img class='image_Truffelpaddenstoelkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/5addc294cb5470b2d5bc0655c99d3e17' alt='Truffel paddenstoel kroket'></a>" => 3.25,
    //'Garnalen kroket' . '<img class="image_Garnalenkroket" src="" alt="Garnalen kroket">' => 3.75,
    //'Tonijn kroket' . '<img class="image_Tonijnkroket" src="" alt="Tonijn kroket">' => 3.25,
    "<a class='name' href=''><h2>Rendang kroket</h2><img class='image_Rendangkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/dbdc0cc6b25d540a47b594d8ef38d83d' alt='Rendang kroket'></a>" => 3.25,
    "<a class='name' href=''><h2>Smoor kroket</h2> <img class='image_Smoorkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/594810df532e2bdfeda83735295678d1' alt='Smoor kroket'></a>" => 3.25,
    "<a class='name' href=''><h2>Peking eend kroket</h2> <img class='image_Pekingeendkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/15b05b5c60c24d2ef3d3d8881b8cb154' alt='Peking eend kroket'></a>" => 3.25,
    "<a class='name' href=''><h2>Pittige kip kroket</h2> <img class='image_Pittigekipkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/93d166adfe27f2a83655337f1c3e3079' alt='Pittige kip kroke'></a>" => 3.25,
    "<a class='name' href=''><h2>Rundvlees kroket</h2> <img class='image_Rundvleeskroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/5482e88b8b9198cb9b578ae048431a28' alt='Rundvlees kroket'></a>" => 2.50,
    "<a class='name' href=''><h2>Kroketten proeverij (6 kroketjes)</h2> <img class='image_Krokkettenproeverij' src='https://duyt4h9nfnj50.cloudfront.net/sku/23cdfae05e40275059b7d23439fdf1e2' alt='Kroketten proeverij (6 kroketjes)'></a>" => 6.50,
    "<a class='name' href=''><h2>Kroket van de maand</h2> <img class='image_Kroketvandemaand' src='https://duyt4h9nfnj50.cloudfront.net/sku/d0e402f67e39b0e950291ef5ba33726e' alt='Kroket van de maand'></a>" => 3.25
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
                echo "<div class='item'> <a class='name'><h2>$kroket</h2></a> <p class='price'>$price</p></div>";
            }
            ?>
            <div class="item">
                <p>Bij alle kroketten kunt u een broodje naar keuze kunnen bestellen <span class="bread">(wit of bruin)</span> voor <span class="cost_bread">€0,50</span></p>
            </div>
        </div>
    </div>
</div>
</body></html>