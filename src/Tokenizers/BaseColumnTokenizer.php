<?php

namespace LaravelMigrationGenerator\Tokenizers;

use Illuminate\Support\Str;
use LaravelMigrationGenerator\Definitions\ColumnDefinition;
use LaravelMigrationGenerator\Tokenizers\Interfaces\ColumnTokenizerInterface;

abstract class BaseColumnTokenizer extends BaseTokenizer implements ColumnTokenizerInterface
{
    protected ColumnDefinition $definition;

    public function __construct(string $value)
    {
        parent::__construct($value);

        $this->definition = new ColumnDefinition();
    }

    public function definition(): ColumnDefinition
    {
        return $this->definition;
    }
}
