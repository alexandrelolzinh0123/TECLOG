<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Edit Produto') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('unidade_de_medida');
            echo $this->Form->control('quantidade_por_caixa');
            echo $this->Form->control('embalagem');
            echo $this->Form->control('dimensoes');
            echo $this->Form->control('preco_por_caixa');
            echo $this->Form->control('demanda_mensal');
            echo $this->Form->control('produto_user_cad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
