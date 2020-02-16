<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playdata $playdata
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Playdata'), ['action' => 'edit', $playdata->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Playdata'), ['action' => 'delete', $playdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playdata->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Playdatas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Playdata'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="playdatas view content">
            <h3><?= h($playdata->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Playerid') ?></th>
                    <td><?= h($playdata->playerid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($playdata->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class') ?></th>
                    <td><?= $this->Number->format($playdata->class) ?></td>
                </tr>
                <tr>
                    <th><?= __('M231') ?></th>
                    <td><?= $this->Number->format($playdata->m231) ?></td>
                </tr>
                <tr>
                    <th><?= __('M246') ?></th>
                    <td><?= $this->Number->format($playdata->m246) ?></td>
                </tr>
                <tr>
                    <th><?= __('M291') ?></th>
                    <td><?= $this->Number->format($playdata->m291) ?></td>
                </tr>
                <tr>
                    <th><?= __('M411') ?></th>
                    <td><?= $this->Number->format($playdata->m411) ?></td>
                </tr>
                <tr>
                    <th><?= __('M438') ?></th>
                    <td><?= $this->Number->format($playdata->m438) ?></td>
                </tr>
                <tr>
                    <th><?= __('M501') ?></th>
                    <td><?= $this->Number->format($playdata->m501) ?></td>
                </tr>
                <tr>
                    <th><?= __('M504') ?></th>
                    <td><?= $this->Number->format($playdata->m504) ?></td>
                </tr>
                <tr>
                    <th><?= __('M599') ?></th>
                    <td><?= $this->Number->format($playdata->m599) ?></td>
                </tr>
                <tr>
                    <th><?= __('M600') ?></th>
                    <td><?= $this->Number->format($playdata->m600) ?></td>
                </tr>
                <tr>
                    <th><?= __('M618') ?></th>
                    <td><?= $this->Number->format($playdata->m618) ?></td>
                </tr>
                <tr>
                    <th><?= __('M642') ?></th>
                    <td><?= $this->Number->format($playdata->m642) ?></td>
                </tr>
                <tr>
                    <th><?= __('M645') ?></th>
                    <td><?= $this->Number->format($playdata->m645) ?></td>
                </tr>
                <tr>
                    <th><?= __('M681') ?></th>
                    <td><?= $this->Number->format($playdata->m681) ?></td>
                </tr>
                <tr>
                    <th><?= __('M689') ?></th>
                    <td><?= $this->Number->format($playdata->m689) ?></td>
                </tr>
                <tr>
                    <th><?= __('M690') ?></th>
                    <td><?= $this->Number->format($playdata->m690) ?></td>
                </tr>
                <tr>
                    <th><?= __('M732') ?></th>
                    <td><?= $this->Number->format($playdata->m732) ?></td>
                </tr>
                <tr>
                    <th><?= __('M816') ?></th>
                    <td><?= $this->Number->format($playdata->m816) ?></td>
                </tr>
                <tr>
                    <th><?= __('M819') ?></th>
                    <td><?= $this->Number->format($playdata->m819) ?></td>
                </tr>
                <tr>
                    <th><?= __('M822') ?></th>
                    <td><?= $this->Number->format($playdata->m822) ?></td>
                </tr>
                <tr>
                    <th><?= __('M864') ?></th>
                    <td><?= $this->Number->format($playdata->m864) ?></td>
                </tr>
                <tr>
                    <th><?= __('M891') ?></th>
                    <td><?= $this->Number->format($playdata->m891) ?></td>
                </tr>
                <tr>
                    <th><?= __('M972') ?></th>
                    <td><?= $this->Number->format($playdata->m972) ?></td>
                </tr>
                <tr>
                    <th><?= __('M978') ?></th>
                    <td><?= $this->Number->format($playdata->m978) ?></td>
                </tr>
                <tr>
                    <th><?= __('M999') ?></th>
                    <td><?= $this->Number->format($playdata->m999) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1014') ?></th>
                    <td><?= $this->Number->format($playdata->m1014) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1017') ?></th>
                    <td><?= $this->Number->format($playdata->m1017) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1041') ?></th>
                    <td><?= $this->Number->format($playdata->m1041) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1044') ?></th>
                    <td><?= $this->Number->format($playdata->m1044) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1068') ?></th>
                    <td><?= $this->Number->format($playdata->m1068) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1086') ?></th>
                    <td><?= $this->Number->format($playdata->m1086) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1089') ?></th>
                    <td><?= $this->Number->format($playdata->m1089) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1119') ?></th>
                    <td><?= $this->Number->format($playdata->m1119) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1164') ?></th>
                    <td><?= $this->Number->format($playdata->m1164) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1167') ?></th>
                    <td><?= $this->Number->format($playdata->m1167) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1182') ?></th>
                    <td><?= $this->Number->format($playdata->m1182) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1191') ?></th>
                    <td><?= $this->Number->format($playdata->m1191) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1194') ?></th>
                    <td><?= $this->Number->format($playdata->m1194) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1203') ?></th>
                    <td><?= $this->Number->format($playdata->m1203) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1230') ?></th>
                    <td><?= $this->Number->format($playdata->m1230) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1239') ?></th>
                    <td><?= $this->Number->format($playdata->m1239) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1257') ?></th>
                    <td><?= $this->Number->format($playdata->m1257) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1269') ?></th>
                    <td><?= $this->Number->format($playdata->m1269) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1287') ?></th>
                    <td><?= $this->Number->format($playdata->m1287) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1296') ?></th>
                    <td><?= $this->Number->format($playdata->m1296) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1308') ?></th>
                    <td><?= $this->Number->format($playdata->m1308) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1368') ?></th>
                    <td><?= $this->Number->format($playdata->m1368) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1386') ?></th>
                    <td><?= $this->Number->format($playdata->m1386) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1395') ?></th>
                    <td><?= $this->Number->format($playdata->m1395) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1413') ?></th>
                    <td><?= $this->Number->format($playdata->m1413) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1419') ?></th>
                    <td><?= $this->Number->format($playdata->m1419) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1455') ?></th>
                    <td><?= $this->Number->format($playdata->m1455) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1467') ?></th>
                    <td><?= $this->Number->format($playdata->m1467) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1470') ?></th>
                    <td><?= $this->Number->format($playdata->m1470) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1473') ?></th>
                    <td><?= $this->Number->format($playdata->m1473) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1476') ?></th>
                    <td><?= $this->Number->format($playdata->m1476) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1482') ?></th>
                    <td><?= $this->Number->format($playdata->m1482) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1503') ?></th>
                    <td><?= $this->Number->format($playdata->m1503) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1515') ?></th>
                    <td><?= $this->Number->format($playdata->m1515) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1521') ?></th>
                    <td><?= $this->Number->format($playdata->m1521) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1533') ?></th>
                    <td><?= $this->Number->format($playdata->m1533) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1536') ?></th>
                    <td><?= $this->Number->format($playdata->m1536) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1566') ?></th>
                    <td><?= $this->Number->format($playdata->m1566) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1578') ?></th>
                    <td><?= $this->Number->format($playdata->m1578) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1599') ?></th>
                    <td><?= $this->Number->format($playdata->m1599) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1605') ?></th>
                    <td><?= $this->Number->format($playdata->m1605) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1617') ?></th>
                    <td><?= $this->Number->format($playdata->m1617) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1662') ?></th>
                    <td><?= $this->Number->format($playdata->m1662) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1668') ?></th>
                    <td><?= $this->Number->format($playdata->m1668) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1677') ?></th>
                    <td><?= $this->Number->format($playdata->m1677) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1689') ?></th>
                    <td><?= $this->Number->format($playdata->m1689) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1692') ?></th>
                    <td><?= $this->Number->format($playdata->m1692) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1698') ?></th>
                    <td><?= $this->Number->format($playdata->m1698) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1725') ?></th>
                    <td><?= $this->Number->format($playdata->m1725) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1758') ?></th>
                    <td><?= $this->Number->format($playdata->m1758) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1761') ?></th>
                    <td><?= $this->Number->format($playdata->m1761) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1779') ?></th>
                    <td><?= $this->Number->format($playdata->m1779) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1791') ?></th>
                    <td><?= $this->Number->format($playdata->m1791) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1800') ?></th>
                    <td><?= $this->Number->format($playdata->m1800) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1806') ?></th>
                    <td><?= $this->Number->format($playdata->m1806) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1815') ?></th>
                    <td><?= $this->Number->format($playdata->m1815) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1848') ?></th>
                    <td><?= $this->Number->format($playdata->m1848) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1860') ?></th>
                    <td><?= $this->Number->format($playdata->m1860) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1887') ?></th>
                    <td><?= $this->Number->format($playdata->m1887) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1896') ?></th>
                    <td><?= $this->Number->format($playdata->m1896) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1899') ?></th>
                    <td><?= $this->Number->format($playdata->m1899) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1902') ?></th>
                    <td><?= $this->Number->format($playdata->m1902) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1908') ?></th>
                    <td><?= $this->Number->format($playdata->m1908) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1914') ?></th>
                    <td><?= $this->Number->format($playdata->m1914) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1917') ?></th>
                    <td><?= $this->Number->format($playdata->m1917) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1935') ?></th>
                    <td><?= $this->Number->format($playdata->m1935) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1938') ?></th>
                    <td><?= $this->Number->format($playdata->m1938) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1941') ?></th>
                    <td><?= $this->Number->format($playdata->m1941) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1947') ?></th>
                    <td><?= $this->Number->format($playdata->m1947) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1980') ?></th>
                    <td><?= $this->Number->format($playdata->m1980) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1989') ?></th>
                    <td><?= $this->Number->format($playdata->m1989) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1992') ?></th>
                    <td><?= $this->Number->format($playdata->m1992) ?></td>
                </tr>
                <tr>
                    <th><?= __('M1998') ?></th>
                    <td><?= $this->Number->format($playdata->m1998) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2010') ?></th>
                    <td><?= $this->Number->format($playdata->m2010) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2016') ?></th>
                    <td><?= $this->Number->format($playdata->m2016) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2034') ?></th>
                    <td><?= $this->Number->format($playdata->m2034) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2037') ?></th>
                    <td><?= $this->Number->format($playdata->m2037) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2043') ?></th>
                    <td><?= $this->Number->format($playdata->m2043) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2058') ?></th>
                    <td><?= $this->Number->format($playdata->m2058) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2067') ?></th>
                    <td><?= $this->Number->format($playdata->m2067) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2079') ?></th>
                    <td><?= $this->Number->format($playdata->m2079) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2103') ?></th>
                    <td><?= $this->Number->format($playdata->m2103) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2109') ?></th>
                    <td><?= $this->Number->format($playdata->m2109) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2112') ?></th>
                    <td><?= $this->Number->format($playdata->m2112) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2121') ?></th>
                    <td><?= $this->Number->format($playdata->m2121) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2127') ?></th>
                    <td><?= $this->Number->format($playdata->m2127) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2130') ?></th>
                    <td><?= $this->Number->format($playdata->m2130) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2136') ?></th>
                    <td><?= $this->Number->format($playdata->m2136) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2139') ?></th>
                    <td><?= $this->Number->format($playdata->m2139) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2154') ?></th>
                    <td><?= $this->Number->format($playdata->m2154) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2157') ?></th>
                    <td><?= $this->Number->format($playdata->m2157) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2160') ?></th>
                    <td><?= $this->Number->format($playdata->m2160) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2166') ?></th>
                    <td><?= $this->Number->format($playdata->m2166) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2169') ?></th>
                    <td><?= $this->Number->format($playdata->m2169) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2175') ?></th>
                    <td><?= $this->Number->format($playdata->m2175) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2178') ?></th>
                    <td><?= $this->Number->format($playdata->m2178) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2181') ?></th>
                    <td><?= $this->Number->format($playdata->m2181) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2196') ?></th>
                    <td><?= $this->Number->format($playdata->m2196) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2202') ?></th>
                    <td><?= $this->Number->format($playdata->m2202) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2214') ?></th>
                    <td><?= $this->Number->format($playdata->m2214) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2217') ?></th>
                    <td><?= $this->Number->format($playdata->m2217) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2223') ?></th>
                    <td><?= $this->Number->format($playdata->m2223) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2229') ?></th>
                    <td><?= $this->Number->format($playdata->m2229) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2232') ?></th>
                    <td><?= $this->Number->format($playdata->m2232) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2241') ?></th>
                    <td><?= $this->Number->format($playdata->m2241) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2256') ?></th>
                    <td><?= $this->Number->format($playdata->m2256) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2259') ?></th>
                    <td><?= $this->Number->format($playdata->m2259) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2268') ?></th>
                    <td><?= $this->Number->format($playdata->m2268) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2292') ?></th>
                    <td><?= $this->Number->format($playdata->m2292) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2295') ?></th>
                    <td><?= $this->Number->format($playdata->m2295) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2310') ?></th>
                    <td><?= $this->Number->format($playdata->m2310) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2313') ?></th>
                    <td><?= $this->Number->format($playdata->m2313) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2319') ?></th>
                    <td><?= $this->Number->format($playdata->m2319) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2325') ?></th>
                    <td><?= $this->Number->format($playdata->m2325) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2328') ?></th>
                    <td><?= $this->Number->format($playdata->m2328) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2331') ?></th>
                    <td><?= $this->Number->format($playdata->m2331) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2334') ?></th>
                    <td><?= $this->Number->format($playdata->m2334) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2343') ?></th>
                    <td><?= $this->Number->format($playdata->m2343) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2376') ?></th>
                    <td><?= $this->Number->format($playdata->m2376) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2379') ?></th>
                    <td><?= $this->Number->format($playdata->m2379) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2400') ?></th>
                    <td><?= $this->Number->format($playdata->m2400) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2403') ?></th>
                    <td><?= $this->Number->format($playdata->m2403) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2421') ?></th>
                    <td><?= $this->Number->format($playdata->m2421) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2424') ?></th>
                    <td><?= $this->Number->format($playdata->m2424) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2427') ?></th>
                    <td><?= $this->Number->format($playdata->m2427) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2451') ?></th>
                    <td><?= $this->Number->format($playdata->m2451) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2457') ?></th>
                    <td><?= $this->Number->format($playdata->m2457) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2460') ?></th>
                    <td><?= $this->Number->format($playdata->m2460) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2463') ?></th>
                    <td><?= $this->Number->format($playdata->m2463) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2469') ?></th>
                    <td><?= $this->Number->format($playdata->m2469) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2472') ?></th>
                    <td><?= $this->Number->format($playdata->m2472) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2481') ?></th>
                    <td><?= $this->Number->format($playdata->m2481) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2496') ?></th>
                    <td><?= $this->Number->format($playdata->m2496) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2505') ?></th>
                    <td><?= $this->Number->format($playdata->m2505) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2508') ?></th>
                    <td><?= $this->Number->format($playdata->m2508) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2523') ?></th>
                    <td><?= $this->Number->format($playdata->m2523) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2526') ?></th>
                    <td><?= $this->Number->format($playdata->m2526) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2532') ?></th>
                    <td><?= $this->Number->format($playdata->m2532) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2541') ?></th>
                    <td><?= $this->Number->format($playdata->m2541) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2544') ?></th>
                    <td><?= $this->Number->format($playdata->m2544) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2547') ?></th>
                    <td><?= $this->Number->format($playdata->m2547) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2550') ?></th>
                    <td><?= $this->Number->format($playdata->m2550) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2553') ?></th>
                    <td><?= $this->Number->format($playdata->m2553) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2559') ?></th>
                    <td><?= $this->Number->format($playdata->m2559) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2562') ?></th>
                    <td><?= $this->Number->format($playdata->m2562) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2565') ?></th>
                    <td><?= $this->Number->format($playdata->m2565) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2568') ?></th>
                    <td><?= $this->Number->format($playdata->m2568) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2586') ?></th>
                    <td><?= $this->Number->format($playdata->m2586) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2607') ?></th>
                    <td><?= $this->Number->format($playdata->m2607) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2610') ?></th>
                    <td><?= $this->Number->format($playdata->m2610) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2628') ?></th>
                    <td><?= $this->Number->format($playdata->m2628) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2634') ?></th>
                    <td><?= $this->Number->format($playdata->m2634) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2643') ?></th>
                    <td><?= $this->Number->format($playdata->m2643) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2652') ?></th>
                    <td><?= $this->Number->format($playdata->m2652) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2658') ?></th>
                    <td><?= $this->Number->format($playdata->m2658) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2661') ?></th>
                    <td><?= $this->Number->format($playdata->m2661) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2670') ?></th>
                    <td><?= $this->Number->format($playdata->m2670) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2676') ?></th>
                    <td><?= $this->Number->format($playdata->m2676) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2679') ?></th>
                    <td><?= $this->Number->format($playdata->m2679) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2682') ?></th>
                    <td><?= $this->Number->format($playdata->m2682) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2688') ?></th>
                    <td><?= $this->Number->format($playdata->m2688) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2691') ?></th>
                    <td><?= $this->Number->format($playdata->m2691) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2694') ?></th>
                    <td><?= $this->Number->format($playdata->m2694) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2721') ?></th>
                    <td><?= $this->Number->format($playdata->m2721) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2727') ?></th>
                    <td><?= $this->Number->format($playdata->m2727) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2733') ?></th>
                    <td><?= $this->Number->format($playdata->m2733) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2739') ?></th>
                    <td><?= $this->Number->format($playdata->m2739) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2745') ?></th>
                    <td><?= $this->Number->format($playdata->m2745) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2763') ?></th>
                    <td><?= $this->Number->format($playdata->m2763) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2766') ?></th>
                    <td><?= $this->Number->format($playdata->m2766) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2772') ?></th>
                    <td><?= $this->Number->format($playdata->m2772) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2781') ?></th>
                    <td><?= $this->Number->format($playdata->m2781) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2790') ?></th>
                    <td><?= $this->Number->format($playdata->m2790) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2802') ?></th>
                    <td><?= $this->Number->format($playdata->m2802) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2811') ?></th>
                    <td><?= $this->Number->format($playdata->m2811) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2826') ?></th>
                    <td><?= $this->Number->format($playdata->m2826) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2829') ?></th>
                    <td><?= $this->Number->format($playdata->m2829) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2841') ?></th>
                    <td><?= $this->Number->format($playdata->m2841) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2865') ?></th>
                    <td><?= $this->Number->format($playdata->m2865) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2868') ?></th>
                    <td><?= $this->Number->format($playdata->m2868) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2871') ?></th>
                    <td><?= $this->Number->format($playdata->m2871) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2880') ?></th>
                    <td><?= $this->Number->format($playdata->m2880) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2889') ?></th>
                    <td><?= $this->Number->format($playdata->m2889) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2898') ?></th>
                    <td><?= $this->Number->format($playdata->m2898) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2901') ?></th>
                    <td><?= $this->Number->format($playdata->m2901) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2910') ?></th>
                    <td><?= $this->Number->format($playdata->m2910) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2922') ?></th>
                    <td><?= $this->Number->format($playdata->m2922) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2928') ?></th>
                    <td><?= $this->Number->format($playdata->m2928) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2958') ?></th>
                    <td><?= $this->Number->format($playdata->m2958) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2961') ?></th>
                    <td><?= $this->Number->format($playdata->m2961) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2979') ?></th>
                    <td><?= $this->Number->format($playdata->m2979) ?></td>
                </tr>
                <tr>
                    <th><?= __('M2997') ?></th>
                    <td><?= $this->Number->format($playdata->m2997) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3006') ?></th>
                    <td><?= $this->Number->format($playdata->m3006) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3036') ?></th>
                    <td><?= $this->Number->format($playdata->m3036) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3042') ?></th>
                    <td><?= $this->Number->format($playdata->m3042) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3045') ?></th>
                    <td><?= $this->Number->format($playdata->m3045) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3054') ?></th>
                    <td><?= $this->Number->format($playdata->m3054) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3063') ?></th>
                    <td><?= $this->Number->format($playdata->m3063) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3078') ?></th>
                    <td><?= $this->Number->format($playdata->m3078) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3111') ?></th>
                    <td><?= $this->Number->format($playdata->m3111) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3123') ?></th>
                    <td><?= $this->Number->format($playdata->m3123) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3126') ?></th>
                    <td><?= $this->Number->format($playdata->m3126) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3135') ?></th>
                    <td><?= $this->Number->format($playdata->m3135) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3138') ?></th>
                    <td><?= $this->Number->format($playdata->m3138) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3141') ?></th>
                    <td><?= $this->Number->format($playdata->m3141) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3144') ?></th>
                    <td><?= $this->Number->format($playdata->m3144) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3165') ?></th>
                    <td><?= $this->Number->format($playdata->m3165) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3180') ?></th>
                    <td><?= $this->Number->format($playdata->m3180) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3189') ?></th>
                    <td><?= $this->Number->format($playdata->m3189) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3192') ?></th>
                    <td><?= $this->Number->format($playdata->m3192) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3195') ?></th>
                    <td><?= $this->Number->format($playdata->m3195) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3213') ?></th>
                    <td><?= $this->Number->format($playdata->m3213) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3240') ?></th>
                    <td><?= $this->Number->format($playdata->m3240) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3243') ?></th>
                    <td><?= $this->Number->format($playdata->m3243) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3246') ?></th>
                    <td><?= $this->Number->format($playdata->m3246) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3252') ?></th>
                    <td><?= $this->Number->format($playdata->m3252) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3255') ?></th>
                    <td><?= $this->Number->format($playdata->m3255) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3267') ?></th>
                    <td><?= $this->Number->format($playdata->m3267) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3273') ?></th>
                    <td><?= $this->Number->format($playdata->m3273) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3291') ?></th>
                    <td><?= $this->Number->format($playdata->m3291) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3300') ?></th>
                    <td><?= $this->Number->format($playdata->m3300) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3306') ?></th>
                    <td><?= $this->Number->format($playdata->m3306) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3312') ?></th>
                    <td><?= $this->Number->format($playdata->m3312) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3327') ?></th>
                    <td><?= $this->Number->format($playdata->m3327) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3330') ?></th>
                    <td><?= $this->Number->format($playdata->m3330) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3333') ?></th>
                    <td><?= $this->Number->format($playdata->m3333) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3342') ?></th>
                    <td><?= $this->Number->format($playdata->m3342) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3354') ?></th>
                    <td><?= $this->Number->format($playdata->m3354) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3357') ?></th>
                    <td><?= $this->Number->format($playdata->m3357) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3360') ?></th>
                    <td><?= $this->Number->format($playdata->m3360) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3363') ?></th>
                    <td><?= $this->Number->format($playdata->m3363) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3366') ?></th>
                    <td><?= $this->Number->format($playdata->m3366) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3369') ?></th>
                    <td><?= $this->Number->format($playdata->m3369) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3375') ?></th>
                    <td><?= $this->Number->format($playdata->m3375) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3381') ?></th>
                    <td><?= $this->Number->format($playdata->m3381) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3384') ?></th>
                    <td><?= $this->Number->format($playdata->m3384) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3387') ?></th>
                    <td><?= $this->Number->format($playdata->m3387) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3393') ?></th>
                    <td><?= $this->Number->format($playdata->m3393) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3399') ?></th>
                    <td><?= $this->Number->format($playdata->m3399) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3405') ?></th>
                    <td><?= $this->Number->format($playdata->m3405) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3408') ?></th>
                    <td><?= $this->Number->format($playdata->m3408) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3420') ?></th>
                    <td><?= $this->Number->format($playdata->m3420) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3423') ?></th>
                    <td><?= $this->Number->format($playdata->m3423) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3444') ?></th>
                    <td><?= $this->Number->format($playdata->m3444) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3447') ?></th>
                    <td><?= $this->Number->format($playdata->m3447) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3450') ?></th>
                    <td><?= $this->Number->format($playdata->m3450) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3471') ?></th>
                    <td><?= $this->Number->format($playdata->m3471) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3489') ?></th>
                    <td><?= $this->Number->format($playdata->m3489) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3492') ?></th>
                    <td><?= $this->Number->format($playdata->m3492) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3495') ?></th>
                    <td><?= $this->Number->format($playdata->m3495) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3501') ?></th>
                    <td><?= $this->Number->format($playdata->m3501) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3504') ?></th>
                    <td><?= $this->Number->format($playdata->m3504) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3546') ?></th>
                    <td><?= $this->Number->format($playdata->m3546) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3549') ?></th>
                    <td><?= $this->Number->format($playdata->m3549) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3555') ?></th>
                    <td><?= $this->Number->format($playdata->m3555) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3576') ?></th>
                    <td><?= $this->Number->format($playdata->m3576) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3591') ?></th>
                    <td><?= $this->Number->format($playdata->m3591) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3594') ?></th>
                    <td><?= $this->Number->format($playdata->m3594) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3597') ?></th>
                    <td><?= $this->Number->format($playdata->m3597) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3600') ?></th>
                    <td><?= $this->Number->format($playdata->m3600) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3615') ?></th>
                    <td><?= $this->Number->format($playdata->m3615) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3642') ?></th>
                    <td><?= $this->Number->format($playdata->m3642) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3654') ?></th>
                    <td><?= $this->Number->format($playdata->m3654) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3657') ?></th>
                    <td><?= $this->Number->format($playdata->m3657) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3666') ?></th>
                    <td><?= $this->Number->format($playdata->m3666) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3693') ?></th>
                    <td><?= $this->Number->format($playdata->m3693) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3696') ?></th>
                    <td><?= $this->Number->format($playdata->m3696) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3717') ?></th>
                    <td><?= $this->Number->format($playdata->m3717) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3720') ?></th>
                    <td><?= $this->Number->format($playdata->m3720) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3729') ?></th>
                    <td><?= $this->Number->format($playdata->m3729) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3732') ?></th>
                    <td><?= $this->Number->format($playdata->m3732) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3735') ?></th>
                    <td><?= $this->Number->format($playdata->m3735) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3741') ?></th>
                    <td><?= $this->Number->format($playdata->m3741) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3744') ?></th>
                    <td><?= $this->Number->format($playdata->m3744) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3780') ?></th>
                    <td><?= $this->Number->format($playdata->m3780) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3783') ?></th>
                    <td><?= $this->Number->format($playdata->m3783) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3786') ?></th>
                    <td><?= $this->Number->format($playdata->m3786) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3801') ?></th>
                    <td><?= $this->Number->format($playdata->m3801) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3807') ?></th>
                    <td><?= $this->Number->format($playdata->m3807) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3810') ?></th>
                    <td><?= $this->Number->format($playdata->m3810) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3813') ?></th>
                    <td><?= $this->Number->format($playdata->m3813) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3819') ?></th>
                    <td><?= $this->Number->format($playdata->m3819) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3828') ?></th>
                    <td><?= $this->Number->format($playdata->m3828) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3837') ?></th>
                    <td><?= $this->Number->format($playdata->m3837) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3840') ?></th>
                    <td><?= $this->Number->format($playdata->m3840) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3858') ?></th>
                    <td><?= $this->Number->format($playdata->m3858) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3861') ?></th>
                    <td><?= $this->Number->format($playdata->m3861) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3870') ?></th>
                    <td><?= $this->Number->format($playdata->m3870) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3873') ?></th>
                    <td><?= $this->Number->format($playdata->m3873) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3879') ?></th>
                    <td><?= $this->Number->format($playdata->m3879) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3882') ?></th>
                    <td><?= $this->Number->format($playdata->m3882) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3894') ?></th>
                    <td><?= $this->Number->format($playdata->m3894) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3900') ?></th>
                    <td><?= $this->Number->format($playdata->m3900) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3909') ?></th>
                    <td><?= $this->Number->format($playdata->m3909) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3918') ?></th>
                    <td><?= $this->Number->format($playdata->m3918) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3930') ?></th>
                    <td><?= $this->Number->format($playdata->m3930) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3960') ?></th>
                    <td><?= $this->Number->format($playdata->m3960) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3963') ?></th>
                    <td><?= $this->Number->format($playdata->m3963) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3975') ?></th>
                    <td><?= $this->Number->format($playdata->m3975) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3984') ?></th>
                    <td><?= $this->Number->format($playdata->m3984) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3993') ?></th>
                    <td><?= $this->Number->format($playdata->m3993) ?></td>
                </tr>
                <tr>
                    <th><?= __('M3996') ?></th>
                    <td><?= $this->Number->format($playdata->m3996) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4011') ?></th>
                    <td><?= $this->Number->format($playdata->m4011) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4017') ?></th>
                    <td><?= $this->Number->format($playdata->m4017) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4029') ?></th>
                    <td><?= $this->Number->format($playdata->m4029) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4053') ?></th>
                    <td><?= $this->Number->format($playdata->m4053) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4056') ?></th>
                    <td><?= $this->Number->format($playdata->m4056) ?></td>
                </tr>
                <tr>
                    <th><?= __('M4071') ?></th>
                    <td><?= $this->Number->format($playdata->m4071) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($playdata->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($playdata->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
