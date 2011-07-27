<div class="countries form">
<?php echo $this->Form->create('Country');?>
	<fieldset>
 		<legend><?php __('Add Country'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('printable_name');
		echo $this->Form->input('iso');
		echo $this->Form->input('iso3');
		echo $this->Form->input('num_code');
		echo $this->Form->input('dial_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index'));?></li>
	</ul>
</div>