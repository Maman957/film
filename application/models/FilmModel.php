<?php

class FilmModel extends CI_Model
{
    public function getAkun($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        return $this->db->get('users');
    }
    public function getFilm($keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
        }
        return $this->db->get('table_film');
    }
    public function getGenre($keyword = null)
    {
        if ($keyword) {
            $this->db->like('genre', $keyword);
        }
        return $this->db->get('table_film');
    }
    public function getTahun($keyword = null)
    {
        if ($keyword) {
            $this->db->like('tahun_rilis', $keyword);
        }
        return $this->db->get('table_film');
    }
    public function simpanAkun($data)
    {
        $value = array(
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => $data['password'],
            'tipe' => $data['tipe']
        );

        $this->db->insert('users', $value);
    }
    public function getFilmById($id_film)
    {
        return $this->db->get_where('table_film', ['id_film' => $id_film]);
    }
    public function simpanFavorite($data)
    {
        $value = array(
            'id_film' => $data['id_film'],
            'id_pengguna' => $data['id_pengguna'],
        );

        $this->db->insert('favorite', $value);
    }
    public function simpanKomentar($data)
    {
        $value = array(
            'id_film' => $data['id_film'],
            'id_pengguna' => $data['id_pengguna'],
            'pesan' => $data['pesan'],
        );

        $this->db->insert('komentar', $value);
    }
    public function favorite($id_pengguna)
    {
        return $this->db->query('SELECT table_film.id_film,table_film.judul,table_film.deskripsi,table_film.tahun_rilis,table_film.genre,table_film.download,table_film.gambar,table_film.foto,favorite.id_favorite FROM table_film join favorite on table_film.id_film=favorite.id_film WHERE favorite.id_pengguna=' . $id_pengguna);
    }
    public function komentar($id_film)
    {
        return $this->db->query('SELECT komentar.pesan,users.nama FROM komentar join users on users.id_pengguna=komentar.id_pengguna WHERE komentar.id_film=' . $id_film);
    }
    public function simpanFilm($data)
    {
        $value = array(
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'tahun_rilis' => $data['tahun_rilis'],
            'genre' => $data['genre'],
            'download' => $data['download'],
            'gambar' => $data['gambar'],
            'foto' => $data['foto'],
            'video' => $data['video'],
        );

        $this->db->insert('table_film', $value);
    }
    public function updateFilm($data)
    {
        $value = array(
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'tahun_rilis' => $data['tahun_rilis'],
            'genre' => $data['genre'],
            'download' => $data['download'],
            'gambar' => $data['gambar'],
            'foto' => $data['foto'],
            'video' => $data['video'],
        );

        $this->db->where('id_film', $data['id_film'])->update('table_film', $value);
    }
    public function hapusFilm($id_film)
    {
        $this->db->where('id_film', $id_film)->delete('table_film');
    }
    public function hapusFavorite($id_favorite)
    {
        $this->db->where('id_favorite', $id_favorite)->delete('favorite');
    }
}
