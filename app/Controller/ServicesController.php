<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 * @property PaginatorComponent $Paginator
 */
class ServicesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Auth', 'Session');
	
	/*public function isAuthorized($user) {
	    // Tous les users inscrits peuvent ajouter les posts
	    if ($this->action === 'add') {
	        return true;
	    }

	    // Le propriétaire du post peut l'éditer et le supprimer
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $serviceId = (int) $this->request->params['pass'][0];
	        if ($this->Service->isOwnedBy($serviceId, $user['id'])) {
	            return true;
	        }
	    }

	    return parent::isAuthorized($user);
	}
/**
 * index method
 *
 * @return void
 */
	/*public function index() {
		$this->Service->recursive = 0;
		$this->set('services', $this->Paginator->paginate());
	}*/

	public function admin_index() {
		$this->Service->recursive = 0;
		if ($this->Session->read('Auth.User.role') == 'admin') {
			$services = $this->Paginator->paginate();
		}
		elseif ($this->Session->read('Auth.User.role') == 'offreur' || $this->Session->read('Auth.User.role') == 'demandeur') {
			$this->Paginator->settings = array(
				'Service' => array(
					'conditions' => array('Service.user_id' => $this->Session->read('Auth.User.id'))
		        )
		    );
			$services = $this->paginate('Service');
		}
		$userr = $this->Session->read('Auth.User.id');
		$this->set('services', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
		$this->set('service', $this->Service->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Service']['user_id'] = $this->Auth->user('id');
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Service->User->find('list');
		$subCategories = $this->Service->SubCategory->find('list');
		$this->set(compact('users', 'subCategories'));
	}

	public function demandeur_add() {
		if ($this->request->is('post')) {
			$this->request->data['Service']['user_id'] = $this->Auth->user('id');
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'service', $this->Session->read('Auth.User.id'), 'demandeur' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Service->User->find('list');
		$subCategories = $this->Service->SubCategory->find('list');
		$this->layout = 'demandeur';
		$this->set(compact('users', 'subCategories'));
	}

	/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function demandeur_edit($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'service', $this->Session->read('Auth.User.id'), 'demandeur' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
		$users = $this->Service->User->find('list');
		$this->layout = 'demandeur';
		$subCategories = $this->Service->SubCategory->find('list');
		$this->set(compact('users', 'subCategories'));
	}

	/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function offreur_edit($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'service', $this->Session->read('Auth.User.id'), 'offreur' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
		$users = $this->Service->User->find('list');
		$this->layout = 'offreur';
		$subCategories = $this->Service->SubCategory->find('list');
		$this->set(compact('users', 'subCategories'));
	}

	public function demandeur_index() {
		$this->Service->recursive = 2;
		if ($this->Session->read('Auth.User.role') == 'demandeur') {
			$this->Paginator->settings = array(
				'Service' => array(
					'conditions' => array($this->Session->read('Auth.User.role') == 'offreur')
		        )
		    );
		}
		
		$services = $this->paginate('Service');
		$this->layout = 'demandeur';
		$userr = $this->Session->read('Auth.User.id');
		$this->set('services', $this->Paginator->paginate());
	}

	public function offreur_index() {
		$this->Service->recursive = 2;
		if ($this->Session->read('Auth.User.role') == 'offreur') {
			$this->Paginator->settings = array(
				'Service' => array(
					'conditions' => array($this->Session->read('Auth.User.role') == 'demandeur')
		        )
		    );
		}
		
		$services = $this->paginate('Service');
		$this->layout = 'offreur';
		$userr = $this->Session->read('Auth.User.id');
		$this->set('services', $this->Paginator->paginate());
	}

	public function offreur_add() {
		if ($this->request->is('post')) {
			$this->request->data['Service']['user_id'] = $this->Auth->user('id');
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'service', $this->Session->read('Auth.User.id'), 'offreur' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Service->User->find('list');
		$subCategories = $this->Service->SubCategory->find('list');
		$this->layout = 'offreur';
		$this->set(compact('users', 'subCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
		$users = $this->Service->User->find('list');
		$subCategories = $this->Service->SubCategory->find('list');
		$this->set(compact('users', 'subCategories'));
	}

	
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('The service has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The service could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function demandeur_delete($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('The service has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The service could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('controller' => 'users','action' => 'service', $this->Session->read('Auth.User.id'), 'demandeur' => true));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function offeur_delete($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('The service has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The service could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('controller' => 'users','action' => 'service', $this->Session->read('Auth.User.id'), 'offeur' => true));
	}
}
