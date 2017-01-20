<div class="principles view">
<h2><?php echo __('Principle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($principle['Principle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($principle['User']['id'], array('controller' => 'users', 'action' => 'view', $principle['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo h($principle['Principle']['article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($principle['Principle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($principle['Principle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Principle'), array('action' => 'edit', $principle['Principle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Principle'), array('action' => 'delete', $principle['Principle']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $principle['Principle']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Principles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Principle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
