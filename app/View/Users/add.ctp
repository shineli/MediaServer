<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('thunder_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Thunder Users'), array('controller' => 'thunder_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thunder User'), array('controller' => 'thunder_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
