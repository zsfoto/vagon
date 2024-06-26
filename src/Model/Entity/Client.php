<?php
declare(strict_types=1);

namespace App\Model\Entity;


use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Client Entity
 *
 * @property int $id
 * @property string $lang
 * @property string $name
 * @property string $filename
 * @property string $body
 * @property bool $show_in_mainpage
 * @property bool $visible
 * @property int $pos
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Client extends Entity
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
        'filename' => true,
        'body' => true,
        'show_in_mainpage' => true,
        'visible' => true,
        'pos' => true,
        'created' => true,
        'modified' => true,
    ];
}
