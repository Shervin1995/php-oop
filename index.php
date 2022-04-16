<?php include 'oop.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello World!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body style="margin:0">
    <div style="text-align:center;background: rgba(100,100,100,.1)">
      <h1 style="margin:0">PHP RESTFUL API</h1>
      <P style="margin:0">made by shervin </P>
      <p style="margin:0;color: gray;font-size: 14px">12:09 AM - 2020-November-13 - Friday</p>
    </div>
    <!--  ----------------------------------------------------->
    <!-- update  olaviat -->
    <!--  ----------------------------------------------------->
    <?php
    if ($_POST['olaviat']) {
      $data = array($_POST['olaviat'],$_POST['id']);
      $digikala = new digikala;
      $digikala -> idu('UPDATE `goldoon_tbl` SET `olaviat`=? WHERE id=?',$data);
    }else{
    ?>
    <!--  ----------------------------------------------------->
    <!-- Delete  data -->
    <!--  ----------------------------------------------------->
    <?php
    if ($_POST['id']){
      $data = array($_POST['id']);
      $digikala = new digikala;
      $digikala -> idu('DELETE FROM `goldoon_tbl` WHERE id=?',$data);
    }}
    ?>
    <!--  ----------------------------------------------------->
    <!-- insert  data -->
    <!--  ----------------------------------------------------->
    <div style="display: flex;">
    <form action="index.php" method="post" style="margin-right: 3em">
      <h3>Insert :)</h3>
      <table>
        <tr>
          <td>img url: </td>
          <td><input type="text" name="img"></td>
        </tr>
        <tr>
          <td>olaviat: </td>
          <td><input type="text" name="olaviat"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="insert"></td>
        </tr>
      </table>
    </form>
    <?php
    if ($_POST['img']) {
      $data = array($_POST['img'],$_POST['olaviat']);
      $query = "INSERT INTO goldoon_tbl (img, olaviat) VALUES (?, ?)";
      $digikala = new digikala();
      $digikala -> idu($query,$data);
    }
    ?>
  <!--  ----------------------------------------------------->
  <!-- receive data -->
  <!--  ----------------------------------------------------->
    <form action="index.php" method="get">
      <h3>Search :)</h3>
      <p>this form indicates the photos that have: <br>entered `id` or entered `olaviat`!</p>
      <table>
        <tr>
          <td>id: </td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td>olaviat: </td>
          <td><input type="text" name="olaviat"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="search"></td>
        </tr>
      </table>
    </form>
  </div>

  <hr>
    <!--  ----------------------------------------------------->
    <!-- display photos -->
    <!--  ----------------------------------------------------->
    <div style="display:flex;flex-wrap:wrap">
    <?php
    if ($_GET) {
      $query = 'SELECT * FROM goldoon_tbl where id=? or olaviat=?';
      $data = array($_GET['id'],$_GET['olaviat']);
      $digikala = new digikala();
      $idudata = $digikala -> idu($query, $data);

      for ($i=0; $i < count($idudata); $i++) { ?>
        <div style="padding:1em;margin:1em;border: solid 1px lightgray">
          <h2>id: <?php echo $idudata[$i]['id']; ?> </h2>
          <h4>olaviat: <?php echo $idudata[$i]['olaviat']; ?> </h4>
          <img width='150px' src="<?php echo $idudata[$i]['img']; ?>">
        </div>
    <?php }
    }else{
      $digikala = new digikala();
      $idudata = $digikala -> idu('SELECT * FROM goldoon_tbl order by olaviat DESC',''); 
      for ($i=0; $i < count($idudata); $i++) { ?>
        <div style="padding:1em;margin:1em;border: solid 1px lightgray">
          <h2>id: <?php echo $idudata[$i]['id']; ?> </h2>
          <h4 style="margin:0;">olaviat: <?php echo $idudata[$i]['olaviat']; ?> </h4>
          <form action="index.php" method="post" style="margin-bottom: 1em;">
            <input type="text" name="id" value=<?php echo $idudata[$i]['id']; ?> hidden>
            <input type="text" name="olaviat" >
            <input type="submit" value="update">
          </form>
          <form action="index.php" method="post">
            <input type="text" name="id" value=<?php echo $idudata[$i]['id']; ?> hidden>
            <input type="submit" value="DELETE">
          </form>

          <br>
          <img width='150px' src="<?php echo $idudata[$i]['img']; ?>">
        </div>
    <?php }
    }
      ?>
    </div><!-- display photos -->





  </body>
</html>
