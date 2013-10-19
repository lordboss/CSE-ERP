<div class="title"><h5><?php echo __('Remarque'); ?></h5></div>
<div class="membres form">
	<?php echo $this->Form->create('Membre', array('class' => 'mainForm')); ?>
		<fieldset>
			<div class="widget">
				<div class="head">
					<h5 class="iList"><?php echo __('Ajouter une remarque'); ?></h5>
				</div>
				
				<div class="rowElem noborder">
					<label><?php echo __('Remarque'); ?></label>
					<div class="formRight">
						<textarea name="data[Remarque][remarque]" rows="6" ></textarea>
					</div>
					<div class="fix"></div>
				</div>
				
				<div class="rowElem">
					<label><?php echo __('Date'); ?></label>
					<div class="formRight">
						<input type="text" class="validate[custom[date]]" name="data[Remarque][date]" value="<?php echo date('Y-m-d'); ?>">
						<?php
							if (isset($erreurs['date']))
								echo "<span class='red'>La date est incorrecte, le format est yyyy-mm-dd</span>";
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