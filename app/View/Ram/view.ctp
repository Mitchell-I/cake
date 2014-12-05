<!-- File: /app/View/Rams/view.ctp -->

<h1><?php echo h($ram['Ram']['title']); ?></h1>

<p><small>Created: <?php echo $ram['Ram']['created']; ?></small></p>

<p>Type: <?php echo h($ram['Ram']['type']); ?></p>

<?php echo $this->Form->create(); ?>

<?php echo $this->Form->end('Voeg toe aan PC builder'); ?>