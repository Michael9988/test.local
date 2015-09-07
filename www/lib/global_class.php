<?php

require_once "config_class.php";
require_once "checkvalid_class.php";
require_once "database_class.php";

abstract class GlobalClass {

    protected function __construct($table_name, $db) {
        $this->db = $db;
        $this->table_name = $table_name;
        $this->config = new Config();
        $this->valid = new CheckValid();
    }

    protected function add($new_values) {
        return $this->db->insert($this->table_name, $new_values);
    }

    protected function edit($id, $upd_fields) {
        return $this->db->updateOnId($this->table_name, $id, $upd_fields);
    }

    public function delete($id) {
        return $this->db->deleteOnId($this->table_name, $id);
    }

    public function deleteAll() {
        return $this->db->deleteAll($this->table_name);
    }

    protected function getField($field_out, $field_in, $value_in) {
        return $this->db->getField($this->table_name, $field_out, $field_in, $value_in);
    }

    protected function getFieldOnId($id, $field) {
        return $this->db->getFieldOnId($this->table_name, $id, $field);
    }

    protected function setFieldOnId($id, $field, $value) {
        return $this->db->setFieldOnId($this->table_name, $id, $field, $value);
    }

    public function get($id) {
        return $this->db->getElementOnId($this->table_name, $id);
    }

    public function getAll($order = "", $up = true) {
        return $this->db->getAll($this->table_name, $order, $up);
    }

    protected function getAllOnField($field, $value, $order = "", $up = true) {
        return $this->db->getAllOnField($this->table_name, $field, $value, $order, $up);
    }

    public function getRandomElements($count) {
        return $this->db->getRandomElements($this->table_name, $count);
    }

    public function getLastId() {
        return $this->db->getLastId($this->table_name);
    }

    public function getCount() {
        return $this->db->getCount($this->table_name);
    }

    protected function isExists($field, $value) {
        return $this->db->isExists($this->table_name, $field, $value);
    }

}
?>

