<div class="title"><h5><?php echo __('Compétences'); ?></h5></div>

<div class="widgets">
<div class="left">	
<div class="widget">
	<div class="head">
		<h5 class="iList"><?php echo __('Ajouter une compétence à un membre'); ?></h5>
	</div>
	
	<?php echo $this->Form->create('CompetencesMembre', array('class' => 'mainForm')); ?>
	<div class="rowElem noborder">
		<label class="formTop"><?php echo __('Compétence'); ?></label> 
		<div class="formBottom">
				<?php echo $this->Form->input('competence_id', array('div' => false, 'label' => false, 'type' => 'select')); ?>
		</div>
		<div class="fix"></div>
	</div>
	
	<?php echo $this->Form->submit(__('Enregistrer'), array('div' => false, 'class' => 'greyishBtn submitForm')); ?>
	<?php echo $this->Form->end(); ?>
	
	<div class="fix"></div>
</div>
</div>
</div>