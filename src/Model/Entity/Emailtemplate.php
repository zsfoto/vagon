<?php
declare(strict_types=1);

namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Emailtemplate Entity
 *
 * @property int $id
 * @property string $lang
 * @property string $slug
 * @property string $name
 * @property string $title
 * @property string $body
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Emailtemplate extends Entity
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
        'slug' => true,
        'help' => true,
        'name' => true,
        'title' => true,
        'body' => true,
        'created' => true,
        'modified' => true,
    ];
}
