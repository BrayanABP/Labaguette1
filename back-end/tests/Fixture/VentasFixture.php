<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentasFixture
 */
class VentasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_venta' => 1,
                'fecha' => '2023-06-27',
                'hora' => '12:17:50',
                'total' => 1.5,
                'factura' => 'Lorem ipsum dolor sit amet',
                'cajero_identificacion' => 1,
            ],
        ];
        parent::init();
    }
}
