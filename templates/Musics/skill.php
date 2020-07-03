<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>

    <!-- <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <!-- <h3><?= __('Playdatas') ?></h3> -->


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script> -->
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

    <!-- <div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">  
    </div>
    <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body text-dark"> 
    
<form action="#" id="refine-form">
<div>
<label>値段<select name="price"><option value="0">-</option><option value="100000">100000-</option></select></label>
<label>割引<select name="disc"><option value="">-</option><option>可</option><option>不可</option></select></label>
<label><input type="checkbox" name="color" />青</label>
<label><input type="checkbox" name="size" />大</label>
</div>
</form>

</div>
    </div>
</div> -->
<script>
    var savedat_str = '<?php echo $savedat_str?>' ;
</script>

<div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            レート推定
        </h5>
    </div>
    <div class="card-body text-dark">
        <div class="ml-2 mb-4">
        <h4 class="card-title">Rating : <?php echo sprintf('%.4f',$rating); ?></h4>
        </div>
        <div class="mb-1">

            <div style='float:left;' class="mr-1">
                <a href="/prediix/musics/data-save" class="btn btn-outline-secondary my-auto" data-confirm-message="読み込んだプレイデータをブラウザに保存します" onclick="if (confirm(this.dataset.confirmMessage)) { localStorage.setItem( 'savedat', 
                    savedat_str );  return true; } return false;">セーブ</a>
            </div>
            <div style='float:left;' class="mr-1">
                <?= $this->Form->create(null, ['url' => ['action' => 'dataLoad']]); ?>
                <input type="hidden" name="submit-load" id="saveform" value='{"rating":1500,"player":[]}'>
                <span class="submit"><input type="submit" id="submit-load" class="btn btn-outline-secondary my-auto" data-confirm-message="保存済みデータを読み込みます" onclick="if (confirm(this.dataset.confirmMessage)) { return true; } return false;" value="ロード"></span>
                <?= $this->Form->end(); ?>
            </div>
            <div>
                <?= $this->Html->link(__('リセット'), ['action' => 'dataClean'],['class' => 'btn btn-outline-secondary my-auto','confirm'=>'読み込んだプレイデータをリセットします']) ?>
            </div>
        </div>
            <!-- CSVフォーム -->
        <?php echo $this->Form->create($csvform, ['type' => 'file', 'style' => "display:inline-block"]); ?>
        <label class="btn btn-secondary my-auto" style="display:inline-block">
            <span id="imported-filename">CSV選択</span>
            <span style="display:none;">
                <?php echo $this->Form->control('upload-csv', ['type' => 'file', 'accept' => '.csv', 'label' => '', 'style'=>"display:none;"]); ?>
            </span>
            </label>
            <span class="submit"><input type="submit" id="submit-csv" class="btn btn-primary my-auto" value="アップロード" style="display:none;"></span>
            <?php
                echo $this->Form->end();
            ?>
            <!-- CSVフォームここまで -->
            <p class="card-text">※算出に15秒程度かかります</p>
        </div>
    </div>


<!-- <div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">  
    </div>
    <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body text-dark"> 
<form action="#">
<div>
<label>値段<select name="price"><option value="0">-</option><option value="100000">100000-</option></select></label>
<label>割引<select name="disc"><option value="">-</option><option>可</option><option>不可</option></select></label>
<label><input type="checkbox" name="color" />青</label>
<label><input type="checkbox" name="size" />大</label>
</div>
</form>

</div>
    </div>
</div> -->


