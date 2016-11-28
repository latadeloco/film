<?php

namespace app\models;

class Cliente extends \yii\base\Model
{
    public $nombre;
    public $apellidos;
    public $telefono;

    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'telefono'], 'required'],
            ['telefono', 'number'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'telefono' => 'Teléfono',
        ];
    }
}
