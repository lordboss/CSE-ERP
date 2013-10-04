<?php
App::uses('AppModel', 'Model');
/**
 * Poste Model
 *
 * @property Membre $Membre
 */
class Poste extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Membre' => array(
			'className' => 'Membre',
			'joinTable' => 'membres_postes',
			'foreignKey' => 'poste_id',
			'associationForeignKey' => 'membre_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
