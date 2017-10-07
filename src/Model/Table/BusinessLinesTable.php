<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessLines Model
 *
 * @method \App\Model\Entity\BusinessLine get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessLine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessLine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessLine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessLine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessLine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessLine findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessLinesTable extends Table
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

        $this->setTable('business_lines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'background' => [
                'fields' => [
                    'dir' => 'background_dir'
                ],
            ],
            'main_picture' => [
                'fields' => [
                    'dir' => 'main_picture_dir'
                ],
            ],
            'secondary_picture' => [
                'fields' => [
                    'dir' => 'secondary_picture_dir'
                ],
            ],
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
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->add('title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->allowEmpty('background');

        $validator
            ->scalar('background_dir')
            ->allowEmpty('background_dir');

        $validator
            ->scalar('main_picture')
            ->allowEmpty('main_picture');

        $validator
            ->scalar('main_picture_dir')
            ->allowEmpty('main_picture_dir');

        $validator
            ->scalar('secondary_picture')
            ->allowEmpty('secondary_picture');

        $validator
            ->scalar('secondary_picture_dir')
            ->allowEmpty('secondary_picture_dir');

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
        $rules->add($rules->isUnique(['title']));

        return $rules;
    }
}
