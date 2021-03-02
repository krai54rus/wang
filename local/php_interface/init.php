<? 

if(CModule::IncludeModule("catalog") && CModule::IncludeModule("sale")){
   $fuserId = CSaleBasket::GetBasketUserID();
   $dbBasketItems = CSaleBasket::GetList(
      array(),
      array(
         "FUSER_ID" => $fuserId,
         //"LID" => SITE_ID, // это нам не надо
         "ORDER_ID" => "NULL",
         //"ID" => $id, // это тоже не надо
      ),
      false,
      false,
      array('ID', 'DELAY', 'CAN_BUY', 'SET_PARENT_ID', 'TYPE', 'NAME', "PRODUCT_ID", "LID")
   );
   $arBasket = array();
   while($b = $dbBasketItems->Fetch()){
      $arBasket[] = $b;
   }
   foreach($arBasket as $arProduct){
      $arFields = array(
         "LID" => SITE_ID, // вот здесь и происходит финт ушами
      );
      CSaleBasket::Update($arProduct["ID"], $arFields);
   }   
}