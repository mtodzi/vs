<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\Url;
use yiister\gentelella\widgets\Accordion;
use yiister\gentelella\widgets\Panel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//$this->registerCssFile('@web/fuser/css/user.css');

$this->title = Yii::t('app', 'Персонал');

?>
<div class='index_user_bloc row'>
    <div class="my_heders_bloc col-12">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="<?=Url::to(['/user/user'])?>">Персонал</a>
            <form class="form-inline float-right">
                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </nav>
    </div>
    <div class="my_content_bloc col-12">
        <div class="my_user_box border">
            <div class="media my-1">
                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/profile.svg'])?>" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Морозов Андрей Алексеевич - менеджер</h5>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">morozov@gmail.com</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(050) 999-13-13</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Сорокина д. 13 кв. 13 </p>
                        <p></p>
                    </div>
            </div>
        </div>
        <div class="my_user_box border my-2">
            <div class="media my-1">
                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/6170248_xlarge.jpg'])?>" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Батасов Роман Александрович - инженер</h5>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">romanbatasov@gmail.com</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(050) 789-98-65</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Щетинина д. 12 кв. 113 </p>
                        <p></p>
                    </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-6 col-12 my-1">
                <div class="my_box">
                    <div class = "my_box_heder">
                        <nav class="navbar navbar-light bg-primary rounded-top">
                            <span class="navbar-brand">Карточка</span>
                            <a  class="btn btn-info float-right" href="<?=Url::to(['/user/user'])?>" data-toggle="tooltip" data-placement="right" title="Редактировать">
                                <img id ="menu_navbar_top" class="" src='<?=Url::to(['/img/edit.svg'])?>' alt="Редактировать">
                            </a>
                        </nav>
                    </div>             
                    <div class="my_box_content rounded-bottom bg-warning">
                        <div class="row py-2">
                            <div class="col-12 col-xl-2">
                                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/6170248_xlarge.jpg'])?>" class="align-self-start mr-3" alt="...">
                            </div>
                            <div class="col-12 col-xl-10">
                                <h5 class="mt-0">Батасов Роман Александрович - инженер</h5>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">romanbatasov@gmail.com</p>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(050) 789-98-65</p>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Щетинина д. 12 кв. 113 </p>
                                <p></p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 my-1">
                <div class="my_box">
                    <div class = "my_box_heder">
                        <nav class="navbar navbar-light bg-primary rounded-top">
                            <span class="navbar-brand">Карточка</span>
                            <a  class="btn btn-info float-right" href="<?=Url::to(['/user/user'])?>" data-toggle="tooltip" data-placement="right" title="Редактировать">
                                <img id ="menu_navbar_top" class="" src='<?=Url::to(['/img/edit.svg'])?>' alt="Редактировать">
                            </a>
                        </nav>
                    </div>             
                    <div class="my_box_content rounded-bottom bg-warning">
                        <div class="row py-2">
                            <div class="col-3">
                                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/6170248_xlarge.jpg'])?>" class="align-self-start mr-3" alt="...">
                            </div>
                            <div class="col-9">
                                <h5 class="mt-0">Батасов Роман Александрович - инженер</h5>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">romanbatasov@gmail.com</p>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(050) 789-98-65</p>
                                <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Щетинина д. 12 кв. 113 </p>
                                <p></p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>  
        
        
      
        <div class="my_user_box border my-2">
            <div class="media my-1">
                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/6170248_xlarge.jpg'])?>" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Попов Михаил Викторович - инженер</h5>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">popos@gmail.com</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(099) 123-45-67</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Майями д. 1 кв. 1 </p>
                        <p>
                            <a  class="btn btn-dark menu_left" href="<?=Url::to(['/user/user'])?>" data-toggle="tooltip" data-placement="bottom" title="Редактировать">
                                <img class="edit_button" src='<?=Url::to(['/img/edit.svg'])?>' alt="Редактировать">
                            </a>
                        </p>
                    </div>
            </div>
        </div>
        <div class="my_user_box border my-2">
            <div class="media my-1">
                <img class="user_photo bg-secondary mx-2" src="<?=Url::to(['/img/6170248_xlarge.jpg'])?>" class="align-self-start mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0"><input class="form-control my_input_employee_name" type="text" value="Попов Михаил Викторович"> - инженер</h5>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/mail.svg'])?>">popos@gmail.com</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/smartphone-call.svg'])?>">(099) 123-45-67</p>
                        <p class="p_margin0"><img class="my_icon" src="<?=Url::to(['/img/home.svg'])?>">ул. Майями д. 1 кв. 1 </p>
                        <p>
                            <a  class="btn btn-dark menu_left" href="<?=Url::to(['/user/user'])?>" data-toggle="tooltip" data-placement="bottom" title="Редактировать">
                                <img id ="menu_navbar_top" class="" src='<?=Url::to(['/img/edit.svg'])?>' alt="Редактировать">
                            </a>
                        </p>
                    </div>
            </div>
        </div>
    </div>
    <div class="my_footer_bloc co-12">
    </div>
