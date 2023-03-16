<?php 
    // jika session ada
    if( !session_id() ) {
        // jalankan variabel session
        session_start();
    }

    // mengimport file dari init.php
    require_once '../app/init.php';
    
    // menjalankan class app yang ada pada file app, yang telah di require oleh init.php
    $app = new App();