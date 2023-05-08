<?php

namespace CubeSystems\SoapClient\Client\Contracts;

interface Method
{
    public function call(Payload $payload): Response;

    public function getName(): string;

    public function getService(): Service;
}
