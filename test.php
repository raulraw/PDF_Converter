<!DOCTYPE html>
<html>
<head>
  <title>XMLtoPDF</title>
</head>
<body>
<center>
  <form action="http://api.pdflayer.com/api/convert?access_key=f183e983ad716c08a7eb1194ee80ae3b" method="POST">
    <center>Baga aici fraiere</center>
    <textarea name="document_html" rows="20" cols="50">
      <?php
        if(isset($_POST['myfile'])){
        echo $_POST['name'];}
      ?>
      </textarea><br>
      <input type="submit" name="myfile">
    </form>
  </center>
</body>
</html>
