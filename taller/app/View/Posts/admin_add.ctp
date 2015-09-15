<?php
echo $this->Form->create('Post', array('action' => 'admin_add'));
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '3'));
echo $this->Form->input('precio');
echo $this->Form->input('imagen');
echo $this->Form->input('status');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Guardar servicio');
?>