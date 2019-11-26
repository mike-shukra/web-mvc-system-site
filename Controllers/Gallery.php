<?php

namespace Controllers;

class Gallery extends \App\Controller {

    public function index() {
        $this->title = 'Фото галерея';
        $this->description = 'Фото галерея преподавателя и практика йоги';
        $this->menuActiveItem = 'gallery';
        $this->scryptHead = '<link href="/fancybox/jquery.fancybox.min.css" rel="stylesheet">';
        $this->scryptBottom = '<script src="/fancybox/jquery.fancybox.min.js"></script>

        <!-- Gridify JS -->
        <script src="gridify/gridify.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                var options = {
                    srcNode: "img", // grid items (class, node)
                    margin: "20px", // margin in pixel, default: 0px
                    width: "", // grid item width in pixel, default: 220px
                    max_width: "255px", // dynamic grid item width if specified, (pixel)
                    resizable: true, // re-layout if window resize
                    transition: "all 0.5s ease" // support transition for CSS3, default: all 0.5s ease
                }
                document.querySelector(".grid").gridify(options);
            }
        </script>';
        $params = array();


        return $this->render('Gallery', $params);
    }
    
}
