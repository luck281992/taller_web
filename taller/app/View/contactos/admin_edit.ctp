<h1>Edit</h1>
<?php
    echo $this->Form->create('Contacto', array('action' => 'admin_edit'));
    echo $this->Form->input('nombre');
	echo $this->Form->input('comentario', array('rows' => '3'));
	echo $this->Form->input('correo');
	echo $this->Form->input('telefono');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('modifico contacto');
 ?>