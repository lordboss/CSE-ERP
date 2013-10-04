<?php
App::uses('AppModel', 'Model');
/**
 * Competence Model
 *
 * @property Membre $Membre
 */
class Competence extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datecreation' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Membre' => array(
			'className' => 'Membre',
			'joinTable' => 'competences_membres',
			'foreignKey' => 'competence_id',
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
