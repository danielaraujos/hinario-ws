<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hinos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Autores
 * @property \Cake\ORM\Association\BelongsTo $Indices
 *
 * @method \App\Model\Entity\Hino get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hino findOrCreate($search, callable $callback = null)
 */
class HinosTable extends Table
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

        $this->table('hinos');
        $this->displayField('name');
        $this->primaryKey('id');


        $this->belongsTo('Indices', [
            'foreignKey' => 'indices_id',
            'joinType' => 'INNER'
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['indices_id'], 'Indices'));
        return $rules;
    }
}
