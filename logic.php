<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            background-color: rgb(139, 145, 148);
        }
        .container{
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 20%;
            
        }
    </style>
</head>
<body>
<?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $num_one=$_POST['fname'];
            $num_two=$_POST['sname'];
    
    if(isset($_POST['Additon']))
    {
        echo"Addition of Two Number is $num_one & $num_two is:".$num_one+$num_two;
    }
    if(isset($_POST['Subtraction']))
    {
        echo"Subtraction of Two Number is $num_one & $num_two is:".$num_one-$num_two;
    }
    if(isset($_POST['Division']))
    {
        echo"Division of Two Number is $num_one & $num_two is:".$num_one/$num_two;
    }
    if(isset($_POST['Multiplication']))
    {
        echo"Multiplication of Two Number is $num_one & $num_two is:".$num_one*$num_two;
    }
}
    ?>
    
        
           <div class="container">
        <form action="calci.php" method="post">
            <table>
                <tr>
                    <td>Enter the First Number</td>
                    <td><input type="text"name="fname"></td>
                </tr>
                <tr>
                    <td>Enter the Second Number</td>
                   <td><input type="text"name="sname"></td>
                </tr>
                <td>
                    <input type="submit" value="Additon" name="Addition">
                    <input type="submit" value="Subtraction" name="Subtraction">
                    <input type="submit" value="Division" name="Division">
                    <input type="submit" value="Multiplication" name="Multiplication">
                </td>
            </table>
        </form>
        
    </div>
</body>
</html>