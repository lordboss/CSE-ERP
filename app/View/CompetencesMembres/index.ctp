<div class="competencesMembres index">
	<h2><?php echo __('Competences Membres'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('membre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('competence_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competencesMembres as $competencesMembre): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($competencesMembre['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $competencesMembre['Membre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($competencesMembre['Competence']['id'], array('controller' => 'competences', 'action' => 'view', $competencesMembre['Competence']['id'])); ?>
		</td>
		<td><?php echo h($competencesMembre['CompetencesMembre']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competencesMembre['CompetencesMembre']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competencesMembre['CompetencesMembre']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competencesMembre['CompetencesMembre']['id']), null, __('Are you sure you want to delete # %s?', $competencesMembre['CompetencesMembre']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competences Membre'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences'), array('controller' => 'competences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competence'), array('controller' => 'competences', 'action' => 'add')); ?> </li>
	</ul>
</div>
