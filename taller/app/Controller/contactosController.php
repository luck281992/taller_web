<?php


class ContactosController extends AppController {
    public $helpers = array ('Html','Form');
 
  public function view($id = null) {
        $this->Contacto->id = $id;
        $this->set('Contactos', $this->Contacto->read());
    }

public function admin_add() {
                    if ($this->request->is('post')) {
                        if ($this->Contacto->save($this->request->data)) {
                            $this->Session->setFlash('se ha guardado .');
                            $this->redirect(array('action' => 'admin_index'));
                        }
                    }
                }
        public function admin_edit($id = null) {
                if (!$id) {
                    throw new NotFoundException(__('Invalid post'));
                }

                $post = $this->Contacto->findById($id);
                if (!$post) {
                    throw new NotFoundException(__('Invalid post'));
                }

                if ($this->request->is(array('post', 'put'))) {
                    $this->Contacto->id = $id;
                    if ($this->Contacto->save($this->request->data)) {
                        $this->Session->setFlash(__('Se ha modificado .'));
                        return $this->redirect(array('action' => 'admin_index'));
                    }
                    $this->Session->setFlash(__('Unable to update your post.'));
                }

                if (!$this->request->data) {
                    $this->request->data = $post;
                }
            }
       public function admin_delete($id) {
                if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
                }
                if ($this->Contacto->delete($id)) {
                    $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
                    $this->redirect(array('action' => 'admin_index'));
                }
            }


    public function admin_index(){

     $this->paginate = array(
        'conditions' => array('Contacto.id !=' => '6'),
        'limit' => 2,
    );
     $posts=$this->paginate('Contacto');

    $this->set('Contactos', $posts);  

    }

 
    public function index() {
         $this->set('Contactos', $this->Contacto->find('all'));
    }

        public function add() {

        if ($this->Contacto->save($this->request->data)) {
            $this->Session->setFlash('se a guardado');
            $this->redirect(array('action' => 'index'));
        }
    }
    
    public function delete($id = null) {
        $this->Contacto->id = $id;

        if(!$this->Contacto->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->Contacto->delete($id)) {
            $this->Session->setFlash('El Contacto con id ' . $id . 'a sido eliminado.');
            $this->redirect(array('action' => 'index'));
        }
}

  public function edit($id = null) 
 {   $this->Contacto->id = $id; 
    if (empty($this->data)) { 
     $this->data = $this->Contacto->read(); 
    }
     else {  
     if ($this->Contacto->save($this->data)) {
  
        $this->Session->setFlash('Tu Contacto a sido editado correctamente.');
        $this->redirect(array('action' => 'index')); 
       }   
     }  


 }

}
