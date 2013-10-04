<div class="competences form">
<?php echo $this->Form->create('Competence'); ?>
	<fieldset>
		<legend><?php echo __('Add Competence'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('description');
		echo $this->Form->input('datecreation');
		echo $this->Form->input('Membre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Competences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
	</ul>
</div>
