<?php
/**
 * Created by PhpStorm.
 * User: stijn versluis
 * Date: 2/12/2019
 * Time: 1:05 PM
 */
//"<a class='name' href=''><h2>  "naam kroket"  </h2> <img class='image_naamkroket' src='"afbeelding"' alt='"naam kroket"'></a>" => 3.00
$kroket = [
        "Rotterdamse kaas kroket",
    "Tomaat mozzerella kroket",
    "Truffel paddenstoel kroket",
    "Garnalen kroket",
    "Tonijn kroket",
    "Rendang kroket",
    "Smoor kroket",
    "Peking eend kroket",
    "Pittige kip kroket",
    "Rundvlees kroket",
   "Zuurkool met worst kroket"
];



$kroketten = [
        "<a class='name' href=''><h2>$kroket[0]</h2> <img class='image_Rotterdamsekaaskroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/9ca4af7788db5a73a493b83aa8e7550a' alt='$kroket[0]'></a>" => 3.00,
    "<a class='name' href=''><h2>$kroket[1]</h2>  <img class='image_Tomaatmozzerellakroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/9ca4af7788db5a73a493b83aa8e7550a' alt='$kroket[1]'></a>" => 3.00,
    "<a class='name' href=''><h2>$kroket[2]</h2> <img class='image_Truffelpaddenstoelkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/5addc294cb5470b2d5bc0655c99d3e17' alt='$kroket[2]'></a>" => 3.25,
    //"<a class='name' href=''><h2>$kroket[3]</h2> <img class='image_Garnalenkroket' src='' alt='$kroket[3]'>" => 3.75,
    //"<a class='name' href=''><h2>$kroket[4]</h2> <img class='image_Tonijnkroket' src='' alt='$kroket[4]'>" => 3.25,
    "<a class='name' href=''><h2>$kroket[5]</h2><img class='image_Rendangkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/dbdc0cc6b25d540a47b594d8ef38d83d' alt='$kroket[5]'></a>" => 3.25,
    "<a class='name' href=''><h2>$kroket[6]</h2> <img class='image_Smoorkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/594810df532e2bdfeda83735295678d1' alt='$kroket[6]'></a>" => 3.25,
    "<a class='name' href=''><h2>$kroket[7]</h2> <img class='image_Pekingeendkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/15b05b5c60c24d2ef3d3d8881b8cb154' alt='$kroket[7]'></a>" => 3.25,
    "<a class='name' href=''><h2>$kroket[8]</h2> <img class='image_Pittigekipkroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/93d166adfe27f2a83655337f1c3e3079' alt='$kroket[8]'></a>" => 3.25,
    "<a class='name' href=''><h2>$kroket[9]</h2> <img class='image_Rundvleeskroket' src='https://duyt4h9nfnj50.cloudfront.net/sku/5482e88b8b9198cb9b578ae048431a28' alt='$kroket[9]'></a>" => 2.50,
    "<a class='name' href=''><h2>Kroketten proeverij (6 kroketjes)</h2> <img class='image_Krokkettenproeverij' src='https://duyt4h9nfnj50.cloudfront.net/sku/23cdfae05e40275059b7d23439fdf1e2' alt='Kroketten proeverij (6 kroketjes)'></a>" => 6.50,
    "<a class='name' href=''><h2>Kroket van de maand ($kroket[10])</h2> <img class='image_Kroketvandemaand' src='https://duyt4h9nfnj50.cloudfront.net/sku/d0e402f67e39b0e950291ef5ba33726e' alt='Kroket van de maand'></a>" => 3.25
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
<body class="products">
<div class="header">
    <div class="container">
        <div class="images">
            <div class="image">

            </div>
        </div>
    </div>
</div>

<!-- nav bar -->
<div>
    <div class="container">
        <div class="navigation">

            <div class="nav">
                <img class="logo" src="img/logo_brown.jpg" alt="" id="logo">
                <h1>Het Kroket Loket</h1>
                <a href="index.php">Home</a>
                <a href="Products.php">Producten</a>
                <a href="locations.php">Locaties</a>
                <a href="order.php">Bestellen</a>
                <a href="history.php">Onze Geschiedenis</a>
                <a href="work.php">Werken Bij</a>
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
                echo "<div class='item'> <a class='name'><h2>$kroket</h2></a> <p class='price'><span>€</span>$price</p></div>";
            }
            ?>
            <div class="item bread">
                <p>Bij al onze kroketten kunt u een broodje naar keuze kunnen bestellen <span class="type_bread">(wit of bruin)</span> voor <span class="cost_bread">€0,50</span></p>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>