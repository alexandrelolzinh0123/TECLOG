<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lot $lot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lot'), ['action' => 'edit', $lot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lot'), ['action' => 'delete', $lot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lots'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lot'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lots view large-9 medium-8 columns content">
    <h3><?= h($lot->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $lot->has('product') ? $this->Html->link($lot->product->id, ['controller' => 'Products', 'action' => 'view', $lot->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lot->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Entrada') ?></th>
            <td><?= $this->Number->format($lot->quantidade_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Saida') ?></th>
            <td><?= $this->Number->format($lot->quantidade_saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Funcionario') ?></th>
            <td><?= $this->Number->format($lot->id_funcionario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada') ?></th>
            <td><?= h($lot->entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validade') ?></th>
            <td><?= h($lot->validade) ?></td>
        </tr>
    </table>
</div>
