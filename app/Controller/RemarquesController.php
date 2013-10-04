<?php
App::uses('AppController', 'Controller');
/**
 * Remarques Controller
 *
 * @property Remarque $Remarque
 * @property PaginatorComponent $Paginator
 */
class RemarquesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Remarque->recursive = 0;
		$this->set('remarques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Remarque->exists($id)) {
			throw new NotFoundException(__('Invalid remarque'));
		}
		$options = array('conditions' => array('Remarque.' . $this->Remarque->primaryKey => $id));
		$this->set('remarque', $this->Remarque->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Remarque->create();
			if ($this->Remarque->save($this->request->data)) {
				$this->Session->setFlash(__('The remarque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The remarque could not be saved. Please, try again.'));
			}
		}
		$membres = $this->Remarque->Membre->find('list');
		$this->set(compact('membres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Remarque->exists($id)) {
			throw new NotFoundException(__('Invalid remarque'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Remarque->save($this->request->data)) {
				$this->Session->setFlash(__('The remarque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The remarque could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Remarque.' . $this->Remarque->primaryKey => $id));
			$this->request->data = $this->Remarque->find('first', $options);
		}
		$membres = $this->Remarque->Membre->find('list');
		$this->set(compact('membres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Remarque->id = $id;
		if (!$this->Remarque->exists()) {
			throw new NotFoundException(__('Invalid remarque'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Remarque->delete()) {
			$this->Session->setFlash(__('The remarque has been deleted.'));
		} else {
			$this->Session->setFlash(__('The remarque could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
