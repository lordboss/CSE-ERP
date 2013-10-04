<?php
App::uses('AppController', 'Controller');
/**
 * MembresProjets Controller
 *
 * @property MembresProjet $MembresProjet
 * @property PaginatorComponent $Paginator
 */
class MembresProjetsController extends AppController {

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
		$this->MembresProjet->recursive = 0;
		$this->set('membresProjets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MembresProjet->exists($id)) {
			throw new NotFoundException(__('Invalid membres projet'));
		}
		$options = array('conditions' => array('MembresProjet.' . $this->MembresProjet->primaryKey => $id));
		$this->set('membresProjet', $this->MembresProjet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MembresProjet->create();
			if ($this->MembresProjet->save($this->request->data)) {
				$this->Session->setFlash(__('The membres projet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membres projet could not be saved. Please, try again.'));
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
		if (!$this->MembresProjet->exists($id)) {
			throw new NotFoundException(__('Invalid membres projet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MembresProjet->save($this->request->data)) {
				$this->Session->setFlash(__('The membres projet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membres projet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MembresProjet.' . $this->MembresProjet->primaryKey => $id));
			$this->request->data = $this->MembresProjet->find('first', $options);
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
		$this->MembresProjet->id = $id;
		if (!$this->MembresProjet->exists()) {
			throw new NotFoundException(__('Invalid membres projet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MembresProjet->delete()) {
			$this->Session->setFlash(__('The membres projet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membres projet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
