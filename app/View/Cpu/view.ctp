<!-- File: /app/View/Cpus/view.ctp -->

<h1><?php echo h($cpu['Cpu']['title']); ?></h1>

<p><small>Created: <?php echo $cpu['Cpu']['created']; ?></small></p>

<p>Socket: <?php echo h($cpu['Cpu']['socket']); ?></p>

<?php echo $this->Form->create(); ?>

<?php echo $this->Form->end('Voeg toe aan PC builder'); ?>