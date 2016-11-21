<?php
use yii\helpers\Html;
?>
<h1>Hola <?= Html::encode($persona->nombre) ?> <?= Html::encode($persona->apellidos) ?></h1>
<p>
    Encantado de saludarte.
</p>
