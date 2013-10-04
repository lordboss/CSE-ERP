<?php
App::uses('AppController', 'Controller');
/**
 * Membres Controller
 *
 * @property Membre $Membre
 * @property PaginatorComponent $Paginator
 */
class MembresController extends AppController {

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
		$this->Membre->recursive = 0;
		$this->set('membres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Membre->exists($id)) {
			throw new NotFoundException(__('Invalid membre'));
		}
		$options = array('conditions' => array('Membre.' . $this->Membre->primaryKey => $id));
		$this->set('membre', $this->Membre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Membre->create();
			if ($this->Membre->save($this->request->data)) {
				$this->Session->setFlash(__('The membre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Membre->Section->find('list');
		$competences = $this->Membre->Competence->find('list');
		$postes = $this->Membre->Poste->find('list');
		$projets = $this->Membre->Projet->find('list');
		$this->set(compact('sections', 'competences', 'postes', 'projets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Membre->exists($id)) {
			throw new NotFoundException(__('Invalid membre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Membre->save($this->request->data)) {
				$this->Session->setFlash(__('The membre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Membre.' . $this->Membre->primaryKey => $id));
			$this->request->data = $this->Membre->find('first', $options);
		}
		$sections = $this->Membre->Section->find('list');
		$competences = $this->Membre->Competence->find('list');
		$postes = $this->Membre->Poste->find('list');
		$projets = $this->Membre->Projet->find('list');
		$this->set(compact('sections', 'competences', 'postes', 'projets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Membre->id = $id;
		if (!$this->Membre->exists()) {
			throw new NotFoundException(__('Invalid membre'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Membre->delete()) {
			$this->Session->setFlash(__('The membre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
