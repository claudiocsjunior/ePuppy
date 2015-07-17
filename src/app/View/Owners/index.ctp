<h1>Owners</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>e-Mail</th>
        <th>Phone</th>
        <th></th>
    </tr>

    <?php foreach ($owners as $owner): ?>
    <tr>
        <td><?php echo $owner['Owner']['id']; ?></td>
        <td><?php echo $owner['Owner']['name']; ?></td>
        <td><?php echo $owner['Owner']['address']; ?></td>
        <td><?php echo $owner['Owner']['email']; ?></td>
        <td><?php echo $owner['Owner']['phone']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $owner['Owner']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
