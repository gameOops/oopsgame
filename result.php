<?


/*
==========================
    Скрытая работа скрипта
==========================
*/

$mrh_pass2 = "473eX10ioPlm"; // пароль #2 

// чтение параметров
$out_summ = $_REQUEST["OutSum"]; // по умолчанию (не трогать)
$inv_id = $_REQUEST["InvId"]; // по умолчанию (не трогать)
$shp_item = $_REQUEST["Shp_item"]; // по умолчанию (не трогать)
$crc = $_REQUEST["SignatureValue"]; // по умолчанию (не трогать)

$shp_mulo = $_REQUEST["shp_mulo"]; // принимаем дополнительный параметр
$shp_names = $_REQUEST["shp_names"]; // принимаем дополнительный параметр
$shp_phone = $_REQUEST["shp_phone"]; // принимаем дополнительный параметр

$crc = strtoupper($crc); // переводим ключ в верхний регистр

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item:shp_mulo=$shp_mulo:shp_names=$shp_names:shp_phone=$shp_phone")); // формируем новый ключ

if ($my_crc != $crc) // проверка корректности подписи
{
  echo "bad sign\n";
  exit(); // останавливаем выполнение скрипта, если подписи не совпадают
}

$count = file_get_contents("count.txt"); //получаем номер покупки

$fp = fopen('count.txt', 'w'); //перезаписываем номер покупки в файл count.txt
fwrite($fp, $count+1);
fclose($fp);

// конвертируем полученные данные в нормальный режим
$email_k = urldecode(base64_decode($shp_mulo));
$name_k = urldecode(base64_decode($shp_names));
$phone_k = urldecode(base64_decode($shp_phone));

$result = $email_k."\r\n".$name_k."\r\n".$phone_k; // поместим данные в одну переменную

// записываем информацию о последней покупке с сайта в файл last_order.txt
// конечно лучше заносить данные в базу, но я показал простой вариант
$fp = fopen('last_order.txt', 'w');
fwrite($fp, $result);
fclose($fp);

echo "OK$inv_id\n"; // признак успешно проведенной операции (обязательно!)

?>


