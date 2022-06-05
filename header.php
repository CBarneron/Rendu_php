<!DOCTYPE html>
<html lang="fr">

<?php
$page = $_GET['Page'];
// $page == 'index' ? $color = "carticle" : $color = "cindex";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css">
    <title><?php echo $page ?></title>
</head>


<body>
    <header class="header grid-2">
        <div><a href=index.php?Page=index <?php $page == 'index' ? $color = "#CCA9DD" : $color = "fff";
                                            echo "style=\"color:$color\";>"; ?> Acceuil </a>
        </div>
        <div><a href=article.php?Page=Article <?php $page == 'Article' ? $color = "#FF0000" : $color = "fff";
                                                echo "style=\"color:$color\";>"; ?>Article</a>
        </div>

    </header>
    <?php
    $article = [

        [
            'image' => 'asset/image/montfuji.webp',
            'Ville' => 'Mont Fuji',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],
        [
            'image' => 'asset/image/Canada.webp',
            'Ville' => 'Canada- Monréal',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],
        [
            'image' => 'asset/image/brasil.webp',
            'Ville' => 'Brésil - brasil',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],
        [
            'image' => 'asset/image/japon.webp',
            'Ville' => 'Okasuna',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],
        [
            'image' => 'asset/image/rio.webp',
            'Ville' => 'Rio de Janeiro',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],
        [
            'image' => 'asset/image/tokyo.webp',
            'Ville' => 'Japon - Tokyo',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta praesentium commodi temporibus debitis maxime omnis reprehenderit
            incidunt eius sunt voluptas.
            Debitis blanditiis facere obcaecati cumque ea rem animi similique ratione.'
        ],

    ];
    ?>