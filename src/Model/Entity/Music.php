<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Music Entity
 *
 * @property int $id
 * @property string $mid
 * @property string $title
 * @property string $version
 * @property int $difficult
 * @property int $notes
 * @property double $easy_intercept
 * @property double $easy_coefficient
 * @property double $clear_intercept
 * @property double $clear_coefficient
 * @property double $hard_intercept
 * @property double $hard_coefficient
 * @property double $exhard_intercept
 * @property double $exhard_coefficient
 * @property double $fc_intercept
 * @property double $fc_coefficient
 * @property \Cake\I18n\FrozenTime|null $created_ar
 * @property \Cake\I18n\FrozenTime $modified_at
 */
class Music extends Entity
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
        'mid' => true,
        'title' => true,
        'version' => true,
        'difficult' => true,
        'notes' => true,
        'easy_intercept' => true,
        'easy_coefficient' => true,
        'clear_intercept' => true,
        'clear_coefficient' => true,
        'hard_intercept' => true,
        'hard_coefficient' => true,
        'exhard_intercept' => true,
        'exhard_coefficient' => true,
        'fc_intercept' => true,
        'fc_coefficient' => true,
        'created_ar' => true,
        'modified_at' => true,
    ];
}
