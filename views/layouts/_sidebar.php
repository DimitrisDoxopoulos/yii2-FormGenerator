<?php

?>
<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => ['d-flex flex-column nav-pills']
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Forms',
                'url' => ['/forms']
            ],
            [
                'label' => 'Generate Inputs',
                'url' => ['/inputs']
            ],
            [
                'label' => 'Form Actions',
                'url' => ['/actions']
            ]
        ]
            
    ])
    ?>
</aside>