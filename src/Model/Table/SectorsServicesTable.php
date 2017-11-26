<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SectorsServices Model
 *
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\BelongsTo $Sectors
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \App\Model\Entity\SectorsService get($primaryKey, $options = [])
 * @method \App\Model\Entity\SectorsService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SectorsService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SectorsService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SectorsService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SectorsService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SectorsService findOrCreate($search, callable $callback = null, $options = [])
 */
class SectorsServicesTable extends Table
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

        $this->setTable('sectors_services');
        $this->setDisplayField('sector_id');
        $this->setPrimaryKey(['sector_id', 'service_id']);

        $this->belongsTo('Sectors', [
            'foreignKey' => 'sector_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['sector_id'], 'Sectors'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
