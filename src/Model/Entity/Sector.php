<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sector Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $picture
 * @property string $picture_dir
 * @property int $business_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\BusinessLine $business_line
 */
class Sector extends Entity
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
        'title' => true,
        'description' => true,
        'picture' => true,
        'picture_dir' => true,
        'business_id' => true,
        'created' => true,
        'modified' => true,
        'business_line' => true
    ];
}
