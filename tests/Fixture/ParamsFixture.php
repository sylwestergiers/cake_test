<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParamsFixture
 */
class ParamsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'param_key' => 'Lorem ipsum dolor sit amet',
                'valueStr' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-10-16 10:58:30',
                'modified' => '2022-10-16 10:58:30',
            ],
        ];
        parent::init();
    }
}
