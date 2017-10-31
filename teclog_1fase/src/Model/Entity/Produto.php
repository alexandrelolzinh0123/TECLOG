<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $unidade_de_medida
 * @property float $quantidade_por_caixa
 * @property string $embalagem
 * @property float $dimensoes
 * @property float $preco_por_caixa
 * @property float $demanda_mensal
 * @property int $produto_user_cad
 */
class Produto extends Entity
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
        'descricao' => true,
        'unidade_de_medida' => true,
        'quantidade_por_caixa' => true,
        'embalagem' => true,
        'dimensoes' => true,
        'preco_por_caixa' => true,
        'demanda_mensal' => true,
        'produto_user_cad' => true
    ];
}
