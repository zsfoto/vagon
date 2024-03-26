<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partner Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $url
 * @property string $details
 * @property int $delay
 * @property bool $show_in_main_page
 * @property string $filename
 * @property bool $visible
 * @property int $pos
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Partner extends Entity
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
        'name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'url' => true,
        'details' => true,
        'delay' => true,
        'show_in_main_page' => true,
        'filename' => true,
        'visible' => true,
        'pos' => true,
        'created' => true,
        'modified' => true,
    ];
}
