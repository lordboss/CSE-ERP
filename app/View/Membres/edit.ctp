<div class="title"><h5><?php echo __('Membres'); ?></h5></div>
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
						<input name="data[Membre][nom]" value="<?php echo $membres['membres']['nom']; ?>" maxlength="150" type="text">
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Prénom'); ?></label>
					<div class="formRight">
						<input name="data[Membre][prenom]" value="<?php echo $membres['membres']['prenom']; ?>" maxlength="150" type="text">
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('E-mail'); ?></label>
					<div class="formRight">
						<input name="data[Membre][email]" value="<?php echo $membres['membres']['email']; ?>" type="text" class="validate[required,custom[email]]">
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Date de naissance'); ?></label>
					<div class="formRight">
						<input type="text" value="<?php echo $membres['membres']['datenaissance']; ?>" class="validate[custom[date]]" name="data[Membre][datenaissance]">
						<?php
							if (isset($erreurs['datenaissance']))
								echo "<span class='red'>La date est incorrecte, le format est yyyy-mm-dd</span>";
						?>
					</div>
					<div class="fix"></div>
				</div>

				<div class="rowElem">
					<label><?php echo __('Date d\'inscription'); ?></label>
					<div class="formRight">
						<input type="text" value="<?php echo $membres['membres']['dateinscription']; ?>" class="validate[custom[date]]" name="data[Membre][dateinscription]">
						<?php
							if (isset($erreurs['dateinscription']))
								echo "<span class='red'>La date est incorrecte, le format est yyyy-mm-dd</span>";
						?>
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Section'); ?></label> 
					<div class="formRight">
						<input type="hidden" name="data[Membre][section_id]" id="MembreSectionId_" value="">
					
						<?php 
						foreach ($sections as $key => $section) {
							if ($key != $membres['membres']['section_id'])
								echo "<label><input type='radio' name='data[Membre][section_id]' value='$key'> $section</label>";
							else
								echo "<label><input type='radio' name='data[Membre][section_id]' value='$key' checked> $section</label>";
							echo "<div class='fix'></div>";
						} 
						?>
					</div>

					<div class="fix"></div>
				</div>
				
				<?php echo $this->Form->submit(__('Enregistrer'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
				
				<div class="fix"></div>
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>