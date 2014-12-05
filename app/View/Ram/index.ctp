<!-- File: /app/View/Rams/index.ctp -->

<h1>Ram geheugen Lijst</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out ram info -->

    <?php foreach ($rams as $ram): ?>
    <tr>
        <td><?php echo $ram['Ram']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($ram['Ram']['title'],
array('controller' => 'rams', 'action' => 'view', $ram['Ram']['id'])); ?>
        </td>
        <td><?php echo $ram['Ram']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cpu); ?>
</table>
