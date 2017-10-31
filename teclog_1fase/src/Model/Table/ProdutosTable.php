<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutosTable extends Table
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

        $this->setTable('produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('unidade_de_medida')
            ->requirePresence('unidade_de_medida', 'create')
            ->notEmpty('unidade_de_medida');

        $validator
            ->numeric('quantidade_por_caixa')
            ->requirePresence('quantidade_por_caixa', 'create')
            ->notEmpty('quantidade_por_caixa');

        $validator
            ->scalar('embalagem')
            ->requirePresence('embalagem', 'create')
            ->notEmpty('embalagem');

        $validator
            ->numeric('dimensoes')
            ->requirePresence('dimensoes', 'create')
            ->notEmpty('dimensoes');

        $validator
            ->numeric('preco_por_caixa')
            ->requirePresence('preco_por_caixa', 'create')
            ->notEmpty('preco_por_caixa');

        $validator
            ->numeric('demanda_mensal')
            ->requirePresence('demanda_mensal', 'create')
            ->notEmpty('demanda_mensal');

        $validator
            ->integer('produto_user_cad')
            ->allowEmpty('produto_user_cad');

        return $validator;
    }
}
