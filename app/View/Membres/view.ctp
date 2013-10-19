<div class="title"><h5><?php echo __('Profil membre'); ?></h5></div>

<div class="widgets">
	<div class="left">
		<div class="widget">
			<div class="head">
				<h5 class="iUser"><?php echo h($membres['membres']['nom']); ?> <?php echo h($membres['membres']['prenom']); ?></h5>
				<div class="num">
					<a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'edit', $membres['membres']['id'])); ?>" class="blueNum">Modifier</a>
				</div>
			</div>
			
			<div class="supTicket nobg">
				<div class="issueType">
					<span class="issueInfo"><?php echo $this->Html->link('Section ' . $membres['sections']['nom'], array('controller' => 'sections', 'action' => 'view', $membres['sections']['id'])); ?></span>
					<span class="issueNum"><a href="#" title="">[ #<?php echo h($membres['membres']['id']); ?> ]</a></span>
					<div class="fix"></div>
				</div>
				
				<div class="issueSummary">
					<a href="#" title="" class="floatleft"><?php echo $this->Html->image('/images/user.png'); ?></a>	
					<div class="ticketInfo">
						<ul>
							<li>Poste:</li>
							<li><strong class="green">[ <?php echo $poste_actuel; ?> ]</strong></li>
							<li>E-mail:</li>
							<li><a href="#" title=""><?php echo h($membres['membres']['email']); ?></a></li>
							<li>Téléphone:</li>
							<li>(+213) 123 456 789</li>
							<li>Date de naissance:</li>
							<li><?php echo h($membres['membres']['datenaissance']); ?></li>
							<li>Date d'inscription:</li>
							<li><?php echo h($membres['membres']['dateinscription']); ?></li>
						</ul>
						<div class="fix"></div>
					</div>
					<div class="fix"></div>
				</div> 
			</div>
		</div>
		<div class="widget">
            <div class="head">
            	<h5 class="iChart8">Historique des postes</h5>
            	<div class="num">
            		<a href="<?php echo $this->Html->url(array('controller' => 'membrespostes', 'action' => 'add', $membres['membres']['id'])); ?>" class="blueNum">Affecter un poste</a>
            	</div>
            </div>
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <thead>
                    <tr>
                      <td width="40%">Poste</td>
                      <td>Date</td>
                      <td width="10%">Action</td>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach ($postes as $poste): ?>
	                    <tr>
	                        <td><?php echo $poste['postes']['nom']; ?></td>
	                        <td><?php echo $poste['membres_postes']['date']; ?></td>
	                        <td><?php echo $this->Form->postLink("<img src='/CSE-ERP/images/icons/dark/trash.png' alt=''>", array('controller' => 'membrespostes', 'action' => 'delete', $poste['membres_postes']['id']), array('escape' => false, 'class' => 'btn14 mr5'), __('Are you sure you want to delete # %s?', $poste['postes']['nom'])); ?>
	                        </td>
	                    </tr>
					<?php endforeach; ?>
                </tbody>
            </table>                    
        </div>
	</div>
	
	<div class="right">
		<div class="widget">
			<div class="head"><h5 class="iPics"><?php echo __('Compétences'); ?></h5></div>
			
			<div class="body">
				<?php foreach ($competences as $competence): ?>
					<span style="font-size: 16px"><?php echo $this->Form->postLink($this->Html->image('/images/icons/dark/close.png'), array('controller' => 'competencesmembres', 'action' => 'delete', $competence['competences_membres']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competence['competences']['nom'])); ?> <?php echo $competence['competences']['nom']; ?></span><br/>
				<?php endforeach; ?>
				<a href="<?php echo $this->Html->url(array('controller' => 'competencesmembres', 'action' => 'add', $membres['membres']['id'])); ?>" title="" class="btnIconLeft mr10 mt5"><?php echo $this->Html->image('/images/icons/dark/add.png', array('class' => 'icon')); ?><span>Ajouter une compétence</span></a>
				<div class="fix"></div>
			</div>
			
		</div>


	</div>

	<div class="fix"></div>

	<div class="widget">
		<div class="head">
			<h5 class="iFiles"><?php echo __('Projets'); ?></h5>
			<div class="num"><a href="<?php echo $this->Html->url(array('controller' => 'projets', 'action' => 'add')); ?>" class="blueNum">Ajouter un projet</a></div>
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
				<?php foreach ($projets as $projet): ?>
					<tr>
						<td align="center"><?php echo $projet['projets']['id']; ?></td>
						<td><a href="<?php echo $this->Html->url(array('controller' => 'projets', 'action' => 'view', $projet['projets']['id'])); ?>"><?php echo $projet['projets']['nom']; ?></a></td>
						<td>
							<a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'view', $projet['membres']['id'])); ?>" title="voir le profil" class="btnIconLeft mr10 mt5">
								<?php echo $this->Html->image('/images/icons/dark/adminUser.png', array('class' => 'icon')); ?>
								<span><?php echo $projet['membres']['email']; ?></span>
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
			<div class="num"><a href="<?php echo $this->Html->url(array('controller' => 'remarques', 'action' => 'add', $membres['membres']['id'])); ?>" class="blueNum">Ajouter une remarque</a></div>
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
				<?php foreach ($remarques as $remarque): ?>
					<tr>
						<td align="center"><?php echo $remarque['remarques']['id']; ?></td>
						<td><?php echo $remarque['remarques']['remarque']; ?></td>
						<td align="center"><?php echo $remarque['remarques']['date']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>                    
	</div>

</div>