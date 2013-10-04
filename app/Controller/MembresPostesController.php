<?php
App::uses('AppController', 'Controller');
/**
 * MembresPostes Controller
 *
 * @property MembresPoste $MembresPoste
 * @property PaginatorComponent $Paginator
 */
class MembresPostesController extends AppController {

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
		$this->MembresPoste->recursive = 0;
		$this->set('membresPostes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MembresPoste->exists($id)) {
			throw new NotFoundException(__('Invalid membres poste'));
		}
		$options = array('conditions' => array('MembresPoste.' . $this->MembresPoste->primaryKey => $id));
		$this->set('membresPoste', $this->MembresPoste->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MembresPoste->create();
			if ($this->MembresPoste->save($this->request->data)) {
				$this->Session->setFlash(__('The membres poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membres poste could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MembresPoste->exists($id)) {
			throw new NotFoundException(__('Invalid membres poste'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MembresPoste->save($this->request->data)) {
				$this->Session->setFlash(__('The membres poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membres poste could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MembresPoste.' . $this->MembresPoste->primaryKey => $id));
			$this->request->data = $this->MembresPoste->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MembresPoste->id = $id;
		if (!$this->MembresPoste->exists()) {
			throw new NotFoundException(__('Invalid membres poste'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MembresPoste->delete()) {
			$this->Session->setFlash(__('The membres poste has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membres poste could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
