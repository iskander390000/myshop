<?php

include_once '../config/config.php';         // Инициализация настроек
include_once '../config/db.php';         // Инициализация базы данных
include_once '../library/mainFunctions.php'; // Основные функции


   
// Определяем с каким контролером будем работать 

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// Определяем Action , какая функция будет работать и формировать страницу

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
 

loadPage($smarty, $controllerName, $actionName); // Функция загрузки страницы

