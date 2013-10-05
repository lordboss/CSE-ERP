<div class="title"><h5><?php echo __('Profil membre'); ?></h5></div>

<div class="widgets">
	<div class="left">
		<div class="widget">
			<div class="head"><h5 class="iUser"><?php echo h($membre['Membre']['nom']); ?> <?php echo h($membre['Membre']['prenom']); ?></h5><div class="num"><a href="#" class="blueNum">0</a></div></div>
			
			<div class="supTicket nobg">
				<div class="issueType">
					<span class="issueInfo"><a href="#" title=""><?php echo $this->Html->link('Section ' . $membre['Section']['nom'], array('controller' => 'sections', 'action' => 'view', $membre['Section']['id'])); ?></a></span>
					<span class="issueNum"><a href="#" title="">[ #<?php echo h($membre['Membre']['id']); ?> ]</a></span>
					<div class="fix"></div>
				</div>
				
				<div class="issueSummary">
					<a href="#" title="" class="floatleft"><?php echo $this->Html->image('/images/user.png'); ?></a>	
					<div class="ticketInfo">
						<ul>
							<li>Poste:</li>
							<li><strong class="green">[ Adhérent ]</strong></li>
							<li>E-mail:</li>
							<li><a href="#" title=""><?php echo h($membre['Membre']['email']); ?></a></li>
							<li>Date de naissance:</li>
							<li><?php echo h($membre['Membre']['datenaissance']); ?></li>
							<li>Date d'inscription:</li>
							<li><?php echo h($membre['Membre']['dateinscription']); ?></li>
						</ul>
						<div class="fix"></div>
					</div>
					<div class="fix"></div>
				</div> 
			</div>
			
		</div>
		
		<div class="widget">
			<div class="head">
				<h5 class="iFiles">Projets</h5>
				<div class="num"><a href="#" class="blueNum">3</a></div>
			</div>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<thead>
					<tr>
					  <td width="21%">id</td>
					  <td>Nom</td>
					  <td width="21%">Role</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td align="center"><a href="#" title="">2</a></td>
						<td>gestion ressources humaine</td>
						<td>Chef de projet</td>
					</tr>
					<tr>
						<td align="center"><a href="#" title="">2</a></td>
						<td>CSE Toolbar</td>
						<td>Membre</td>
					</tr>
					<tr>
						<td align="center"><a href="#" title="">2</a></td>
						<td>Newsletter</td>
						<td>Membre</td>
					</tr>
				</tbody>
			</table>                    
		</div>
	</div>
	
	<div class="right">
		<div class="widget">
			<div class="head"><h5 class="iPics"><?php echo __('Compétences'); ?></h5></div>
			
			<div class="body">
				<?php foreach ($membre['Competence'] as $competence): ?>
					<span style="font-size: 16px"><?php echo $this->Form->postLink($this->Html->image('/images/icons/dark/close.png'), array('controller' => 'competencesmembres', 'action' => 'delete', $competence['CompetencesMembre']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competence['nom'])); ?> <?php echo $competence['nom']; ?></span><br/>
				<?php endforeach; ?>
				<a href="#" title="" class="btnIconLeft mr10 mt5"><?php echo $this->Html->image('/images/icons/dark/add.png', array('class' => 'icon')); ?><span>Ajouter une compétence</span></a>
				<div class="fix"></div>
			</div>
			
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

	</div>
</div>
