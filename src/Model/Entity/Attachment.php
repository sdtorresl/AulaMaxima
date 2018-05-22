<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attachment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property string $directory
 * @property string $type
 * @property \Cake\I18n\FrozenTime $created
 * @property int $service_id
 *
 * @property \App\Model\Entity\Service $service
 */
class Attachment extends Entity
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
        'name' => true,
        'file' => true,
        'directory' => true,
        'type' => true,
        'created' => true,
        'service' => true
    ];
}
