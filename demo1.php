<?
    
    
    $mrh_login = "GameOops"; // идентификатор магазина
    $mrh_pass1 = "pqowieuryt1"; // пароль #1
    
   
    $inv_desc = "Тестовая оплата"; // описание заказа
    
    $out_summ = "5"; // сумма
    
    $shp_item = 1; // тип товара
    
    $in_curr = ""; // предлагаемая валюта платежа
    
    $culture = "ru"; // язык
    
    $encoding = "utf-8"; // кодировка
    
    $crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item:shp_mulo=$email:shp_names=$name:shp_phone=$phone"); // формирование подписи
    
    
    Header("Location: http://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id&IncCurrLabel=$in_curr".
          "&Desc=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item".
          "&Culture=$culture&Encoding=$encoding&shp_mulo=$email&shp_names=$name&shp_phone=$phone");
      
}

?>