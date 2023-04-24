<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 */
class ContratosFixture extends TestFixture
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
                'contratoId' => 1,
                'clienteId' => 1,
                'fecha' => '2023-04-24 00:59:24',
                'monto' => 1,
            ],
        ];
        parent::init();
    }
}
