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
        $this->loadComponent('Auth', [
            'loginAction' => [
                'prefix' => false,
                'controller' => 'Site',
                'action' => 'areaDoCliente',
            ]
        ]);
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');
        
        $this->Session = $this->request->session();
    }

    public function beforeFilter(Event $event)
    {
        $auth_user = $this->Auth->user();
        $this->set(compact('auth_user'));
    }

    public function beforeRender(Event $event)
    {
        $base = 'http://' . getenv('HTTP_HOST');
        $controller = $this->request->controller;
        $action = $this->request->action;
        $this->set(compact('base','controller','action'));
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
