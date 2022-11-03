<?php

namespace App\Actions\Interswitch;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InitiateCardPayment
{
    public function initiatePayment(string $accessToken, array $headers, array $body)
    {
        
        $baseUrl = config('services.interswitch.base_url');

        try {

            $url = "https://payment-service.k8.isw.la/api/v3/purchases";
            
            $response = Http::withToken($accessToken)->baseUrl($baseUrl)->withHeaders($headers)->post("api/v3/purchases", $body);

            Log::debug($response->json());

            return $response->ok();

        } catch (\Exception $exception) {

            Log::exception($exception->getMessage(), ['method' => __METHOD__]);

            return false;
            
        }
    }
}
