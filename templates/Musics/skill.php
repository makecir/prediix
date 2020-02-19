<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>

    <!-- <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <!-- <h3><?= __('Playdatas') ?></h3> -->


    <!-- <script type="text/javascript">
        jQuery(function($){ 
            // デフォルトの設定を変更
            $.extend( $.fn.dataTable.defaults, { 
                language: {
                    url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
                } 
            }); 

            $("#foo-table").DataTable({
                lengthMenu: [ 2, 25, 50, 100 ],
                displayLength: 25,
                scrollY: 200
            });    
        }); 
    </script> -->
    <!-- <script type="text/javascript">
        jQuery(function($){ 
            // デフォルトの設定を変更

            $("#clear-rate-table").DataTable({
                lengthMenu: [ 2, 25, 50, 100 ],
                displayLength: 25,
            });    
        }); 
    </script> -->


<form action="#">
<div>
<label>値段<select name="price"><option value="0">-</option><option value="100000">100000-</option></select></label>
<label>割引<select name="disc"><option value="">-</option><option>可</option><option>不可</option></select></label>
<label><input type="checkbox" name="color" />青</label>
<label><input type="checkbox" name="size" />大</label>
</div>
</form>

<table id="foo-table" class="table table-striped table-bordered">
    <thead>
        <tr><td>番号</td><td>色</td><td>商品</td><td>大きさ</td><td>値段</td><td>割引</td></tr>
    </thead>
    <tbody>
        <tr><td>1</td><td>青</td><td>自動車A</td><td>大</td><td>1000000</td><td>不可</td></tr>
        <tr><td>2</td><td>青</td><td>自転車A</td><td>中</td><td>10000</td><td>可</td></tr>
        <tr><td>3</td><td>青</td><td>ノートパソコンA</td><td>小</td><td>100000</td><td>可</td></tr>
        <tr><td>4</td><td>黄</td><td>自動車B</td><td>大</td><td>2000000</td><td>不可</td></tr>
        <tr><td>5</td><td>黄</td><td>自転車B</td><td>中</td><td>20000</td><td>可</td></tr>
        <tr><td>6</td><td>黄</td><td>ノートパソコンB</td><td>小</td><td>200000</td><td>可</td></tr>
        <tr><td>7</td><td>赤</td><td>自動車C</td><td>大</td><td>3000000</td><td>不可</td></tr>
        <tr><td>8</td><td>赤</td><td>自転車C</td><td>中</td><td>30000</td><td>可</td></tr>
        <tr><td>9</td><td>赤</td><td>ノートパソコンC</td><td>小</td><td>300000</td><td>可</td></tr>
    </tbody>
</table>



<div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            レート推定
        </h5>
    </div>
    <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body text-dark">
            <h4 class="card-title">Rating : <?php echo sprintf('%.2f',$rating); ?></h4>
                </br>
                <?= $this->Html->link(__('レートリセット'), ['action' => 'rateReset'],['class' => 'btn btn-outline-secondary my-auto','confirm'=>'推定したレートをリセットします']) ?>
                
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

<div class="card border-secondary">
    <div class="card-header">
        <h5 class="mb-0">
            クリア率推定
        </h5>
    </div>
    <div class="card-body">
        <form action="#">
        <div>
        <label>値段<select name="price"><option value="0">-</option><option value="100000">100000-</option></select></label>
        <label>割引<select name="disc"><option value="">-</option><option>可</option><option>不可</option></select></label>
        <label><input type="checkbox" name="color" />青</label>
        <label><input type="checkbox" name="size" />大</label>
        </div>
        </form>
        <table id="clear-rate-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mid') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('version') ?></th>
                    <th><?= $this->Paginator->sort('difficult') ?></th>
                    <th><?= $this->Paginator->sort('notes') ?></th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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

