<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessLinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessLinesTable Test Case
 */
class BusinessLinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessLinesTable
     */
    public $BusinessLines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.business_lines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BusinessLines') ? [] : ['className' => BusinessLinesTable::class];
        $this->BusinessLines = TableRegistry::get('BusinessLines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessLines);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
