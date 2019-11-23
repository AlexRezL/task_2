<form method="POST" action="./">
    <label>N</label>
    <input type="text" placeholder="N" name="errors">
    <label>M</label>
    <input type="text" placeholder="M" name="warnings">
    <button type="submit">Посчитать</button>
</form>

<?php

if (!empty($_POST)) {
    $N = trim($_POST['errors']);
    $M = trim($_POST['warnings']);
    if ($_POST['errors'] === "" or $_POST['warnings'] === "") {
        exit('Введите значения');
    }
}
else {
    exit();
}

$stepCount = 0;

if ($N % 2 != 0 && $M % 2 === 0) {
    exit("-1");
} 

while (gettype(($N + $M / 2) / 2) != "integer") {
    $M++;
    $stepCount++;
}

$stepCount = $stepCount + ($N + $M / 2)/ 2 + $M / 2;

echo $stepCount;
?>