<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property bool $readed
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Message extends Entity
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
        'email' => true,
        'subject' => true,
        'body' => true,
        'readed' => true,
        'created' => true,
        'modified' => true,
    ];
}
