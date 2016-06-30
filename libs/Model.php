<?php
class Model
{
    public function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $this ->db->query ('SET NAMES utf8');
$this ->db-> query ('SET CHARACTER_SET utf8_unicode_ci');
    }
}