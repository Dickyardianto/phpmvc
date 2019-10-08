<?php

class About extends Controllers {
    public function index($nama = 'Dicky', $pekerjaan = 'Mahasiswa' , $umur = 20) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index' , $data);
        $this->view('template/footer');
    }

    public function page() {
        $data['judul'] = 'Page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}