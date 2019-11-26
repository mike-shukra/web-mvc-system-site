<?php

namespace Controllers;

class KnowlegeBase extends \App\Controller {

    public function yogaTechniques() {
        $this->title = 'Техники и практики йоги';
        $this->description = 'Техники и практики йоги. Описание и практические рекомендации по практике техник йоги. Энциклопедического характера.';
        $this->menuActiveItem = 'navbarDropdown1';
        $params = array();

        return $this->render('YogaTechniques', $params);
    }
    public function yogaPhilosophy() {
        $this->title = 'Философия йоги';
        $this->description = 'Философия йоги, санкхья. Основные понятия и определения йогичесного мировоззрения, дошедшие до наших дней';
        $this->menuActiveItem = 'navbarDropdown1';
        $params = array();

        return $this->render('YogaPhilosophy', $params);
    }
    public function yogaSchool() {
        $this->title = 'Школы йоги';
        $this->description = 'Обзор традиционных и современных направлений и школ йоги.';
        $this->menuActiveItem = 'navbarDropdown1';
        $params = array();

        return $this->render('YogaSchool', $params);
    }
    public function glossary() {
        $this->title = 'Техники и практики йоги';
        $this->description = 'Техники и практики йоги. Описание и практические рекомендации по практике техник йоги. Энциклопедического характера.';
        $this->menuActiveItem = 'navbarDropdown1';
        $params = array();

        return $this->render('Glossary', $params);
    }
    
}
