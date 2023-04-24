<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->contratoId], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->contratoId], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->contratoId), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos view content">
            <h3><?= h($contrato->contratoId) ?></h3>
            <table>
                <tr>
                    <th><?= __('ContratoId') ?></th>
                    <td><?= $this->Number->format($contrato->contratoId) ?></td>
                </tr>
                <tr>
                    <th><?= __('ClienteId') ?></th>
                    <td><?= $this->Number->format($contrato->clienteId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($contrato->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($contrato->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
