<main role="main">
    <div class="container marketing">
        <hr class="featurette-divider">
        <?php
        if (isset($params[error]))
            echo $params[error];
        ?>
        <h1>Восстановление пароля</h1>
        
        <div class="row featurette">
            <div class="col col-md-4">
                <form action="/Recovery/run" method="post" class=" mb-3">
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" value="<?= $_POST['login'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="mail">Почта</label>
                        <input type="text" class="form-control" name="mail" id="mail" value="<?= $_POST['mail'] ?>" />
                    </div>
                    <input class="btn btn-primary" type="submit" value="Отправить" name="send">
                </form>
                <a href="/Join">Зарегистрироваться</a>
            </div>
        </div>
        <hr class="featurette-divider">

    </div>