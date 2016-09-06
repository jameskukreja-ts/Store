<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserTier Entity
 *
 * @property int $id
 * @property int $amount_spent
 * @property int $year
 * @property float $effective_discount_rate
 * @property \Cake\I18n\Time $start_date
 * @property \Cake\I18n\Time $end_date
 * @property int $user_id
 * @property int $tier_id
 *
 * @property \App\Model\Entity\User $user
 */
class UserTier extends Entity
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
        '*' => true,
        'id' => false
    ];
}
