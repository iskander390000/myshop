<?php

/**
 *  Контроллер главной страницы
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';

function testAction(){
    echo 'IndexController.php > testAction';
}


/**
 * Формирование главной страницы сайта
 * 
 * @param type $smarty шаблонизатор
 */
function indexAction($smarty){
    
    $rsCategories = getAllMainCatsWithChildren();
    
    
    $smarty->assign('pageTitle', 'Main page of sait');
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