</div>
<!--
<div class="user-index">
    <h1><?= Html::encode($this->title) ?></h1>
<div class='col-md-12 col-sm-12 col-xs-12'>
    <div class='x_panel'>
        <div class='x_title'>
            <h2>Карточки работников</h2>
            <ul class='nav navbar-right panel_toolbox'>
                <li>
                    <a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                </li>
                <li>
                    <a class='close-link'><i class='fa fa-close'></i></a>
                </li>
            </ul>
            <div class='clearfix'></div>
        </div>
        <div class='x_content'>
        <?php
        /*
            echo ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'summary'=>FALSE,
                'itemView' => function ($model, $key, $index, $widget) {
                    $bloc = "<div class='col-md-4 col-sm-4 col-xs-12 profile_details'>"
                                ."<div class='well profile_view'>"
                                    ."<div class='col-sm-12'>"
                                        ."<h4 class='brief'><i>$model->employeename</i></h4>"
                                        ."<div class='left col-xs-7'>"
                                            //."<h2>".$model->position->name_position."</h2>"
                                            //."<p><strong>About: </strong> Web Designer / UI. </p>"
                                            ."<ul class='list-unstyled'>"
                                                ."<li><i class='fa fa-phone'></i> Телефон #: $model->phone</li>"
                                                ."<li><i class='fa fa-envelope'></i> Электронная почта: $model->email</li>" 
                                                ."<li><i class='fa fa-building'></i> Address: $model->address</li>"
                                                                                           
                                            ."</ul>"
                                        ."</div>"
                                    ."<div class='right col-xs-5 text-center'>"
                                        //."<img src='".$model->getUrlMiniature()."' alt='' class='img-circle img-responsive'>"
                                    ."</div>"
                                ."</div>"
                                ."<div class='col-xs-12 bottom center '>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['view', 'id' => $model->id])."' class='btn btn-primary btn-xs'>"
                                            ."<i class='fa fa-user'> </i> Данные сотрудника"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['update', 'id' => $model->id])."' class='btn btn-primary btn-xs'>"
                                            ."<i class='fa fa-pencil'> </i> Редактировать"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['foto', 'id' => $model->id])."' class='btn btn-primary btn-xs'>"
                                            ."<i class='fa fa-file-image-o'> </i> Редактировать миниатюру"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['changepassword', 'id' => $model->id])."' class='btn btn-primary btn-xs'>"
                                            ."<i class='fa fa-repeat'> </i> Cменить пароль"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['asktheemployeerole', 'id' => $model->id])."' class='btn btn-primary btn-xs'>"
                                            ."<i class='fa fa-child'> </i> Задать роль"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['deletingauserrole', 'id' => $model->id])."' class='btn btn-danger btn-xs'>"
                                            ."<i class='fa fa-child'> </i> Удалить роль"
                                        ."</a>"
                                    ."</div>"
                                    ."<div class='' style = 'float: left; margin-left: 5px;'>"
                                        ."<a href='".Url::to(['delete', 'id' => $model->id])."' class='btn btn-danger btn-xs' data-confirm='Вы уверенны что хотите удалить - ".$model->employeename."' data-method='post'>"
                                            ."<i class='fa fa-user'> </i> Удалить работника "
                                        ."</a>"
                                    ."</div>"
                                ."</div>"
                            ."</div>"
                        ."</div>";
    
        return $bloc;
            },
        ]);
            
        */  
        ?>   
        </div>
        <div class='clearfix'></div>
        <?= Html::a(Yii::t('app', 'Добавить работника'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
</div>
-->