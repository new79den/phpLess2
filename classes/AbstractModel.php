<?php

abstract class AbstractModel
{
    protected static $table;

    public static function getAll()
    {
        $news = new DB();
        return $news->queryAll("SELECT * FROM " . static::$table, "News");
    }
}