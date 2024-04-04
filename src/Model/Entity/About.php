<?php
declare(strict_types=1);

namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * About Entity
 *
 * @property int $id
 * @property string $lang
 * @property string $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $google_map_url
 * @property string|null $google_description
 * @property string|null $google_keywords
 * @property string|null $twitter_url
 * @property string|null $facebook_url
 * @property string|null $instagram_url
 * @property string|null $linkedin_url
 * @property string|null $about_us_title
 * @property string|null $about_us_body
 * @property string|null $main_title
 * @property string|null $main_body
 * @property string|null $main_button_title
 * @property string|null $main_button_link
 * @property string|null $our_services_title
 * @property string|null $our_services_body
 * @property string|null $our_customers_title
 * @property string|null $our_customers_body
 * @property string|null $features_title
 * @property string|null $features_body
 * @property string|null $features_subtitle_1
 * @property string|null $features_body_1
 * @property string|null $features_subtitle_2
 * @property string|null $features_body_2
 * @property string|null $features_subtitle_3
 * @property string|null $features_body_3
 * @property string|null $features_subtitle_4
 * @property string|null $features_body_4
 * @property string|null $partners_title
 * @property string|null $partners_body
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class About extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'lang' => true,
        'name' => true,
        'phone' => true,
        'email' => true,
        'address' => true,
        'google_map_url' => true,
        'google_description' => true,
        'google_keywords' => true,
        'twitter_url' => true,
        'facebook_url' => true,
        'instagram_url' => true,
        'linkedin_url' => true,
        'about_us_title' => true,
        'about_us_body' => true,
        'main_title' => true,
        'main_body' => true,
        'main_button_title' => true,
        'main_button_link' => true,
        'our_services_title' => true,
        'our_services_body' => true,
        'our_customers_title' => true,
        'our_customers_body' => true,
        'features_title' => true,
        'features_body' => true,
        'features_subtitle_1' => true,
        'features_body_1' => true,
        'features_file_1' => true,
        'features_subtitle_2' => true,
        'features_body_2' => true,
        'features_file_2' => true,
        'features_subtitle_3' => true,
        'features_body_3' => true,
        'features_file_3' => true,
        'features_subtitle_4' => true,
        'features_body_4' => true,
        'features_file_4' => true,
        'partners_title' => true,
        'partners_body' => true,
        'created' => true,
        'modified' => true,
    ];
}
