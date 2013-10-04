<div class="membres index">
	<h2><?php echo __('Membres'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('datenaissance'); ?></th>
			<th><?php echo $this->Paginator->sort('dateinscription'); ?></th>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membres as $membre): ?>
	<tr>
		<td><?php echo h($membre['Membre']['id']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['nom']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['email']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['datenaissance']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['dateinscription']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membre['Section']['id'], array('controller' => 'sections', 'action' => 'view', $membre['Section']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membre['Membre']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membre['Membre']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membre['Membre']['id']), null, __('Are you sure you want to delete # %s?', $membre['Membre']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Membre'), array('action' => 'add')); ?></li>
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
