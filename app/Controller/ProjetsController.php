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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'admin';
		$this->Projet->recursive = 0;
		$projets = $this->Paginator->paginate();
		$this->set('projets', $projets);
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
		if (!$this->Projet->exists($id)) {
			throw new NotFoundException(__('Invalid projet'));
		}
		$options = array('conditions' => array('Projet.' . $this->Projet->primaryKey => $id));
		$this->set('projet', $this->Projet->find('first', $options));

		$membres = $this->Projet->query(
		   'select membres.id, membres.nom, membres.prenom, membres.email
			from membres_projets 
			join membres on (membres_projets.membre_id = membres.id)
			where membres_projets.projet_id = '. $id
		);

		$this->set(compact('membres'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$data = $this->request->data;
			$data['Projet']['progression'] = 0;

			$this->Projet->create();
			if ($this->Projet->save($data)) {
				$this->Session->setFlash(__('The projet has been saved.'));

				$projet_id = $this->Projet->getLastInsertID();

				$membre_projet['MembresProjet']['projet_id'] = $projet_id;
				$membre_projet['MembresProjet']['membre_id'] = $data['Projet']['membre_id'];
				$this->Projet->MembresProjet->save($membre_projet);

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projet could not be saved. Please, try again.'));
			}
		}

		$membres = $this->Projet->query(
		   'select membres.id, membres.nom, membres.prenom, membres.email from membres
		   	order by membres.nom, membres.prenom'
		);
		
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

	public function progression() {
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data;
			
			if ($this->Projet->save($data)) {
				$this->Session->setFlash(__('The projet has been saved.'));
				return $this->redirect(array('controller' => 'projets', 'action' => 'view', $data['Projet']['id']));
			} else {
				$this->Session->setFlash(__('The projet could not be saved. Please, try again.'));
			}
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
