<?php

namespace Controllers;

class AboutMe extends \App\Controller {

    public function index() {
        $this->title = 'О преподавателе';
        $this->description = 'Преподаватель йоги Михаил Шкуро. Сертифицированный инструктор йоги. Тренер по йоге. Расписание.';
        $this->menuActiveItem = 'aboutMe';
        $this->scryptHead = '<script src="https://api-maps.yandex.ru/2.1/?apikey=c09f7883-1410-437d-bdcb-a618d80905c0&lang=ru_RU" type="text/javascript"></script>';
        $this->scryptBottom = "    <script type='text/javascript'>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map('map', {
                center: [59.90694307, 30.32135167],
                zoom: 11
            }, {
                searchControlProvider: 'yandex#search'
            });

            myMap.geoObjects
                .add(new ymaps.Placemark([59.85061183, 30.40256289], {
                    balloonContent: 'Школа танцев Пиксели',
                    iconCaption: 'Школа танцев Пиксели'
                }, {
                    preset: 'islands#blueDotIconWithCaption'
                }))

            .add(new ymaps.Placemark([59.87288352, 30.32578773], {
                balloonContent: 'Общежитие',
                iconCaption: 'Закрытая группа'
            }, {
                preset: 'islands#blueDotIconWithCaption'
            }))

            .add(new ymaps.Placemark([59.92107538, 30.31922330], {
                balloonContent: 'AWAKE SISTERS',
                iconCaption: 'AWAKE SISTERS soul healing space'
            }, {
                preset: 'islands#blueDotIconWithCaption'
            }))

            .add(new ymaps.Placemark([59.94200717, 30.36728435], {
                balloonContent: 'Фитнес клуб ПАРУС',
                iconCaption: 'ПАРУС на Парадной'
            }, {
                preset: 'islands#blueDotIconWithCaption'
            }))

            .add(new ymaps.Placemark([59.95077147, 30.37351378], {
                balloonContent: 'Фитнес клуб ПАРУС',
                iconCaption: 'ПАРУС на Воскресенской'
            }, {
                preset: 'islands#blueDotIconWithCaption'
            }))

            ;
        }
    </script>";
        $params = array();
        $params[shedule] = $this->model->getShedule();
        
        // if (\App\Session::get('loggedIn') == true) 
        //     $params[auth] = true;

        return $this->render('AboutMe', $params);
    }
    
}
