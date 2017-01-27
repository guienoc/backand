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

    }

    public function suporte()
    {

    }
}