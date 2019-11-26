<main role="main">
    <div class="container marketing">
        <hr class="featurette-divider">
        <?php
        //~ если есть ошибки выводим и предлагаем восстановить пароль
        if (isset($params[error]))
            echo $params[error] . '<a href="/Recovery">Восстановить пароль</a><br/>';
        ?>
        <h1 class=" featurette-heading">Авторизация</h1>
        <div class="row mb-5">
            <div class="col col-md-4">
                <form action="/Join/run" method="post">
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" class="form-control" name="login" id="login" value="<?= $_POST['login'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="passwd">Пароль</label>
                        <input type="password" class="form-control" name="passwd" id="passwd" />
                    </div>
                    <div class="form-group">
                        <label for="passwd2">Повторите пароль</label>
                        <input type="password" class="form-control" name="passwd2" id="passwd2" />
                    </div>
                    <div class="form-group">
                        <label for="mail">Почта</label>
                        <input type="text" class="form-control" name="mail" id="mail" value="<?= $_POST['mail'] ?>" />
                    </div>
                    <input class="btn btn-primary" type="submit" value="Отправить" name="send" />
                </form>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>