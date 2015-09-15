<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post extends AppModel {
        public $name = 'Post';

         public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'descripcion' => array(
            'rule' => 'notEmpty'
        ),     
        'precio' => array(
            'rule' => array('decimal',2),
            'message' => 'favor de poner precio, de 2 decimales'
            
        ),     
        'imagen' => array(
            'rule' => 'notEmpty'
        ),    
        'status' => array(
            'rule' => 'notEmpty'
        )       
    );
}

