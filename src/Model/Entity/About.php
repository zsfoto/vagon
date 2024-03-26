<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * About Entity
 *
 * @property int $id
 * @property string $lang
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string|null $address
 * @property string|null $twitter_url
 * @property string|null $facebook_url
 * @property string|null $instagram_url
 * @property string|null $linkedin_url
 * @property string $main_title
 * @property string $main_body
 * @property string $main_button_title
 * @property string $main_button_link
 * @property string $our_services_title
 * @property string|null $our_services_body
 * @property string $our_customers_title
 * @property string|null $our_customers_body
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
        'twitter_url' => true,
        'facebook_url' => true,
        'instagram_url' => true,
        'linkedin_url' => true,
        'main_title' => true,
        'main_body' => true,
        'main_button_title' => true,
        'main_button_link' => true,
        'our_services_title' => true,
        'our_services_body' => true,
        'our_customers_title' => true,
        'our_customers_body' => true,
        'created' => true,
        'modified' => true,
    ];
}
