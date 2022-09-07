<?php
//dengan menggunakan property pada class User_model nantinya, data yang dikirimkan tidak melalui link/url, melainkan melalui file pada User_model.php ini melalui variabel
class User_model {
    private $nama = 'Abdullah Ahmad Hafiz';

    public function getUser() {
        return $this->nama;
    }
}