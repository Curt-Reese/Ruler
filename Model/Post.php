<?php
/**
 * User: CurtReese
 * Date: 12/14/13
 * Time: 10:55 AM
 *
 * @property Post $Post
 *
 */

class Post extends AppModel
{
    public $validate = array(
        'title' => array('rule' => 'notEmpty'),
        'body' => array('rule' => 'notEmpty')
    );

    public function isOwnedBy($post, $user)
    {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
    }
}