<?php


class PostsController extends AppController {
    public $helpers = array ('Html','Form');
 
    /*public function index() {
         $this->set('posts', $this->Post->find('all'));
    }*/
    public function admin_add() {
                    if ($this->request->is('post')) {
                        if ($this->Post->save($this->request->data)) {
                            $this->Session->setFlash('se ha guardado .');
                            $this->redirect(array('action' => 'admin_index'));
                        }
                    }
                }
        public function admin_edit($id = null) {
                if (!$id) {
                    throw new NotFoundException(__('Invalid post'));
                }

                $post = $this->Post->findById($id);
                if (!$post) {
                    throw new NotFoundException(__('Invalid post'));
                }

                if ($this->request->is(array('post', 'put'))) {
                    $this->Post->id = $id;
                    if ($this->Post->save($this->request->data)) {
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
                if ($this->Post->delete($id)) {
                    $this->Session->setFlash('se ha guardado');
                    $this->redirect(array('action' => 'admin_index'));
                }
            }


    public function admin_index(){

     $this->paginate = array(
        'conditions' => array('Post.id !=' => '6'),
        'limit' => 2,
    );
     $posts=$this->paginate('Post');

    $this->set('posts', $posts);  

    }

    public function index() {
    $this->set('posts', $this->Post->find('all',array(
        'LIMIT' => '3')));
    
    }


public function index_torno() {

    $this->paginate = array(
        'conditions' => array('Post.id !=' => '6'),
        'limit' => 2,
        'ORDER BY' => array('id' => 'ASC'),
        'conditions'=> array('Post.status ='=> 'torno')
    );
     $posts=$this->paginate('Post');

    $this->set('posts', $posts);    
}
public function index_herreria() {

    $this->paginate = array(
        'conditions' => array('Post.id !=' => '6'),
        'limit' => 2,
        'ORDER BY' => array('id' => 'ASC'),
        'conditions'=> array('Post.status ='=> 'herreria')
    );
     $posts=$this->paginate('Post');

    $this->set('posts', $posts);
    
}

public function index_soldadura() {

    $this->paginate = array(
        'conditions' => array('Post.id !=' => '6'),
        'limit' => 2,
        'ORDER BY' => array('id' => 'ASC'),
        'conditions'=> array('Post.status ='=> 'soldadura')
    );
     $posts=$this->paginate('Post');

    $this->set('posts', $posts);
    
}

public function index_servicios() {

    $this->paginate = array(
        'conditions' => array('Post.id !=' => '6'),
        'limit' => 2,
        'ORDER BY' => array('id' => 'ASC')
        
    );
     $posts=$this->paginate('Post');

    $this->set('posts', $posts);
    
}


    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

     public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('se ha guardado .');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Se ha modificado .'));
            return $this->redirect(array('action' => '../servicios'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
}

function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'view'));
    }
}
}
