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

	public $uses = array('Poste', 'MembresPoste');

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
	public function add($membre_id = null) {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$data = $this->request->data;
			if ($membre_id != null)
				$data['MembresPoste']['membre_id'] = $membre_id;
			$this->MembresPoste->create();
			if ($this->MembresPoste->save($data)) {
				$this->Session->setFlash(__('The membres poste has been saved.'));
				return $this->redirect(array('controller' => 'membres', 'action' => 'view', $membre_id));
			} else {
				$this->Session->setFlash(__('The membres poste could not be saved. Please, try again.'));
			}
		}

		$postes = $this->Poste->find('list', array(
			'fields' => array('Poste.nom')
		));

		$this->set(compact('postes'));
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

		$MembresPoste = $this->MembresPoste->find('first', array(
			'conditions' => array(
				'MembresPoste.id' => $id
		)));


		$this->request->onlyAllow('post', 'delete');
		if ($this->MembresPoste->delete()) {
			$this->Session->setFlash(__('The membres poste has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membres poste could not be deleted. Please, try again.'));
		}

		return $this->redirect(array('controller' => 'membres', 'action' => 'view', $MembresPoste['Membre']['id']));
	}}
