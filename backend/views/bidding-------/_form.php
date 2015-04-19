<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bidding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidding-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => 11]) ?>

    <?php //$form->field($model, 'user_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'car_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'bid_price')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
