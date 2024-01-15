<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FilmController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FilmModel');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function simpanAkun()
    {
        parse_str(file_get_contents('php://input'), $data);

        $this->FilmModel->simpanAkun($data);
        redirect(base_url('dasbord'));
    }
    public function proccesLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pengguna = $this->FilmModel->getAkun($email, $password)->row_array();

        if ($pengguna) {
            if ($pengguna['tipe'] == 1) {
                redirect(base_url('pengaturan'));
            } else {
                $data = [
                    'id_pengguna' => $pengguna['id_pengguna']
                ];
                $this->session->set_userdata($data);
                redirect(base_url('dasbord'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Data pengguna tidak ada!</div>');
            redirect(base_url());
        }
    }
    public function dasbord()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }
        $data['film'] = $this->FilmModel->getFilm($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function detail($id_film)
    {
        $data['film'] = $this->FilmModel->getFilmById($id_film)->row_array();
        $data['komentar'] = $this->FilmModel->komentar($id_film)->result();
        $data['halaman'] = 'detail.php';

        $this->load->view('template', $data);
    }
    public function pengaturan()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }
        $data['film'] = $this->FilmModel->getFilm($data['keyword'])->result();
        $data['halaman'] = 'pengaturan.php';

        $this->load->view('layout', $data);
    }
    public function drama()
    {
        $data['keyword'] = "drama";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function fantasi()
    {
        $data['keyword'] = "fantasi";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function roman()
    {
        $data['keyword'] = "roman";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function misteri()
    {
        $data['keyword'] = "misteri";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function animasi()
    {
        $data['keyword'] = "animasi";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function komedi()
    {
        $data['keyword'] = "komedi";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function fiksi_ilmiah()
    {
        $data['keyword'] = "fiksi ilmiah";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function action()
    {
        $data['keyword'] = "action";
        $data['film'] = $this->FilmModel->getGenre($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function pertama()
    {
        $data['keyword'] = "200";
        $data['film'] = $this->FilmModel->getTahun($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function kedua()
    {
        $data['keyword'] = "201";
        $data['film'] = $this->FilmModel->getTahun($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function ketiga()
    {
        $data['keyword'] = "202";
        $data['film'] = $this->FilmModel->getTahun($data['keyword'])->result();
        $data['halaman'] = 'film.php';

        $this->load->view('template', $data);
    }
    public function favorite()
    {
        $id_pengguna = $this->session->userdata('id_pengguna');
        $data['film'] = $this->FilmModel->favorite($id_pengguna)->result();
        $data['halaman'] = 'favorite.php';

        $this->load->view('template', $data);
    }
    public function halaman_tambah()
    {
        $data['halaman'] = 'tambahFilm.php';

        $this->load->view('layout', $data);
    }
    public function simpanFavorite()
    {
        parse_str(file_get_contents('php://input'), $data);
        $this->FilmModel->simpanFavorite($data);

        $id_pengguna = $this->session->userdata('id_pengguna');
        $data['film'] = $this->FilmModel->favorite($id_pengguna)->result();
        $data['halaman'] = 'favorite.php';

        $this->load->view('template', $data);
    }
    public function simpanKomentar()
    {
        parse_str(file_get_contents('php://input'), $data);
        $this->FilmModel->simpanKomentar($data);

        redirect(base_url('detail/' . $data['id_film']));
    }
    public function simpanFilm()
    {
        $data_gambar['gambar'] = '';
        $gambar = $_FILES['gambar']['name'];


        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 1024;
        $config['overwrite'] = true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
            $data_gambar['gambar'] = $gambar;
        }
        unset($this->upload);


        $data_foto['foto'] = '';
        $foto = $_FILES['foto']['name'];

        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 1024;
        $config['overwrite'] = true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
            $data_foto['foto'] = $foto;

            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tahun_rilis' => $this->input->post('tahun_rilis'),
                'genre' => $this->input->post('genre'),
                'download' => $this->input->post('download'),
                'video' => $this->input->post('video'),
                'gambar' => $data_gambar['gambar'],
                'foto' => $data_foto['foto']
            );
        }

        $this->FilmModel->simpanFilm($data);

        $data['film'] = $this->FilmModel->getFilm()->result();
        $data['halaman'] = 'pengaturan.php';

        $this->load->view('layout', $data);
    }
    public function halaman_ubah($id_film)
    {
        $data['film'] = $this->FilmModel->getFilmById($id_film)->row_array();
        $data['halaman'] = 'ubahFilm.php';

        $this->load->view('layout', $data);
    }
    public function updateFilm()
    {
        parse_str(file_get_contents('php://input'), $data);
        $this->FilmModel->updateFilm($data);

        $data['film'] = $this->FilmModel->getFilm()->result();
        $data['halaman'] = 'pengaturan.php';

        $this->load->view('layout', $data);
    }
    public function hapusFilm($id_film)
    {
        $this->FilmModel->hapusFilm($id_film);


        $data['film'] = $this->FilmModel->getFilm()->result();
        $data['halaman'] = 'pengaturan.php';

        $this->load->view('layout', $data);
    }
    public function hapusFavorite($id_favorite)
    {
        $this->FilmModel->hapusFavorite($id_favorite);

        $id_pengguna = $this->session->userdata('id_pengguna');
        $data['film'] = $this->FilmModel->favorite($id_pengguna)->result();
        $data['halaman'] = 'favorite.php';

        $this->load->view('template', $data);
    }
}
