<html>
<title>mi framework</title>
<head>
</head>
<body>
    <div id="slidebox">
     <ul id="menuima">
    <li><img id="imagen2" src="img/taller1.jpg" alt="logo" height="310" width="910"/></li>
    <li><img id="imagen3" src="img/taller2.jpg" alt="logo" height="310" width="910"/></li>
    <li><img id="imagen4" src="img/taller3.jpg" alt="logo" height="310" width="910"/></li>
    <li><img id="imagen5" src="img/soldadura.jpg" alt="logo" height="310" width="910"/></li>
    </ul>
    </div>
<div id="servicios2">
	<?php
     foreach ($posts as $post): ?>
                <div id="servi2">
        
                    <CENTER><p><?php echo $post['Post']['nombre']?></p>
                    <p><?php echo $post['Post']['descripcion']?></p>
                    <p><?php echo $post['Post']['precio']?></p>
                    <a href="" target="_blank"><img src="<?php echo $post['Post']['imagen'];?>"height="150" width="150"></a>
                   </CENTER>   
                </div>  
    <?php endforeach;?>
</div>
    <a href="/servicios">Ver mas</a>
</html>
</body>
</html>