<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>
<!-- <?php var_dump($dat) ?> -->
<div class="playdatas index content">
    <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Playdatas') ?></h3>

    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a class="no-under text-body d-block p-3 m-n3" data-toggle="collapse" href="#card-collapse" role="button" aria-expanded="true" aria-controls="card-collapse">
                        <i class="fa fa-cog"></i>操作
                        <i class="card-arrow fa fa-chevron-up float-right" style=""></i>
                    </a>
                </h5>
            </div>
            <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>
                            <!-- CSVフォーム -->
                            <?php echo $this->Form->create($csvform, ['type' => 'file', 'url' => ['action' => 'addcsvms'], 'style' => "display:inline-block"]); ?>
                            <label class="btn btn-primary my-auto" style="display:inline-block">
                                <span id="imported-filename">CSVアップロード</span>
                                <span style="display:none;">
                                    <?php echo $this->Form->control('upload-csv', ['type' => 'file', 'accept' => '.csv', 'label' => '', 'style'=>"display:none;"]); ?>
                                </span>
                            </label>
                            <span class="submit"><input type="submit" id="submit-csv" class="btn btn-warning my-auto" value="登録"></span>
                            <?php
                                echo $this->Form->end();
                            ?>
                            <!-- CSVフォームここまで -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
