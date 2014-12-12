<!DOCTYPE html>
<html>
<head>
    <title>Form data</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="name" placeholder="Name.." ><br>
<input type="text" name="age" placeholder="Age.." ><br>
<input type="radio" name="gender" value="male">
<label for="female">Male</label><br>
<input type="radio" name="female" value="female">
<label for="male">Female</label><br>
<input type="submit" value="Submit">
</form>
<?php
if (isset($_POST['name'])) {
    echo 'My name is '.$_POST['name'].'.'.' I am '.$_POST['age'].' old. '.'I am '.$_POST['gender'].'.';
}
?>
</body>
</html>
<?php
