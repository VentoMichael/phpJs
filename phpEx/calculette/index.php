<?php
$nb1 = 0;
$nb2 = 0;
$calcul = 0;
$res = 0;

$signs = [
        '+',
        '-',
        '*',
        '/'
];
if (isset($_GET['nb1']) && isset($_GET['nb2']) && isset($_GET['calcul'])){
    if (is_numeric($_GET['nb1'])){
        $nb1 = $_GET['nb1'];
    }else{
        echo "La première valeur n'est pas un chiffre ";
    }
    if (is_numeric($_GET['nb2'])){
        $nb2 = $_GET['nb2'];
    }else{
        echo "La deuxième valeur n'est pas un chiffre";
    }
        $calcul = $_GET['calcul'];

}
switch ($calcul) {
    case 'addition':
        $res = $nb1 .' + ' . $nb2 . ' = ' . ($nb1 + $nb2);
        break;
    case 'soustraction':
        $res = $nb1 .' - ' . $nb2 . ' = ' . ($nb1 - $nb2);
        break;
    case 'multiplication':
        $res = $nb1 .' * ' . $nb2 . ' = ' . ($nb1 * $nb2);
        break;
    case 'division':
        if ($nb2 === NULL){
            echo 'Le deuxième nombre dois être remplis';
        }else{
            $res = $nb1 .' / ' . $nb2 . ' = ' . ($nb1 / $nb2);
        }
        break;
    case 'puissance':
        $res = $nb1 .'² ' . $nb2 . ' = ' . (pow($nb1, $nb2));
        break;
}
// Mettre deux inputs chiffres
// 5 submit de valeurs
// Pas oublier la valeur a la fin
// switch avec les possibilitées


//Dans le cas où c’est la puissance qui est choisie, la deuxième valeur doit être un entier.
//Dans le cas où c’est la division qui est choisie, le diviseur ne peut pas être nul.
//Si l’utilisateur enfreint ces conditions, il faut l’en informer mais préserver les valeurs entrées dans le formulaire.
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculette</title>
</head>
<body>
    <h1>
        Calculette
    </h1>

    <form action="index.php" method="get">

        <label for="nb1"></label>
        <input type="number" name="nb1" value="<?= $nb1 ?>">

        <label for="nb2"></label>
        <input type="number" name="nb2" value="<?= $nb2 ?>">

        <input type="submit" value="addition" name="calcul">
        <input type="submit" value="soustraction" name="calcul">
        <input type="submit" value="multiplication" name="calcul">
        <input type="submit" value="division" name="calcul">
        <input type="submit" value="puissance" name="calcul">

    </form>
<?php echo $res ?>
</body>
</html>
