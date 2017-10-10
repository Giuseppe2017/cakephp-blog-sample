<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class TopicsTable extends Table{

     public function validationDefault(Validator $validator){
        $validator = new Validator();
        $validator
            ->requirePresence('title')
            ->notEmpty('title', 'Please fill this field')
            ->add('title', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Title need to be at least 5 characters long',
                ],
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => 'Title is already in use, please choose another.'
                ]
            ])
            ->requirePresence('content')
            ->notEmpty('content', 'Please fill this field')
            ->add('content', [
                'length' => [
                    'rule' => ['minLength', 25],
                    'message' => 'Content need to be at least 25 characters long',
                ]
            ])
            ->requirePresence('tags')
            ->notEmpty('tags', 'Please fill this field')
            ->add('tags', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Tags need to be at least 5 characters long',
                ]
            ])
            ->requirePresence('author')
            ->notEmpty('author', 'Please fill this field')
            ->add('author', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Author Name need to be at least 5 characters long',
                ]
            ]);
    	return $validator;
    }
}
