<?php 
    // memuat class app
    class App {
        // membuat variable yang bertype protected
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        // function yang selalu dijalakan ketika classnya di panggil
        public function __construct() 
        {
            // membuat variable url yang berasal dari function tetangga
            $url = $this->parseURL();

            // jika url tidak kosong
            if( $url != NULL ) {
                // carilah file yang ada di .....
                if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
                    // timpakan variable controler tadi yang di atas menjadi url indeks array ke 0
                    $this->controller = $url[0];
                    // hanya digunakan untuk satu kali
                    unset($url[0]);
                }
            }

            // mengimport .....
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            
            // method
            // jika variable url indeks ke 1 tidak null, atau berarti ada isinya
            if( isset($url[1]) ) {
                // carilah method di variable controler, apakah sama dengan yang di url indeks ke 1?
                if( method_exists($this->controller, $url[1]) ) {
                    // ubah variable method di atas menjadi isi array url indeks ke 1
                    $this->method = $url[1];
                    // hanya digunakan untuk satu kali
                    unset($url[1]);
                }
            }

            // params
            // jika variable url tidak kosong
            if( !empty($url) ) {
                // timpa variable params di atas menjadi isi dari url,
                $this->params = array_values($url);
                // jika kita tidak menggunakan array_values() maka hanya akan tersambung dengan variable url, bukan membuat yang baru
            }

            // jalankan controller & menthod serta kirimkan params jika ada
            call_user_func_array( [$this->controller, $this->method], $this->params );
        }
        // membuat function baru
        public function parseURL() 
        {
            // jika variable get dengan nama objek url ada
            if( isset($_GET['url']) ) {
                // buat variable url baru dan ini dengan ....
                $url = $_GET['url'];
                // menghapus '/' hanya yang di sisi paling kanan
                $url = rtrim($_GET['url'], '/');
                // filter untuk meremove semua tanda ilegal pada url
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // pisahkan setiap kata dengan pemisah '/' dan yang terpisah akan menjadiobjk array baru
                $url = explode('/', $url);
                // kembalikan url
                return $url;
            }
        }
    }