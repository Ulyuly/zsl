<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }

        table{
            background-color: white;
            margin: auto;
            width: 20%;
        }

        th{
            background-color: plum;
        }
        </style>
</head>
<body>
    <div>
        <form action=./6_corona_show.php method="get"> 
    <table border>
    <tr>
        <th>Name</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>
        <td>Sex</td>
        <td>
            <input type="radio" name="sex" value="Male">Male
            <input type="radio" name="sex" value="Female">Female
        </td>
    </tr>
    <tr>
        <td>Eye color</td>
        <td>
            <input list="eyecolor">
            <datalist id="eyecolor">
                <option name ="green" value="zielone"></option>
                <option name ="brown" value="brązowe"></option>
                <option name ="blue" value="niebieskie"></option>
            </datalist>
        </td>
    </tr>
    <tr>
        <td>Check all that apply</td>
        <td>
        <input type="checkbox" name="apply">Over 6 feet tall
        <input type="checkbox" name="apply">Over 200 pounds
        </td>
    </tr>
    <tr>
        <td colspan=2>
            Describe your athletic ability:
        </td> 
    </tr>
    <tr>
    <td colspan=2>
        <textarea name="atheltic" id="" cols="45" rows="5"></textarea>
    </td>
    </tr>
    <tr>
    <td><input type="submit" value="Enter my information"></td>
    </tr>

    </table>
    </form>
    </div>
</body>
</html>