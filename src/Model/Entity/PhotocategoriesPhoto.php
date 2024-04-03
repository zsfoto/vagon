<?php
declare(strict_types=1);

namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * PhotocategoriesPhoto Entity
 *
 * @property int $id
 * @property int $photocategory_id
 * @property int $photo_id
 * @property bool $visible
 * @property int $pos
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Photocategory $photocategory
 * @property \App\Model\Entity\Photo $photo
 */
class PhotocategoriesPhoto extends Entity
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
        'photo_id' => true,
        'visible' => true,
        'pos' => true,
        'created' => true,
        'modified' => true,
        'photocategory' => true,
        'photo' => true,
    ];
}
