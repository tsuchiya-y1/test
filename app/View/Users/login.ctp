<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your mailaddress and password.'); ?></legend>
        <?php
        echo $this->Form->input('email');
        echo $this->Form->input('password', array('autocomplete' => 'off'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
