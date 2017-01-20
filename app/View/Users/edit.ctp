<h1>Editar Usuário</h1>
<div class="col-xs-6">
	<div class="row">
	<?php
		echo $this->Form->create('User', array('url'   => array( 'action' => 'edit'), array('class' => 'form-horizontal')) );
		
		echo '<div class="form-group">';
			echo $this->Form->input('name', array('class' => 'form-control'));
		echo '</div>';
		
		echo '<div class="form-group">';
			echo $this->Form->input('username', array('class' => 'form-control'));
		echo '</div>';
		
		echo '<div class="form-group">';
			echo $this->Form->input('email', array('class' => 'form-control'));
		echo '</div>';
		
		echo $this->Form->input('id', array('type' => 'hidden'));

		$options = array(
			'label' => 'Atualizar usuário',
			'div' => array(
				'class' => 'glass-pill',
			)
		);
		
		echo '<input type="submit" value="Atualizar usuário" class="btn btn-primary" >';
		
		echo $this->Form->end();
	?>
	</div>
</div>