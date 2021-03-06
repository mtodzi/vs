<?php
use yii\helpers\Url;
use yii\helpers\Html;

$position = backend\modules\user\models\Position::find()->all();
$select = "<select name='UserEdit[id_position]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>";
foreach ($position as $data){
    if($model!=null){
        if($data->id != $model->id_position){
            $select = $select."<option value = '".$data->id."'>".$data->name_position."</option>";  
        }else{
            $select = $select."<option selected value = '".$data->id."'>".$data->name_position."</option>";    
        }
    }else{
        $select = $select."<option value = '".$data->id."'>".$data->name_position."</option>";
    }    
}
$select = $select."</select>";  
$bloc = "".
        "<div id='user_bloc_kard-".(($model!=null)?$model->id:0)."' class='my_usercard_content_block my-1 mx-1'>".
            "<form id='form-update_user-".(($model!=null)?$model->id:0)."'>".
                Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []).
                Html :: hiddenInput('UserEdit[id]', (($model!=null)?$model->id:0), []).
            "</form>".
            "<div id='user_box-".(($model!=null)?$model->id:0)."' class='my_box userbox'>".
                "<div class = 'my_box_heder'>".
                    "<nav class='navbar navbar-light bg-dark rounded-top'>".
                        "<span class='navbar-brand text-light'>Карточка сотрудника</span>";
                        if($model!=null){
                            if($model->archive==0){
                                $bloc = $bloc.
                                "<!--Форма для отправки пользователя в Архив-->".
                                "<form id='form_archive_user-".$model->id."'>".
                                    Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []).
                                    Html :: hiddenInput('UserArchive[id]', $model->id, []).
                                    Html :: hiddenInput('UserArchive[archive]', $model->archive, ['id'=>'user_archive_val-'.$model->id]).
                                "</form>".
                                "<!--Конец формы для отправки пользователя в Архив-->".        
                                "<div id='user_card_button_edit_archive-".$model->id."' class='flex-box ml-auto'>". 
                                "<!--кнопка добавить в архив сотрудника-->".
                                "<a id='user_archive_button-".$model->id."' class='nav-link btn btn-light user_archive_button mx-1' data-toggle='tooltip' data-placement='left' title='Отправить в архив'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/addarch.svg'])."' alt='Отправить в архив'>".
                                "</a>".
                                "<!--кнопка редактировать сотрудника-->".
                                "<a id='user_edit_button-".$model->id."' class='nav-link btn btn-light user_edit_button' data-toggle='tooltip' data-placement='right' title='Редактировать'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/edit.svg'])."' alt='Применить'>".
                                "</a>".
                                "</div>";
                            }
                        }
                        if($model!=null){
                            if($model->archive==0){
                            $bloc = $bloc.
                            "<!--группировка кнопок в navbar с выравниванием вправо-->".
                            "<div id='user_cancel_button_card_apply-".(($model!=null)?$model->id:0)."' class='flex-box ml-auto' ".(($model!=null)?("style='display: none;'"):'').">". 
                                "<!--кнопка отменить изменения и вернуться-->".
                                "<a id='user_cancel_button-".(($model!=null)?$model->id:0)."' class='nav-link btn btn-light mx-1 user_cancel_button' data-toggle='tooltip' data-placement='left' title='Отмена'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/abort.svg'])."' alt='Отмена'>".
                                "</a>".
                                "<!--кнопка применить изменения-->".
                                "<a id='user_apply_button-".(($model!=null)?$model->id:0)."' class='nav-link btn btn-light user_apply_button' dataser_butt-toggle='tooltip' data-placement='right' title='Применить'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/accept.svg'])."' alt='Применить'>".
                                "</a>".
                            "</div>";
                            }else{
                            $bloc = $bloc.
                            "<!--Форма для отправки пользователя в Архив-->".
                            "<form id='form_archive_user-".$model->id."'>".
                                Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []).
                                Html :: hiddenInput('UserArchive[id]', $model->id, []).
                                Html :: hiddenInput('UserArchive[archive]', $model->archive, ['id'=>'user_archive_val-'.$model->id]).
                            "</form>".
                            "<!--Конец формы для отправки пользователя в Архив-->".        
                            "<div id='user_card_button_edit_archive-".$model->id."' class='flex-box ml-auto'>". 
                                "<!--кнопка вернуть из архива в сотрудники-->".
                                "<a id='user_archive_button-".$model->id."' class='nav-link btn btn-light mx-1 user_archive_button' data-toggle='tooltip' data-placement='left' title='Восстановить из архива'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/recover_arch.svg'])."' alt='Восстановить из архива'>".
                                "</a>".
                            "</div>";    
                            }
                        }else{
                            $bloc = $bloc.
                            "<!--группировка кнопок в navbar с выравниванием вправо-->".
                            "<div id='user_cancel_button_card_apply-".(($model!=null)?$model->id:0)."' class='flex-box ml-auto' ".(($model!=null)?("style='display: none;'"):'').">". 
                                "<!--кнопка отменить изменения и вернуться-->".
                                "<a id='user_cancel_button-".(($model!=null)?$model->id:0)."' class='nav-link btn btn-light mx-1 user_cancel_button' data-toggle='tooltip' data-placement='left' title='Отмена'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/abort.svg'])."' alt='Отмена'>".
                                "</a>".
                                "<!--кнопка применить изменения-->".
                                "<a id='user_apply_button-".(($model!=null)?$model->id:0)."' class='nav-link btn btn-light user_apply_button' dataser_butt-toggle='tooltip' data-placement='right' title='Применить'>".
                                    "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/accept.svg'])."' alt='Применить'>".
                                "</a>".
                            "</div>";
                        }    
                    $bloc = $bloc.            
                    "</nav>".
                "</div>".             
                "<div class='my_box_content rounded-bottom bg-light border border-top-0 border-dark'>".
                    "<div class='row py-2 align-items-start'>".                                       
                        "<div class='col-3'>".
                            "<!--фото сотрудника-->".
                            "<img id='user_img_photo-".(($model!=null)?$model->id:0)."' class='user_photo bg-secondary mx-2' src='".(($model!=null)?$model->getUrlMiniature():(Url::to(['/users/img/users/default/default.svg'])))."'class='align-self-start' alt='фото сотрудника'>".
                            
                            "<!--Начало модального окна-->".
                            "<div class='modal' id='modal_update_photo_user-".(($model!=null)?$model->id:0)."' tabindex='-1' role='dialog'>".
                                "<div class='modal-dialog' role='document'>".
                                    "<div class='modal-content'>".
                                        "<div class='modal-header'>".
                                            "<h5 class='modal-title'>Фото сотрудника".(($model!=null)?(' - '.$model->employeename):'.')."</h5>".
                                            "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>".
                                                "<span aria-hidden='true'>&times;</span>".
                                            "</button>".
                                        "</div>".
                                    "<div class='modal-body'>".
                                        "<p>Хотите изменит фото</p>".
                                        "<input name='UserPhoto[photo]' id='input_photo_update-".(($model!=null)?$model->id:0)."' type='file'>".
                                    "</div>".
                                    "<div class='modal-footer'>".
                                        "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Закрыть</button>".                   
                                    "</div>".
                                "</div>".
                            "</div>".
                    "</div>".
                    "<!--Конец модального окна-->".
                    
                    "<div id='block_button_photo_edit-".(($model!=null)?$model->id:0)."' class='col-10 col-xl-2 col-md-2' ".(($model!=null)?("style='display: none;'"):'').">".
                    "<!--кнопка редактировать фото-->".
                        "<a id='user_photo_edit_button-".(($model!=null)?$model->id:0)."' class='btn btn-dark mx-3 my-1 btn-update-photo' data-toggle='tooltip' data-placement='bottom' title='Изменить фото'>".
                            "<img id ='menu_navbar_top' class='' src='".Url::to(['/img/change_photo.svg'])."' alt='Изменить фото'>".
                        "</a>". 
                    "</div>".
                        "</div>";
                        if($model!=null){
                        $bloc = $bloc.    
                        "<div id='user_data-".$model->id."' class='col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12' >".                
                            "<h5 class='mt-0 mx-2'><span id='span_user_employeename-".$model->id."' >".$model->employeename."</span> - <span id='span_user_name_position-".$model->id."'>".$model->position->name_position."</span></h5>".
                            "<p class='p_margin0 mx-2'><img class='my_icon' src='".Url::to(['/img/mail.svg'])."'><span id='span_user_email-".$model->id."'>".$model->email."</span></p>".
                            "<p class='p_margin0 mx-2'><img class='my_icon' src='".Url::to(['/img/smartphone-call.svg'])."'><span id='span_user_phone-".$model->id."'>".$model->phone."</span></p>".
                            "<p class='p_margin0 mx-2'><img class='my_icon' src='".Url::to(['/img/home.svg'])."'><span id='span_user_address-".$model->id."'>".$model->address."</span></p>".
                        "</div>";
                        }
                        $bloc = $bloc.
                        "<div id='user_data_edit-".(($model!=null)?$model->id:0)."' class='col-xl-9 col-lg-9 col-md-9 col-sm-11 col-11 m-auto' ".(($model!=null)?("style='display: none;'"):'').">".
                            "<div id='user_alert_server-".(($model!=null)?$model->id:0)."' class='alert alert-danger' role='alert' style='display: none;'>".
                                "<span id='span_user_alert_server-".(($model!=null)?$model->id:0)."'>Ошибка</span>".
                        "</div>".
                        "<h5><p class='form-row my-2 mx-2'> <input id='input_user_employeename-".(($model!=null)?$model->id:0)."' name='UserEdit[employeename]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12' type='text' value='".(($model!=null)?$model->employeename:'')."' placeholder='Введите ФИО нового сотрудника'> - ".
                                $select.
                            "</p>".
                        "</h5>".
                        "<p id = 'error_user_employeename-".(($model!=null)?$model->id:0)."' class='text-danger my-2 mx-2' style='display: none;'>Ошибка</p>".
                        "<p class='form-row my-2'><img class='my_icon mx-1 my-2' src='".Url::to(['/img/mail.svg'])."'> <input id='input_user_email-".(($model!=null)?$model->id:0)."' name='UserEdit[email]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-10' type='mail' value='".(($model!=null)?$model->email:'')."' placeholder='Введите адрес электронной почты'> </p>".
                        "<p id = 'error_user_email-".(($model!=null)?$model->id:0)."' class='text-danger my-2' style='display: none;'>Ошибка</p>".
                        "<p class='form-row my-2'><img class='my_icon mx-1 my-2' src='".Url::to(['/img/smartphone-call.svg'])."'> <input id='input_user_phone-".(($model!=null)?$model->id:0)."' name='UserEdit[phone]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-10  phone' type='text' value='".(($model!=null)?$model->phone:'')."' placeholder='Введите номер телефона'></p>".
                        "<p id = 'error_user_phone-".(($model!=null)?$model->id:0)."' class='text-danger my-2' style='display: none;'>Ошибка</p>".
                        "<p class='form-row my-2'><img class='my_icon mx-1 my-2' src='".Url::to(['/img/home.svg'])."'> <input id='input_user_address-".(($model!=null)?$model->id:0)."' name='UserEdit[address]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-10' type='text' value='".(($model!=null)?$model->address:'')."' placeholder='Введите домашний адрес'> </p>".
                        "<p id = 'error_user_address-".(($model!=null)?$model->id:0)."' class='text-danger my-2' style='display: none;'>Ошибка</p>";
                        if($model!=null){
                        $bloc = $bloc.            
                        "<div class='form-check mx-4'> ".
                            "<input class='form-check-input'  type='checkbox' id='check_user_pass_change-".$model->id."'>".
                            "<input class='form-check-input' name='check_user_pass_change' form='form-update_user-".$model->id."' value='0' type='hidden' id='check_user_pass_change_hidden-".$model->id."'>".
                            "<label class='form-check-label' for='defaultCheck1'> сменить пароль </label> ".
                        "</div>";
                        }
                        $bloc = $bloc.
                        "<div class='mx-4' id='user_change_pass_block-".(($model!=null)?$model->id:0)."' ".(($model!=null)?("style='display: none;'"):'').">".
                            "<p class='form-row my-2'> <input id='input_user_password-".(($model!=null)?$model->id:0)."' name='UserEdit[password]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-6' type='password' placeholder='Задайте пароль'> </p>".
                            "<p id = 'error_user_password-".(($model!=null)?$model->id:0)."' class='text-danger my-2' style='display: none;'>Ошибка</p>".
                            "<p class='form-row my-2'> <input id='input_user_prePassword-".(($model!=null)?$model->id:0)."' name='UserEdit[prePassword]' form='form-update_user-".(($model!=null)?$model->id:0)."' class='form-control col-6' type='password' placeholder='Введите пароль повторно'> </p>".
                            "<p id = 'error_user_prePassword-".(($model!=null)?$model->id:0)."' class='text-danger my-2' style='display: none;'>Ошибка</p>".
                        "</div>".
                    "</div>".
                "</div>".    
            "</div>".
        "</div>".
    "</div>";
echo $bloc;
?>
