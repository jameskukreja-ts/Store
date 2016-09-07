<?php
namespace App\Event;

use Cake\Event\EventListenerInterface;
use Cake\Log\Log;

class TierYearListener implements EventListenerInterface
{
	 public function implementedEvents()
    {
        return [
           'Model.UserTier.afterTierChange' => 'logEntry',
           'Model.UserTier.afterNewYear' => 'lEntry',
        ];
    }

    public function logEntry($event, $current)
    {
         log::write('debug', 'It Worked!!!!');
    }
     public function lEntry($event, $data)
    {
         log::write('debug', 'It Worked 2!!!!');
    }


}

?>
