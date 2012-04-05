<?php
App::uses('AppController', 'Controller');
/**
 * Modules Controller
 *
 * @property Module $Module
 */
class ModulesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Module->recursive = 0;
		$this->set('modules', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		$this->set('module', $this->Module->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Module->create();
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Module->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->Module->delete()) {
			$this->Session->setFlash(__('Module deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Module was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
