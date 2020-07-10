<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="card border-info mb-3">
        <div class="card-header text-white bg-info" role="tab" id="headingOne">
        <h5 class="mb-0">
            アンケートのお願い
        </h5>
        </div>
        <div class="card-body text-dark">
        <p class="card-text">鋭意製作中のwebサイトです</br>改善のための<a href="https://forms.gle/dmtBFkpF7FMtKBw77" target="_blank">アンケート</a>にご協力ください</p>
        </div>
    </div>


    <div class="card border-secondary mb-3">

        <div class="card-body text-dark">
            <div >
                <h3 class="card-title">このサイトについて</h3>
                <p class="card-text text-danger">現在オープンβテスト中です。挙動が不安定だったり、登録したデータが予告なく削除されたりする可能性があります。</p>
                <p class="card-text">beatmania IIDX26 Rootageのプレイデータ（終了時八段～皆伝、約35,000人分）に基づいて、SP☆12の譜面難易度を推定しました。ユーザーがクリア状況を登録することで、推定実力を表すレーティングと、各譜面・各クリアランプの推定クリア確率が表示されます。推定手法の詳細については<a href="https://note.com/rice_place/n/n55faf1a5c882" target="_blank">こちら</a>および関連記事をご覧ください。</p>
            </div>
            <div></br></div>
            <div>
                <h3 class="card-title">利用方法</h3>
                <p class="card-text"> IIDX公式サイト<font color="#d9534f">（要プレミアムコース）</font>からダウンロードできるCSVを読み込むことで、レーティングとクリア確率を算出します。</br>現在はPCからの使用を想定しています。スマホからの閲覧・使用には、近日中に対応予定です。 </p>
                <ol>
                <li><p class="card-text"> <a href="https://p.eagate.573.jp/game/2dx/27/djdata/score_download.html" target="_blank">公式サイト</a>の「SP」->「ダウンロード」からプレーデータCSVをダウンロードします。
                </br>※スマホの場合でも、ブラウザの「デスクトップ用のサイトで閲覧」等の機能を使用することで、CSVをダウンロード可能な場合があります。</p></li>
                <li><p class="card-text"> <a href="/" target="_blank">推定ページ</a>の「レート推定」の「CSV選択」で、ダウンロードしたCSVを選択し、「アップロード」ボタンを押します。 </p></li>
                <li><p class="card-text"> 算出に15秒程度掛かります。お待ちください。</p></li>
                <li><p class="card-text"> レート等が更新されれば、推定完了です。</br>
「セーブ」ボタンを押して、ブラウザに読み込んだデータを保存することをお勧めします。</br>
こうすることで、次回以降は「ロード」ボタンを押すことで、再びCSVをアップロードする手順を省略できます。</br>
自身のランプの更新を反映したい場合は、再度新しいCSVをアップロードしてください。</p></li>
                </ol>
            </div>

            <div></br></div>
            <div>
                <h3 class="card-title">表示内容について</h3>
                <p class="card-text">Rating：☆12クリアランプ全体（既プレイのみ）の勝敗について、IIDX26八段～皆伝の中での分布を表します。標準的なイロレーティング（平均1500、係数400）を使用しています。例えばRating1500であれば、約17,500勝17,500敗であったということになります（実際には引き分けが存在します）。大まかに九段平均は1300、十段平均は1450、中伝平均は1600、皆伝平均は1850程度となっています。</br>
    上位％：☆12クリアランプ全体（既プレイのみ）の勝敗について、IIDX26七級～皆伝（約50,000人）の中での割合を表します。例えば上位10%と表示されていたら、推定順位は5,000位程度であると考えることができます。
    </p>
            </div>
            <div></br></div>
            <div>
                <h3 class="card-title">ご協力いただいた皆様</h3>
                <p class="card-text">プレイデータ取得：木野 様</br>
    スペシャルサンクス：音ゲー情報本サークル AA(A)AAAの皆様、えび 様
    </p>
            </div>
            <div></br></div>
            <div>
                <h3 class="card-title">連絡先</h3>
                <p class="card-text"> Twitter：<a href="https://twitter.com/IIDX_CPI" target="_blank">@IIDX_CPI</a> </p>
            </div>
        </div>
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
        $('#nav-about').addClass('active');
});
</script>