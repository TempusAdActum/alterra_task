<?php

class Model
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get_contacts()
    {
        return $this->db::getRows("SELECT * FROM `contacts`");
    }

    public function add()
    {
        $query = "INSERT INTO `contacts` ( `name`, `phone` ) VALUES ( :name, :phone )";
        $args = ['name' => $_POST['name'], 'phone' => $_POST['phone'],];
        $this->db::sql($query, $args);
        $id = $this->db::lastInsertId();
        $data = '<div class="contact__block padding border-bottom">';
        $data .= '<p class="contact__name">' . $_POST['name'] . ' <a class="contact__actionDelete js_actionDelete">×</a></p>';
        $data .= '<p class="contact__phone">' . $_POST['phone'] . '</p>';
        $data .= '<input type="hidden" name="id" value="' . $id . '"/>';
        $data .= '</div>';
        echo json_encode($data);
    }

    public function delete()
    {
        $this->db::sql("DELETE FROM `contacts` WHERE `id` = ?", [$_POST['id']]);
    }

}