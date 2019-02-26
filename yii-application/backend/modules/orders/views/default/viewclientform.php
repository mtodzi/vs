<?php
use yii\helpers\Url;
use yii\helpers\Html;
use backend\modules\orders\models\ClientsPhones;

//Начало формирования телефонов клиентов для редактирования
$phonestr = "";
if($modelClients==null){
    if($modelOrders!=null){
        $clients_id = $modelOrders->clients_id;
        $id_orders = $modelOrders->id_orders;
        $clients_name = $modelOrders->clients->clients_name;
    }else{
        $clients_id = 0;
        $id_orders = 0;
        $clients_name = '';
    }    
}else{
    $clients_id = $modelClients->id_clients;
    $id_orders = 0;
    $clients_name = $modelClients->clients_name;
}
if($clients_id!=0){        
    $ClientsPhones = ClientsPhones::findAll(['clients_id'=>$clients_id]);
    $count = count($ClientsPhones);
    $i=1;
    foreach ($ClientsPhones as $phone){
        $phonestr = $phonestr."".
        "<div id = 'div_orders_clients_phone-".$id_orders."-".$i."' class='div_orders_phone-".$id_orders."'>".        
            "<p id='p_orders_clients_phone-".$id_orders."-".$i."' class='form-row my-2 orders_phone-".$id_orders." orders_phone'>".
                "<img class='my_icon mx-1 my-2' src='".Url::to(['/img/smartphone-call.svg'])."'>".
                "<input id='input_orders_clients_phone-".$id_orders."-".$i."' name='ClientsPhonesEdit[phone_number-".$i."]' value='".$phone->phone_number."'  form='' class='form-control col-8 phone phone_input phone_input-".$id_orders."' type='text' placeholder='*Введите номер телефона'>";
                if($count>1){
                    $phonestr = $phonestr."".
                    "<a  id = 'delete_another_phone-".$id_orders."-".$i."' class='btn btn-dark delete_another_phone mx-1' href='#' data-count-phone='".$count."' data-toggle='tooltip' data-placement='right' title='Удалить телефон'>".
                        "<img id ='menu_navbar_top' class='' src='/yii-application/backend/web/m_orders/img/minus.svg' alt='Удалить телефон'>".
                    "</a>";
                }
                $phonestr = $phonestr."".        
                "<p id = 'error_orders_clients_phone-".$id_orders."-".$i."' class='text-danger my-2 mx-2 error_orders_phone-".$id_orders."' style='display: none;'>Ошибка</p>".                             
            "</p>".
        "</div>";
        $i++;
    }
    $phonestr = $phonestr."".
        "<p class='form-row my-2'>".
            "<a  id = 'add_another_phone-".$id_orders."' class='btn btn-dark add_another_phone mx-1' href='#' data-count-phone='".$count."' data-toggle='tooltip' data-placement='right' title='Добавить еще телефон'>".
                "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/add.svg'])."' alt='Добавить еще телефон'>".
            "</a>".
        "</p>";
}else{
    $phonestr = $phonestr."".
        "<div id = 'div_orders_clients_phone-0-1'class='div_orders_phone-0'>        
            <p id='p_orders_clients_phone-0-1' class='form-row my-2 orders_phone-0 orders_phone'>
                <img class='my_icon mx-1 my-2' src='".Url::to(['/img/smartphone-call.svg'])."'>
                <input id='input_orders_clients_phone-0-1' name='ClientsPhonesEdit[phone_number-0]' value=''  form='' class='form-control col-8 phone phone_input phone_input-0' type='text' placeholder='*Введите номер телефона'>       
                <p id = 'error_orders_clients_phone-0-1' class='text-danger my-2 mx-2 error_orders_phone-0' style='display: none;'>Ошибка</p>                             
            </p>
        </div>                       
        <p class='form-row my-2'>
            <a id ='add_another_phone-0' class='btn btn-dark add_another_phone mx-1' data-count-phone='1' data-toggle='tooltip' data-placement='right' title='Добавить еще телефон'>
                <img id ='menu_navbar_top' class='' src='".Url::to(['/img/add.svg'])."' alt='Добавить еще телефон'>
            </a>
        </p>";
}
//Конец формирования телефонов клиентов для редактирования


?>

<div id='orders_clients_form-<?=$id_orders?>'>
    <div id = 'div_input_orders_clients_name-<?=$id_orders?>'>
        <p id = 'p_input_orders_clients_name-<?=$id_orders?>' class='form-row my-2'>
            <img class='my_icon mx-1 my-2' src='<?=Url::to(['/img/orders/thumb/client.svg'])?>'>
            <input id='input_orders_clients_name-<?=$id_orders?>' name='ClientsEdit[clients_name]' value='<?=$clients_name?>' form='form-create_orders-0' class='form-control col-10 input_clients_name' type='name' placeholder='*Введите ФИО клиента'>
            <?=Html :: hiddenInput('OrdersEdit[clients_id]',$clients_id, [])?>
            <p id = 'error_orders_clients_name-<?=$id_orders?>' class='text-danger my-2 mx-2' style='display: none;'>Ошибка</p>
        </p>
    </div>    
    <!--Телефон клиента-->
        <?=$phonestr?>                                                        
    <!--Телефон клиента-->
</div>
