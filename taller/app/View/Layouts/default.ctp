<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset();		
	?>
	<title>
		taller industrial guerrero

	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilos');
		echo $this->Html->script('jquery');
	    echo $this->Html->script('jcaru'); 
	    echo $this->Html->script('codigo');		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>
<body>
 <div id="principal1">
		<div id="header">
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div id="principal">
			<div id="arriba2">
			 <h1 id="titulo"> TALLER MECANICO INDUSTRIAL GUERRERO </h1>
			 <h2 id="titulo2"> Torno, Fresado y Soldadura en General, Acero Inoxidable y Herreria</h2>
			 <a href="#"><img id="im1" src="/img/logo.png" alt="Taller guerrero" height="80" width="250"/> 
			 </a>
			 <div id="tel">
			 <img src="/img/tel.jpg" alt ="logo2" height="30" width="30"/>
			 <p id="tele">9-83-42-56</p>
			 </div>
			 <div id="face">
			 <a href="https://www.facebook.com/pages/TMI-Guerrero/1424748461074927" target="_blank">
			 <img id="f" src="/img/facebook.jpg" alt ="logo2" height="30" width="50"/>
			 </a>
			 </div>
			<div id="te">
			<a href="https://twitter.com/tmiguerrero" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @tmiguerrero</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div> 
			</div>
			<div id="menudesplegable">
				 <ul class="nav">
				  <li><a href="/" id="ini">Inicio</a></li>
				  <li><a href="/servicios" id="con">Servicios</a>
					  <ul>
					   <li><a href="/torno" id="con" >torno</a></li>
					   <li><a href="/soldadura" id="con" >soldadura</a></li>
					   <li><a href="/herreria" id="con" >herreria</a></li>
					   </ul>
				  <li><a href="/localizanos" id="con">Localizanos</a></li>
				  <li><a href="/conocenos" id="con" >Conocenos</a></li>
				  <li><a href="/contactos" id="con">Contacto</a></li>
				 </ul>	
			</div>
			
		</div>
		<div id="content">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
				   <ul id="menuabajo">
				   <li><a href="/" id="ini2">Inicio</a></li>
		     	   <li><a href="/servicios" id="con2" >servicio</a></li>
			       <li><a href="/localizanos" id="con2">Localizanos</a></li>
			       <li><a href="/conocenos" id="con2" >Conocenos</a></li>
			       <li><a href="/contactos" id="con2">Contacto</a></li>
			       </ul>
					     <div id="abajo1">
					<iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Taller+Mec%C3%A1nico+Industrial+Guerrero,+Benito+Ju%C3%A1rez,+Mazatl%C3%A1n&amp;aq=0&amp;oq=taller+mecanico+industrial&amp;sll=23.246754,-106.42214&amp;sspn=0.202203,0.308647&amp;ie=UTF8&amp;hq=Taller+Mec%C3%A1nico+Industrial+Guerrero,&amp;hnear=Benito+Ju%C3%A1rez,+Jes%C3%BAs+Osuna,+Mazatl%C3%A1n,+Sinaloa&amp;ll=23.222841,-106.391185&amp;spn=0.00316,0.004823&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=3966776015007545099&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Taller+Mec%C3%A1nico+Industrial+Guerrero,+Benito+Ju%C3%A1rez,+Mazatl%C3%A1n&amp;aq=0&amp;oq=taller+mecanico+industrial&amp;sll=23.246754,-106.42214&amp;sspn=0.202203,0.308647&amp;ie=UTF8&amp;hq=Taller+Mec%C3%A1nico+Industrial+Guerrero,&amp;hnear=Benito+Ju%C3%A1rez,+Jes%C3%BAs+Osuna,+Mazatl%C3%A1n,+Sinaloa&amp;ll=23.222841,-106.391185&amp;spn=0.00316,0.004823&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=3966776015007545099" style="color:#0000FF;text-align:left"></a></small> 
					 </div>
					 <div id="abajo2">
					   <h2 id="s1">informacion</h2>
					   <br>
					 <p id="s2">tel: 9-83-42-56</p>
					 <p id="s2">Privada del muroo no. 710-A</p>
					  <p id="s2">Colonia Benito Juarez</p>
					   <p id="s2">Mazatlan Sinaloa</p>
					    <br>
					    <div class="fb-like" data-href="http://tallermecanico.comxa.com/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="true"></div>
		</div>
</div>

</body>
</html>
