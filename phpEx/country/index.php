<?php
$countries = [
    'belgique' => [
        'capitale' => 'bruxelles',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/9/92/Flag_of_Belgium_%28civil%29.svg'
    ],
    'france' => [
        'capitale' => 'paris',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg'
    ],
    'italie' => [
        'capitale' => 'rome',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/220px-Flag_of_Italy.svg.png'
    ],
    'bulgarie' => [
        'capitale' => 'sofia',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/220px-Flag_of_Bulgaria.svg.png'
    ],
    'burundi' => [
        'capitale' => 'gitega',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_Burundi.svg/220px-Flag_of_Burundi.svg.png'
    ],
    'chilie' => [
        'capitale' => 'santiago',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/220px-Flag_of_Chile.svg.png'
    ],
    'etats-unis' => [
        'capitale' => 'washington',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/220px-Flag_of_the_United_States.svg.png'
    ],
    'bengladesh' => [
        'capitale' => 'Dacca',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/220px-Flag_of_Bangladesh.svg.png'
    ],
    'irak' => [
        'capitale' => 'bagdad',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/220px-Flag_of_Iraq.svg.png'
    ],
    'brésil' => [
        'capitale' => 'brasilia',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/220px-Flag_of_Brazil.svg.png'
    ],
    'corée du nord' => [
        'capitale' => 'pyongyang',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Flag_of_North_Korea.svg'
    ],
];

$countryChoose = '';
if (isset($_GET['sCountry'])) {
    $countryChoose = $_GET['sCountry'];
    if (in_array($countryChoose, array_keys($countries))) {
        $data = $countries[$countryChoose];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capitale et pays</title>
</head>
<body>
<h1>Capitales et pays</h1>

<form action="index.php" method="get">
    <label for="sCountry">Choix du pays</label>
    <select name="sCountry">
        <?php foreach ($countries as $country => $capitale): ?>
            <option selected="selected" value="<?= $country; ?>"><?= mb_strtoupper($country) ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>
<?php if (in_array($countryChoose, array_keys($countries))): ?>
    <?php if ($countryChoose === ''): ?>
        <p>
            Sélectionner un Pays et vous aurez la capitale ainsi que le drapeau !
        </p>
    <?php else: ?>
        <p>
            La capitale de <?= ucfirst($countryChoose); ?> est la suivante : <?= ucfirst($countries[$countryChoose]['capitale']); ?>
        </p>
        <?php if ($countries[$countryChoose]['drapeau']): ?>
            <img src="<?= $countries[$countryChoose]['drapeau']; ?>" alt="Drapeau de <?= strtoupper($countryChoose); ?>"
                 width="30%">
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>