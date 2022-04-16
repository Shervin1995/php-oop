<?php

//
include 'oop.php';

//
if (
    $_POST && 
    $_POST['img']
) {

    //
    $query = "INSERT INTO goldoon_tbl (img, olaviat) VALUES (?, ?)";

    $data = array(
    $_POST['img'],
    $_POST['olaviat']
    );


    //
    $digikala = new digikala();
    $digikala -> idu($query, $data);

}

    