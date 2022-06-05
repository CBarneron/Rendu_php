<?php
include 'header.php' ?>
<?php

if (empty($_GET['article'])) {
    $index = 0;
} else {
    $index = $_GET['article'];
}
?>
<div class="flex_grid">
    <aside>
        <div>
            <!-- block aside-->
            <div class="aside">
                <div>
                    <img src="asset/image/sakura.webp" alt="Fleurs de sakura" class="img_card">
                </div>
                <div class="center">
                    <ul>
                        Article:
                        <li><a href="article1.php"></a>Article n°1</li>
                        <li><a href="article1.php"></a>Article n°1</li>
                        <li><a href="article1.php"></a>Article n°1</li>
                        <li><a href="article1.php"></a>Article n°1</li>
                        <li><a href="article1.php"></a>Article n°1</li>
                        <li><a href="article1.php"></a>Article n°1</li>
                    </ul>
                    <ul>
                        Categorie:
                        <li><a href="" class="">Japon</a></li>
                        <li><a href="" class="">Canada</a></li>
                        <li><a href="" class="">Brésil</a></li>
                    </ul>
                    <ul>
                        <address>Contact: 26 rue des bienvenus , Villeurbanne 69100</address>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <section>
        <div class="card">
            <div>
                <img src="<?php echo $article[$index]['image']; ?>" alt="<?php echo  $article[$index]['Ville']; ?>" class="img_card">
            </div>
            <div class="ariane">
                <p>Auteur:Maurice /Categorie:<?php echo $article[$index]['Ville']; ?> / Commentaire:0</p>

            </div>
            <div>
                <p><?php echo $article[$index]['text']; ?> </p>

            </div>
        </div>

    </section>
</div>

<?php include 'footer.php' ?>