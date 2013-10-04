<div class="membresProjets form">
<?php echo $this->Form->create('MembresProjet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membres Projet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('membre_id');
		echo $this->Form->input('projet_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MembresProjet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MembresProjet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Membres Projets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
	</ul>
</div>
