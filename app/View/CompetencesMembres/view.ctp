<div class="competencesMembres view">
<h2><?php echo __('Competences Membre'); ?></h2>
	<dl>
		<dt><?php echo __('Membre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competencesMembre['Membre']['id'], array('controller' => 'membres', 'action' => 'view', $competencesMembre['Membre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competence'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competencesMembre['Competence']['id'], array('controller' => 'competences', 'action' => 'view', $competencesMembre['Competence']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competencesMembre['CompetencesMembre']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competences Membre'), array('action' => 'edit', $competencesMembre['CompetencesMembre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competences Membre'), array('action' => 'delete', $competencesMembre['CompetencesMembre']['id']), null, __('Are you sure you want to delete # %s?', $competencesMembre['CompetencesMembre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences Membres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competences Membre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences'), array('controller' => 'competences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competence'), array('controller' => 'competences', 'action' => 'add')); ?> </li>
	</ul>
</div>
