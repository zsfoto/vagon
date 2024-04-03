<?php
declare(strict_types=1);

namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Photo Entity
 *
 * @property int $id
 * @property string $lang
 * @property string $name
 * @property string $body
 * @property string|null $filename
 * @property bool $visible
 * @property int $pos
 * @property int $photocategory_count
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Test[] $tests
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
        'lang' => true,
        'name' => true,
        'body' => true,
        'file' => true,
        'filename' => true,
        'file_ext' => true,
        'visible' => true,
        'pos' => true,
        'photocategory_count' => true,
        'created' => true,
        'modified' => true,
        'tests' => true,
        'photocategories' => true,
    ];
}
