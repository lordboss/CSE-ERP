<div class="title"><h5><?php echo __('Projet'); ?></h5></div>

<div class="widgets">
	<div class="left">
		<div class="widget">
			<div class="head">
				<h5 class="iBookLarge"><?php echo $projet['Projet']['nom']; ?></h5>
				<div class="num">
					<a href="<?php echo $this->Html->url(array('controller' => 'projets', 'action' => 'edit', 0)); ?>" class="blueNum">Modifier</a>
				</div>
			</div>
			
			<div class="supTicket nobg">
				<div class="issueType">
					<span class="issueInfo">projet numéro</span>
					<span class="issueNum"><a href="#" title="">[ #<?php echo h($projet['Projet']['id']); ?> ]</a></span>
					<div class="fix"></div>
				</div>			
				<div>
					<div class="ticketInfo">
						
						<p><h6>Description</h6><?php echo $projet['Projet']['description']; ?></p>
						<h6>Lien du projet</h6>
						<a href="<?php echo $projet['Projet']['url']; ?>" title=""><?php echo $projet['Projet']['url']; ?></a>
						<div class="fix"></div>
						<p><h6>Chef du projet</h6><?php echo $projet['Membre']['nom'] . ' ' . $projet['Membre']['prenom']; ?>
						<div><a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'view', $projet['Membre']['id'])); ?>" title="" class="btnIconLeft mr10 mt5"><?php echo $this->Html->image('/images/icons/dark/adminUser.png', array('class' => 'icon')); ?><span>Afficher le profil</span></a></div></p>
					</div>
					<div class="fix"></div>
				</div> 
			</div>
		</div>

		<div class="widget">
            <div class="head">
				<h5 class="iLoading">Progression du projet</h5>
            </div>
            <div class="body">
            	<div class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100">
					<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: <?php echo $projet['Projet']['progression'] ?>%;"></div>
				</div>
			</div>
			<?php echo $this->Form->create('Projet', array('class' => 'mainForm', 'action' => 'progression', 'id' => 4)); ?>
			<div class="rowElem">
				<label class="formTop"><?php echo __('Progression'); ?></label> 
				<div class="formBottom">
					<div class="ui-spinner">
						<input type="text" name="data[Projet][progression]" value="<?php echo $projet['Projet']['progression'] ?>" class="ui-spinner-box">

						<input type="hidden" name="data[Projet][id]" value="<?php echo $projet['Projet']['id'] ?>">
					</div>
				</div>
				<div class="fix"></div>
			</div>
			
			<?php echo $this->Form->submit(__('Modifier'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
			<div class="fix"></div>
			<?php echo $this->Form->end(); ?>
        </div>
		
	</div>
	
	<div class="right">
		<div class="widget">
            <div class="head">
            	<h5 class="iChart8"><?php echo __('Membres du projet'); ?></h5>
            	<div class="num">
            		<a href="<?php echo $this->Html->url(array('controller' => 'membresprojets', 'action' => 'add', $projet['Projet']['id'])); ?>" class="blueNum">Ajouter un membre</a>
            	</div>
            </div>
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <thead>
                    <tr>
                      <td>Nom et Prenom</td>
                      <td>Email</td>
                      <td></td>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach ($membres as $membre): ?>
	                    <tr>
	                    	<?php 
	                    	$link = $this->Html->url(array('controller' => 'membres', 'action' => 'view', $membre['membres']['id'])); 
	                    	?>
	                        <td><a href="<?php echo $link; ?>"><?php echo $membre['membres']['nom'] . ' ' . $membre['membres']['prenom'];; ?></a></td>
	                        <td><a href="<?php echo $link; ?>"><?php echo $membre['membres']['email']; ?></a></td>
	                        <td>
	                        	<?php echo $this->Form->postLink("<img src='/CSE-ERP/images/icons/dark/trash.png' alt=''>", array('action' => 'delete', $membre['membres']['id']), array('escape' => false, 'class' => 'btn14 mr5'), __('Are you sure you want to delete # %s?', $membre['membres']['id'])); ?>
	                        </td>
	                    </tr>
					<?php endforeach; ?>
                </tbody>
            </table>                    
        </div>

	</div>

</div>