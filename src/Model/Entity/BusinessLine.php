<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusinessLine Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $background
 * @property string $background_dir
 * @property string $main_picture
 * @property string $main_picture_dir
 * @property string $secondary_picture
 * @property string $secondary_picture_dir
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class BusinessLine extends Entity
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
        'background' => true,
        'background_dir' => true,
        'main_picture' => true,
        'main_picture_dir' => true,
        'secondary_picture' => true,
        'secondary_picture_dir' => true,
        'created' => true,
        'modified' => true
    ];
}
