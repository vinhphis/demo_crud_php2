<?php

namespace App\Models;

class Category extends BaseModel
{
    public $table_name = 'category';

    public function list($id = '')
    {
        $sql = "SELECT * FROM $this->table_name";
        $id ? $sql .= " WHERE id = ? " : $sql .= " ORDER BY $this->table_name.id DESC ";
        $this->setQuery($sql);
        return $id ? $this->loadRow([$id]) : $this->loadAllRows();
    }

    public function add($id, $name)
    {
        $sql = "INSERT INTO $this->table_name(`id`, `name`) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name]);
    }

    public function update($name, $id)
    {
        $sql = "UPDATE $this->table_name SET `name`= ? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
