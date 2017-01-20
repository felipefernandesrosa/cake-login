<h1>Login</h1>
<div class="col-xs-4">
	<div class="row">
		<div class="bg-danger"><?php echo $this->Flash->render('auth'); ?></div>
		<?php echo $this->Form->create('User');?>
		
			<?php
				echo '<div class="form-group">';
					echo $this->Form->input('username', array('class' => 'form-control'));
				echo '</div>';
				
				echo '<div class="form-group">';
					echo $this->Form->input('password', array('class' => 'form-control'));
				echo '</div>';
				
				echo '<input type="submit" value="Login" class="btn btn-primary" >';
			?>
	
		<?php echo $this->Form->end(); ?>
	</div>
</div>