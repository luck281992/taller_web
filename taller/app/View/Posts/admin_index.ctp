<html>
<title>mi framework</title>
<head>
</head>
<body>
<?php
$paginator=$this->Paginator;?>
<p><?php echo $this->Html->link('agregar servicio', array('action' => 'admin_add')); ?></p>
<?php
foreach ($posts as $post): ?>
                <div id="bd">
                    
                    <h2 id="bdmg"><?php echo $post['Post']['nombre']?></h2>
                    <h2 id="bdimg2"><?php echo $post['Post']['descripcion']?></h2>
                    <h2 id="bdimg2"><?php echo $post['Post']['precio']?></h2>
                    <img id="imb" src="../<?php echo $post['Post']['imagen'];?>"height="250" width="400"></a>
                 
                    <p><?php echo $this->Form->postLink(
                    'borrar',
                    array('action' => 'admin_delete', $post['Post']['id']),
                    array('confirm' => 'estas seguro que deseas borrar?'));
                    ?></p>
                    <p><?php echo $this->Html->link('Editar', array('action' => 'admin_edit', $post['Post']['id']));?></p>
                </div>

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
</html>
</body>
</html>