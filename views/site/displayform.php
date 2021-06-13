<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Forms */
/* @var $form ActiveForm */
?>
<div class="displayform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'active') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- displayform -->
