<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
		echo $this->Form->input('name', array('label' => 'Nome'));
		echo $this->Form->input('email');
		echo $this->Form->input('username', array('label' => 'Username'));
        echo $this->Form->input('password', array('label' => 'Senha'));
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enviar'));?>
</div>
