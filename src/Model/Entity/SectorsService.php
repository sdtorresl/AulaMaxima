<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SectorsService Entity
 *
 * @property int $sector_id
 * @property int $service_id
 *
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\Service $service
 */
class SectorsService extends Entity
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
        'sector' => true,
        'service' => true
    ];
}
