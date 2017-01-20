<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('globalstyles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
	<div class="header">
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header col-xs-12">
					<a class="navbar-brand" href="#/">Cake Login</a>
					<div class="navbar-form navbar-left">
						<?php echo $this->Html->link('Adicionar novo usuário', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
					</div>
					
					<div class="pull-right text-right">
						<h5>
							<?php
								if(isset($user_session)){
									echo '<p>Bem Vindo, '.$user_session['name']. '<p>';
									echo $this->Html->link('Logout', array('action' => 'logout'), array('class' => 'btn btn-warning'));
								}else{
									echo 'Efetue seu '.$this->Html->link('login', array('controller' => 'users', 'action' => 'login'));
								}
							?>
						</h5>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="jumbotron">
		<div id="container-fluid">
			
			<div id="content" class="container">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
