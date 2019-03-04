<?php

// exclude directories
$excludes = [
    'vendor',
    'node_modules',
];

// exclude files use this
// $finder->notPath('foo/bar')

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->notPath('vendor')
    ->exclude($excludes)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->name('*.php')
    ->notName('*.md')
    ->notName('*.xml')
    ->notName('*.yml');

$rules = [
    '@PSR2' => true,
    '@PhpCsFixer' => true,
    'array_syntax' => [
        'syntax' => 'short'
     ],
    'no_multiline_whitespace_before_semicolons' => true,
    'no_php4_constructor' => true,
    'ordered_imports' => [
        'sortAlgorithm' => 'alpha',
    ],
    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false
    ],
    'linebreak_after_opening_tag' => true,
];

return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRules($rules)
    ->setFinder($finder);