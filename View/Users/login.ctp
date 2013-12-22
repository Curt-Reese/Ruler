<?php

/**
 * Created By: CurtReese
 * Date: 12/15/13
 * Time: 1:38 PM
 *
 * Added next line to improve auto-complete in view
 * @var $this View
 */

?>

<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
</div>