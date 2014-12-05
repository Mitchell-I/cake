<!-- File: /app/View/Mobos/index.ctp -->

<h1>Moederbord Lijst</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out moederbord info -->

    <?php foreach ($mobos as $mobo): ?>
    <tr>
        <td><?php echo $mobo['Mobo']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($mobo['Mobo']['title'],
array('controller' => 'mobos', 'action' => 'view', $mobo['Mobo']['id'])); ?>
        </td>
        <td><?php echo $mobo['Mobo']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cpu); ?>
</table>