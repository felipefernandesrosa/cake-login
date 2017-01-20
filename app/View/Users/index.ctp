<h1 class="text-muted">Usuários</h1>

<table class="table table-striped">
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
            array('confirm' => 'Tem certeza que deseja deletar o usuário '.$user['User']['name'].'?', 'class' => 'btn btn-danger')
			);
        ?></td>
    </tr>
    <?php endforeach; ?>

</table>