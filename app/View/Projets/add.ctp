<div class="title"><h5><?php echo __('Projet'); ?></h5></div>
<div class="membres form">
	<?php echo $this->Form->create('Membre', array('class' => 'mainForm')); ?>
		<fieldset>
			<div class="widget">
				<div class="head">
					<h5 class="iList"><?php echo __('Nouveau projet'); ?></h5>
				</div>
				
				<div class="rowElem noborder">
					<label><?php echo __('Nom'); ?></label>
					<div class="formRight">
						<input name="data[Projet][nom]" maxlength="150" type="text">
					</div>
					<div class="fix"></div>
				</div>

				<div class="rowElem noborder">
					<label><?php echo __('Description'); ?></label>
					<div class="formRight">
						<textarea name="data[Projet][description]" rows="6" ></textarea>
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Url'); ?></label>
					<div class="formRight">
						<input name="data[Projet][url]" type="text">
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Chef de projet'); ?></label>
					<div class="formRight">
						<select name="data[Projet][membre_id]">
							
							<?php 
							foreach ($membres as $membre) {
								$id = $membre['membres']['id'];
								$fullname = $membre['membres']['nom'] . ' ' . $membre['membres']['prenom'];
								$email = $membre['membres']['email'];
								echo "<option value='$id'> $fullname ($email)</option>";
							}
							?>
						</select>
					</div>
					<div class="fix"></div>
				</div>
				
				<?php echo $this->Form->submit(__('Enregistrer'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
				
				<div class="fix"></div>
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>