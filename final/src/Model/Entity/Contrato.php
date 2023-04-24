<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $contratoId
 * @property int $clienteId
 * @property \Cake\I18n\FrozenTime $fecha
 * @property float $monto
 */
class Contrato extends Entity
{
    public $belongsTo = array(

        'Cliente' => array(
        
        'className' => 'Cliente',
        
        'foreignKey' => 'clienteId'
        
        )
        
    );
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
        'clienteId' => true,
        'fecha' => true,
        'monto' => true,
    ];
}
