<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductoFixture
 */
class ProductoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'producto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_producto' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'precio' => 1.5,
                'cantidad' => 1,
                'id_referencia' => 1,
                'proveedor_id' => 1,
            ],
        ];
        parent::init();
    }
}
