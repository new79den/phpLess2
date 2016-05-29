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

    public function __isset($name)
    {
        return isset($this->data[$name]);
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

    public static function findOneByColumn($column, $value)
    {
        $db = new DB();
        $db->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';

        $arr = $db->query($sql, array(':value' => $value));
        if (!empty($arr)) {
            return $arr[0];
        }
    }

    protected function insert()
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
        $this->id = $db->lastInsertId();
    }

    protected function update()
    {
        $cols = array();
        $data = array();
        foreach ($this->data as $k => $v) {
            $data[':' . $k] = $v;
            if ('id' == $k) {
                continue;
            }
            $cols[] = $k . '=:' . $k;
        }
        $sql = '
            UPDATE ' . static::$table . '
            SET ' . implode(', ', $cols) . '
            WHERE id=:id
        ';
        $db = new DB();
        $db->execute($sql, $data);
    }

    public function save()
    {
        if(!isset($this->id)){
            $this->insert();
        }else{
            $this->update();
        }
    }


}