<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Veuillez saisir votre nom :</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Preluați numele și il stocați într-o variabilă locală
$name = $_POST['name'];
echo "<h3> Salut $name </h3>";
?>
</body>
</html>