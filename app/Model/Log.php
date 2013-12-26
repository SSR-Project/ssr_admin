<?php


class Log extends AppModel {
    public $name = 'Log';
    public $belongsTo = array('User');

    public function getLogUsers()
    {
        $result = $this->find('all', array(
            'recursive' => 1,
        ));
        return $result;
    }

}
