<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
function clear($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if (!empty($_POST['name'])) {
	echo 'spam';		
}else {				
	$iblockId = 15;	
	CModule::IncludeModule('iblock');
	$el = new CIBlockElement;

	$PROP = array();
	$PROP[54] = clear($_POST['987654']);
	$PROP[55] = clear($_POST['phone']);
	$PROP[56] = clear($_POST['form-name']);
	$mess = clear($_POST['message']);

	$arLoadProductArray = Array(
	  "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
	  "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
	  "IBLOCK_ID"      => $iblockId,
      "PROPERTY_VALUES"=> $PROP,
      "PREVIEW_TEXT"   => $mess,
	  "NAME"           => $PROP[54].' '.$PROP[55].' '.$PROP[56],	  
	  "ACTIVE"         => "Y",            // активен  
	  );

	$PRODUCT_ID = $el->Add($arLoadProductArray);

	$arEventFields['NAME'] = $PROP[54];
	$arEventFields['PHONE'] = $PROP[55];	
    $arEventFields['ELEMENT'] = $PROP[56];	
    $arEventFields['TEXT'] = $mess;
	CEvent::SendImmediate("CRT_SEND_QUESTION", 's1', $arEventFields);	
	echo 'ok';
}?>