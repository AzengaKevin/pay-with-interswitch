<?php

namespace Tests\Feature\Actions\Interswitch;

use Tests\TestCase;
use App\Actions\Interswitch\GetAuthorizationCode;

class GetAuthorizationCodeTest extends TestCase
{
    /** @group base64 */
    public function testGetCodeMethod()
    {
        $getAuthorizationCode = new GetAuthorizationCode;

        $code = $getAuthorizationCode->getCode();

        $this->assertNotNull($code);

        $this->assertTrue(is_string($code));
    }
}
