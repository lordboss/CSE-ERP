<div class="membresProjets index">
	<h2><?php echo __('Membres Projets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('membre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('projet_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membresProjets as $membresProjet): ?>
	<tr>
		<td><?php echo h($membresProjet['MembresProjet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membresProjet['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $membresProjet['Membre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($membresProjet['Projet']['id'], array('controller' => 'projets', 'action' => 'view', $membresProjet['Projet']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membresProjet['MembresProjet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membresProjet['MembresProjet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membresProjet['MembresProjet']['id']), null, __('Are you sure you want to delete # %s?', $membresProjet['MembresProjet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Membres Projet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
	</ul>
</div>
