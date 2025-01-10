<?php

class Koneksi{
    protected $server;
    protected $username;
    protected $password;
    protected $databases;

    public function __construct($server,$username,$password,$databases)
    {
        $this->server=$server;
        $this->username=$username;
        $this->password=$password;
        $this->databases=$databases;
    }

    public function cekKoneksi(){
        echo "koneksi berhasil<br>";
    }
}

class Buku extends Koneksi{

    public function tambahBuku(){
        echo "data buku berhasil ditambahkan";
    }
}