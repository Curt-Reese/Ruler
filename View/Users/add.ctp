<?php

/**
 * Created By: CurtReese
 * Date: 12/15/13
 * Time: 1:09 PM
 *
 * Added next line to improve auto-complete in view
 * @var $this View
 */

?>

<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
                'options' => array('admin' => 'Admin', 'author' => 'Author')
            ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>