<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contacto extends AppModel {
        public $name = 'Contacto';

        public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'comentario' => array(
            'rule' => 'notEmpty'
        ),     
        'correo' => array(
            'rule' => array('email',true),
            'message' => 'favor de poner correctamente su email'
        ),     
        'telefono' => array(
             'rule' => array('numeric'),
            'message' => 'este campo es numerico y no puede quedar vacio'
        )
    );
}

