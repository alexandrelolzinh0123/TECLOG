<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lots Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Lot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lot findOrCreate($search, callable $callback = null, $options = [])
 */
class LotsTable extends Table
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

        $this->setTable('lots');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
            ->integer('quantidade_entrada')
            ->requirePresence('quantidade_entrada', 'create')
            ->notEmpty('quantidade_entrada');

        $validator
            ->dateTime('entrada')
            ->requirePresence('entrada', 'create')
            ->notEmpty('entrada');

        $validator
            ->dateTime('validade')
            ->requirePresence('validade', 'create')
            ->notEmpty('validade');

        $validator
            ->integer('quantidade_saida')
            ->requirePresence('quantidade_saida', 'create')
            ->notEmpty('quantidade_saida');

        $validator
            ->integer('id_funcionario')
            ->requirePresence('id_funcionario', 'create')
            ->notEmpty('id_funcionario');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
