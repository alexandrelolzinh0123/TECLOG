<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade_de_medida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade_por_caixa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('embalagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dimensoes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco_por_caixa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demanda_mensal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto_user_cad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id) ?></td>
                <td><?= h($produto->descricao) ?></td>
                <td><?= h($produto->unidade_de_medida) ?></td>
                <td><?= $this->Number->format($produto->quantidade_por_caixa) ?></td>
                <td><?= h($produto->embalagem) ?></td>
                <td><?= $this->Number->format($produto->dimensoes) ?></td>
                <td><?= $this->Number->format($produto->preco_por_caixa) ?></td>
                <td><?= $this->Number->format($produto->demanda_mensal) ?></td>
                <td><?= $this->Number->format($produto->produto_user_cad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
