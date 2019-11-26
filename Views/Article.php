<main role="main">

    <div class="container marketing">
        <hr class="featurette-divider">


        <?php
        // echo '<pre>';
        // print_r($params);
        // echo '</pre>';
        ?>
        <div class="row featurette">
            <div class="col-md-7">
                <h1 class="featurette-heading article-head"><?= $params[article][header] ?></h1>
                <?= $params[article][text] ?>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="<?= $params[article][pict] ?>" alt="Фотография">
                <?= $params[article][dop] ?>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
