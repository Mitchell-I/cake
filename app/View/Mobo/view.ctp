<!-- File: /app/View/Mobos/view.ctp -->

<h1><?php echo h($mobo['Mobo']['title']); ?></h1>

<p><small>Created: <?php echo $mobo['Mobo']['created']; ?></small></p>

<p>Socket: <?php echo h($mobo['Mobo']['socket']); ?></p>
<p>Socket: <?php echo h($mobo['Mobo']['type']); ?></p>

<?php echo $this->Form->create(); ?>

<?php echo $this->Form->end('Voeg toe aan PC builder'); ?>


