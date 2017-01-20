<h1>Usuários</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Username</th>
        <th>Data de Criação</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['name'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>