<html>
<head>
<title>Hello Welcome</title>
</head>

<body>
<?php print "Hello,¡“V¥".date("F j, Y, g:i a")."<br>";
?>
<form action="recievedata.php" method="post">
Username
<input type="text" name="name"><br>
Sex
<input type ="radio" name="Sex" value="Male" checked>Male>
<input type ="radio" name="Sex" value="Female" >Female><br>
Interest
<br>
<input type="checkbox" name="PC" value="PC">PC<br>
<input type="checkbox" name="Movie" value="Movie">Movie<br>
<input type="checkbox" name="Sports" value="Sports">Sports<br>
<input type="checkbox" name="Travle" value="Travle">Travle<br>
Favorate Color<br>
<select name="color">
    <option value="white" selected>White</option>
    <option value="black">Black</option>
    <option value="red">Red</option>
    <option value="green">Green</option>
</select><br>
<input type="submit" value="send"><br>
</form>
<a href="Help.php">
HELP</a>

</body>
</html>