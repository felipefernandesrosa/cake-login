<?php

App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
	
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Username é requirido'
            ),
			'unique' => array(
				'rule'    => 'isUnique',
				'message' => 'Esse username já existe, escolha outro por favor.'
			)
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Senha é requirida'
            )
        ),
		'email' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Email é requirido'
            )
        ),
        'name' => array(
            'valid' => array(
                'rule' => array('notBlank'),
                'message' => 'Nome é requirido',
                'allowEmpty' => false
            )
        )
    );
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
	
}
