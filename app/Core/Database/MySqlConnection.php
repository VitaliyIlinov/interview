<?php

namespace app\Core\Database;

use app\Core\Database\Query\Grammar\MySqlGrammar;
use app\Core\Database\Scheme\Grammars\MySqlBuilder as SchemaBuilder;

class MySqlConnection extends Connection
{
    /**
     * Get the default query grammar instance.
     *
     * @return MySqlGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return new MySqlGrammar();
    }

    /**
     * Set the schema grammar to the default implementation.
     */
    public function getDefaultSchemaGrammar(): SchemaBuilder
    {
        return new SchemaBuilder($this);
    }
}
