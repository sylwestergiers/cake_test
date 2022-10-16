<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Params Model
 *
 * @method \App\Model\Entity\Param newEmptyEntity()
 * @method \App\Model\Entity\Param newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Param[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Param get($primaryKey, $options = [])
 * @method \App\Model\Entity\Param findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Param patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Param[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Param|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Param saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Param[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Param[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Param[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Param[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParamsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('params');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('param_key')
            ->maxLength('param_key', 255)
            ->notEmptyString('param_key');

        $validator
            ->scalar('valueStr')
            ->maxLength('valueStr', 255)
            ->notEmptyString('valueStr');

        return $validator;
    }
}
