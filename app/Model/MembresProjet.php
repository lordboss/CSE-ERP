<?php
App::uses('AppModel', 'Model');
/**
 * MembresProjet Model
 *
 * @property Membre $Membre
 * @property Projet $Projet
 */
class MembresProjet extends AppModel {


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
		'Projet' => array(
			'className' => 'Projet',
			'foreignKey' => 'projet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
