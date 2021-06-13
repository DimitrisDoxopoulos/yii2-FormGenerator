<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_form')->textInput() ?>

    <?= $form->field($model, 'Action')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
