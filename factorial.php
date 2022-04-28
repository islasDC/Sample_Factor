<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<form action="" method="post">
<div class="form-group mb-2">
<input type="text" class="" class="form-control" name="num" placeholder="Enter Number">
<input type="submit" class="btn btn-success mb-2" name="submit" value="Calculate">
</div>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$num = $_POST['num'];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Result: Factorial of $num is $factorial";  

 } 
?>  