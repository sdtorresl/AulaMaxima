<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $message
 * @property bool $viewed
 * @property \Cake\I18n\FrozenTime $created
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'message' => true,
        'viewed' => true,
        'created' => true
    ];
}
