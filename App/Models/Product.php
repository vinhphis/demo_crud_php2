<?php

namespace App\Models;

class Product extends BaseModel
{
    public $table_name = 'product';

    public function list($id = '')
    {
        $sql = "SELECT *,category.name as Cname,category.id as Cid,$this->table_name.name as Pname,$this->table_name.id as Pid FROM $this->table_name 
                INNER JOIN category ON $this->table_name.category_id = category.id";
        $id ? $sql .= " WHERE $this->table_name.id = ? " : $sql .= " ORDER BY $this->table_name.id DESC ";
        $this->setQuery($sql);
        return $id ? $this->loadRow([$id]) : $this->loadAllRows();
    }

    public function add($id, $name, $price, $category_id)
    {
        $sql = "INSERT INTO $this->table_name (`id`, `name`,`price`,`category_id`) VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $price, $category_id]);
    }

    public function update($category_id, $name,  $price, $id)
    {
        $sql = "UPDATE $this->table_name SET `category_id`=?,`name`=?,`price`=? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute([$category_id, $name, $price, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
