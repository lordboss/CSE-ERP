<div class="competencesMembres form">
<?php echo $this->Form->create('CompetencesMembre'); ?>
	<fieldset>
		<legend><?php echo __('Edit Competences Membre'); ?></legend>
	<?php
		echo $this->Form->input('membre_id');
		echo $this->Form->input('competence_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetencesMembre.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetencesMembre.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Competences Membres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences'), array('controller' => 'competences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competence'), array('controller' => 'competences', 'action' => 'add')); ?> </li>
	</ul>
</div>
