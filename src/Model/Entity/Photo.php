<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property int $photocategory_id
 * @property string $lang
 * @property string $name
 * @property string $body
 * @property bool $visible
 * @property int $pos
 * @property int $photocategory_count
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Photocategory[] $photocategories
 */
class Photo extends Entity
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
        'photocategory_id' => true,
        'lang' => true,
        'name' => true,
        'body' => true,
        'visible' => true,
        'pos' => true,
        'photocategory_count' => true,
        'created' => true,
        'modified' => true,
        'photocategories' => true,
    ];
}
