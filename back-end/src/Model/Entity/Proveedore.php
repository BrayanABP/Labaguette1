<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedore Entity
 *
 * @property int $id_proveedor
 * @property string $nombre
 * @property string $apellidos
 * @property string $numero_de_contacto
 */
class Proveedore extends Entity
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
        'nombre' => true,
        'apellidos' => true,
        'numero_de_contacto' => true,
    ];
}
