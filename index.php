<?php
require 'header.php';
?>

<div class=container>
    <div class="gridlaptop">
        <!-- block article -->
        <div class="grid">
            <?php

            for ($i = 0; $i < sizeof($article); $i++) {
            ?>

                <div class="card">
                    <?php echo "<a href=article.php?Page=Article&article=$i>"; ?>
                    <article>
                        <img src="<?php echo $article[$i]['image']; ?>" alt="Photo <?php $article[$i]['Ville'] ?> " class="imgcard">
                        <h4><?php echo $article[$i]['Ville']; ?></h4>
                        <p class="pA"><?php echo $article[$i]['text']; ?></p>
                    </article>
                    </a>
                </div>

            <?php } ?>


        </div>
        <div>
            <!-- block aside-->
            <div class="aside">
                <div>
                    <img src="asset/image/sakura2.webp" alt="Fleurs de sakura" class="imgaside">
                </div>



                <div class="center">
                    <ul>
                        Article:
                        <?php
                        for ($i = 0; $i < sizeof($article); $i++) {
                        ?>

                            <li><?php echo "<a href=article.php?Page=&article=$i class=\"alist\"> "; ?>article n°<?php echo $i ?></li>
                        <?php }; ?>
                    </ul>
                    <ul>
                        Catégorie:
                        <li>Japon</li>
                        <li>Canada</li>
                        <li>Brésil</li>
                    </ul>
                    <ul>
                        <address>Contact: 26 rue des bienvenus , Villeurbanne 69100</address>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>