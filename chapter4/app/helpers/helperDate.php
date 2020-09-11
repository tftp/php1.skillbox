<?php
namespace helperDate;


/**
*Функция возвращает текущее значение года в полном формате
* @return значение текущего года в формате string
*/

function getYear() : string {
    return date('Y');
}
/**
*Функция возвращает дату разницу между текущим днем и количеством указанных дней
* @param количество дней, целое число
* @param формат даты
* @return значение текущего года в формате string
*/

function getDateAgo(int $day = 0, string $format = '') : string {
    switch ($format) {
        case 'long':
            $returnFormat = SITE_DATE_FORMATE_LONG;
            break;
        case 'short':
            $returnFormat = SITE_DATE_FORMATE_SHORT;
            break;

        default:
            $returnFormat = 'H:i:s';
            break;
    }
    return date($returnFormat, time() - $day * 86400); //в сутках 86400 секунд
}
?>
