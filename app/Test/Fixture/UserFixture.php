<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nin' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 13, 'unsigned' => false),
		'mot_de_passe' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'civilite' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'prenom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'age' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'pays' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'region' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quartier' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'adresse_complement' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel_secondaire' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo_profil' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo_complete' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'facebook' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'linked_in' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nom_societe' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ninea_societe' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nin' => 1,
			'mot_de_passe' => 'Lorem ipsum dolor sit amet',
			'role' => 'Lorem ipsum dolor sit amet',
			'civilite' => 'Lorem ip',
			'nom' => 'Lorem ipsum dolor sit amet',
			'prenom' => 'Lorem ipsum dolor sit amet',
			'age' => 1,
			'pays' => 'Lorem ipsum dolor ',
			'region' => 'Lorem ipsum dolor ',
			'quartier' => 'Lorem ipsum dolor sit amet',
			'adresse_complement' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolo',
			'tel_secondaire' => 'Lorem ipsum dolo',
			'email' => 'Lorem ipsum dolor sit amet',
			'photo_profil' => 'Lorem ipsum dolor sit amet',
			'photo_complete' => 'Lorem ipsum dolor sit amet',
			'facebook' => 'Lorem ipsum dolor sit amet',
			'linked_in' => 'Lorem ipsum dolor sit amet',
			'nom_societe' => 'Lorem ipsum dolor sit amet',
			'ninea_societe' => 'Lorem ipsum dolor sit amet',
			'created' => '2019-03-02 23:37:11',
			'modified' => '2019-03-02 23:37:11'
		),
	);

}
