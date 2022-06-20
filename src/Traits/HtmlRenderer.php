<?php

namespace MatheusBRDev\WordSearch\Traits;

trait HtmlRenderer
{
    private function render(string $path, array $data): string
    {
        extract($data);

        ob_start();
        require __DIR__ . '/../../views/' . $path;

        return ob_get_clean();
    }
}