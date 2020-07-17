<?php

namespace TMS\IDP;

class IDP
{
    public function __construct()
    {
    }

    // Build wonderful things
    public function example()
    {
        return 'example output and version is: '.config('idp.version');
    }

    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
