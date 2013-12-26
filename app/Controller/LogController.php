<?php
/**
 * AdministratorController
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
App::uses('AppController', 'Controller');
class LogController extends AppController
{

    public $name = 'Log';
    public $uses = array('Log');
    public $layout = 'base';

    /**
     * beforeFilter
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->deny(); //認証なしで入れるページ
    }

    /**
     * logout
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function index()
    {
        //ユーザ情報の取得
        $users = $this->Log->getLogUsers();
        $this->set('users', $users);
    }
}
