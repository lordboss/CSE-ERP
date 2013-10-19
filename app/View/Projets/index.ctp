<div class="title"><h5><?php echo __('Projets'); ?></h5></div>

<div class="table">
    <div class="head"><h5 class="iUsers"><?php echo __('Projets'); ?></h5></div>
	<table cellpadding="0" cellspacing="0" border="0" class="display">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nom du projet'); ?></th>
				<th><?php echo $this->Paginator->sort('url'); ?></th>
				<th>Progression</th>
				<th><?php echo $this->Paginator->sort('membre_id'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($projets as $projet): ?>
				<tr>
					<?php
						$link = $this->Html->url(array('controller' => 'projets', 'action' => 'view', $projet['Projet']['id']));
					?>
					<td align="center"><?php echo h($projet['Projet']['id']); ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo h($projet['Projet']['nom']); ?></a></td>
					<td><a href="<?php echo $projet['Projet']['url']; ?>"><?php echo $projet['Projet']['url']; ?></a></td>
					<td>
						<div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100">
							<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: <?php echo $projet['Projet']['progression'] ?>%;"></div>
						</div>
					</td>
					<td>ok</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
		<div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="example_paginate">
<?php
	echo $this->Paginator->first('First', array('class' => 'toFirst ui-corner-tl ui-corner-bl fg-button ui-button'), null, array('class' => 'toFirst ui-corner-tl ui-corner-bl fg-button ui-button ui-state-disabled'));
	echo $this->Paginator->prev('Prev', array('class' => 'previous fg-button ui-button'), null, array('class' => 'previous fg-button ui-button ui-state-disabled'));
?>
<span>
	<?php echo $this->Paginator->numbers(array('separator' => '', 'class' => 'fg-button ui-button', 'currentClass' => 'ui-state-disabled', 'modulus' => 20)); ?>
</span>
<?php
	echo $this->Paginator->next('Next', array('class' => 'next fg-button ui-button'), null, array('class' => 'next fg-button ui-button ui-state-disabled'));
	echo $this->Paginator->last('Last', array('class' => 'last ui-corner-tr ui-corner-br fg-button ui-button'), null, array('class' => 'last ui-corner-tr ui-corner-br fg-button ui-button ui-state-disabled'));
?>
		</div>
	</div>
</div>