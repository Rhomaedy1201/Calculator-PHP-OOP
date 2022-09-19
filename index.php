<?php
class Calkulator
{
    public function setOprasi($nilai1, $nilai2, $operator)
    {
        if ($operator == "+") {
            $this->hasil = $nilai1 + $nilai2;
        } else if ($operator == "-") {
            $this->hasil = $nilai1 - $nilai2;
        } else if ($operator == "/") {
            $this->hasil = $nilai1 / $nilai2;
        } else if ($operator == "x") {
            $this->hasil = $nilai1 * $nilai2;
        }
        $this->value1 = $nilai1;
        $this->value2 = $nilai2;
        $this->operator = $operator;
        return $this->hasil;
    }
    public function getOprasi()
    {
        $result = $this->hasil;
        return $result;
    }
    public function getNilai1()
    {
        $result = $this->value1;
        return $result;
    }
    public function getNilai2()
    {
        $result = $this->value2;
        return $result;
    }
    public function getOperator()
    {
        $result = $this->operator;
        return $result;
    }
}
$operator = null;
$kalkulator = new Calkulator;
if (isset($_POST['sub'])) {
    $kalkulator->setOprasi($_POST['input1'], $_POST['input2'], $_POST['sub']);
    $hasil = $kalkulator->getOprasi();
    $hasil2 = $kalkulator->getNilai1();
    $hasil3 = $kalkulator->getNilai2();
    $operator = $kalkulator->getOperator();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="output">
                <input type="number" name="input1" class="output" min="1" max="999999" placeholder="nilai 1" value="<?= $hasil2; ?>">
                <label for=""><?= $operator; ?></label>
                <input type="number" name="input2" class="output" min="1" max="999999" placeholder="nilai 2" value="<?= $hasil3; ?>">
                <label for="">=</label>
                <input type="number" name="hasil" class="output" disabled placeholder="Hasil" value="<?= $hasil; ?>">
            </div>
            <div class=" pilihan">
                <div class="operator">
                    <button type="submit" name="sub" value="+">+</button>
                    <button type="submit" name="sub" value="-">-</button>
                    <button type="submit" name="sub" value="/">/</button>
                    <button type="submit" name="sub" value="x">x</button>
                    <button type="submit" name="clear" style="color: white; background-color: orange;" value="clear">C</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>