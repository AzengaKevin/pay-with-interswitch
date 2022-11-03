<?php

namespace Tests\Feature\Actions\Interswitch;

use App\Actions\Interswitch\GetAccessToken;
use App\Actions\Interswitch\GetAuthorizationCode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetAccessTokenTest extends TestCase
{
    use RefreshDatabase;

    /** @group interswitch */
    public function testGetToken()
    {
        $authorizationCode = (new GetAuthorizationCode)->getCode();

        $result = (new GetAccessToken)->getToken($authorizationCode);

        $this->assertTrue($result);
        
    }


}
