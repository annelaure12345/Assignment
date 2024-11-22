<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="php.css" rel="stylesheet">
</head>
<body>
    
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $country=htmlspecialchars($_POST['country']);
    $weather=isset($_POST['weather']) ?($_POST['weather']):'None';
    $reason=isset($_POST['reason'])&&is_array($_POST['reason'])?implode(",",$_POST['reason']):'None';
    $birthday=htmlspecialchars($_POST['birthday']);
    $food=htmlspecialchars($_POST['food']);
    $expectations=htmlspecialchars($_POST['message']);
    $rate=$_POST['rangeInput'];
    
    
}

?>
<table border=1>
    <tr><th>Names</th>
    <th>E-mail</th>
    <th>Country</th>
    <th>Weather</th>
    <th>reason</th>
    <th>Birthday</th>
    <th>Food</th>
    <th>Expectations</th>
    <th>Rate</th></tr>
    <tr><td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $country ?></td>
    <td><?php echo $weather ?></td>
    <td><?php echo $reason ?></td>
    <td><?php echo $birthday ?></td>
    <td><?php echo $food ?></td>
    <td><?php echo $expectations ?></td>
    <td><?php echo $rate ?></td>

</tr>
</table>

</body>
</html>


