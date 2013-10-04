<div class="membresProjets form">
<?php echo $this->Form->create('MembresProjet'); ?>
	<fieldset>
		<legend><?php echo __('Add Membres Projet'); ?></legend>
	<?php
		echo $this->Form->input('membre_id');
		echo $this->Form->input('projet_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Membres Projets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
	</ul>
</div>
