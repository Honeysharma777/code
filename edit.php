<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
    <?php
    foreach($arr as $key)
    {
        ?>
    <div class="conatiner">
    <input type="hidden" name="id" value="<?=$key['id'];?>">

<input type="text" name="name" value="<?=$key['name'];?>">
<input type="text" name="email" value="<?=$key['email'];?>">
<input type="text" name="phone"value=" <?=$key['phone'];?>">
<input type="submit" name="submit" value="submit">
</div>
<?php
    }
?>
</form>
</body>
</html>