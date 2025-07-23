daz

//add auto load classes;
composer dump-autoload

//install deps;
composer update

docker-compose build
docker-compose up -d
docker-compose down
docker-compose exec php php -i | grep mysql
docker exec -it  php-hst sh

docker-compose exec app php /app/bin/mysql_create.php
docker-compose exec app php /app/bin/registration.php
docker-compose exec app php /app/bin/insert.php
docker-compose exec app php /app/bin/select.php
docker-compose exec app php /app/bin/mysql_connection.php

docker-compose exec php php /var/www/html/homes_staging/bin/mysql_create.php
docker-compose exec php php /var/www/html/homes_staging/bin/registration.php

========================
https://selectel.ru/blog/docker-compose/
==========================
install;
composer require predis/predis
composer require vlucas/phpdotenv


# [PHP PDO и работа с базой данных](https://www.youtube.com/playlist?list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3)

## [PHP, PDO Доступ к базе данных #1](https://www.youtube.com/watch?v=_xLkdtEvbWQ&list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3&index=1)

```
Первая часть цикла видео о работе с базой данных с PDO в PHP

https://github.com/smpl/youtube/tree/master/pdo
Плейлист: https://youtube.com/playlist?list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3
Документация PDO: https://www.php.net/manual/ru/book.pdo.php
Канал с новостями: https://t.me/KuvshinovEvgeniy
Чат с обсуждениями: https://t.me/dev_ru
Поддержка: https://new.donatepay.ru/@kuvshinovee
```

## [PHP, PDO Основные операции (CRUD) #2](https://www.youtube.com/watch?v=5s_4-S5Z0f0&list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3&index=2)

```
Основные операции которые осуществляет обычно разработчик при работе с PDO:

00:00 Вступелние и оглавление 
00:54 Вставка данных (INSERT) - регистрация
04:49 Массовая вставка (bulk insert)
10:30 Обновление данных (UPDATE) - смена пароля
11:18 Удаление данных (DELETE) - удаление пользователя
12:39 Выборка данных (SELECT) - вход пользователя
15:07 Выборка нескольких строк
17:33 Что выбрать prepare vs query vs exec 
20:49 Поддержи канал

https://github.com/smpl/youtube/tree/master/pdo примеры кода
Плейлист: https://youtube.com/playlist?list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3
Канал с новостями: https://t.me/KuvshinovEvgeniy
Чат с обсуждениями: https://t.me/dev_ru
Поддержи канал деньгами: https://www.tinkoff.ru/cf/5c4FFQvrspu
```

## [PHP, PDO SQL Injection #3](https://youtu.be/a8tEQmY3jZY)

SQL Injection минимум который должен знать каждый разработчик код которого работает в production

00:00 Вступление и оглавление
01:06 Определения (теория)
01:45 Чем опасны SQL Injection
03:34 Практический стенд
06:12 Обхода аутедентификации
09:23 Модификации базы данных
11:47 Защита с помощью placeholder
15:49 Защита там где placeholder не применимы
18:52 Поддержи канал

https://github.com/smpl/youtube/tree/master/pdo примеры кода
Плейлист: https://youtube.com/playlist?list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3
Канал с новостями: https://t.me/KuvshinovEvgeniy
Чат с обсуждениями: https://t.me/dev_ru
https://www.tinkoff.ru/cf/5c4FFQvrspu
https://new.donatepay.ru/@kuvshinovee

## [PHP, PDO Подготовленные запросы, EXECUTE vs PREPARE Statement](https://www.youtube.com/watch?v=crDvjTUvdi4)

Что такое PREPARE и EXECUTE Statement в чем отличия подготовленных запросов, как с этим работать с PHP и PDO

00:00 Вступление
00:24 EXECUTE и PREPARE
00:50 EXECUTE Statement
03:08 PREPARE Statement
07:09 Пример именованные placeholder
07:53 Пример неименованные placeholder
08:28 bindParam и bindValue
12:09 PDO эмулирует подготовленные запросы по умолчанию!!!
14:20 query использует prepare, а не execute!!!
15:25 При отключенной эмуляции нельзя сделать выборку по EXECUTE!!!
16:23 Почему placeholder только для значений
18:11 Спасибо за внимание 


https://github.com/smpl/youtube/tree/master/pdo примеры кода
Плейлист: https://youtube.com/playlist?list=PL7Nh93imVuXw_wvYPFsbb33f_ZiXkyLO3
https://www.tinkoff.ru/cf/5c4FFQvrspu
https://new.donatepay.ru/@kuvshinovee
Канал с новостями: https://t.me/KuvshinovEvgeniy
Чат с обсуждениями: https://t.me/dev_ru