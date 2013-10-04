<?php
App::uses('AppModel', 'Model');
/**
 * CompetencesMembre Model
 *
 * @property Membre $Membre
 * @property Competence $Competence
 */
class CompetencesMembre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Membre' => array(
			'className' => 'Membre',
			'foreignKey' => 'membre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Competence' => array(
			'className' => 'Competence',
			'foreignKey' => 'competence_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
