<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" >
        <label for="">Table Of</label>
        <input type="text" name="Table_of" id="">
        <label for="">Starting num</label>
        <input type="text" name="srange" id="">
        <label for="">end num</label>
        <input type="text" name="erange" id="">
        <input type="submit" value="submit">
    </form>
</body>
<?php
if(isset($_GET["Table_of"])){
$Table_of=$_GET["Table_of"];
$srange=$_GET["srange"];
$erange=$_GET["erange"];
echo"Table <br>";
for($i=$srange;$i<=$erange;$i++)
{
   
    echo$Table_of." X ".$srange."=".$Table_of * $srange."<br>";
    $srange++;
}
}
?>
</html>