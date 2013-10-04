<div class="membres form">
<?php echo $this->Form->create('Membre'); ?>
	<fieldset>
		<legend><?php echo __('Add Membre'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('email');
		echo $this->Form->input('datenaissance');
		echo $this->Form->input('dateinscription');
		echo $this->Form->input('section_id');
		echo $this->Form->input('Competence');
		echo $this->Form->input('Poste');
		echo $this->Form->input('Projet');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Membres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Remarques'), array('controller' => 'remarques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remarque'), array('controller' => 'remarques', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences'), array('controller' => 'competences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competence'), array('controller' => 'competences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
