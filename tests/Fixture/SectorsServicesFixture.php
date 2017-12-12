<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SectorsServicesFixture
 *
 */
class SectorsServicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sector_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_sectors_has_services_services1_idx' => ['type' => 'index', 'columns' => ['service_id'], 'length' => []],
            'fk_sectors_has_services_sectors1_idx' => ['type' => 'index', 'columns' => ['sector_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sector_id', 'service_id'], 'length' => []],
            'fk_sectors_has_services_sectors1' => ['type' => 'foreign', 'columns' => ['sector_id'], 'references' => ['sectors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_sectors_has_services_services1' => ['type' => 'foreign', 'columns' => ['service_id'], 'references' => ['services', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'sector_id' => 1,
            'service_id' => 1
        ],
    ];
}
