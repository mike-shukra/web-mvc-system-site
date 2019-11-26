<main role="main">

    <div class="container marketing">
        <h1 class="featurette-heading"><?= $params[header] ?></h1>
        <hr class="featurette-divider">

        <div class="row">
            <?php
            foreach ($params[articles] as $article) {
                echo '
                <div class="col-lg-4">
                    <img class="article-prev" src="' . $article[article][pictHeader] . '" alt="" width="240" height="140">
                    <h2>' . $article[article][header] . '</h2>
                    ' . $article[article][preview] . '
                    <p><a class="btn btn-secondary" href="/Articles/' . $article[article][button] . '" role="button">Читать целиком &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                ';
            }
            ?>
        </div>
        <!-- /.row -->
        <hr class="featurette-divider">
    </div>