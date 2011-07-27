<?php echo $this->Html->css('/countries/css/countries', 'stylesheet', array('inline' => false )); ?>
<?php echo $this->Html->script('/countries/js/countries', array('inline' => false)); ?>




<div class="countries index">
	<h2><?php __('Countries');?></h2>
	<?php echo $this->Countries->dial_codes($dial_codes); ?>
	<div class="overlay">&nbsp;</div>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('printable_name');?></th>
			<th><?php echo $this->Paginator->sort('iso');?></th>
			<th><?php echo $this->Paginator->sort('iso3');?></th>
			<th><?php echo $this->Paginator->sort('num_code');?></th>
			<th><?php echo $this->Paginator->sort('dial_code');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($countries as $country):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $country['Country']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->image('/countries/img/flags/gif/'.strtolower($country['Country']['iso']).'.gif', array('alt' => $country['Country']['name'], 'title' => $country['Country']['name'])); ?>&nbsp;<?php echo $country['Country']['name']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['printable_name']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['iso']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['iso3']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['num_code']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['dial_code']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $country['Country']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $country['Country']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?></li>
	</ul>
</div>