<?php

$result = mysqli_query(
    $connect,
    "select products.name as 'Название продукта', count, price, stock_id, stock.name as 'Название склада' from products inner join stock on stock_id = stock.id"); //inner общее объединение, on - какие данные объеденять
    // left join - по возможности объеденяет данные, если данных нет в stock_id то select при выборке склада укажет пустое значение.
        //Данные берутся из первой таблицы и по возможности дополняются данными из второй таблицы.
    // right join - по возможности объеденяет данные, если данных нет в stock_id то select при выборке продуктов укажет пустое значение.
        //Данные берутся из второй таблицы и по возможности дополняются данными из первой таблицы.
while($row = mysqli_fetch_assoc($result)) {
    var_export($row);
}
