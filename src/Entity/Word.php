<?php

namespace MatheusBRDev\WordSearch\Entity;


class Word
{
    public readonly string $word;

    public function __construct(string $word)
    {
        $isValid = filter_var($word, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => "/[^A-Za-zÀ-ú-]/"
            ]
        ]);

        if ($isValid !== false) {
            throw new \InvalidArgumentException('Palavra inválida');
        }

        $this->word = $word;
    }
}