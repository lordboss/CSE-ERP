<div class="membresProjets view">
<h2><?php echo __('Membres Projet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membresProjet['MembresProjet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membresProjet['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $membresProjet['Membre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membresProjet['Projet']['id'], array('controller' => 'projets', 'action' => 'view', $membresProjet['Projet']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membres Projet'), array('action' => 'edit', $membresProjet['MembresProjet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membres Projet'), array('action' => 'delete', $membresProjet['MembresProjet']['id']), null, __('Are you sure you want to delete # %s?', $membresProjet['MembresProjet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres Projets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membres Projet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
	</ul>
</div>
