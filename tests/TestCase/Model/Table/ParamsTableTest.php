<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParamsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParamsTable Test Case
 */
class ParamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParamsTable
     */
    protected $Params;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Params',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Params') ? [] : ['className' => ParamsTable::class];
        $this->Params = $this->getTableLocator()->get('Params', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Params);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ParamsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
