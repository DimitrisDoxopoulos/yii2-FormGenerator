<?php

/* @var $this yii\web\View */
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Form Generator';
?>
<div class="site-index">
    <div class="text-center">
        <h1>Form Generator</h1>
        <h4>Dimitris Doxopoulos, for Interad</h4>
    </div>
</div>
<div class="displayform">
    <?php if (count($forms) > 0) : ?>
        <?php foreach ($forms as $form) : ?>
            <h3><?=$form->form_name?></h3>
                <?php 
                    foreach ($form->actions as $action) {
                        echo '<form method="post" action="' . $action->Action . '">';
                    } 
                ?>
                <?php foreach ($form->inputs as $input) : ?>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="<?= $input->Label . "_id" ?>" placeholder="<?= $input->Label ?>" <?php if ($input->Required == 1) echo "required" ?>>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form><br><br>
        <?php endforeach; ?>
    <?php else: ?>
    <h2>There are no forms on the record</h2>
    <?php endif; ?>
</div>
