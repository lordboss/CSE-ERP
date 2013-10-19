<p><?php echo sizeof($membres); ?> résultats trouvés</p>

<div class="fix"></div>

<div class="table">
    <div class="head"><h5 class="iUsers"><?php echo __('Membres'); ?></h5></div>
	<table cellpadding="0" cellspacing="0" border="0" class="display">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th class="actions" width="130"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($membres as $membre): ?>
				<tr>
					<td align="center"><?php echo h($membre['membres']['id']); ?></td>
					<td><?php echo h($membre['membres']['nom']); ?></td>
					<td><?php echo h($membre['membres']['prenom']); ?></td>
					<td class="actions" align="center">
						<a href="<?php echo $this->Html->url(array('action' => 'view', $membre['membres']['id'])); ?>" title="Afficher le profil" class="btn14 mr5"><img src="/CSE-ERP/images/icons/dark/user.png" alt=""></a>
						
						<a href="<?php echo $this->Html->url(array('action' => 'edit', $membre['membres']['id'])); ?>" title="Modifier le profil" class="btn14 mr5"><img src="/CSE-ERP/images/icons/dark/pencil.png" alt=""></a>
						
						<?php echo $this->Form->postLink("<img src='/CSE-ERP/images/icons/dark/trash.png' alt=''>", array('action' => 'delete', $membre['membres']['id']), array('escape' => false, 'class' => 'btn14 mr5'), __('Are you sure you want to delete # %s?', $membre['membres']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>