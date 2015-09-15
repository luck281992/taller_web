<CENTER><h1>Agregar un Nuevo contacto</h1></CENTER>
<div id="conte">
<?php
echo $this->Form->create('Contacto', array('action' => 'add'));
echo $this->Form->input('nombre');
echo $this->Form->input('comentario');
echo $this->Form->input('correo');
echo $this->Form->input('telefono');
echo $this->Form->end('Guardar contacto');
?></div>