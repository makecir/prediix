<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>



    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    var savedat_str = '<?php echo $savedat_str?>' ;
</script>


<div class="card border-primary mb-3">
        <div class="card-header text-white bg-primary" role="tab" id="headingOne">
        <h5 class="mb-0">
            正式リリースの案内
        </h5>
        </div>
        <div class="card-body text-dark">
        <p class="card-text"><a href="https://cpi.makecir.com/" target="_blank">正式版</a>のサービスを開始いたしました。是非ご利用ください。</br>アンケートにご協力いただき、ありがとうございました。</p>
        </div>
    </div>

<div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            レート推定
        </h5>
    </div>
    <div class="card-body text-dark">
        <div class="ml-2 mb-4">
        <h4 class="card-title">Rating : <?php echo sprintf('%.2f',$rating); ?></h4>
        <?php if($player_rank!=50.00){?>
            <h5 class="card-title">上位<?php echo sprintf('%.2f%%',$player_rank); ?></h5>
        <?php } ?>
        <?php if($top_pred!=1){?>
        <div>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text='推定☆12レート：<?php echo sprintf('%.2f',$rating); ?> 
逆リコメンドTOP：<?= $bte_top['title']; ?>[<?= $bte_top['my_lamp']; ?>] <?= sprintf('%.2f',$bte_top['clear_rate']*100);?>%(50%レート<?php echo sprintf('%.2f',$bte_top['expect50']); ?>)' data-url="https://cpi-beta.makecir.com/" data-hashtags="ClearPowerIndicator" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <?php } ?>
        </div>
        <div class="mb-1">
            <div style='float:left;' class="mr-1">
                <?= $this->Form->create(null, ['url' => ['action' => 'dataLoad']]); ?>
                <input type="hidden" name="submit-load" id="saveform" value='{"rating":1500,"player":[]}'>
                <span class="submit"><input type="submit" id="submit-load" class="btn btn-outline-secondary my-auto" data-confirm-message="保存済みデータを読み込みます" onclick="if (confirm(this.dataset.confirmMessage)) { return true; } return false;" value="ロード"></span>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>



<div class="card border-secondary mb-3">
    <div class="card-header">
        <h5 class="mb-0">
            逆リコメンド
        </h5>
    </div>
    <div class="card-body">

        <div class="card secondary mb-3">
            <a data-toggle="collapse" data-target="#filterCollapse" aria-expand="false" aria-controls="card-collapse">
                <div class="card-header bg-secondary text-white" role="tab" id="headingOne">
                    <h5 class="mb-0" ><i class="fas fa-filter mr-3"></i>絞り込み<i id="arrow" class="fas fa-chevron-up" style=" float: right;"></i></h5>
                </div>
            </a>
            <div class="collapse show" id="filterCollapse">
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
                                    達成済みランプ
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkTrue(22,29)">全てチェック</a></div>
                                    <div class="btn btn-sm btn-outline-secondary my-auto ml-2" onclick="checkFalse(22,29)">全て非チェック</a></div>
                                </h5>
                                <ul>
                                <label class=mr-3><input type="checkbox" name="myes" checked="checked"/>EASY</label>
                                <label class=mr-3><input type="checkbox" name="mycl" checked="checked"/>CLEAR</label>
                                <label class=mr-3><input type="checkbox" name="myhd" checked="checked"/>HARD</label>
                                <label class=mr-3><input type="checkbox" name="myex" checked="checked"/>EXHARD</label>
                                <label class=mr-3><input type="checkbox" name="myfc" checked="checked"/>FC</label>
                                </ul>
                            </li>
                            <hr>
                        </ul>
                        <input type="checkbox" id="dummycheck" checked="checked" style="display:none;" disabled="disabled" >
                    </form>
                </div>
            </div>
        </div>


        <div class="table-responsive">
        <table id="bte_table" class="table table-bordered">
            <thead >
                <tr>
                    <th>バージョン</th>
                    <th>曲名</th>
                    <th>達成済ランプ</th>
                    <th>クリア確率</th>
                    <th>50%要求レート</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bte_table as $bte): ?>
                <tr>
                    <td><?= h($bte['version']) ?></td>
                    <td><?= h($bte['title']) ?></td>                    
                    <td align="center" bgcolor="<?= $l2c_dict[$bte['my_lamp']] ?>"><?= $bte['my_lamp'] ?></td>
                    <td align="right"><?php echo sprintf('%.2f %%',$bte['clear_rate']*100); ?></td>
                    <td align="right"><?php echo sprintf('%.2f',$bte['expect50']); ?></td>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<script>
    $(window).on('load',function(){
        $('#nav-bts').addClass('active');
});
</script>
<?= $this->Html->script('style_bts.js') ?>
<?= $this->Html->script('garlic.js') ?>
