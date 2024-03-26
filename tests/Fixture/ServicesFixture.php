<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicesFixture
 */
class ServicesFixture extends TestFixture
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
                'lang' => 'L',
                'name' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet',
                'link' => 'Lorem ipsum dolor sit amet',
                'delay' => 1,
                'visible' => 1,
                'pos' => 1,
                'created' => '2024-03-25 13:06:04',
                'modified' => '2024-03-25 13:06:04',
            ],
        ];
        parent::init();
    }
}
