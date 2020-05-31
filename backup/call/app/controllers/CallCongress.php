<?php

namespace App\Controllers;

use App\QueryBuilder as DB;
use Twilio\Rest\Client;
use Twilio\Twiml;

class CallCongress
{
    /**
     * Verify or collect State information.
     *
     * @param  string  $fromState The state abbreviature.
     * @param  string  $baseUrl The base url path e.g.: http://localhost/callcongress/.
     * @return \Twilio\Twiml
     */
    public static function welcome($fromState, $baseUrl)
    {
        $twiml = new Twiml();


        $twiml->say(
            'おまちください',['voice'=>'alice','language'=> 'ja-JP']
        )->dial('+819060108898', [
                       'action' => "{$baseUrl}end-call?"
                      
        ]);
        return $twiml;
    }
}
