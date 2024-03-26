<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
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
                'filename' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet',
                'show_in_mainpage' => 1,
                'visible' => 1,
                'pos' => 1,
                'created' => '2024-03-25 13:48:26',
                'modified' => '2024-03-25 13:48:26',
            ],
        ];
        parent::init();
    }
}
