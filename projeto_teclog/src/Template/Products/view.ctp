<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lots'), ['controller' => 'Lots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lot'), ['controller' => 'Lots', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($product->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Atual') ?></th>
            <td><?= $this->Number->format($product->quantidade_atual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lots') ?></h4>
        <?php if (!empty($product->lots)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Quantidade Entrada') ?></th>
                <th scope="col"><?= __('Entrada') ?></th>
                <th scope="col"><?= __('Validade') ?></th>
                <th scope="col"><?= __('Quantidade Saida') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Id Funcionario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->lots as $lots): ?>
            <tr>
                <td><?= h($lots->id) ?></td>
                <td><?= h($lots->quantidade_entrada) ?></td>
                <td><?= h($lots->entrada) ?></td>
                <td><?= h($lots->validade) ?></td>
                <td><?= h($lots->quantidade_saida) ?></td>
                <td><?= h($lots->product_id) ?></td>
                <td><?= h($lots->id_funcionario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lots', 'action' => 'view', $lots->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lots', 'action' => 'edit', $lots->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lots', 'action' => 'delete', $lots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lots->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
