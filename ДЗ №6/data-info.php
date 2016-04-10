<?php
// В этом файле прописываем все данные формы в удобочитаемом виде,чтобы засорять код самой формы

$city = ['641780'=>'Новосибирск',
         '641490'=>'Барабинск',
         '641510'=>'Бердск',
         '641600'=>'Искитим',
         '641630'=>'Колывань',
         '641680'=>'Краснообск',
         '641710'=>'Куйбышев',
         '641760'=>'Мошково',
         '641790'=>'Обь',
         '641800'=>'Ордынское',
         '641970'=>'Черепанов'];

$metro = ['2028'=>'Берёзовая роща',
          '2018'=>'Гагаринская',
          '2017'=>'Заельцовская',
          '2029'=>'Золотая Нива',
          '2019'=>'Красный проспект',
          '2027'=>'Маршала Покрышкина',
          '2021'=>'Октябрьская'];

$highway = ['56'=>'Бердское шоссе',
            '57'=>'Гусинобродское шоссе',
            '53'=>'Дачное шоссе',
            '55'=>'Краснояровское шоссе',
            '54'=>'Мочищенское шоссе',
            '52'=>'Ордынское шоссе',
            '58'=>'Советское шоссе'];

$realty = ['25' => 'Дома, дачи, коттеджи',
           '26' => 'Земельные участки',
           '24'=>'Квартиры',
           '23'=>'Комнаты',
           '85'=>'Гаражи и машиноместа',
           '86'=>'Недвижимость за рубежом',
           '42' => 'Коммерческая недвижимость'];

$transport = ['9' => 'Автомобили с пробегом',
              '109' => 'Новые автомобили',
              '14' => 'Мотоциклы и мототехника',
              '81'=>'Грузовики и спецтехника',
              '11'=>'Водный транспорт',
              '10'=>'Запчасти и аксессуары'];

$other = ['27' =>'Одежда, обувь, аксессуары',
          '29'=>'Детская одежда и обувь',
          '30'=>'Товары для детей и игрушки',
          '28'=>'Часы и украшения',
          '88'=>'Красота и здоровье']; 
               
$for_home = ['21'=>'Бытовая техника',
            '20'=>'Мебель и интерьер',
            '87'=>'Посуда и товары для кухни',
            '82'=>'Продукты питания',
            '19'=>'Ремонт и строительство',
            '106'=>'Растения'];

$hobby =    ['33'=>'Билеты и путешествия',
            '34'=>'Велосипеды',
            '83'=>'Книги и журналы',
            '36'=>'Коллекционирование',
            '38'=>'Музыкальные инструменты',
            '102'=>'Охота и рыбалка',
            '39'=>'Спорт и отдых',
            '103'=>'Знакомства'];

$animals = ['89'=>'Собаки',
            '90'=>'Кошки',
            '91'=>'Птицы',
            '92'=>'Аквариум',
            '93'=>'Другие животные',
            '94'=>'Товары для животных'];

$massive_all = ['Недвижимость' => $realty,
                'Транспорт' => $transport,
                'Личные вещи' =>$other,
                'Для дома' =>$for_home,
                'Хобби' =>$hobby,
                'Животные'=>$animals];


