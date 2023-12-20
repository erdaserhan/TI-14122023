<?php

if(isset($_GET['p'])){
    switch($_GET['p']){
        
        case 'form':
            include('../templates/contact.php');
            break;
        case 'cult':
            include('../templates/culture.php');
            break;
        case 'gal':
            include('../templates/galerie.php');
            break;
        case 'geo':
            include('../templates/geographie.php');
            break;
        case 'hist':
            include('../templates/histoire.php');
            break;
        case 'link':
            include('../templates/liens.php');
            break;
        default:
            include('../templates/page-404.php');
    }
}else{
    include('../templates/accueil.php');
}
