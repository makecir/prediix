<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Playdata Entity
 *
 * @property int $id
 * @property string $playerid
 * @property int $class
 * @property int|null $m231
 * @property int|null $m246
 * @property int|null $m291
 * @property int|null $m411
 * @property int|null $m438
 * @property int|null $m501
 * @property int|null $m504
 * @property int|null $m599
 * @property int|null $m600
 * @property int|null $m618
 * @property int|null $m642
 * @property int|null $m645
 * @property int|null $m681
 * @property int|null $m689
 * @property int|null $m690
 * @property int|null $m732
 * @property int|null $m816
 * @property int|null $m819
 * @property int|null $m822
 * @property int|null $m864
 * @property int|null $m891
 * @property int|null $m972
 * @property int|null $m978
 * @property int|null $m999
 * @property int|null $m1014
 * @property int|null $m1017
 * @property int|null $m1041
 * @property int|null $m1044
 * @property int|null $m1068
 * @property int|null $m1086
 * @property int|null $m1089
 * @property int|null $m1119
 * @property int|null $m1164
 * @property int|null $m1167
 * @property int|null $m1182
 * @property int|null $m1191
 * @property int|null $m1194
 * @property int|null $m1203
 * @property int|null $m1230
 * @property int|null $m1239
 * @property int|null $m1257
 * @property int|null $m1269
 * @property int|null $m1287
 * @property int|null $m1296
 * @property int|null $m1308
 * @property int|null $m1368
 * @property int|null $m1386
 * @property int|null $m1395
 * @property int|null $m1413
 * @property int|null $m1419
 * @property int|null $m1455
 * @property int|null $m1467
 * @property int|null $m1470
 * @property int|null $m1473
 * @property int|null $m1476
 * @property int|null $m1482
 * @property int|null $m1503
 * @property int|null $m1515
 * @property int|null $m1521
 * @property int|null $m1533
 * @property int|null $m1536
 * @property int|null $m1566
 * @property int|null $m1578
 * @property int|null $m1599
 * @property int|null $m1605
 * @property int|null $m1617
 * @property int|null $m1662
 * @property int|null $m1668
 * @property int|null $m1677
 * @property int|null $m1689
 * @property int|null $m1692
 * @property int|null $m1698
 * @property int|null $m1725
 * @property int|null $m1758
 * @property int|null $m1761
 * @property int|null $m1779
 * @property int|null $m1791
 * @property int|null $m1800
 * @property int|null $m1806
 * @property int|null $m1815
 * @property int|null $m1848
 * @property int|null $m1860
 * @property int|null $m1887
 * @property int|null $m1896
 * @property int|null $m1899
 * @property int|null $m1902
 * @property int|null $m1908
 * @property int|null $m1914
 * @property int|null $m1917
 * @property int|null $m1935
 * @property int|null $m1938
 * @property int|null $m1941
 * @property int|null $m1947
 * @property int|null $m1980
 * @property int|null $m1989
 * @property int|null $m1992
 * @property int|null $m1998
 * @property int|null $m2010
 * @property int|null $m2016
 * @property int|null $m2034
 * @property int|null $m2037
 * @property int|null $m2043
 * @property int|null $m2058
 * @property int|null $m2067
 * @property int|null $m2079
 * @property int|null $m2103
 * @property int|null $m2109
 * @property int|null $m2112
 * @property int|null $m2121
 * @property int|null $m2127
 * @property int|null $m2130
 * @property int|null $m2136
 * @property int|null $m2139
 * @property int|null $m2154
 * @property int|null $m2157
 * @property int|null $m2160
 * @property int|null $m2166
 * @property int|null $m2169
 * @property int|null $m2175
 * @property int|null $m2178
 * @property int|null $m2181
 * @property int|null $m2196
 * @property int|null $m2202
 * @property int|null $m2214
 * @property int|null $m2217
 * @property int|null $m2223
 * @property int|null $m2229
 * @property int|null $m2232
 * @property int|null $m2241
 * @property int|null $m2256
 * @property int|null $m2259
 * @property int|null $m2268
 * @property int|null $m2292
 * @property int|null $m2295
 * @property int|null $m2310
 * @property int|null $m2313
 * @property int|null $m2319
 * @property int|null $m2325
 * @property int|null $m2328
 * @property int|null $m2331
 * @property int|null $m2334
 * @property int|null $m2343
 * @property int|null $m2376
 * @property int|null $m2379
 * @property int|null $m2400
 * @property int|null $m2403
 * @property int|null $m2421
 * @property int|null $m2424
 * @property int|null $m2427
 * @property int|null $m2451
 * @property int|null $m2457
 * @property int|null $m2460
 * @property int|null $m2463
 * @property int|null $m2469
 * @property int|null $m2472
 * @property int|null $m2481
 * @property int|null $m2496
 * @property int|null $m2505
 * @property int|null $m2508
 * @property int|null $m2523
 * @property int|null $m2526
 * @property int|null $m2532
 * @property int|null $m2541
 * @property int|null $m2544
 * @property int|null $m2547
 * @property int|null $m2550
 * @property int|null $m2553
 * @property int|null $m2559
 * @property int|null $m2562
 * @property int|null $m2565
 * @property int|null $m2568
 * @property int|null $m2586
 * @property int|null $m2607
 * @property int|null $m2610
 * @property int|null $m2628
 * @property int|null $m2634
 * @property int|null $m2643
 * @property int|null $m2652
 * @property int|null $m2658
 * @property int|null $m2661
 * @property int|null $m2670
 * @property int|null $m2676
 * @property int|null $m2679
 * @property int|null $m2682
 * @property int|null $m2688
 * @property int|null $m2691
 * @property int|null $m2694
 * @property int|null $m2721
 * @property int|null $m2727
 * @property int|null $m2733
 * @property int|null $m2739
 * @property int|null $m2745
 * @property int|null $m2763
 * @property int|null $m2766
 * @property int|null $m2772
 * @property int|null $m2781
 * @property int|null $m2790
 * @property int|null $m2802
 * @property int|null $m2811
 * @property int|null $m2826
 * @property int|null $m2829
 * @property int|null $m2841
 * @property int|null $m2865
 * @property int|null $m2868
 * @property int|null $m2871
 * @property int|null $m2880
 * @property int|null $m2889
 * @property int|null $m2898
 * @property int|null $m2901
 * @property int|null $m2910
 * @property int|null $m2922
 * @property int|null $m2928
 * @property int|null $m2958
 * @property int|null $m2961
 * @property int|null $m2979
 * @property int|null $m2997
 * @property int|null $m3006
 * @property int|null $m3036
 * @property int|null $m3042
 * @property int|null $m3045
 * @property int|null $m3054
 * @property int|null $m3063
 * @property int|null $m3078
 * @property int|null $m3111
 * @property int|null $m3123
 * @property int|null $m3126
 * @property int|null $m3135
 * @property int|null $m3138
 * @property int|null $m3141
 * @property int|null $m3144
 * @property int|null $m3165
 * @property int|null $m3180
 * @property int|null $m3189
 * @property int|null $m3192
 * @property int|null $m3195
 * @property int|null $m3213
 * @property int|null $m3240
 * @property int|null $m3243
 * @property int|null $m3246
 * @property int|null $m3252
 * @property int|null $m3255
 * @property int|null $m3267
 * @property int|null $m3273
 * @property int|null $m3291
 * @property int|null $m3300
 * @property int|null $m3306
 * @property int|null $m3312
 * @property int|null $m3327
 * @property int|null $m3330
 * @property int|null $m3333
 * @property int|null $m3342
 * @property int|null $m3354
 * @property int|null $m3357
 * @property int|null $m3360
 * @property int|null $m3363
 * @property int|null $m3366
 * @property int|null $m3369
 * @property int|null $m3375
 * @property int|null $m3381
 * @property int|null $m3384
 * @property int|null $m3387
 * @property int|null $m3393
 * @property int|null $m3399
 * @property int|null $m3405
 * @property int|null $m3408
 * @property int|null $m3420
 * @property int|null $m3423
 * @property int|null $m3444
 * @property int|null $m3447
 * @property int|null $m3450
 * @property int|null $m3471
 * @property int|null $m3489
 * @property int|null $m3492
 * @property int|null $m3495
 * @property int|null $m3501
 * @property int|null $m3504
 * @property int|null $m3546
 * @property int|null $m3549
 * @property int|null $m3555
 * @property int|null $m3576
 * @property int|null $m3591
 * @property int|null $m3594
 * @property int|null $m3597
 * @property int|null $m3600
 * @property int|null $m3615
 * @property int|null $m3642
 * @property int|null $m3654
 * @property int|null $m3657
 * @property int|null $m3666
 * @property int|null $m3693
 * @property int|null $m3696
 * @property int|null $m3717
 * @property int|null $m3720
 * @property int|null $m3729
 * @property int|null $m3732
 * @property int|null $m3735
 * @property int|null $m3741
 * @property int|null $m3744
 * @property int|null $m3780
 * @property int|null $m3783
 * @property int|null $m3786
 * @property int|null $m3801
 * @property int|null $m3807
 * @property int|null $m3810
 * @property int|null $m3813
 * @property int|null $m3819
 * @property int|null $m3828
 * @property int|null $m3837
 * @property int|null $m3840
 * @property int|null $m3858
 * @property int|null $m3861
 * @property int|null $m3870
 * @property int|null $m3873
 * @property int|null $m3879
 * @property int|null $m3882
 * @property int|null $m3894
 * @property int|null $m3900
 * @property int|null $m3909
 * @property int|null $m3918
 * @property int|null $m3930
 * @property int|null $m3960
 * @property int|null $m3963
 * @property int|null $m3975
 * @property int|null $m3984
 * @property int|null $m3993
 * @property int|null $m3996
 * @property int|null $m4011
 * @property int|null $m4017
 * @property int|null $m4029
 * @property int|null $m4053
 * @property int|null $m4056
 * @property int|null $m4071
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 */
class Playdata extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'playerid' => true,
        'class' => true,
        'm231' => true,
        'm246' => true,
        'm291' => true,
        'm411' => true,
        'm438' => true,
        'm501' => true,
        'm504' => true,
        'm599' => true,
        'm600' => true,
        'm618' => true,
        'm642' => true,
        'm645' => true,
        'm681' => true,
        'm689' => true,
        'm690' => true,
        'm732' => true,
        'm816' => true,
        'm819' => true,
        'm822' => true,
        'm864' => true,
        'm891' => true,
        'm972' => true,
        'm978' => true,
        'm999' => true,
        'm1014' => true,
        'm1017' => true,
        'm1041' => true,
        'm1044' => true,
        'm1068' => true,
        'm1086' => true,
        'm1089' => true,
        'm1119' => true,
        'm1164' => true,
        'm1167' => true,
        'm1182' => true,
        'm1191' => true,
        'm1194' => true,
        'm1203' => true,
        'm1230' => true,
        'm1239' => true,
        'm1257' => true,
        'm1269' => true,
        'm1287' => true,
        'm1296' => true,
        'm1308' => true,
        'm1368' => true,
        'm1386' => true,
        'm1395' => true,
        'm1413' => true,
        'm1419' => true,
        'm1455' => true,
        'm1467' => true,
        'm1470' => true,
        'm1473' => true,
        'm1476' => true,
        'm1482' => true,
        'm1503' => true,
        'm1515' => true,
        'm1521' => true,
        'm1533' => true,
        'm1536' => true,
        'm1566' => true,
        'm1578' => true,
        'm1599' => true,
        'm1605' => true,
        'm1617' => true,
        'm1662' => true,
        'm1668' => true,
        'm1677' => true,
        'm1689' => true,
        'm1692' => true,
        'm1698' => true,
        'm1725' => true,
        'm1758' => true,
        'm1761' => true,
        'm1779' => true,
        'm1791' => true,
        'm1800' => true,
        'm1806' => true,
        'm1815' => true,
        'm1848' => true,
        'm1860' => true,
        'm1887' => true,
        'm1896' => true,
        'm1899' => true,
        'm1902' => true,
        'm1908' => true,
        'm1914' => true,
        'm1917' => true,
        'm1935' => true,
        'm1938' => true,
        'm1941' => true,
        'm1947' => true,
        'm1980' => true,
        'm1989' => true,
        'm1992' => true,
        'm1998' => true,
        'm2010' => true,
        'm2016' => true,
        'm2034' => true,
        'm2037' => true,
        'm2043' => true,
        'm2058' => true,
        'm2067' => true,
        'm2079' => true,
        'm2103' => true,
        'm2109' => true,
        'm2112' => true,
        'm2121' => true,
        'm2127' => true,
        'm2130' => true,
        'm2136' => true,
        'm2139' => true,
        'm2154' => true,
        'm2157' => true,
        'm2160' => true,
        'm2166' => true,
        'm2169' => true,
        'm2175' => true,
        'm2178' => true,
        'm2181' => true,
        'm2196' => true,
        'm2202' => true,
        'm2214' => true,
        'm2217' => true,
        'm2223' => true,
        'm2229' => true,
        'm2232' => true,
        'm2241' => true,
        'm2256' => true,
        'm2259' => true,
        'm2268' => true,
        'm2292' => true,
        'm2295' => true,
        'm2310' => true,
        'm2313' => true,
        'm2319' => true,
        'm2325' => true,
        'm2328' => true,
        'm2331' => true,
        'm2334' => true,
        'm2343' => true,
        'm2376' => true,
        'm2379' => true,
        'm2400' => true,
        'm2403' => true,
        'm2421' => true,
        'm2424' => true,
        'm2427' => true,
        'm2451' => true,
        'm2457' => true,
        'm2460' => true,
        'm2463' => true,
        'm2469' => true,
        'm2472' => true,
        'm2481' => true,
        'm2496' => true,
        'm2505' => true,
        'm2508' => true,
        'm2523' => true,
        'm2526' => true,
        'm2532' => true,
        'm2541' => true,
        'm2544' => true,
        'm2547' => true,
        'm2550' => true,
        'm2553' => true,
        'm2559' => true,
        'm2562' => true,
        'm2565' => true,
        'm2568' => true,
        'm2586' => true,
        'm2607' => true,
        'm2610' => true,
        'm2628' => true,
        'm2634' => true,
        'm2643' => true,
        'm2652' => true,
        'm2658' => true,
        'm2661' => true,
        'm2670' => true,
        'm2676' => true,
        'm2679' => true,
        'm2682' => true,
        'm2688' => true,
        'm2691' => true,
        'm2694' => true,
        'm2721' => true,
        'm2727' => true,
        'm2733' => true,
        'm2739' => true,
        'm2745' => true,
        'm2763' => true,
        'm2766' => true,
        'm2772' => true,
        'm2781' => true,
        'm2790' => true,
        'm2802' => true,
        'm2811' => true,
        'm2826' => true,
        'm2829' => true,
        'm2841' => true,
        'm2865' => true,
        'm2868' => true,
        'm2871' => true,
        'm2880' => true,
        'm2889' => true,
        'm2898' => true,
        'm2901' => true,
        'm2910' => true,
        'm2922' => true,
        'm2928' => true,
        'm2958' => true,
        'm2961' => true,
        'm2979' => true,
        'm2997' => true,
        'm3006' => true,
        'm3036' => true,
        'm3042' => true,
        'm3045' => true,
        'm3054' => true,
        'm3063' => true,
        'm3078' => true,
        'm3111' => true,
        'm3123' => true,
        'm3126' => true,
        'm3135' => true,
        'm3138' => true,
        'm3141' => true,
        'm3144' => true,
        'm3165' => true,
        'm3180' => true,
        'm3189' => true,
        'm3192' => true,
        'm3195' => true,
        'm3213' => true,
        'm3240' => true,
        'm3243' => true,
        'm3246' => true,
        'm3252' => true,
        'm3255' => true,
        'm3267' => true,
        'm3273' => true,
        'm3291' => true,
        'm3300' => true,
        'm3306' => true,
        'm3312' => true,
        'm3327' => true,
        'm3330' => true,
        'm3333' => true,
        'm3342' => true,
        'm3354' => true,
        'm3357' => true,
        'm3360' => true,
        'm3363' => true,
        'm3366' => true,
        'm3369' => true,
        'm3375' => true,
        'm3381' => true,
        'm3384' => true,
        'm3387' => true,
        'm3393' => true,
        'm3399' => true,
        'm3405' => true,
        'm3408' => true,
        'm3420' => true,
        'm3423' => true,
        'm3444' => true,
        'm3447' => true,
        'm3450' => true,
        'm3471' => true,
        'm3489' => true,
        'm3492' => true,
        'm3495' => true,
        'm3501' => true,
        'm3504' => true,
        'm3546' => true,
        'm3549' => true,
        'm3555' => true,
        'm3576' => true,
        'm3591' => true,
        'm3594' => true,
        'm3597' => true,
        'm3600' => true,
        'm3615' => true,
        'm3642' => true,
        'm3654' => true,
        'm3657' => true,
        'm3666' => true,
        'm3693' => true,
        'm3696' => true,
        'm3717' => true,
        'm3720' => true,
        'm3729' => true,
        'm3732' => true,
        'm3735' => true,
        'm3741' => true,
        'm3744' => true,
        'm3780' => true,
        'm3783' => true,
        'm3786' => true,
        'm3801' => true,
        'm3807' => true,
        'm3810' => true,
        'm3813' => true,
        'm3819' => true,
        'm3828' => true,
        'm3837' => true,
        'm3840' => true,
        'm3858' => true,
        'm3861' => true,
        'm3870' => true,
        'm3873' => true,
        'm3879' => true,
        'm3882' => true,
        'm3894' => true,
        'm3900' => true,
        'm3909' => true,
        'm3918' => true,
        'm3930' => true,
        'm3960' => true,
        'm3963' => true,
        'm3975' => true,
        'm3984' => true,
        'm3993' => true,
        'm3996' => true,
        'm4011' => true,
        'm4017' => true,
        'm4029' => true,
        'm4053' => true,
        'm4056' => true,
        'm4071' => true,
        'created_at' => true,
        'modified_at' => true,
    ];
}
