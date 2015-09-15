<html>
<title>mi framework</title>
<head>
</head>
<body>
	<?php
$paginator=$this->Paginator;?>
<p><?php echo $this->Html->link('agregar contacto', array('action' => 'admin_add')); ?></p>
<?php
     foreach ($Contactos as $post): ?>
        
                    <p><?php echo $post['Contacto']['nombre']?></p>
                    <p><?php echo $post['Contacto']['comentario']?></p>
                    <p><?php echo $post['Contacto']['correo']?></p>
                    <p><?php echo $post['Contacto']['telefono']?></p>
                 
                 <?php echo $this->Form->postLink(
		            'borrar',
		            array('action' => 'admin_delete', $post['Contacto']['id']),
		            array('confirm' => 'estas seguro que deseas borrar?'));
		         ?>
    			<?php echo $this->Html->link('Editar', array('action' => 'admin_edit', $post['Contacto']['id']));?>

    <?php endforeach;
       // pagination section
    echo "<div class='paging'>";

        echo $paginator->first("Primera");

        if($paginator->hasPrev()){
            echo $paginator->prev("Anterior");
        }
        
        // the 'number' page buttons
        echo $paginator->numbers(array('modulus' => 2));
        
        // for the 'next' button
        if($paginator->hasNext()){
            echo $paginator->next("Siguiente");
        }
        
        // the 'last' page button
        echo $paginator->last("Ultima");
    
    echo "</div>";
         
?>
</body>
</html>