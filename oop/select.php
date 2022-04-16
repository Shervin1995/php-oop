<?php

//
include 'oop.php';

//
if (
    $_GET && 
    ($_GET['id'] || $_GET['olaviat'])
) {

    //
    $data = array(
        $_GET['id'],
        $_GET['olaviat']
    );

    $query = 'SELECT * FROM goldoon_tbl where id=? or olaviat=?';
    
    //
    $digikala = new digikala();
    $idudata = $digikala -> idu($query, $data);

    //
    for ($i=0; $i < count($idudata); $i++) { 

?>

    <div style="padding:1em; margin:1em; border: solid 1px lightgray">
        <h2>id: <?php echo $idudata[$i]['id']; ?> </h2> 
        <h4>olaviat: <?php echo $idudata[$i]['olaviat']; ?> </h4>
        <img width='150px' src="<?php echo $idudata[$i]['img']; ?>">
    </div>

<?php 

    }
    // for

    // else
} else {

    //
    $data = '';
    $query = 'SELECT * FROM goldoon_tbl order by olaviat DESC';

    //
    $digikala = new digikala();
    $idudata = $digikala -> idu($query, $data); 

    // for
    for ($i=0; $i < count($idudata); $i++) { 
    
?>

<div style="padding:1em;margin:1em;border: solid 1px lightgray">
          
    <h2>
        id: <?php echo $idudata[$i]['id']; ?> 
    </h2>
    <h4 style="margin:0;">
        olaviat: <?php echo $idudata[$i]['olaviat']; ?> 
    </h4>

    <!-- update -->
    <form onsubmit="updating(event)" style="margin-bottom: 1em;">
    <input type="text" name="id" value=<?php echo $idudata[$i]['id']; ?> hidden>
    <input type="text" name="olaviat" >
    <input type="submit" value="update">
    </form>
    
    <!-- delete -->
    <form onsubmit="deletion(event)">
    <input type="text" name="id" value=<?php echo $idudata[$i]['id']; ?> hidden>
    <input type="submit" value="DELETE">
    </form>

    <br>
    <img width='150px' src="<?php echo $idudata[$i]['img']; ?>">

</div>

<?php

    }
    // for

}
// else

?>