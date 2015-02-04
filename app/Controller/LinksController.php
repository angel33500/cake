<?php
App::uses('AppController', 'Controller');
class LinksController extends AppController {
    var $name = 'Links';
    function add() {
        if (!empty($this->data)) {
            if ($this->Link->save($this->data)) {
                $this->flash('Enlace añadido.','/links');
            }
        }
    }
 
    function index() {
        $this->set('links', $this->Link->findAll());
    }
}
?>