<div class="membresPostes index">
	<h2><?php echo __('Membres Postes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('membre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('poste_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membresPostes as $membresPoste): ?>
	<tr>
		<td><?php echo h($membresPoste['MembresPoste']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membresPoste['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $membresPoste['Membre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($membresPoste['Poste']['id'], array('controller' => 'postes', 'action' => 'view', $membresPoste['Poste']['id'])); ?>
		</td>
		<td><?php echo h($membresPoste['MembresPoste']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membresPoste['MembresPoste']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membresPoste['MembresPoste']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membresPoste['MembresPoste']['id']), null, __('Are you sure you want to delete # %s?', $membresPoste['MembresPoste']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Membres Poste'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
