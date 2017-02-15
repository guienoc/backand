<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    protected $Session;
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');
        
        $this->Session = $this->request->session();
    }

    public function beforeRender(Event $event)
    {
<<<<<<< HEAD
        
=======
        $auth_user = $this->Auth->user();

>>>>>>> cf25a91f4c3a984046c11bc8ab59c8399707953d
        $base = 'http://' . getenv('HTTP_HOST');
        $controller = $this->request->controller;
        $action = $this->request->action;
        $this->set(compact('base','controller','action','auth_user'));
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
