<?php

function asset(string $file): string
{
    return "http://{$_SERVER['HTTP_HOST']}/{$file}";
}
