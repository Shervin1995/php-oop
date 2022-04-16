<?php
 
//
include 'oop.php';

//
if (
    $_POST && 
    $_POST['id']
){

    //
    $data = array($_POST['id']);
    $query = 'DELETE FROM `goldoon_tbl` WHERE id=?';

    //
    $digikala = new digikala;
    $digikala -> idu($query, $data);

}
 
