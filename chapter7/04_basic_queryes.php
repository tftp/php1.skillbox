<?php
$host = 'localhost';
$user = 'root';
$password = 'qwe1rty2';
$dbname = 'mydb';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {
    echo mysqli_get_host_info($connect);
    $result = mysqli_query(
        $connect,
        "insert into stock (name)
        values ('большой склад'), ('средний склад')"); //заполняем stock

        var_export($result);

    $result = mysqli_query(
        $connect,
        "select * from stock"); //выборка содержимого таблицы stock для просмотра

    while($row = mysqli_fetch_assoc($result)) {
        var_export($row); //выведет строки типа array('id'=>'2', 'name'=>'большой склад')
    }

    $result = mysqli_query(
        $connect,
        "insert into products set name='Стол', count='3', price=4000, stock_id=2"); //заполняем products

        var_export($result);

    $result = mysqli_query(
        $connect,
        "update products set price=5000"); //обновление или изменение данных в таблице products

        var_export($result); //вернет true при успехе

    $result = mysqli_query(
        $connect,
        "insert into products (name, price, count, stock_id)
        values ('Стул', '500', '1', '2')");

        var_export($result); //вернет true при успехе

    $result = mysqli_query(
        $connect,
        "update products set price='550' where id='2'" ); //использование where для обновления products
        // или
        "update products set price=price + '50' where id='2'" ); //использование where для обновления products
        // или
        "update products set price=price + '50' order by price asc limit 2" ); //order сортирует limit задает количество изменяемых записей

        var_export($result); //вернет true при успехе

    $result = mysqli_query(
        $connect,
        "delete from products order by price asc limit 2;"); //удаляем заданные записи из таблицы products

        var_export($result); //вернет true при успехе

    $result = mysqli_query(
        $connect,
        "select name as 'Название', price as 'Цена' from products"); // выбираеь записи и вместо name будем выводить Название
        // или если есть дублирующие записи
        "select distinct name from products"); //distinct исключает повторяющиеся записи
        // или
        "select name, price from products where price <> 2000");
        // или
        "select name, price from products where price != 2000");
        // или
        "select name, price from products where discription is null"); // где в поле discription есть null (is not - наоборот)
        // или
        "select name, price from products where price between 2000 and 5000");//выбока между 2000 до 5000
        // или
        "select name, price from products where price in(2000, 5000)");// выводим товару только с ценой 2000 и 5000
        // или
        "select name, price from products where name like 'Ст%'");//шаблон 'Ст%' - что после Ст любое количество символов
        // если укажем шаблон '%Молоко%' то выведет все товары где есть слово Молоко
        // или
        "select name, sum(count) from products group by name");// group by name - груперуем по имени, выводим новое поле sum(count) - суммирование товара по полю count
        // или
        "select name, max(price) as 'Максимальная цена' from products group by name");//вывод максимальной цены для товара для минимальной цены используем min()
        // или
        "select name, stock_id from products group by name, stock_id");//сгруперует и по имени и по номеру склада
        // или
        "select name, stock_id, sum(count) from products group by name, stock_id");//сгруперует по имени, по номеру склада и по количеству товара на складе
        // или
        "select name, stock_id, sum(count) as 'Количество' from products group by name, stock_id having Количество > 30 and Количество < 50");//having - фильтрация
        // или
        "select name, count, price from products order by name asc");// сортировка по name в выборке

    while($row = mysqli_fetch_assoc($result)) {
        var_export($row); //выведет строки сделаной выборки
    }
}

mysqli_close($connect);
