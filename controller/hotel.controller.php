<?php 
    include "../model/hotel.class.php";

    $hotel = new Hotel;

    $hotel->setName($_POST['txtnome']);
    $hotel->setRg($_POST['txtrg']);
    $hotel->setCell($_POST['txttelefone']);
    $hotel->setEmail($_POST['txtemail']);
    $hotel->setDia($_POST['txtdia']);
    $hotel->setReserva($_POST['txtreserva']);

    echo " ".$hotel->__toString();
?>