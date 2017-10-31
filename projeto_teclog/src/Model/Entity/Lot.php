<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lot Entity
 *
 * @property int $id
 * @property int $quantidade_entrada
 * @property \Cake\I18n\FrozenTime $entrada
 * @property \Cake\I18n\FrozenTime $validade
 * @property int $quantidade_saida
 * @property int $product_id
 * @property int $id_funcionario
 *
 * @property \App\Model\Entity\Product $product
 */
class Lot extends Entity
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
        'quantidade_entrada' => true,
        'entrada' => true,
        'validade' => true,
        'quantidade_saida' => true,
        'product_id' => true,
        'id_funcionario' => true,
        'product' => true
    ];
}
