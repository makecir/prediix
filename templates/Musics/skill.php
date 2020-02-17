<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>

    <!-- <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <!-- <h3><?= __('Playdatas') ?></h3> -->


<div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            レート推定
        </h5>
    </div>
    <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body text-secondary">
            <h4 class="card-title">Rating : <?php echo $rating; ?></h4>
            </br>
                <!-- CSVフォーム -->
                    <?php echo $this->Form->create($csvform, ['type' => 'file', 'style' => "display:inline-block"]); ?>
                    <label class="btn btn-secondary my-auto" style="display:inline-block">
                        <span id="imported-filename">CSV選択</span>
                        <span style="display:none;">
                            <?php echo $this->Form->control('upload-csv', ['type' => 'file', 'accept' => '.csv', 'label' => '', 'style'=>"display:none;"]); ?>
                        </span>
                    </label>
                    <span class="submit"><input type="submit" id="submit-csv" class="btn btn-primary my-auto" value="アップロード"></span>
                    <?php
                        echo $this->Form->end();
                    ?>
                    <!-- CSVフォームここまで -->
            <p class="card-text">※算出に15秒程度かかります</p>
        </div>
    </div>
</div>
<h3><?= __('Musics') ?></h3>
<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('mid') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('version') ?></th>
                <th><?= $this->Paginator->sort('difficult') ?></th>
                <th><?= $this->Paginator->sort('notes') ?></th>
                <th><?= $this->Paginator->sort('created_ar') ?></th>
                <th><?= $this->Paginator->sort('modified_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($musics as $music): ?>
            <tr>
                <td><?= $this->Number->format($music->id) ?></td>
                <td><?= h($music->mid) ?></td>
                <td><?= h($music->title) ?></td>
                <td><?= h($music->version) ?></td>
                <td><?= $this->Number->format($music->difficult) ?></td>
                <td><?= $this->Number->format($music->notes) ?></td>
                <td><?= h($music->created_ar) ?></td>
                <td><?= h($music->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $music->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $music->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $music->id], ['confirm' => __('Are you sure you want to delete # {0}?', $music->id)]) ?>
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

