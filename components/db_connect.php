<?php 
    if(file_exists('library/rb.php')){
        require 'library/rb.php';
    }
    else{
        require '../library/rb.php';
    }
    
R::setup( 'mysql:host=den228.beget.tech;dbname=den228_reg','den228_reg', 'Q1w2e3r4' );
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}
session_start();