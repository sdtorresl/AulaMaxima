<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SectorsServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SectorsServicesTable Test Case
 */
class SectorsServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SectorsServicesTable
     */
    public $SectorsServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sectors_services',
        'app.sectors',
        'app.business_lines',
        'app.services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SectorsServices') ? [] : ['className' => SectorsServicesTable::class];
        $this->SectorsServices = TableRegistry::get('SectorsServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SectorsServices);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
