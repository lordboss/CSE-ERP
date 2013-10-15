<?php
App::uses('AppController', 'Controller');
/**
 * Membres Controller
 *
 * @property Membre $Membre
 * @property PaginatorComponent $Paginator
 */
class MembresController extends AppController {

	public $components = array('Paginator');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'admin';
		$this->Membre->recursive = 1;
		$membres = $this->Paginator->paginate();
		$this->set('membres', $membres);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'admin';
		if (!$this->Membre->exists($id)) {
			throw new NotFoundException(__('Invalid membre'));
		}
		
		$options = array('conditions' => array('Membre.' . $this->Membre->primaryKey => $id));
		$membre = $this->Membre->find('first', $options);
				
		$this->set('membre', $membre);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Membre->create();
			if ($this->Membre->save($this->request->data)) {
				$this->Session->setFlash(__('The membre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Membre->Section->find('list', array(
			'fields' => array('Section.nom')
		));
		$competences = $this->Membre->Competence->find('list', array(
			'fields' => array('Competence.nom')
		));
		$postes = $this->Membre->Poste->find('list', array(
			'fields' => array('Poste.nom')
		));
		$projets = $this->Membre->Projet->find('list', array(
			'fields' => array('Projet.nom')
		));
		$this->set(compact('sections', 'competences', 'postes', 'projets'));
	}
	
	public function addCompetence() {
	
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
	}
}
