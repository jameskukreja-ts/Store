<?php
namespace App\Event;

use Cake\Event\EventListenerInterface;
use Cake\Log\Log;

class TranListener implements EventListenerInterface
{
	 public function implementedEvents()
    {
        return [
           'Controller.Transaction.afterAdd' => 'logEntry',
        ];
    }

    public function logEntry($event, $entity)
    {
         log::write('debug', 'New Transaction by Customer ID '.$entity->user_id);
    }

}

?>