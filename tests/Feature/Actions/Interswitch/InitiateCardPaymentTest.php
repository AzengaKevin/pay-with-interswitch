<?php

namespace Tests\Feature\Actions\Interswitch;

use App\Actions\Interswitch\InitiateCardPayment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InitiateCardPaymentTest extends TestCase
{
    use RefreshDatabase;

    /** @group interswitch */
    public function testInitiateCardPaymentMethod()
    {
        $headers = [
            "Content-Type" => "application/json"
        ];

        $body = [
            "customerId" => str()->uuid(),
            "amount" => "20000",
            "transactionRef" => str()->uuid(),
            "currency" => "NGN",
            "authData" => "G3cf/VTtAHCdHZNxc5GXWRI8z5P0goL2amXWDVFgb6D3XK/QMtZW90TYdl5zffDCNpiZThJzk0+eEU/Y/aYS6fyIOpQZGFrOr8hmvx5869sl2kr5u8qjnM7q5b4ZnTqdKDLtNxr3Qr7anj6YLpox1FOsiyT26mktXL+7SFOaZ15NMtne1z4xrj4R2SndowI/Znsapo7Gfzvp+L7XJyQ8kLYYRk3INjvmRPPQoJg1R0Nnh6EQE3ldIdwylB7GKtr6a71N/yCd4ZtyIcqq1ZNzdWcZyy5eEBAlDIxuECdBqH6hRq2/RbkfARqidNN4Kq0WviSRaRYGbiNjl2W9pNcM8g=="
        ];

        $cardPayment = new InitiateCardPayment();

        $accessToken = "eyJhbGciOiJSUzI1NiJ9.eyJhdWQiOlsiYXBpLWdhdGV3YXkiLCJhcHBsaWNhdGlvbiIsImdlbmVyaWMtd2FsbGV0IiwicGFzc3BvcnQiLCJ3YWxsZXQtc2VydmljZSIsIndhbGxldC10cmFuc2Zlci1zZXJ2aWNlIiwid2FsbGV0LXZhcy1zZXJ2aWNlIl0sInNjb3BlIjpbInByb2ZpbGUiXSwiZXhwIjoxNjY3NDUxMDAwLCJlbnYiOiJURVNUIiwiY2xpZW50X2xvZ28iOiJodHRwczovL21hbmFnZS5pc3ViaXJhLmNvbS9pbWFnZXMvbG9nby5wbmciLCJqdGkiOiIyZThlMDk4OC0zNTExLTQ5MWYtYWVhMC01ODVlMTNkNjJhYzkiLCJjbGllbnRfZGVzY3JpcHRpb24iOiJTb21lIGRlc2NyaXB0aW9uIiwiY2xpZW50X2lkIjoiSUtJQTRGNUIwM0E0MzcyRUY2QjBCQTdGRjU2NERENzRCNTMzRTFFNTVBRUIifQ.U6llrkyQ9HJkuPdw95EMEe-PE7wDojxtnihh7DKyZc6F6MDm70OXmmd6U2M05R-39rAM-wjUYKd2Wu9EHPJJ15Ve5UCe2AsN8Mo00C43rNz-CSJxaEeL83dZELvGCq4wOMJb9TjQKI6-hqaK08Kx27JIfNtnexc4GlzKoZdWlDLMknHznmoA043P_ci6ZG9Ts2h2ET2zKQx4Rs835pRBQ_5bx4jSwDa0g4fIHuRz_uUO6x16omEuK-dTRNkZklHx496A3New3xYflGJby8hZbt-RT_rKvKH8TOYu8PWi3NJeeVT2xgybUWWAo1sGJ4hQCVYBwSHio_gkO6qC7RHS7Q";

        $response = $cardPayment->initiatePayment($accessToken, $headers, $body);

        $this->assertTrue($response);
        
    }
}
