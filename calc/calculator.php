<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<form action="">
<div class="container">
<input type="number" name="num1" class="mt-3" placeholder="number 1">

    <select class="mt-3" name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>

<input type="number" name="num2" class="mt-3" placeholder="number 2">
    <br>
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
</div>
    <br>
<h3>
    The answer is :
</h3>
    <br>
    <?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator){
            case 'None':
                echo 'You need to select a method !';
                break;
            case 'Add':
                echo $result1 + $result2;
                break;
            case 'Subtract':
                echo $result1 - $result2;
                break;
            case 'Multiply':
                echo $result1 * $result2;
                break;
            case 'Divide':
                echo $result1 / $result2;
                break;
        }
    }
    ?>

</body>
</html>