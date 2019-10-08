<?php

class Home extends Controllers {
    public function index() {
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }
}