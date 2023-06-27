<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 */
class ClientesFixture extends TestFixture
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
                'id' => 1,
                'tdoc' => 'Lorem ipsum dolor sit amet',
                'ndocu' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'fnaci' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'numcont' => 'Lorem ipsum',
                'contra' => 1,
            ],
        ];
        parent::init();
    }
}
