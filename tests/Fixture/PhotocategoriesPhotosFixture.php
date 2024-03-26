<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PhotocategoriesPhotosFixture
 */
class PhotocategoriesPhotosFixture extends TestFixture
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
                'photocategory_id' => 1,
                'photo_id' => 1,
                'visible' => 1,
                'pos' => 1,
                'created' => '2024-03-26 09:04:23',
                'modified' => '2024-03-26 09:04:23',
            ],
        ];
        parent::init();
    }
}
