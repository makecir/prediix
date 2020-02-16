<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Playdatas Model
 *
 * @method \App\Model\Entity\Playdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Playdata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Playdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Playdata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Playdata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Playdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Playdata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Playdata findOrCreate($search, callable $callback = null, $options = [])
 */
class PlaydatasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('playdatas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('playerid')
            ->maxLength('playerid', 10)
            ->requirePresence('playerid', 'create')
            ->notEmptyString('playerid');

        $validator
            ->integer('class')
            ->requirePresence('class', 'create')
            ->notEmptyString('class');

        $validator
            ->allowEmptyString('m231');

        $validator
            ->allowEmptyString('m246');

        $validator
            ->allowEmptyString('m291');

        $validator
            ->allowEmptyString('m411');

        $validator
            ->allowEmptyString('m438');

        $validator
            ->allowEmptyString('m501');

        $validator
            ->allowEmptyString('m504');

        $validator
            ->allowEmptyString('m599');

        $validator
            ->allowEmptyString('m600');

        $validator
            ->allowEmptyString('m618');

        $validator
            ->allowEmptyString('m642');

        $validator
            ->allowEmptyString('m645');

        $validator
            ->allowEmptyString('m681');

        $validator
            ->allowEmptyString('m689');

        $validator
            ->allowEmptyString('m690');

        $validator
            ->allowEmptyString('m732');

        $validator
            ->allowEmptyString('m816');

        $validator
            ->allowEmptyString('m819');

        $validator
            ->allowEmptyString('m822');

        $validator
            ->allowEmptyString('m864');

        $validator
            ->allowEmptyString('m891');

        $validator
            ->allowEmptyString('m972');

        $validator
            ->allowEmptyString('m978');

        $validator
            ->allowEmptyString('m999');

        $validator
            ->allowEmptyString('m1014');

        $validator
            ->allowEmptyString('m1017');

        $validator
            ->allowEmptyString('m1041');

        $validator
            ->allowEmptyString('m1044');

        $validator
            ->allowEmptyString('m1068');

        $validator
            ->allowEmptyString('m1086');

        $validator
            ->allowEmptyString('m1089');

        $validator
            ->allowEmptyString('m1119');

        $validator
            ->allowEmptyString('m1164');

        $validator
            ->allowEmptyString('m1167');

        $validator
            ->allowEmptyString('m1182');

        $validator
            ->allowEmptyString('m1191');

        $validator
            ->allowEmptyString('m1194');

        $validator
            ->allowEmptyString('m1203');

        $validator
            ->allowEmptyString('m1230');

        $validator
            ->allowEmptyString('m1239');

        $validator
            ->allowEmptyString('m1257');

        $validator
            ->allowEmptyString('m1269');

        $validator
            ->allowEmptyString('m1287');

        $validator
            ->allowEmptyString('m1296');

        $validator
            ->allowEmptyString('m1308');

        $validator
            ->allowEmptyString('m1368');

        $validator
            ->allowEmptyString('m1386');

        $validator
            ->allowEmptyString('m1395');

        $validator
            ->allowEmptyString('m1413');

        $validator
            ->allowEmptyString('m1419');

        $validator
            ->allowEmptyString('m1455');

        $validator
            ->allowEmptyString('m1467');

        $validator
            ->allowEmptyString('m1470');

        $validator
            ->allowEmptyString('m1473');

        $validator
            ->allowEmptyString('m1476');

        $validator
            ->allowEmptyString('m1482');

        $validator
            ->allowEmptyString('m1503');

        $validator
            ->allowEmptyString('m1515');

        $validator
            ->allowEmptyString('m1521');

        $validator
            ->allowEmptyString('m1533');

        $validator
            ->allowEmptyString('m1536');

        $validator
            ->allowEmptyString('m1566');

        $validator
            ->allowEmptyString('m1578');

        $validator
            ->allowEmptyString('m1599');

        $validator
            ->allowEmptyString('m1605');

        $validator
            ->allowEmptyString('m1617');

        $validator
            ->allowEmptyString('m1662');

        $validator
            ->allowEmptyString('m1668');

        $validator
            ->allowEmptyString('m1677');

        $validator
            ->allowEmptyString('m1689');

        $validator
            ->allowEmptyString('m1692');

        $validator
            ->allowEmptyString('m1698');

        $validator
            ->allowEmptyString('m1725');

        $validator
            ->allowEmptyString('m1758');

        $validator
            ->allowEmptyString('m1761');

        $validator
            ->allowEmptyString('m1779');

        $validator
            ->allowEmptyString('m1791');

        $validator
            ->allowEmptyString('m1800');

        $validator
            ->allowEmptyString('m1806');

        $validator
            ->allowEmptyString('m1815');

        $validator
            ->allowEmptyString('m1848');

        $validator
            ->allowEmptyString('m1860');

        $validator
            ->allowEmptyString('m1887');

        $validator
            ->allowEmptyString('m1896');

        $validator
            ->allowEmptyString('m1899');

        $validator
            ->allowEmptyString('m1902');

        $validator
            ->allowEmptyString('m1908');

        $validator
            ->allowEmptyString('m1914');

        $validator
            ->allowEmptyString('m1917');

        $validator
            ->allowEmptyString('m1935');

        $validator
            ->allowEmptyString('m1938');

        $validator
            ->allowEmptyString('m1941');

        $validator
            ->allowEmptyString('m1947');

        $validator
            ->allowEmptyString('m1980');

        $validator
            ->allowEmptyString('m1989');

        $validator
            ->allowEmptyString('m1992');

        $validator
            ->allowEmptyString('m1998');

        $validator
            ->allowEmptyString('m2010');

        $validator
            ->allowEmptyString('m2016');

        $validator
            ->allowEmptyString('m2034');

        $validator
            ->allowEmptyString('m2037');

        $validator
            ->allowEmptyString('m2043');

        $validator
            ->allowEmptyString('m2058');

        $validator
            ->allowEmptyString('m2067');

        $validator
            ->allowEmptyString('m2079');

        $validator
            ->allowEmptyString('m2103');

        $validator
            ->allowEmptyString('m2109');

        $validator
            ->allowEmptyString('m2112');

        $validator
            ->allowEmptyString('m2121');

        $validator
            ->allowEmptyString('m2127');

        $validator
            ->allowEmptyString('m2130');

        $validator
            ->allowEmptyString('m2136');

        $validator
            ->allowEmptyString('m2139');

        $validator
            ->allowEmptyString('m2154');

        $validator
            ->allowEmptyString('m2157');

        $validator
            ->allowEmptyString('m2160');

        $validator
            ->allowEmptyString('m2166');

        $validator
            ->allowEmptyString('m2169');

        $validator
            ->allowEmptyString('m2175');

        $validator
            ->allowEmptyString('m2178');

        $validator
            ->allowEmptyString('m2181');

        $validator
            ->allowEmptyString('m2196');

        $validator
            ->allowEmptyString('m2202');

        $validator
            ->allowEmptyString('m2214');

        $validator
            ->allowEmptyString('m2217');

        $validator
            ->allowEmptyString('m2223');

        $validator
            ->allowEmptyString('m2229');

        $validator
            ->allowEmptyString('m2232');

        $validator
            ->allowEmptyString('m2241');

        $validator
            ->allowEmptyString('m2256');

        $validator
            ->allowEmptyString('m2259');

        $validator
            ->allowEmptyString('m2268');

        $validator
            ->allowEmptyString('m2292');

        $validator
            ->allowEmptyString('m2295');

        $validator
            ->allowEmptyString('m2310');

        $validator
            ->allowEmptyString('m2313');

        $validator
            ->allowEmptyString('m2319');

        $validator
            ->allowEmptyString('m2325');

        $validator
            ->allowEmptyString('m2328');

        $validator
            ->allowEmptyString('m2331');

        $validator
            ->allowEmptyString('m2334');

        $validator
            ->allowEmptyString('m2343');

        $validator
            ->allowEmptyString('m2376');

        $validator
            ->allowEmptyString('m2379');

        $validator
            ->allowEmptyString('m2400');

        $validator
            ->allowEmptyString('m2403');

        $validator
            ->allowEmptyString('m2421');

        $validator
            ->allowEmptyString('m2424');

        $validator
            ->allowEmptyString('m2427');

        $validator
            ->allowEmptyString('m2451');

        $validator
            ->allowEmptyString('m2457');

        $validator
            ->allowEmptyString('m2460');

        $validator
            ->allowEmptyString('m2463');

        $validator
            ->allowEmptyString('m2469');

        $validator
            ->allowEmptyString('m2472');

        $validator
            ->allowEmptyString('m2481');

        $validator
            ->allowEmptyString('m2496');

        $validator
            ->allowEmptyString('m2505');

        $validator
            ->allowEmptyString('m2508');

        $validator
            ->allowEmptyString('m2523');

        $validator
            ->allowEmptyString('m2526');

        $validator
            ->allowEmptyString('m2532');

        $validator
            ->allowEmptyString('m2541');

        $validator
            ->allowEmptyString('m2544');

        $validator
            ->allowEmptyString('m2547');

        $validator
            ->allowEmptyString('m2550');

        $validator
            ->allowEmptyString('m2553');

        $validator
            ->allowEmptyString('m2559');

        $validator
            ->allowEmptyString('m2562');

        $validator
            ->allowEmptyString('m2565');

        $validator
            ->allowEmptyString('m2568');

        $validator
            ->allowEmptyString('m2586');

        $validator
            ->allowEmptyString('m2607');

        $validator
            ->allowEmptyString('m2610');

        $validator
            ->allowEmptyString('m2628');

        $validator
            ->allowEmptyString('m2634');

        $validator
            ->allowEmptyString('m2643');

        $validator
            ->allowEmptyString('m2652');

        $validator
            ->allowEmptyString('m2658');

        $validator
            ->allowEmptyString('m2661');

        $validator
            ->allowEmptyString('m2670');

        $validator
            ->allowEmptyString('m2676');

        $validator
            ->allowEmptyString('m2679');

        $validator
            ->allowEmptyString('m2682');

        $validator
            ->allowEmptyString('m2688');

        $validator
            ->allowEmptyString('m2691');

        $validator
            ->allowEmptyString('m2694');

        $validator
            ->allowEmptyString('m2721');

        $validator
            ->allowEmptyString('m2727');

        $validator
            ->allowEmptyString('m2733');

        $validator
            ->allowEmptyString('m2739');

        $validator
            ->allowEmptyString('m2745');

        $validator
            ->allowEmptyString('m2763');

        $validator
            ->allowEmptyString('m2766');

        $validator
            ->allowEmptyString('m2772');

        $validator
            ->allowEmptyString('m2781');

        $validator
            ->allowEmptyString('m2790');

        $validator
            ->allowEmptyString('m2802');

        $validator
            ->allowEmptyString('m2811');

        $validator
            ->allowEmptyString('m2826');

        $validator
            ->allowEmptyString('m2829');

        $validator
            ->allowEmptyString('m2841');

        $validator
            ->allowEmptyString('m2865');

        $validator
            ->allowEmptyString('m2868');

        $validator
            ->allowEmptyString('m2871');

        $validator
            ->allowEmptyString('m2880');

        $validator
            ->allowEmptyString('m2889');

        $validator
            ->allowEmptyString('m2898');

        $validator
            ->allowEmptyString('m2901');

        $validator
            ->allowEmptyString('m2910');

        $validator
            ->allowEmptyString('m2922');

        $validator
            ->allowEmptyString('m2928');

        $validator
            ->allowEmptyString('m2958');

        $validator
            ->allowEmptyString('m2961');

        $validator
            ->allowEmptyString('m2979');

        $validator
            ->allowEmptyString('m2997');

        $validator
            ->allowEmptyString('m3006');

        $validator
            ->allowEmptyString('m3036');

        $validator
            ->allowEmptyString('m3042');

        $validator
            ->allowEmptyString('m3045');

        $validator
            ->allowEmptyString('m3054');

        $validator
            ->allowEmptyString('m3063');

        $validator
            ->allowEmptyString('m3078');

        $validator
            ->allowEmptyString('m3111');

        $validator
            ->allowEmptyString('m3123');

        $validator
            ->allowEmptyString('m3126');

        $validator
            ->allowEmptyString('m3135');

        $validator
            ->allowEmptyString('m3138');

        $validator
            ->allowEmptyString('m3141');

        $validator
            ->allowEmptyString('m3144');

        $validator
            ->allowEmptyString('m3165');

        $validator
            ->allowEmptyString('m3180');

        $validator
            ->allowEmptyString('m3189');

        $validator
            ->allowEmptyString('m3192');

        $validator
            ->allowEmptyString('m3195');

        $validator
            ->allowEmptyString('m3213');

        $validator
            ->allowEmptyString('m3240');

        $validator
            ->allowEmptyString('m3243');

        $validator
            ->allowEmptyString('m3246');

        $validator
            ->allowEmptyString('m3252');

        $validator
            ->allowEmptyString('m3255');

        $validator
            ->allowEmptyString('m3267');

        $validator
            ->allowEmptyString('m3273');

        $validator
            ->allowEmptyString('m3291');

        $validator
            ->allowEmptyString('m3300');

        $validator
            ->allowEmptyString('m3306');

        $validator
            ->allowEmptyString('m3312');

        $validator
            ->allowEmptyString('m3327');

        $validator
            ->allowEmptyString('m3330');

        $validator
            ->allowEmptyString('m3333');

        $validator
            ->allowEmptyString('m3342');

        $validator
            ->allowEmptyString('m3354');

        $validator
            ->allowEmptyString('m3357');

        $validator
            ->allowEmptyString('m3360');

        $validator
            ->allowEmptyString('m3363');

        $validator
            ->allowEmptyString('m3366');

        $validator
            ->allowEmptyString('m3369');

        $validator
            ->allowEmptyString('m3375');

        $validator
            ->allowEmptyString('m3381');

        $validator
            ->allowEmptyString('m3384');

        $validator
            ->allowEmptyString('m3387');

        $validator
            ->allowEmptyString('m3393');

        $validator
            ->allowEmptyString('m3399');

        $validator
            ->allowEmptyString('m3405');

        $validator
            ->allowEmptyString('m3408');

        $validator
            ->allowEmptyString('m3420');

        $validator
            ->allowEmptyString('m3423');

        $validator
            ->allowEmptyString('m3444');

        $validator
            ->allowEmptyString('m3447');

        $validator
            ->allowEmptyString('m3450');

        $validator
            ->allowEmptyString('m3471');

        $validator
            ->allowEmptyString('m3489');

        $validator
            ->allowEmptyString('m3492');

        $validator
            ->allowEmptyString('m3495');

        $validator
            ->allowEmptyString('m3501');

        $validator
            ->allowEmptyString('m3504');

        $validator
            ->allowEmptyString('m3546');

        $validator
            ->allowEmptyString('m3549');

        $validator
            ->allowEmptyString('m3555');

        $validator
            ->allowEmptyString('m3576');

        $validator
            ->allowEmptyString('m3591');

        $validator
            ->allowEmptyString('m3594');

        $validator
            ->allowEmptyString('m3597');

        $validator
            ->allowEmptyString('m3600');

        $validator
            ->allowEmptyString('m3615');

        $validator
            ->allowEmptyString('m3642');

        $validator
            ->allowEmptyString('m3654');

        $validator
            ->allowEmptyString('m3657');

        $validator
            ->allowEmptyString('m3666');

        $validator
            ->allowEmptyString('m3693');

        $validator
            ->allowEmptyString('m3696');

        $validator
            ->allowEmptyString('m3717');

        $validator
            ->allowEmptyString('m3720');

        $validator
            ->allowEmptyString('m3729');

        $validator
            ->allowEmptyString('m3732');

        $validator
            ->allowEmptyString('m3735');

        $validator
            ->allowEmptyString('m3741');

        $validator
            ->allowEmptyString('m3744');

        $validator
            ->allowEmptyString('m3780');

        $validator
            ->allowEmptyString('m3783');

        $validator
            ->allowEmptyString('m3786');

        $validator
            ->allowEmptyString('m3801');

        $validator
            ->allowEmptyString('m3807');

        $validator
            ->allowEmptyString('m3810');

        $validator
            ->allowEmptyString('m3813');

        $validator
            ->allowEmptyString('m3819');

        $validator
            ->allowEmptyString('m3828');

        $validator
            ->allowEmptyString('m3837');

        $validator
            ->allowEmptyString('m3840');

        $validator
            ->allowEmptyString('m3858');

        $validator
            ->allowEmptyString('m3861');

        $validator
            ->allowEmptyString('m3870');

        $validator
            ->allowEmptyString('m3873');

        $validator
            ->allowEmptyString('m3879');

        $validator
            ->allowEmptyString('m3882');

        $validator
            ->allowEmptyString('m3894');

        $validator
            ->allowEmptyString('m3900');

        $validator
            ->allowEmptyString('m3909');

        $validator
            ->allowEmptyString('m3918');

        $validator
            ->allowEmptyString('m3930');

        $validator
            ->allowEmptyString('m3960');

        $validator
            ->allowEmptyString('m3963');

        $validator
            ->allowEmptyString('m3975');

        $validator
            ->allowEmptyString('m3984');

        $validator
            ->allowEmptyString('m3993');

        $validator
            ->allowEmptyString('m3996');

        $validator
            ->allowEmptyString('m4011');

        $validator
            ->allowEmptyString('m4017');

        $validator
            ->allowEmptyString('m4029');

        $validator
            ->allowEmptyString('m4053');

        $validator
            ->allowEmptyString('m4056');

        $validator
            ->allowEmptyString('m4071');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

        return $validator;
    }
}
