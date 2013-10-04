<div class="membresPostes view">
<h2><?php echo __('Membres Poste'); ?></h2>
	<dl>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($membresPoste['MembresPoste']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membresPoste['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $membresPoste['Membre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poste'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membresPoste['Poste']['id'], array('controller' => 'postes', 'action' => 'view', $membresPoste['Poste']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membresPoste['MembresPoste']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membres Poste'), array('action' => 'edit', $membresPoste['MembresPoste']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membres Poste'), array('action' => 'delete', $membresPoste['MembresPoste']['id']), null, __('Are you sure you want to delete # %s?', $membresPoste['MembresPoste']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres Postes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membres Poste'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
