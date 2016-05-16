<?php

abstract class AbstractModel
{
    protected static $table;
    private $data = array();

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $class = get_called_class();
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOne($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        $arr = $db->query($sql, array(':id' => $id));
        return $arr[0];
    }

    public function insert()
    {

        $cols = array_keys($this->data);
        $data = array();

        foreach ($cols as $col) {
            $data[":" . $col] = $this->data[$col];
        }
        $sql = 'INSERT INTO ' . static::$table . '
        (' . implode(" ,", $cols) . ') 
VALUES (' . implode(", ", array_keys($data)) . ')';
        $db = new DB();
        $db->execute($sql, $data);
    }
}