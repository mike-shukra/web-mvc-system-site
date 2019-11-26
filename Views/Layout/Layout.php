<!doctype html>
<html lang="ru">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123259029-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-123259029-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $this->description ?>">
    <meta name="author" content="Mikhail Shkuro">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title><?= $this->title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <?= $this->scryptHead ?>

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">YOGA</a>

            <div class="collapse navbar-collapse" id="navbar1">
                <?php
                switch ($this->menuActiveItem) {
                    case 'about':
                        $about = 'active';
                        break;

                    case 'aboutMe':
                        $aboutMe = 'active';
                        break;

                    case 'articles':
                        $articles = 'active';
                        break;

                    case 'gallery':
                        $gallery = 'active';
                        break;
                    case 'video':
                        $video = 'active';
                        break;

                    case 'navbarDropdown1':
                        $navbarDropdown1 = 'active';
                        break;
                }
                ?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= $about ?>" href="/About">О&nbsp;проекте</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $aboutMe ?>" href="/AboutMe">Обо&nbsp;мне</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/AboutMe#schedule">Расписание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $articles ?>" href="/Articles">Статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $gallery ?>" href="/Gallery">Фото</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $video ?>" href="/Video">Видео</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= $navbarDropdown1 ?>" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">База&nbsp;знаний</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="/KnowlegeBase/yogaTechniques">Техники йоги</a>
                                <a class="dropdown-item" href="/KnowlegeBase/yogaPhilosophy">Философия йоги</a>
                                <a class="dropdown-item" href="/KnowlegeBase/yogaSchool">Школы йоги</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/KnowlegeBase/glossary">Словарь терминов</a>
                            </div>
                        </li>
                    </ul>
                    <div class='socialiconbox'>
                        <a class="social vk" href="https://vk.com/id5690091" target="_blank"><i class="fa fa-vk fa-1x"></i></a>
                        <a class="social instagram" href="https://www.instagram.com/mike_shukra/" target="_blank"><i class="fa fa-instagram fa-1x"></i></a>
                        <a class="social youtube" href="https://www.youtube.com/channel/UC1CrSRQeqBBu5fZxlFhD7kQ" target="_blank"><i class="fa fa-youtube fa-1x"></i></a>
                        <a class="social facebook" href="https://www.facebook.com/white.electric.dog" target="_blank"><i class="fa fa-facebook fa-1x"></i></a>
                        <a class="social whatsapp" href="https://wa.me/79650114510" target="_blank"><i class="fa fa-whatsapp fa-1x"></i></a>
                    </div>
                    <!--<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    	</form>-->
            </div>
            <div style="color:white;">
                <?php
                // if (\App\Session::get('loggedIn') == true) echo '| ' . $_SESSION['login_user'] . ' <a style="color:white;" href="/Login/out">Выйти</a> |';
                if (\App\Auth::check())
                    echo '| ' . $_SESSION['login_user'] . ' <a style="color:white;" href="/Login/out">Выйти</a> |';
                else
                    echo ' | <a class="" style="color:white;" href="/Login">Войти</a> |';
                ?>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>

    </header>

    <?= $body ?>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">
        <div class="scrollup">
            <!-- Иконка fa-chevron-up (Font Awesome) -->
            <i class="fa fa-chevron-up"></i>
        </div>
        <!-- Footer Links -->
        <div class="container-fluid text-md-left navbar-dark">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <h5 class=""><a class="text-secondary" href="/">Проект YOGA</a></h5>
                    <p class="text-white-50">Древняя хатха&nbsp;йога в&nbsp;современном мире.</p>
                    <h5 class="text-uppercase">Контакты</h5>
                    <div class='mb-4'>
                        <a class="text-secondary mr-4 vk" href="https://vk.com/id5690091" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
                        <a class="text-secondary mr-4 instagram" href="https://www.instagram.com/mike_shukra/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                        <a class="text-secondary mr-4 youtube" href="https://www.youtube.com/channel/UC1CrSRQeqBBu5fZxlFhD7kQ" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                        <a class="text-secondary mr-4 facebook" href="https://www.facebook.com/white.electric.dog" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                        <a class="text-secondary mr-4 whatsapp" href="https://wa.me/79650114510" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>
                    </div>
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Разделы</h5>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/About">О&nbsp;проекте</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/AboutMe">Обо&nbsp;мне</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/Articles">Статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/Gallery">Фото</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/Video">Видео</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">База заний</h5>






                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link pl-0" href="/KnowlegeBase/yogaTechniques">Техники йоги</a>
                        </li>
                        <li>
                            <a class="nav-link pl-0" href="/KnowlegeBase/yogaPhilosophy">Философия йоги</a>
                        </li>

                        <li>
                            <a class="nav-link pl-0" href="/KnowlegeBase/yogaSchool">Школы йоги</a>
                        </li>
                        <li>
                            <a class="nav-link pl-0" href="/KnowlegeBase/glossary">Словарь терминов</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <p>Copyright &copy; Михаил&nbsp;Шкуро 2018</p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/scrypt.js"></script>
    <?= $this->scryptBottom ?>
</body>

</html>