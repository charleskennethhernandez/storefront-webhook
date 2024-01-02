<?php

namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class WebhookHandler extends SpatieProcessWebhookJob
{
    public function handle()
    {
        // $this->webhookCall // contains an instance of `WebhookCall`
		echo json_encode($this->webhookCall);


        WebhookCall::create()
           ->url('https://eohrz3md8ixhln0.m.pipedream.net')
           ->payload(['key' => 'value'])
           ->doNotSign()
           ->dispatch();

    }
}