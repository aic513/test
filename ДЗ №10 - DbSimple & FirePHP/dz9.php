<?php

error_reporting(E_ALL | E_STRICT);      
ini_set('display_errors', 1);
header("Content-Type: text/html; charset=utf-8");

$project_root = $_SERVER['DOCUMENT_ROOT'];
$smarty_dir = $project_root.'/Smarty/';
require_once("dz9-functions.php");                              // подключаем файл с функциями
require_once ("data_connection.php");                           //подключаем файл для соединения с БД
require_once ("connect_to_db.php");                             //подключаемся к самой БД
require_once ("bd_script.php");                                 //подключаем файл со скриптами для БД


// подключаем smarty
$smarty_dir = 'Smarty/';
require($smarty_dir.'libs/Smarty.class.php');
$smarty = new Smarty();
    
$smarty->compile_check = TRUE;
$smarty->debugging = FALSE;
    
$smarty->template_dir = $smarty_dir.'templates/';
$smarty->compile_dir = $smarty_dir.'templates_c/';
$smarty->cache_dir = $smarty_dir.'cache/';
$smarty->config_dir = $smarty_dir.'configs/';

//передаем 'имя переменной' и 'значение'
$smarty->assign('title', 'Наше объявление');
$smarty->assign('cities', get_cities($db));
$smarty->assign('category', get_category($db));


//isset($_POST['confirm_add'])
 if (filter_input(INPUT_POST,'confirm_add')) {                            // кнопка добавить
    if (is_numeric($_POST['id_r'])) {                          // если присутствует метка id_r то сохраняем редактируемое объявление
        edit_ads($db,$_POST);
        }
        else { 
           ads_ad($db,$_POST);                                      // иначе добавляем новое объявление
        }
    restart();                                                 // вызываем restart(); для очистки формы
    
    
    
} elseif (filter_input(INPUT_POST,'clear_form') ||filter_input(INPUT_POST,'back')) {      // кнопка очистить форму  вызывает restart();
    restart();
    
    
    
} elseif (filter_input(INPUT_POST,'clear_base')) {                     // по кнопке очистить базу очищаем БД
    mysqli_query($db,"delete from `advertisement` where id>0");
    restart();
    
    
    
} elseif (filter_input(INPUT_GET,'del_ad')) {                            // ловим ключ del_ad в массиве $_GET
    $del_id = filter_input((int)INPUT_GET,'del_ad');                         // присваеиваем его переменной $del_id
   if (mysqli_fetch_array(mysqli_query($db,"select id from `advertisement` where id='$del_id'"))){   // если существует объявление с таким ключом 
            mysqli_query($db,"delete from `advertisement` where id='$del_id'");                     //удаляем его
        restart();                                         // перезапускаем скрипт
    }
    
    
    
} elseif (filter_input(INPUT_GET,'click_id')) {                          // действие по клику на объявление
    $click_id = filter_input((int)INPUT_GET,'click_id');                    // присваиваем переменной $click_id номер кликнутого объявления
     if (mysqli_fetch_array(mysqli_query($db,"select id from `advertisement` where id='$click_id'"))){  // если объявление с запрашиваемым id существует
            print_form($db,$smarty, $click_id);            // выводим объявление в форму
        }
    
        
    
} else {
    print_form($db,$smarty);                                           // иначе выводим пустую форму
    
}

