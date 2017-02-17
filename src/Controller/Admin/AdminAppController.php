<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;


class AdminAppController extends AppController {
	public function beforeFilter(Event $event) {
		$this->viewBuilder()->layout('admin');
	}


}