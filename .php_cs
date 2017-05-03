<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('var')
    ->exclude('vendor')
    ->exclude('tests')

    // ./vendor/movingimage/style-checker/../../../ should be the project dir
    ->in(__DIR__ . '/../../../')
;
return PhpCsFixer\Config::create()
    ->setRules(array(
        '@Symfony' => true,
    ))
    ->setFinder($finder)
    ;