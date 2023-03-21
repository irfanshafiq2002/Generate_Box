<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Box</title>
</head>

<body>
    <h2 align="center">JANA KOTAK</h2>
    <center>
    <form method="POST">
        <label for="tinggi">Height:</label>
        <input type="text" name="tinggi">
        <p></p>
        <label for="lebar">Width:</label>
        <input type="text" name="lebar">
        <p></p>
        <input type="submit" name="submit" value="JANA">
        <p></p>
    </form>
    </center>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST["tinggi"];
        $lebar = $_POST["lebar"];
        echo "<table border='1' width='50%' height='50%' cellpadding='2' cellspacing='0' style='text-align: center; margin: auto;'>";

        for ($row = 1; $row <= $tinggi; $row++) {
            echo "<tr> \n";
            for ($col = 1; $col <= $lebar; $col++) {
                echo "<td></td> \n";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>