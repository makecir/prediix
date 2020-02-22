<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata[]|\Cake\Collection\CollectionInterface $playdatas
 */
?>

    <!-- <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <!-- <h3><?= __('Playdatas') ?></h3> -->


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
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



<div class="card border-secondary mb-3">
    <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            レート推定
        </h5>
    </div>
    <div id="card-collapse" class="clearfix collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body text-dark">
            <h4 class="card-title">Rating : <?php echo sprintf('%.4f',$rating); ?></h4>
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
            <span class="submit"><input type="submit" id="submit-csv" class="btn btn-primary my-auto" value="アップロード" style="display:none;"></span>
            <?php
                echo $this->Form->end();
            ?>
            <!-- CSVフォームここまで -->
            <p class="card-text">※算出に15秒程度かかります</p>
        </div>
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
            <div class="card-header bg-secondary text-white" role="tab" id="headingOne">
                <h5 class="mb-0">絞り込み</h5>
            </div>
                <div class="card-body text-dark"> 

                    <form action="#">
                        <ul class="accordion nav flex-column">
                            <li class="nav-item">
                            <h5 class="card-title"><a href="#collapse-menu1" class="nav-link" data-toggle="collapse">バージョン</a></h5>
                                <div id="collapse-menu1" class="collapse list-unstyled pl-1" data-parent=".accordion" style="margin-left=50;">
                                    <ul>
                                    <label>値段<select name="price"><option value="0">-</option><option value="100000">100000-</option></select></label>
                                    <label>割引<select name="disc"><option value="">-</option><option>可</option><option>不可</option></select></label>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <h5 class="card-title"><a href="#collapse-menu2" class="nav-link" data-toggle="collapse">現ランプ</a></h5>
                                <div id="collapse-menu2"  class="collapse list-unstyled pl-1" data-parent=".accordion">
                                    <ul>
                                    <label><input type="checkbox" name="color" />青</label>
                                    <ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <h5 class="card-title"><a href="#collapse-menu3" class="nav-link" data-toggle="collapse">目標ランプ</a></h5>
                                <div id="collapse-menu3"  class="collapse list-unstyled pl-1" data-parent=".accordion">
                                    <ul>
                                    <label><input type="checkbox" name="size" />大</label>
                                    <ul>
                                </div>
                            </li>
                        </ul>
                        <div>

                        </div>
                    </form>
                </div>
        </div>

        <div class="table-responsive">
        <table id="clear-rate-table" class="table table-striped table-bordered">
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
                    <td><?= $clear_rating['my_lamp'] ?></td>
                    <td><?= $clear_rating['target_lamp'] ?></td>
                    <td align="right"><?php echo sprintf('%.4f %%',$clear_rating['clear_rate']*100); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
