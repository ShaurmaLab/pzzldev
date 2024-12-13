<?php

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__ . '/../')
);

$app->register(Irazasyed\LaravelGAMP\LaravelGAMPServiceProvider::class);

return $app;
