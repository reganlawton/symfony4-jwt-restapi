<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Event;

class MeetingRegisteredListener {

    /**
     * @param MeetingRegisteredEvent|Event $event
     * @return void
     */
    public function onMeetingRegistered(Event $event): void
    {
        // Send notification to devices
    }
}
