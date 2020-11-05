<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayana Calculator</title>
    <style>
        p{
            font-size:20px;
            color: navy;
            font-family: "Comic Sans MS";
       }
        textarea:focus, input:focus, button {
            color: black;
            background-color: white;
        }

        input, select, textarea{
            color: white;
            background-color: black;
        }

    </style>
</head>
<body>
    <p>KALKULATOR</p>
    <?php
        require_once './function.php';

        if(isset($_GET['submit']))
        {
            if(is_numeric($_GET['x']) && is_numeric($_GET['y']))
            {
                $x=$_GET['x'];
                $y=$_GET['y'];

                    switch($_GET['calculate'])
                    {
                        case 'add':
                            $result = add($x, $y);
                        break;
                        case 'sub':
                            $result = sub($x, $y);
                        break;
                        case 'multi':
                            $result = multi($x, $y);
                        break;
                        case 'divide':
                            $result = divide($x, $y);
                        break;
                    }
            }
        }
    ?>

    <form method="GET">
        <input type="number" name="x" placeholder="First number">
        <select required name="calculate">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="multi">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="y" placeholder="Second number">
        <button type="submit" name="submit">=</button>
        <input type="text" name="result" value="<?php if(isset($result))
        {
            echo $result;
        }
        ?>" disabled>
        </form>        
</body>
</html>
