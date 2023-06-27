<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id_producto
 * @property string $nombre
 * @property string $precio
 * @property int $cantidad
 * @property int $id_referencia
 * @property int $proveedor_id
 *
 * @property \App\Model\Entity\Proveedore $proveedore
 */
class Producto extends Entity
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
        'precio' => true,
        'cantidad' => true,
        'id_referencia' => true,
        'proveedor_id' => true,
        'proveedore' => true,
    ];
}
