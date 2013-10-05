<?php
App::uses('AppController', 'Controller');
/**
 * Projets Controller
 *
 * @property Projet $Projet
 * @property PaginatorComponent $Paginator
 */
class ProjetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $uses = array('Membre', 'Projet');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Projet->recursive = 0;
		$this->set('projets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Projet->exists($id)) {
			throw new NotFoundException(__('Invalid projet'));
		}
		$options = array('conditions' => array('Projet.' . $this->Projet->primaryKey => $id));
		$this->set('projet', $this->Projet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Projet->create();
			if ($this->Projet->save($this->request->data)) {
				$this->Session->setFlash(__('The projet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projet could not be saved. Please, try again.'));
			}
		}
		$membres = $this->Membre->find('list', array(
			'fields' => array('Membre.email')
		));
		
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
		if (!$this->Projet->exists($id)) {
			throw new NotFoundException(__('Invalid projet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Projet->save($this->request->data)) {
				$this->Session->setFlash(__('The projet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Projet.' . $this->Projet->primaryKey => $id));
			$this->request->data = $this->Projet->find('first', $options);
		}
		
		$membres = $this->Membre->find('list', array(
			'fields' => array('Membre.nom')
		));
		
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
		$this->Projet->id = $id;
		if (!$this->Projet->exists()) {
			throw new NotFoundException(__('Invalid projet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Projet->delete()) {
			$this->Session->setFlash(__('The projet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The projet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
