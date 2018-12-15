<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
   <h1><b><center><?= Html::encode($this->title) ?></b></h1></center>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form">

        <p>Silakan isi form di bawah ini untuk masuk:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}<div class=\"col-md-8\">{input}</div>\n<div>{error}</div>",
                'labelOptions' => ['class' => 'col-md-4 control-label'],
            ],
        ]); ?>

            <?= $form->field($model, 'username') ->label('Masukan Username')?> 

            <?= $form->field($model, 'password')->passwordInput() ->label('Masukan Password')?>


            <div class="form-group">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <?= Html::submitButton('Masuk', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

        </div>
        <div class="col-md-4"></div>
    </div>
    <!--div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div-->
</div>
