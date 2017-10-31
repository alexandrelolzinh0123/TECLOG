<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($produto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade De Medida') ?></th>
            <td><?= h($produto->unidade_de_medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Embalagem') ?></th>
            <td><?= h($produto->embalagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Por Caixa') ?></th>
            <td><?= $this->Number->format($produto->quantidade_por_caixa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dimensoes') ?></th>
            <td><?= $this->Number->format($produto->dimensoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Por Caixa') ?></th>
            <td><?= $this->Number->format($produto->preco_por_caixa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demanda Mensal') ?></th>
            <td><?= $this->Number->format($produto->demanda_mensal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto User Cad') ?></th>
            <td><?= $this->Number->format($produto->produto_user_cad) ?></td>
        </tr>
    </table>
</div>
