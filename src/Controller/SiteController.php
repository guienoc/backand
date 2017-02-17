<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
class SiteController extends AppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow();
	}
	public function index()
    {

    }

    public function faq()
    {

    }

    public function contato()
    {

    }

    public function servicos()
    {

    }

    public function registrar()
    {
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        $this->set(compact('user'));
    }
    public function areaDoCliente()
    {
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        $this->set(compact('user'));
    }
    public function sendLogin()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['prefix'=>'admin','controller'=>'Painel','action'=>'index']);
            } else {
                $this->Flash->error('Usuário ou senha inválidos.');
            }
        } else {
            return $this->redirect(['action'=>'registrar']);
        }
    }
    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect(['action'=>'index']);
    }

    public function suporte()
    {

    }
}