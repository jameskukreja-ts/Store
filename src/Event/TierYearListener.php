<?php
namespace App\Event;

use Cake\Event\EventListenerInterface;
use Cake\Log\Log;

class TierYearListener implements EventListenerInterface
{
	 public function implementedEvents()
    {
        return [
           'Model.UserTier.afterTierChange' => 'tEntry',
           'Model.UserTier.afterNewYear' => 'yEntry',
        ];
    }

    public function tEntry($event, $current)
    {
         log::write('debug', 'Tier Changed to '.$current.'!!!!');
    }
     public function yEntry($event, $data)
    {
         log::write('debug', 'Year Changed to '.$data->year.'!!!!');
    }


}

?>
