<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PhotocategoriesFixture
 */
class PhotocategoriesFixture extends TestFixture
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
                'photo_id' => 1,
                'lang' => 'L',
                'name' => 'Lorem ipsum dolor sit amet',
                'visible' => 1,
                'pos' => 1,
                'photo_count' => 1,
                'created' => '2024-03-26 09:04:25',
                'modified' => '2024-03-26 09:04:25',
            ],
        ];
        parent::init();
    }
}
