<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lightbox/lightbox.min.css">
</head>
<body>
<?php include('inc/banniere.php'); ?>
    <main>
    <h1>Galerie</h1>
    <table>
        <tr>
            <td><figure><a href="img/1280px_København.jpg" data-lightbox="galerie"><img src="img/480px_København.jpg" alt=""></a><figcaption>København</figcaption></figure></td>            
            <td><figure><a href="img/1280px_Christiansborg.jpg" data-lightbox="galerie"><img src="img/480px_Christiansborg.jpg" alt=""></a><figcaption>Christiansborg</figcaption></figure></td></tr>

            <tr><td><figure><a href="img/1280px_frederiksborg-castle.jpg" data-lightbox="galerie"><img src="img/480px_frederiksborg-castle.jpg" alt=""></a><figcaption>Caritasbrønden</figcaption></figure></td> 
            <td><figure><a href="img/1280px_Caritasbrønden.jpg" data-lightbox="galerie"><img src="img/480px_Caritasbrønden.jpg" alt=""></a><figcaption>Caritasbrønden</figcaption></figure></td></tr>

            <tr><td><figure><a href="img/1280px_Magstaede_street.jpg" data-lightbox="galerie"><img src="img/480px_Magstaede_street.jpg" alt=""></a><figcaption>Magstaede Street</figcaption></figure></td>
            <td><figure><a href="img/1280px_sirene.jpg" data-lightbox="galerie"><img src="img/480px_sirene.jpg" alt=""></a><figcaption>Sirene</figcaption></figure></td>
        </tr>
    </table>
    <script src="lightbox/lightbox-plus-jquery.js"></script>
</main>
    
</body>
</html>