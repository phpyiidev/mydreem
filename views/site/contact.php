<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Связаться';
?>
<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/header-bg/4.jpg">
    <div class="container">
        <h2>Связаться</h2>
    </div>
</section>
<!-- Page top section end -->

<!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="contact-title">Contact Info</h2>
                <div class="contact-info-warp">
                    <h4>Location</h4>
                    <div class="contact-info">
                        <img src="img/icons/1-dark.png" alt="">
                        <div class="cf-text">
                            <p>1525  Awesome Lane, Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="contact-info-warp">
                    <h4>Subscriptions</h4>
                    <div class="contact-info">
                        <img src="img/icons/2-dark.png" alt="">
                        <div class="cf-text">
                            <p>+1 (603)535-4592</p>
                            <p>+1 (603)535-4556</p>
                        </div>
                    </div>
                </div>
                <div class="contact-info-warp">
                    <h4>E-mail</h4>
                    <div class="contact-info">
                        <img src="img/icons/3-dark.png" alt="">
                        <div class="cf-text">
                            <p>Contact@xgym.com</p>
                            <p>www.xgym.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h2 class="contact-title">Напишите мне</h2>
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <div class="alert alert-success">
                        Спасибо за Ваш отклик. Я обязательно отвечу Вам!
                    </div>
                <?php else: ?>
                    <?php $form = ActiveForm::begin([
                        'id' => 'contact-form',
                        'options' => [
                            'class' => 'contact-form'
                        ],
                    ]); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => "Ваше имя"]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'email')->textInput(['placeholder' => "E-mail для ответа"]) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $form->field($model, 'subject')->textInput(['placeholder' => "Тема сообщения"]) ?>
                                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => "Сообщение"]) ?>
                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->