<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="angka1">
        <input type="text" name="angka2">
        <input type="text" value="<?= $ans; ?>">
        <input type="button" name="sub" value="+">
        <?php
        if (isset($_POST['sub'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $oprtr = $_POST['sub'];

            if ($oprtr == '+') {
                $ans = $angka1 + $angka2;
            }
        }
        ?>
    </form>

</body>

</html>