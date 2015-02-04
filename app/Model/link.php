<?php
App::uses('Model', 'Model');
class Link extends AppModel {
    var $name = 'Link';
 
    var $validate = array(
        'title' => array(
            'rule' => array('maxLength', '30'),
            'allowEmpty' => false,
            'message' => 'Titulo no valido'
        ),
        'url' => array(
            'rule' => 'url',
            'required' => true,
            'message' => 'Debe introducir un email correcto'
        )
    );
}
?>