<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">
     <table border=1>
     <tr>
     <td>
        Enter Your Name:
    </td>
    <td>
        <input type="text" id="name" name="name">
    </td>
    </tr>
    <tr>
     <td>
        Enter Your RollNo:
    </td>
    <td>
        <input type="text" id="number" name="number">
    </td>
    </tr>
    <tr>
    <td colspan=2>
    <input type="submit" id="btnsubmit" name="btnsubmit">
    </td>
    </tr>
    </table>
    </form>

    <?php
     if(isset($_GET['btnsubmit'])) {
         echo $_GET['name']."<br>";
         echo $_GET['number'];
     }
    ?>

</body>
</html>
