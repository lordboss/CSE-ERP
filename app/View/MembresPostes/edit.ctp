<div class="membresPostes form">
<?php echo $this->Form->create('MembresPoste'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membres Poste'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('membre_id');
		echo $this->Form->input('poste_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MembresPoste.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MembresPoste.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Membres Postes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
