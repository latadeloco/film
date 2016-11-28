<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="row">
    <div class="col-offset-md-2 col-md-8">
        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($model, 'nombre')->hint('Introduzca el nombre') ?>
        <?= $form->field($model, 'apellidos')->hint('Introduzca los apellidos') ?>
        <?= $form->field($model, 'telefono')->dropDownList($fichas, [
            'prompt' => 'Seleccione uno...',
            ]) ?>
        <div class="form-group">
            <?=Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
