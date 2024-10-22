<?php

declare(strict_types=1);

namespace LaminasTest\OAuth\TestAsset;

use Laminas\OAuth\Consumer;

class Consumer34879 extends Consumer
{
    public function getUserAuthorizationUrl()
    {
        return 'http://www.example.com/authorize';
    }

    public function getCallbackUrl()
    {
        return 'http://www.example.com/local';
    }

    public function getLastRequestToken()
    {
        return new Token34879();
    }
}
