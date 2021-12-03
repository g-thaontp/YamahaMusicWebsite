<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class categories
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert($name)
    {
        $query = "INSERT INTO categories VALUES (NULL,'" . $name . "',1) ";
        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Thêm danh mục thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm danh mục thất bại</span>";
            return $alert;
        }
    }

    public function getAllAdmin()
    {
        $query = "SELECT * FROM categories";
        $result = $this->db->select($query);
        return $result;
    }

    public function getAll()
    {
        $query = "SELECT * FROM categories WHERE status = 1";
        $result_mysqli = $this->db->select($query);
        if ($result_mysqli) {
            $result = mysqli_fetch_all($result_mysqli, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function update($data)
    {
        $query = "UPDATE categories SET name = '".$data['name']."' WHERE id = '".$data['id']."'";
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật danh mục thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật danh mục thất bại</span>";
            return $alert;
        }
    }

    public function getByIdAdmin($id)
    {
        $query = "SELECT * FROM categories where id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM categories where id = '$id' AND status = 1";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }

    public function block($id)
    {
        $query = "UPDATE categories SET status = 0 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function active($id)
    {
        $query = "UPDATE categories SET status = 1 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>