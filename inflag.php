<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css" type="text/css">
    <title>php flag</title>
    <style>

        
    </style>
</head>
<body>

    <div id="container">
<table>

<!-- bluecolor -->

<div id="blue">
<?php for($i = 0 ; $i < 50; $i++){
$left = rand(1,150); $top = rand(1,100);
echo '<span style="left: ' . $left . 'px; top:'. $top . 'px;" class="star">★<br>★</span>' ; 
}

?>
</div>

<?php for($i = 0; $i < 6; $i++): ?>

<tr id="red">
<td></td>

</tr>
<tr id="white">
 <?php print("<td></td>") ?>

</tr>
<?php endfor;  ?>
</table>

    </div>
</body>
</html>