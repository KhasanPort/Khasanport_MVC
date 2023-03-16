<?php

    class Controller {
        // membuat function view dengan parameter 2, default isi datanya adalah array kosong
        public function view($view, $data = []) 
        {
            // mengimport ....
            require_once '../app/views/' . $view . '.php';
            // ini mulai rumit karena ini akan mengimport sesuai dengan url yang di berikan
        }
        // membuat function model dengan parameter satu
        public function model($model) 
        {
            // mengimport ....
            require_once '../app/models/' . $model . '.php';
            // kembalikan variable model yang baru (membuat variable model yang baru)
            return new $model;
        }
    }