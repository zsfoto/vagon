<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photocategory Entity
 *
 * @property int $id
 * @property int $photo_id
 * @property string $lang
 * @property string $name
 * @property bool $visible
 * @property int $pos
 * @property int $photo_count
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Photo[] $photos
 */
class Photocategory extends Entity
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
        'photo_id' => true,
        'lang' => true,
        'name' => true,
        'visible' => true,
        'pos' => true,
        'photo_count' => true,
        'created' => true,
        'modified' => true,
        'photos' => true,
    ];
}
