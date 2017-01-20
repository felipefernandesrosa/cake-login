<h1>Editar Usuário</h1>
<?php
    echo $this->Form->create('User', array('url'   => array( 'action' => 'edit')) );
    echo $this->Form->input('name');
    echo $this->Form->input('username');
    echo $this->Form->input('email');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Atualizar usuário');