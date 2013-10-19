<div class="title"><h5><?php echo __('Poste'); ?></h5></div>

<div class="form">
	<?php echo $this->Form->create('MembresPoste', array('class' => 'mainForm')); ?>
		<fieldset>
			<div class="widget">
				<div class="head">
					<h5 class="iList"><?php echo __('Ajouter un poste'); ?></h5>
				</div>
				
				<div class="rowElem noborder">
					<label><?php echo __('Poste'); ?></label>
					<div class="formRight">
						<?php echo $this->Form->input('poste_id', array('div' => false, 'label' => false)); ?>
					</div>
					<div class="fix"></div>
				</div>

				<div class="rowElem">
					<label><?php echo __('Date'); ?></label>
					<div class="formRight">
						<input type="text" class="validate[custom[date]]" name="data[MembresPoste][date]">
						<?php
							if (isset($erreurs['date']))
								echo "<span class='red'>La date est incorrecte, le format est yyyy-mm-dd</span>";
						?>
					</div>
					<div class="fix"></div>
				</div>

				<div class="rowElem">
                    <label>Date picker:</label>
                    <div class="formRight">
                        <input type="text" class="datepicker hasDatepicker" id="dp1382100920922" size="10"><span class="ui-datepicker-append">(dd-mm-yyyy)</span>
                    </div>
                    <div class="fix"></div>
                </div>
				
				<?php echo $this->Form->submit(__('Enregistrer'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
				
				<div class="fix"></div>
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>