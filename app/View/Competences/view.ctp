<div class="competences view">
<h2><?php echo __('Competence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competence['Competence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($competence['Competence']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($competence['Competence']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datecreation'); ?></dt>
		<dd>
			<?php echo h($competence['Competence']['datecreation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competence'), array('action' => 'edit', $competence['Competence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competence'), array('action' => 'delete', $competence['Competence']['id']), null, __('Are you sure you want to delete # %s?', $competence['Competence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competence'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Membres'); ?></h3>
	<?php if (!empty($competence['Membre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Datenaissance'); ?></th>
		<th><?php echo __('Dateinscription'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competence['Membre'] as $membre): ?>
		<tr>
			<td><?php echo $membre['id']; ?></td>
			<td><?php echo $membre['nom']; ?></td>
			<td><?php echo $membre['prenom']; ?></td>
			<td><?php echo $membre['email']; ?></td>
			<td><?php echo $membre['datenaissance']; ?></td>
			<td><?php echo $membre['dateinscription']; ?></td>
			<td><?php echo $membre['section_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'membres', 'action' => 'view', $membre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'membres', 'action' => 'edit', $membre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'membres', 'action' => 'delete', $membre['id']), null, __('Are you sure you want to delete # %s?', $membre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
