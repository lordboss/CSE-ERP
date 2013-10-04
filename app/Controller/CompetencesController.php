<?php
App::uses('AppController', 'Controller');
/**
 * Competences Controller
 *
 * @property Competence $Competence
 * @property PaginatorComponent $Paginator
 */
class CompetencesController extends AppController {

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
		$this->Competence->recursive = 0;
		$this->set('competences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Competence->exists($id)) {
			throw new NotFoundException(__('Invalid competence'));
		}
		$options = array('conditions' => array('Competence.' . $this->Competence->primaryKey => $id));
		$this->set('competence', $this->Competence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competence->create();
			if ($this->Competence->save($this->request->data)) {
				$this->Session->setFlash(__('The competence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competence could not be saved. Please, try again.'));
			}
		}
		$membres = $this->Competence->Membre->find('list');
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
		if (!$this->Competence->exists($id)) {
			throw new NotFoundException(__('Invalid competence'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Competence->save($this->request->data)) {
				$this->Session->setFlash(__('The competence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competence could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Competence.' . $this->Competence->primaryKey => $id));
			$this->request->data = $this->Competence->find('first', $options);
		}
		$membres = $this->Competence->Membre->find('list');
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
		$this->Competence->id = $id;
		if (!$this->Competence->exists()) {
			throw new NotFoundException(__('Invalid competence'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Competence->delete()) {
			$this->Session->setFlash(__('The competence has been deleted.'));
		} else {
			$this->Session->setFlash(__('The competence could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
