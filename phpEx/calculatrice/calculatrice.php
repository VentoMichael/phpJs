<?php
$name = 'Inconnu';
$numberone = 0;
$numbertwo = 0;
$finalnumber = 0;
$message = '';
if (isset($_GET['name']) && $_GET['name'] !== ''){
    htmlspecialchars($name = $_GET['name']);
}


if (isset($_GET['numberone']) && $_GET['numberone'] !== '' &&($_GET['numbertwo']) && $_GET['numbertwo'] !== '') {
    if (ctype_digit($_GET['numberone'])){
        $numberone = (int)$_GET['numberone'];
    }
    if (ctype_digit($_GET['numbertwo'])){
        $numbertwo = (int)$_GET['numbertwo'];
    }
    $finalnumber = $numberone * $numbertwo;
}


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    tr:nth-child(even){
        background-color: red;
        color: white;
    }
    th:nth-child(even){
        background-color: red;
        color: white;
    }
</style>
<body>
<h1>
    <?= 'Ciao, ' . $name ?>
</h1>

<form action="../country/index.php" method="get">
    <label for="numberone">Number one</label>
    <input type="text" id="numberone" name="numberone" value="0">

    <p>*</p>

    <label for="numbertwo">Number two</label>
    <input type="text" id="numbertwo" name="numbertwo" value="0">

    <input type="submit" value="send">
</form>
=
<?= $finalnumber ?>


<?php if ($numberone): ?>
    <h2>Voici les <?= $numbertwo ?> premières tables jusque <?= $numberone ?></h2>
    <table>
        <thead>
        <tr>
            <th><!-- --></th>
            <?php for($k = 1; $k <= $numberone; $k++): ?>
                <th><?= $k ?></th>
            <?php endfor; ?>
        </tr>
        </thead>
        <tbody>
        <?php for($i = 1; $i <= $numbertwo; $i++): ?>
            <tr>
                <th>
                    <?= $i ?>
                </th>
                <?php for($j = 1; $j <= $numbertwo; $j++): ?>
                    <td>
                        <?= $i . ' * '. $j .'= '.($j * $i)?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </tbody>

    </table>
<?php endif; ?>


</body>
</html>
