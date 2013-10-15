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
	</div>
	
	<div class="right">
		<div class="widget">
			<div class="head"><h5 class="iPics"><?php echo __('Compétences'); ?></h5></div>
			
			<div class="body">
				<?php foreach ($membre['Competence'] as $competence): ?>
					<span style="font-size: 16px"><?php echo $this->Form->postLink($this->Html->image('/images/icons/dark/close.png'), array('controller' => 'competencesmembres', 'action' => 'delete', $competence['CompetencesMembre']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competence['nom'])); ?> <?php echo $competence['nom']; ?></span><br/>
				<?php endforeach; ?>
				<a href="<?php echo $this->Html->url(array('controller' => 'competencesmembres', 'action' => 'add', $membre['Membre']['id'])); ?>" title="" class="btnIconLeft mr10 mt5"><?php echo $this->Html->image('/images/icons/dark/add.png', array('class' => 'icon')); ?><span>Ajouter une compétence</span></a>
				<div class="fix"></div>
			</div>
			
		</div>


	</div>

	<div class="fix"></div>

	<div class="widget">
		<div class="head">
			<h5 class="iFiles"><?php echo __('Projets'); ?></h5>
			<div class="num"><a href="#" class="blueNum">3</a></div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
			<thead>
				<tr>
				  <td><?php echo __('Id'); ?></td>
				  <td width="50%"><?php echo __('Nom'); ?></td>
				  <td><?php echo __('Responsable'); ?></td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($membre['Projet'] as $projet): ?>
					<tr>
						<td><?php echo $projet['id']; ?></td>
						<td><?php echo $projet['nom']; ?></td>
						<td>
							<a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'view', $projet['membre_id'])); ?>" title="voir le profil" class="btnIconLeft mr10 mt5">
								<?php echo $this->Html->image('/images/icons/dark/adminUser.png', array('class' => 'icon')); ?>
								<span><?php echo $projet['membre_id']; ?></span>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>                    
	</div>

	<div class="widget">
		<div class="head">
			<h5 class="iFiles"><?php echo __('Remarques'); ?></h5>
			<div class="num"><a href="#" class="blueNum">2</a></div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
			<thead>
				<tr>
				  <td><?php echo __('Id'); ?></td>
				  <td width="75%"><?php echo __('Remarque'); ?></td>
				  <td><?php echo __('Date'); ?></td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($membre['Remarque'] as $remarque): ?>
					<tr>
						<td><?php echo $remarque['id']; ?></td>
						<td><?php echo $remarque['remarque']; ?></td>
						<td><?php echo $remarque['date']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>                    
	</div>

</div>

<?php
	debug($membre);
?>