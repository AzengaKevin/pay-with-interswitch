<?php
namespace App\Actions\Interswitch;

class GetAuthorizationCode
{
    /**
     * Get the authorization code using the client_id and secret
     * 
     * @return string
     */
    public function getCode()
    {
        $clientId = config('services.interswitch.client_id');
        $clientSecret = config('services.interswitch.client_secret');

        $combination = "{$clientId}:{$clientSecret}";

        info($combination);
        
        return base64_encode($combination);
    }
}
