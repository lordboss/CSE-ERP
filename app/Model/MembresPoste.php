<?php
App::uses('AppModel', 'Model');
/**
 * MembresPoste Model
 *
 * @property Membre $Membre
 * @property Poste $Poste
 */
class MembresPoste extends AppModel {


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
		'Poste' => array(
			'className' => 'Poste',
			'foreignKey' => 'poste_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
