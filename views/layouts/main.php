<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->beginContent(viewFile: '@app/views/layouts/base.php');
?>
  
<main class="d-flex">
    <?php echo $this->render(view: '_sidebar.php') ?>

    <div class="content-wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent(); ?>