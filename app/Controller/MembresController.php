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

		$membres = $this->Membre->query(
		   'select membres.id, membres.nom, membres.prenom, membres.email, membres.datenaissance,
		   		membres.dateinscription, sections.nom, sections.id
		   	from membres
		   	join sections on (sections.id = membres.section_id)
		   	where membres.id = ' . $id
		);
		$membres = $membres[0];

		$postes = $this->Membre->query(
		   'select membres_postes.date, postes.nom, membres_postes.id
			from membres_postes
			join postes on (membres_postes.poste_id = postes.id)
			where membres_postes.membre_id = ' . $id . '
			order by membres_postes.date DESC'
		);

		$poste_actuel = 'Adhérent';
		if (isset($postes[0]['postes']['nom']))
			$poste_actuel = $postes[0]['postes']['nom'];

		$projets = $this->Membre->query(
		   'select projets.id, projets.nom, projets.url, membres.id, membres.email
			from projets 
			join membres on (projets.membre_id = membres.id)
			join membres_projets on (membres_projets.projet_id = projets.id)
			where membres_projets.membre_id = '. $id
		);

		$remarques = $this->Membre->query(
		   'select remarques.id, remarques.remarque, remarques.date
		   from remarques
		   where remarques.membre_id = ' . $id
		);

		$competences = $this->Membre->query(
		   'select competences.nom, competences_membres.membre_id, competences_membres.id
			from competences_membres
			join competences on (competences_membres.competence_id = competences.id)
			where competences_membres.membre_id = ' . $id
		);

		$this->set(compact('membres', 'projets', 'remarques', 'postes', 'poste_actuel', 'competences'));
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

		$erreurs = $this->Membre->validationErrors;

		$this->set(compact('sections', 'competences', 'postes', 'projets', 'erreurs'));
	}

	public function find($keywords = null) {
		$this->layout = 'admin';
		
		$membres = array();

		if ($this->request->is('post')) {
			$data = $this->request->data;
			$words = explode(' ', $data['Membre']['query']);

			$sql = 'select membres.id, membres.nom, membres.prenom, membres.email from membres where ';
		

			foreach ($words as $word) {
				$sql = $sql . '(membres.nom like "%' . $word . '%" or ';
				$sql = $sql . 'membres.prenom like "%' . $word . '%" or ';
				$sql = $sql . 'membres.email like "%' . $word . '%") and ';
			}

			$sql = $sql . '(1=1)';

			$membres = $this->Membre->query($sql);
		}

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
		$this->layout = 'admin';
		if (!$this->Membre->exists($id)) {
			throw new NotFoundException(__('Invalid membre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data;
			$data['Membre']['id'] = $id;
			if ($this->Membre->save($data)) {
				$this->Session->setFlash(__('The membre has been saved.'));
				return $this->redirect(array('controller' => 'membres', 'action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.'));
			}
		}


		$options = array('conditions' => array('Membre.' . $this->Membre->primaryKey => $id));
		$this->request->data = $this->Membre->find('first', $options);
		$membres = $this->Membre->query(
		   'select membres.nom, membres.prenom, membres.email, membres.datenaissance, 
			membres.dateinscription, membres.section_id 
			from membres where membres.id = ' . $id
		);
		$membres = $membres[0];

		$sections = $this->Membre->Section->find('list', array(
			'fields' => array('Section.nom')
		));

		$erreurs = $this->Membre->validationErrors;
		$this->set(compact('sections', 'membres', 'erreurs'));
		
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
