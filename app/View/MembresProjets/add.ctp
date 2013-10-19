<div class="title"><h5><?php echo __('Projet'); ?></h5></div>

<div class="form">
	<?php echo $this->Form->create('Membre', array('class' => 'mainForm')); ?>
		<fieldset>
			<div class="widget">
				<div class="head">
					<h5 class="iList"><?php echo __('Ajouter un membre au projet'); ?></h5>
				</div>
				
				<div class="rowElem noborder">
					<label><?php echo __('Membre'); ?></label>
					<div class="formRight">
						<select name="data[MembresProjet][membre_id]">
							<?php 
							foreach ($membres as $membre) {
								$id = $membre['membres']['id'];
								$fullname = $membre['membres']['nom'] . ' ' . $membre['membres']['prenom'];
								$email = $membre['membres']['email'];
								echo "<option value='$id'> $fullname ($email) </option>";
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