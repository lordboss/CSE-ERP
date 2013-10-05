<div class="title"><h5><?php echo __('Membres'); ?></h5></div>
        
<!-- Statistics -->
<div class="stats">
	<ul>
		<li><a href="#" class="count grey" title="">7</a><span>Projets en cours</span></li> 
		<li><a href="#" class="count grey" title="">520</a><span>Adhérents</span></li>
		<li><a href="#" class="count grey" title="">163</a><span>Membres</span></li>
		<li class="last"><a href="#" class="count grey" title="">78</a><span>Membres actifs</span></li>
	</ul>
	<div class="fix"></div>
</div>

<div class="membres form">
<?php echo $this->Form->create('Membre', array('class' => 'mainForm')); ?>
	<fieldset>
		<div class="widget">
			<div class="head">
				<h5 class="iList"><?php echo __('Add Membre'); ?></h5>
			</div>
			
			<div class="rowElem noborder">
				<label><?php echo __('Nom'); ?></label>
				<div class="formRight">
					<input name="data[Membre][nom]" maxlength="150" type="text">
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('Prénom'); ?></label>
				<div class="formRight">
					<input name="data[Membre][prenom]" maxlength="150" type="text">
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('E-mail'); ?></label>
				<div class="formRight">
					<input name="data[Membre][email]" type="text" class="validate[required,custom[email]]">
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('Date de naissance'); ?></label>
				<div class="formRight">
					<input type="text" class="validate[custom[date],future[NOW]]" name="data[Membre][datenaissance]">
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('Section'); ?></label> 
				<div class="formRight">
					<input type="hidden" name="data[Membre][section_id]" id="MembreSectionId_" value="">
				<?php foreach ($sections as $key => $section) : ?>
					<label><input type="radio" name="data[Membre][section_id]" value="<?php echo $key; ?>"> <?php echo $section; ?> </label>
					<div class="fix"></div>
				<?php endforeach; ?>
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('Compétences'); ?></label>
				<div class="formRight">
					<?php echo $this->Form->input('Competence', array('div' => false, 'label' => false, 'class' => 'multiple')); ?>					
				</div>
				<div class="fix"></div>
			</div>
			
			<div class="rowElem">
				<label><?php echo __('Poste'); ?></label>
				<div class="formRight">
					<?php echo $this->Form->input('Poste', array('div' => false, 'label' => false, 'type' => 'select')); ?>					
				</div>
				<div class="fix"></div>
			</div>
			
			<?php echo $this->Form->submit(__('Enregistrer'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
			
			<div class="fix"></div>
		</div>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>