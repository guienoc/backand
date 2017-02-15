<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminAppController;
use Cake\Event\Event;

class MeusSitesController extends AdminAppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->loadModel('Domains');
	}
	public function index()
    {
    	$this->paginate = [
    		'conditions' => ['user_id'=>$this->Auth->user('id')]
    	];
        $domains = $this->paginate($this->Domains);
        $this->set(compact('domains'));
    }
}