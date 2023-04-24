<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contrato> $contratos
 */
?>
<div class="contratos index content">
    <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'button float-right']) ?>


    <form method="POST">
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" name="fechaInicio" required>



        <label for="fechaFin">Fecha de fin:</label>
        <input type="date" name="fechaFin" required>



        <button type="submit">Mostrar montos por cliente</button>
    </form>

    <table>
        <thead>
            <tr>
                <th colspan="3">Montos por cliente</th>
            </tr>
            <tr>
                <th>Rango de fechas:</th>
                <th><?= $fechaInicio ?></th>
                <th><?= $fechaFin ?></th>
            </tr>
            <tr>
                <th>Cliente</th>
                <th>Montos</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato) : ?>
                <tr>
                    <td><?= $dato['nombre'] ?></td>
                    <td><?= $dato['total_montos'] ?></td>
                    <td><?= $totalMontos += $dato['total_montos'] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="2">Total:</td>
                <td><?= $totalMontos ?></td>
            </tr>
        </tbody>
    </table>






    <h3><?= __('Contratos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('contratoId') ?></th>
                    <th><?= $this->Paginator->sort('clienteId') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contratos as $contrato) : ?>
                    <tr>
                        <td><?= $this->Number->format($contrato->contratoId) ?></td>
                        <td><?= $this->Number->format($contrato->clienteId) ?></td>
                        <td><?= h($contrato->fecha) ?></td>
                        <td><?= $this->Number->format($contrato->monto) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->contratoId]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->contratoId]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->contratoId], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->contratoId)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>