<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lot $lot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lots'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lots form large-9 medium-8 columns content">
    <?= $this->Form->create($lot) ?>
    <fieldset>
        <legend><?= __('Add Lot') ?></legend>
        <?php
            echo $this->Form->control('quantidade_entrada');
            echo $this->Form->control('entrada');
            echo $this->Form->control('validade');
            echo $this->Form->control('quantidade_saida');
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('id_funcionario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
