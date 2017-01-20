<h1>Usuários</h1>
<?php echo $this->Html->link('Adicionar novo usuário', array('action' => 'add')); ?>

<?php

if(isset($user_session)){
	echo '<h5 style="float:right;"> Bem Vindo, '.$user_session['name']. '</h5>';
}else{
	echo '<h5 style="float:right;"> Efetue seu '.$this->Html->link('login', array('controller' => 'users', 'action' => 'login')).'</h5>';
}

?>
<h3 style="float:right; clear: both;"><?php echo $this->Html->link('Logout', array('action' => 'logout')); ?></h3>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Username</th>
        <th>Data de Criação</th>
        <th>Deletar</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?>
        </td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $user['User']['id']),
            array('confirm' => 'Tem certeza que deseja deletar o usuário'.$user['User']['name'].'?'));
        ?></td>
    </tr>
    <?php endforeach; ?>

</table>