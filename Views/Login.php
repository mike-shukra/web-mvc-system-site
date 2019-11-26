<main role="main">
    <div class="container marketing">
        <hr class="featurette-divider">

        <?php
        //~ если есть ошибки выводим и предлагаем восстановить пароль
        if (isset($params[error]))
            echo $params[error] . '<a href="recovery.php">Восстановить пароль</a><br/>';
        ?>
        <h1>Авторизация</h1>

        <div class="row featurette">
            <div class="col col-md-4">
                <form action="/Login/run" method="post" class=" mb-3">
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" value="">
                    </div>
                    <div class="form-group">
                        <label for="passwd">Пароль</label>
                        <input type="passwd" class="form-control" id="passwd" name="passwd">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Войти" name="send">
                </form>
                <a href="/Join">Зарегистрироваться</a>
            </div>
        </div>
        <hr class="featurette-divider">

    </div>