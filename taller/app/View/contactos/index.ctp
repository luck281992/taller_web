<html>
<title>mi framework</title>
<head>
</head>
<body>
	<?php

     foreach ($Contactos as $post): ?>
        
                    <p><?php echo $post['Contacto']['nombre']?></p>
                    <p><?php echo $post['Contacto']['comentario']?></p>
                    <p><?php echo $post['Contacto']['correo']?></p>
                    <p><?php echo $post['Contacto']['telefono']?></p>
                  
    
    <?php endforeach;?>
</body>
</html>