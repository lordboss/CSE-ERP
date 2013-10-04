<div class="remarques view">
<h2><?php echo __('Remarque'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($remarque['Remarque']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarque'); ?></dt>
		<dd>
			<?php echo h($remarque['Remarque']['remarque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($remarque['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $remarque['Membre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($remarque['Remarque']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Remarque'), array('action' => 'edit', $remarque['Remarque']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Remarque'), array('action' => 'delete', $remarque['Remarque']['id']), null, __('Are you sure you want to delete # %s?', $remarque['Remarque']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Remarques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remarque'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
	</ul>
</div>
