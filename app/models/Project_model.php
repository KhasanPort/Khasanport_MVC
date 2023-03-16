<?php

class Project_model{
    private $table = 'project';
    private $db;

    public function __construct() 
    {
        $this->db = new Database;
    }
    
    public function getAllProject() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProjectById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProject($data)
    {
        $query = "INSERT INTO project 
                    VALUES 
                    ('', :nama, :tanggal, :waktu)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProject($id)
    {
        $query = "DELETE FROM project WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataProject()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM project WHERE id LIKE :keyword || nama LIKE :keyword || tanggal LIKE :keyword || waktu LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function ubahDataProject($data)
    {
        $query = "UPDATE project SET
                         nama = :nama,
                         tanggal = :tanggal,
                         waktu = :waktu
                        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}