<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $tdoc
 * @property int $ndocu
 * @property string $nombre
 * @property string $fnaci
 * @property string $correo
 * @property string $direccion
 * @property string $numcont
 * @property int $contra
 */
class Cliente extends Entity
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
    protected $_accessible = [
        'tdoc' => true,
        'ndocu' => true,
        'nombre' => true,
        'fnaci' => true,
        'correo' => true,
        'direccion' => true,
        'numcont' => true,
        'contra' => true,
    ];
}
