<?php

namespace App\Actions\Interswitch;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class GetAccessToken
{
    /**
     * Request for access token for authenticating requests to the API
     * 
     * @param string $authorizationCode
     * 
     * @return bool
     * 
     */
    public function getToken(string $authorizationCode)
    {

        
        $baseUrl = config('services.interswitch.base_url');
        
        try {
            
            // Request for the access token
    
            $response = Http::baseUrl($baseUrl)->withHeaders([
                "Authorization" => "Basic $authorizationCode",
                "Content-Type" => "application/json"
            ])->post("/passport/oauth/token", [
                "grant_type" => "client_credentials"
            ]);

            info($response->json());
    
            if($response->ok()){
    
                // Save the response to the database

                return true;
    
            }else{
                // Assess the error and through appropriate custome exception
                return false;
            }

        } catch (\Exception $exception) {

            Log::exception($exception->getMessage(), ['method' => __METHOD__]);
            
            return false;
        }
        
    }
}
