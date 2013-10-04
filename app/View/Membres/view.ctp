<div class="membres view">
<h2><?php echo __('Membre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datenaissance'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['datenaissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateinscription'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['dateinscription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membre['Section']['nom'], array('controller' => 'sections', 'action' => 'view', $membre['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poste'); ?></dt>
		<dd>
			<?php echo h($membre['Poste'][0]['nom']); ?>
			&nbsp;
		</dd>
	</dl>
	<?php //debug($membre); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membre'), array('action' => 'edit', $membre['Membre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membre'), array('action' => 'delete', $membre['Membre']['id']), null, __('Are you sure you want to delete # %s?', $membre['Membre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Projets'); ?></h3>
	<?php if (!empty($membre['Projet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Membre Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membre['Projet'] as $projet): ?>
		<tr>
			<td><?php echo $projet['id']; ?></td>
			<td><?php echo $projet['nom']; ?></td>
			<td><?php echo $projet['description']; ?></td>
			<td><?php echo $projet['url']; ?></td>
			<td><?php echo $projet['membre_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projets', 'action' => 'view', $projet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projets', 'action' => 'edit', $projet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projets', 'action' => 'delete', $projet['id']), null, __('Are you sure you want to delete # %s?', $projet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Remarques'); ?></h3>
	<?php if (!empty($membre['Remarque'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Remarque'); ?></th>
		<th><?php echo __('Membre Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membre['Remarque'] as $remarque): ?>
		<tr>
			<td><?php echo $remarque['id']; ?></td>
			<td><?php echo $remarque['remarque']; ?></td>
			<td><?php echo $remarque['membre_id']; ?></td>
			<td><?php echo $remarque['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'remarques', 'action' => 'view', $remarque['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'remarques', 'action' => 'edit', $remarque['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'remarques', 'action' => 'delete', $remarque['id']), null, __('Are you sure you want to delete # %s?', $remarque['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Remarque'), array('controller' => 'remarques', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Competences'); ?></h3>
	<?php if (!empty($membre['Competence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Datecreation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membre['Competence'] as $competence): ?>
		<tr>
			<td><?php echo $competence['id']; ?></td>
			<td><?php echo $competence['nom']; ?></td>
			<td><?php echo $competence['description']; ?></td>
			<td><?php echo $competence['datecreation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'competences', 'action' => 'view', $competence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'competences', 'action' => 'edit', $competence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'competences', 'action' => 'delete', $competence['id']), null, __('Are you sure you want to delete # %s?', $competence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Competence'), array('controller' => 'competences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Postes'); ?></h3>
	<?php if (!empty($membre['Poste'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membre['Poste'] as $poste): ?>
		<tr>
			<td><?php echo $poste['id']; ?></td>
			<td><?php echo $poste['nom']; ?></td>
			<td><?php echo $poste['role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postes', 'action' => 'view', $poste['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postes', 'action' => 'edit', $poste['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postes', 'action' => 'delete', $poste['id']), null, __('Are you sure you want to delete # %s?', $poste['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
