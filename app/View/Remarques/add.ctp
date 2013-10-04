<div class="remarques form">
<?php echo $this->Form->create('Remarque'); ?>
	<fieldset>
		<legend><?php echo __('Add Remarque'); ?></legend>
	<?php
		echo $this->Form->input('remarque');
		echo $this->Form->input('membre_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Remarques'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
	</ul>
</div>
