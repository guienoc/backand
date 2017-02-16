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
        $domain = $this->Domains->newEntity();
        $this->set(compact('domains','domain'));
    }


    public function adicionar()
    {
        $domain = $this->Domains->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['user_id'] = $this->Auth->user('id');
            $this->request->data['expiration_date'] = date('Y-m-d', strtotime(date('Y-m-d') . '+1 years'));
            $domain = $this->Domains->patchEntity($domain, $this->request->data);
            if ($this->Domains->save($domain)) {
                $this->Flash->success(__('O Domínio foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('#erro. Tente novamente'));
        }
    }

}