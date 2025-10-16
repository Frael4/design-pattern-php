<?php

class QueryBuilder
{
    function select($table)
    {
        return "SELECT * FROM $table";
    }

    function where($query, $condition)
    {
        return "$query WHERE $condition";
    }

}