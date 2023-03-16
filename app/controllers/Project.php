<?php

    class Project extends Controller {
        public function index()
        {
            $data['judul'] = 'My Project';
            $data['project'] = $this->model('Project_model')->getAllProject();
            $this->view('templates/header', $data);
            $this->view('Project/index', $data);
            $this->view('templates/footer');
        }
        public function detail($id)
        {
            $data['judul'] = 'Detail Project';
            $data['project'] = $this->model('Project_model')->getProjectById($id);
            $this->view('templates/header', $data);
            $this->view('project/detail', $data);
            $this->view('templates/footer');
        }
        public function tambah()
        {
            if( $this->model('Project_model')->tambahDataProject($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . 'project');
                exit;
            } else {
                Flasher::setflash('gagal', 'ditambahkan', 'danger');
                header('Location: ' .BASEURL . 'project');
                exit;
            }
        }
        public function hapus($id)
        {
            if( $this->model('Project_model')->hapusDataProject($id) > 0 ) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASEURL . 'project');
                exit;
            } else {
                Flasher::setflash('gagal', 'dihapus', 'danger');
                header('Location: ' .BASEURL . 'project');
                exit;
            }
        }
        public function cari()
        {
            $data['judul'] = 'My Project';
            $data['project'] = $this->model('Project_model')->cariDataProject();
            $this->view('templates/header', $data);
            $this->view('Project/index', $data);
            $this->view('templates/footer');
        }
        public function getUbah()
        {
            echo json_encode($this->model('Project_model')->getProjectById($_POST['id']));
        }
        public function ubah() {
            if( $this->model('Project_model')->ubahDataProject($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . 'project');
                exit;
            } else {
                Flasher::setflash('gagal', 'diubah', 'danger');
                header('Location: ' .BASEURL . 'project');
                exit;
            }
        }
    }