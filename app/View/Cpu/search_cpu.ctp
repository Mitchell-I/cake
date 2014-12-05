<!-- File: /app/View/Cpus/index.ctp -->

<h1>CPU Lijst</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out cpu info -->

    <?php foreach ($cpus as $cpu): ?>
    <tr>
        <td><?php echo $cpu['Cpu']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($cpu['Cpu']['title'],
array('controller' => 'cpus', 'action' => 'view', $cpu['Cpu']['id'])); ?>
        </td>
        <td><?php echo $cpu['Cpu']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cpu); ?>
</table>