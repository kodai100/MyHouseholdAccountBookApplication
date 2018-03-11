<?php 
     $item = htmlspecialchars($_POST['item'], ENT_QUOTES);
     $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
     $person = htmlspecialchars($_POST['person'], ENT_QUOTES);
     $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
     $price = htmlspecialchars($_POST['price'], ENT_QUOTES);
?>

<body>

<?php echo $item; ?>
<br>
<?php echo $date; ?>
<br>
<?php echo $person; ?>
<br>
<?php echo $name; ?>
<br>
<?php echo $price; ?>

</body>