<div class="card border-secondary mb-3">
    <div class="card-header">
        <h5 class="mb-0">
            クリア率推定
        </h5>
    </div>
    <div class="card-body">

        <div class="card secondary mb-3">
            <a data-toggle="collapse" data-target="#filterCollapse" aria-expand="false" aria-controls="card-collapse">
                <div class="card-header bg-secondary text-white" role="tab" id="headingOne">
                    <h5 class="mb-0" ><i class="fas fa-filter mr-3"></i>絞り込み<i id="arrow" class="fas fa-chevron-up" style=" float: right;"></i></h5>
                </div>
            </a>
            <div class="collapse" id="filterCollapse">
                <div class="card-body text-dark"> 
                    <form action="#" data-persist=”garlic” >
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="card-title">
                                    バージョン
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkTrue(0,21)">全てチェック</a></div>
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkFalse(0,21)">全て非チェック</a></div>
                                </h5>
                                <ul>
                                <label class=mr-3><input type="checkbox" name="5th style" checked="checked"/>5th style</label>
                                <label class=mr-3><input type="checkbox" name="6th style" checked="checked"/>6th style</label>
                                <label class=mr-3><input type="checkbox" name="7th style" checked="checked"/>7th style</label>
                                <label class=mr-3><input type="checkbox" name="8th style" checked="checked"/>8th style</label>
                                <label class=mr-3><input type="checkbox" name="9th style" checked="checked"/>9th style</label>
                                <label class=mr-3><input type="checkbox" name="10th style" checked="checked"/>10th style</label>
                                <label class=mr-3><input type="checkbox" name="IIDX RED" checked="checked"/>IIDX RED</label>
                                <label class=mr-3><input type="checkbox" name="HAPPY SKY" checked="checked"/>HAPPY SKY</label>
                                <label class=mr-3><input type="checkbox" name="DistorteD" checked="checked"/>DistorteD</label>
                                <label class=mr-3><input type="checkbox" name="GOLD" checked="checked"/>GOLD</label>
                                <label class=mr-3><input type="checkbox" name="DJ TROOPERS" checked="checked"/>DJ TROOPERS</label>
                                <label class=mr-3><input type="checkbox" name="EMPRESS" checked="checked"/>EMPRESS</label>
                                <label class=mr-3><input type="checkbox" name="SIRIUS" checked="checked"/>SIRIUS</label>
                                <label class=mr-3><input type="checkbox" name="Resort Anthem" checked="checked"/>Resort Anthem</label>
                                <label class=mr-3><input type="checkbox" name="Lincle" checked="checked"/>Lincle</label>
                                <label class=mr-3><input type="checkbox" name="tricoro" checked="checked"/>tricoro</label>
                                <label class=mr-3><input type="checkbox" name="SPADA" checked="checked"/>SPADA</label>
                                <label class=mr-3><input type="checkbox" name="PENDUAL" checked="checked"/>PENDUAL</label>
                                <label class=mr-3><input type="checkbox" name="copula" checked="checked"/>copula</label>
                                <label class=mr-3><input type="checkbox" name="SINOBUZ" checked="checked"/>SINOBUZ</label>
                                <label class=mr-3><input type="checkbox" name="CANNON BALLERS" checked="checked"/>CANNON BALLERS</label>
                                <label class=mr-3><input type="checkbox" name="Rootage" checked="checked"/>Rootage</label>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <h5 class="card-title">
                                    現ランプ
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkTrue(22,29)">全てチェック</a></div>
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkFalse(22,29)">全て非チェック</a></div>
                                </h5>
                                <ul>
                                <label class=mr-3><input type="checkbox" name="mynp" checked="checked"/>NOPLAY</label>
                                <label class=mr-3><input type="checkbox" name="myfa" checked="checked"/>FAILED</label>
                                <label class=mr-3><input type="checkbox" name="myae" checked="checked"/>ASSITED</label>
                                <label class=mr-3><input type="checkbox" name="myes" checked="checked"/>EASY</label>
                                <label class=mr-3><input type="checkbox" name="mycl" checked="checked"/>CLEAR</label>
                                <label class=mr-3><input type="checkbox" name="myhd" checked="checked"/>HARD</label>
                                <label class=mr-3><input type="checkbox" name="myex" checked="checked"/>EXHARD</label>
                                <label class=mr-3><input type="checkbox" name="myfc" checked="checked"/>FC</label>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <h5 class="card-title">
                                    目標ランプ
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkTrue(30,34)">全てチェック</a></div>
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkFalse(30,34)">全て非チェック</a></div>
                                </h5>
                                <ul>
                                <label class=mr-3><input type="checkbox" name="tares" checked="checked"/>EASY</label>
                                <label class=mr-3><input type="checkbox" name="tarcl" checked="checked"/>CLEAR</label>
                                <label class=mr-3><input type="checkbox" name="tarhd" checked="checked"/>HARD</label>
                                <label class=mr-3><input type="checkbox" name="tarex" checked="checked"/>EXHARD</label>
                                <label class=mr-3><input type="checkbox" name="tarfc" checked="checked"/>FC</label>
                                <ul>
                            </li>
                        </ul>
                        <input type="checkbox" id="dummycheck" checked="checked" style="display:none;" disabled="disabled" >
                    </form>
                </div>
            </div>
        </div>


        <div class="table-responsive">
        <table id="clear-rate-table" class="table table-bordered">
            <thead >
                <tr>
                    <th>バージョン</th>
                    <th>曲名</th>
                    <th>現ランプ</th>
                    <th>目標ランプ</th>
                    <th>クリア確率</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clear_ratings as $clear_rating): ?>
                <tr>
                    <td><?= h($clear_rating['version']) ?></td>
                    <td><?= h($clear_rating['title']) ?></td>                    
                    <td align="center" class="table-<?= $l2c_dict[$clear_rating['my_lamp']] ?>"><?= $clear_rating['my_lamp'] ?></td>
                    <td align="center" class="table-<?= $l2c_dict[$clear_rating['target_lamp']] ?>"><?= $clear_rating['target_lamp'] ?></td>
                    <td align="right"><?php echo sprintf('%.4f %%',$clear_rating['clear_rate']*100); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- <input type="hidden" name="savedat" id="saveID_testID"> -->
    <!-- <input type="hidden" name="saveform" value="json"> -->
    <script>
        var savedat = localStorage.getItem( 'savedat' );
        if (savedat!=null) document.getElementById( 'saveform' ).value = savedat;
        </script>
    <script>
        //localStorage.setItem( 'savedat', $savedat_str );
    </script>
</div>

