<?php

namespace Appwrite\Messaging;

abstract class Adapter
{
    abstract public function subscribe(string $projectId, string $projectInternalId, mixed $identifier, array $roles, array $channels): void;
    abstract public function unsubscribe(mixed $identifier): void;
    abstract public static function send(string $projectId, string $projectInternalId, array $payload, array $events, array $channels, array $roles, array $options): void;
}
