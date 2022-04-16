<?php

//
include 'oop.php';

//
if (
    $_POST && 
    $_POST['olaviat'] &&
    $_POST['id']
) {

    //
    $query = 'UPDATE `goldoon_tbl` SET `olaviat`=? WHERE id=?';

    $data = array(
    $_POST['olaviat'],
    $_POST['id']
    );

    //
    $digikala = new digikala;
    $digikala -> idu($query ,$data);

} 