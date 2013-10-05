<div class="title"><h5><?php echo __('Membres'); ?></h5></div>

<div class="table">
    <div class="head"><h5 class="iUsers"><?php echo __('Membres'); ?></h5></div>
	<table cellpadding="0" cellspacing="0" border="0" class="display">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nom'); ?></th>
				<th><?php echo $this->Paginator->sort('prenom'); ?></th>
				<th><?php echo $this->Paginator->sort('section_id'); ?></th>
				<th class="actions" width="130"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($membres as $membre): ?>
			<tr>
				<td><?php echo h($membre['Membre']['id']); ?></td>
				<td><?php echo h($membre['Membre']['nom']); ?></td>
				<td><?php echo h($membre['Membre']['prenom']); ?></td>
				<td>
					<?php echo $this->Html->link($membre['Section']['nom'], array('controller' => 'sections', 'action' => 'view', $membre['Section']['id'])); ?>
				</td>
				<td class="actions">
					<a href="<?php echo $this->Html->url(array('action' => 'view', $membre['Membre']['id'])); ?>" title="Afficher le profil" class="btn14 mr5"><img src="/CSE-ERP/images/icons/dark/user.png" alt=""></a>
					
					<a href="<?php echo $this->Html->url(array('action' => 'edit', $membre['Membre']['id'])); ?>" title="Modifier le profil" class="btn14 mr5"><img src="/CSE-ERP/images/icons/dark/pencil.png" alt=""></a>
					
					<?php echo $this->Form->postLink("<img src='/CSE-ERP/images/icons/dark/trash.png' alt=''>", array('action' => 'delete', $membre['Membre']['id']), array('escape' => false, 'class' => 'btn14 mr5'), __('Are you sure you want to delete # %s?', $membre['Membre']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
		<div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="example_paginate">
<?php
	echo $this->Paginator->first('First', array('class' => 'toFirst ui-corner-tl ui-corner-bl fg-button ui-button'), null, array('class' => 'toFirst ui-corner-tl ui-corner-bl fg-button ui-button ui-state-disabled'));
	echo $this->Paginator->prev('Prev', array('class' => 'previous fg-button ui-button'), null, array('class' => 'previous fg-button ui-button ui-state-disabled'));
?>
<span>
	<?php echo $this->Paginator->numbers(array('separator' => '', 'class' => 'fg-button ui-button', 'currentClass' => 'ui-state-disabled', 'modulus' => 20)); ?>
</span>
<?php
	echo $this->Paginator->next('Next', array('class' => 'next fg-button ui-button'), null, array('class' => 'next fg-button ui-button ui-state-disabled'));
	echo $this->Paginator->last('Last', array('class' => 'last ui-corner-tr ui-corner-br fg-button ui-button'), null, array('class' => 'last ui-corner-tr ui-corner-br fg-button ui-button ui-state-disabled'));
?>
		</div>
	</div>
</div>

