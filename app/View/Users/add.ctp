<!-- app/View/Users/add.ctp -->
<h1>Adicionar Usuário</h1>
<div class="col-xs-6">
	<div class="row">
	<?php echo $this->Form->create('User');?>
		
			
		<?php
			echo '<div class="form-group">';
				echo $this->Form->input('name', array('label' => 'Nome', 'class' => 'form-control'));
			echo '</div>';
			
			echo '<div class="form-group">';
				echo $this->Form->input('email', array('class' => 'form-control'));
			echo '</div>';
			
			echo '<div class="form-group">';
				echo $this->Form->input('username', array('label' => 'Username', 'class' => 'form-control'));
			echo '</div>';
			
			echo '<div class="form-group">';
				echo $this->Form->input('password', array('label' => 'Senha', 'class' => 'form-control'));
			echo '</div>';
			
			echo '<input type="submit" value="Adicionar usuário" class="btn btn-primary" >';
			
			echo $this->Form->end();
			
			?>
	</div>
</div>

