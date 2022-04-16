<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Hello World!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0">

  <div style="display: flex;">

    <!-- (1) insert  data -->  
    <form id="insert" style="margin-right: 3em">
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
    
    <!-- (2) receive data --> 
    <form id="search">
      <h3>Search :)</h3>
      <p>
        this form indicates the photos that have: <br>
        entered `id` or entered `olaviat`!
      </p>
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

  <!-- (3) display photos -->
  <div id="display" style="display:flex;flex-wrap:wrap">
  
    <?php include 'oop/select.php'; ?>

  </div> 


  <!-- script -->
  <script src="js/deletion.js"></script>
  <script src="js/updating.js"></script>
  <script src="js/insert.js"></script>
  <script src="js/search.js"></script>

</body>
</html>
