<?php

use MatheusBRDev\WordSearch\Controllers\{
    ShowHome,
    SaveWordController
};

return [
    '/' => ShowHome::class,
    '/salvar-palavra' => SaveWordController::class
];