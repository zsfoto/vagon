<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AboutsFixture
 */
class AboutsFixture extends TestFixture
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
                'phone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'twitter_url' => 'Lorem ipsum dolor sit amet',
                'facebook_url' => 'Lorem ipsum dolor sit amet',
                'instagram_url' => 'Lorem ipsum dolor sit amet',
                'linkedin_url' => 'Lorem ipsum dolor sit amet',
                'main_title' => 'Lorem ipsum dolor sit amet',
                'main_body' => 'Lorem ipsum dolor sit amet',
                'main_button_title' => 'Lorem ipsum dolor sit amet',
                'main_button_link' => 'Lorem ipsum dolor sit amet',
                'our_services_title' => 'Lorem ipsum dolor sit amet',
                'our_services_body' => 'Lorem ipsum dolor sit amet',
                'our_customers_title' => 'Lorem ipsum dolor sit amet',
                'our_customers_body' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-03-25 14:43:24',
                'modified' => '2024-03-25 14:43:24',
            ],
        ];
        parent::init();
    }
}
