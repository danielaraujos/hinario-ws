<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cifras Model
 *
 * @method \App\Model\Entity\Cifra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cifra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cifra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cifra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cifra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cifra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cifra findOrCreate($search, callable $callback = null)
 */
class CifrasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cifras');
        $this->displayField('name');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->requirePresence('tone', 'create')
            ->notEmpty('tone');

        $validator
            ->requirePresence('compass', 'create')
            ->notEmpty('compass');

        return $validator;
    }
}
