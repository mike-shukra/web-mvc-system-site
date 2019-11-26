<div id="myCarousel" class="carousel slide mb-0" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="/img/slide01.jpg" alt="маюрасана поза павлина">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Маюрасана</h1>
                    <p>Поза павлина. </p>
                    <p><a class="btn btn-lg btn-primary" href="/yogaTechniques#asana" role="button">Узнать больше</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="/img/slide02.jpg" alt="асана на природе">
            <div class="container">
                <div class="carousel-caption  text-left">
                    <h1>Йога на природе</h1>
                    <p>Плюсы и минусы занятий на улице.<br>Отвлекающие факторы и стоит ли оно того вообще.</p>
                    <p><a class="btn btn-lg btn-primary" href="#natureyoga" role="button">Читать заметку</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="/img/slide03.jpg" alt="аштавакрасана">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Аштавакрасана</h1>
                    <p>Силовой баланс, не так сложно, как может показаться,<br>половина учеников делает это на первом занятии!</p>
                    <p><a class="btn btn-lg btn-primary" href="https://vk.com/write5690091" target="_blank" role="button">Записаться на класс</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main role="main">
    <!-- Three columns of text below the carousel -->
    <div class="container marketing">

        <h1 class="featurette-heading mb-5">Древняя хатха&nbsp;йога в&nbsp;современном мире.<br><span class="text-muted">Заметки, статьи, фото и&nbsp;видео.</span></h1>

        <div class="row">
            <?php   
            for ($i=0; $i < 3; $i++) { 
                echo '
                <div class="col-lg-4">
                    <img class="article-prev" src="' . $params[articles][$i][article][pictHeader] . '" alt="" width="240" height="140">
                    <h2>' .$params[articles][$i][article][header] . '</h2>
                    ' . $params[articles][$i][article][preview] . '
                    <p><a class="btn btn-secondary" href="/Articles/' . $params[articles][$i][article][button] . '" role="button">Читать целиком &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                ';
            }
            ?>
            
        </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Лучший способ!</h2>
                <p class="lead">Для меня нет вопроса заниматься йогой или нет. Есть вопрос — как лучше заниматься? Хороший совет — не выбирайте преподавателя — выбирайте практику и ищите тех, кто вам её доходчиво объяснит!</p>
                <p class="lead"></p>
                <p class="lead"></p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/img/IMG_20180731_164907_1_445.jpg" alt="аштавакрасана на фоне озера">
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Паривритта Урдхва Йогадандасана</h2>
                <p class="lead">Я — живое подтверждение того, как йога и конкретно моя тренировочная программа меняет человека!</p>
                <p class="lead">Годы идут, а физическая форма улучшается!</p>
                <p class="lead">Эта асана задействует сразу несколько направлений подвижности, что позволяет сделать тренировку более концентрированной — экономит время! Это к вопросу, зачем вообще делать сложные асаны.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/img/IMG_20180731_170001_445.jpg" alt="Паривритта Урдхва Йогадандасана на пляже">
            </div>
        </div>


        <hr class="featurette-divider">


        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Практические рекомендации!<br><span class="text-muted">Агни стамбхасана.</span></h2>
                <p class="lead">Если вы не являетесь счастливым обладателем врождённой подвижности тазобедренных суставов и не занимались в детстве, то выполнять стамбхасану придётся долго. А падмасану (позу лотоса) и её вариации категорически нельзя делать пока
                    нет стамбхасаны.</p>
                <p class="lead">Главный совет — не спешите — повредить колени очень легко, а лечить придётся очень долго! Я занимаюсь больше 10ти лет и только теперь могу практиковать падмасану. Раньше тоже практиковал, повреждал колени — долго восстанавливался —
                    запомнил навсегда!</p>
                <p class="lead">Отстройку не пишу — это бесполезно, когда ученики начинают практиковать эту позу — поправлять приходиться по несколько раз каждого на первых нескольких занятиях. Так что рекомендую начать делать под присмотром преподавателя.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/img/IMG_4781_1x1.jpg" alt="Агни стамбхасана на природе">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Предельные нагрузки. </h2>
                <p class="lead">Часто наблюдаю как люди идут на расслабленную практику руководствуясь несколькими заблуждениями... Развенчивать мифы буду в следующих постах!)</p>
                <p class="lead">Есть исследования, что именно короткие предельные нагрузки вызывают наиболее значимые эффекты. </p>
                <p class="lead">Если вы не добираете, рекомендуемых врачами, четырёх часов тренировок в неделю — включите в практику предельные нагрузки. </p>
                <p class="lead">Это может быть динамический сурьянамаскар, фиксация в силовом балансе или общая продолжительность тренировки. </p>
                <p class="lead">На классах я расскажу как делать предельные нагрузки безопасно для тела и параллельно тренируя ум!</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/img/IMG_20180611_175041_500px.jpg" alt="бакасана">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col">
                <h2 class="featurette-heading mb-5">Раскрытие тазобедренных суставов, <br><span class="text-muted">сохраняя здоровые колени!</span></h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M4qqIpBOenE"></iframe>
                </div>
                <p class="lead">Многие задаются вопросом: «Как раскрыть тазобедренные, ведь асаны, для этого казалось бы предназначенные, повреждают колени раньше, чем тазобедренные провернутся?»<br> Выход есть, нужно формировать последовательности соблюдая принципы
                    безопасности для коленей!<br> Полная серия на классе!</p>
            </div>
        </div>

        <hr id="natureyoga" class="featurette-divider">

        <div id="natureyoga" class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Йога на природе. <span class="text-muted">Так ли это хорошо?</span></h2>
                <p class="lead">Есть мнение, что йога на природе — это лучший выбор, для кого-то даже в парке. Однако, стоит учесть множество отвлекающих факторов: ветер, солнце в глаза, комары, что уж говорить, проходящие мимо люди могут реагировать неадекватно.</p>
                <p class="lead">Хорошо, если вы нашли уединённое место в хорошую погоду.</p>
                <p class="lead">В тексте первоисточнике хатха йога прадипика написано, что для занятий йогой требуется отдельная хижина в уединённом месте, обладающая рядом параметров. Я всё больше убеждаюсь, что это необходимо для корректной личной практики.</p>
                <p class="lead">А фотографии на природе красивые!</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/img/IMG_20180611_174807_500px.jpg" alt="асана на природе">
            </div>
        </div>

        <hr class="featurette-divider">

        <div id="natureyoga" class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Взять в кредит или заплатить вперёд </h2>
                <p class="lead">Ни для кого не секрет, что жизнь в мегаполисе и операторская работа, пагубно влияют на здоровье.</p>
                <p class="lead">Не занимаясь правильной физической активностью, вы постоянно берёте время в кредит. Отдавать придётся с процентами!</p>
                <p class="lead">Занимаясь йогой, вы действуете наоборот, тратите время, но получаете обратно с процентами активную полноценную жизнь.</p>
                <p class="lead">Задумайтесь, успеваете ли вы осуществить свои мечты?</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/img/4_73ANyjQJM.jpg" alt="паривритта паршваконасана вид спереди">
            </div>
        </div>

        <hr class="featurette-divider">
        <div id="natureyoga" class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">О еде!</h2>
                <p class="lead">Считаю это личным делом каждого, однако меня периодически спрашивают, как я питаюсь.</p>
                <p class="lead">Моё питание уже больше 10ти лет — вегетарианское. Не веганское, а с использованием молочных продуктов. Стараюсь есть свежую пищу из натуральных ингредиентов.</p>
                <p class="lead">Для меня вегетарианство не является определяющим фактором отношения к человеку. Знаю злых веганов и добрых мясоедов.</p>
                <p class="lead">В йоге вегетарианство присутствует из соображений ахимсы (не насилия), моё наполовину из медицинских соображений, наполовину из ахимсы. Я считаю, если возможно не убивать — не надо убивать. А как показывает практика — жить без мяса
                    прекрасно. Кроме того, я считаю мясо вредным для здоровья.</p>

                <p class="lead">Ещё я не ем сладкое, совсем, только сладкие фрукты. Но это мой личный выбор, к диете йогов не относится!)</p>
                <p class="lead">Хочу добавить, что традиционно йоги не пьют кофе и чай, так же как не используют никакие другие вещества, изменяющие сознание. Я пока ещё не отказался только от кофе и чая, но и до них дойдёт очередь!</p>

            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/img/y_c30ea0a9.jpg" alt="на тарелке вареники вегетарианские">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
    </div>