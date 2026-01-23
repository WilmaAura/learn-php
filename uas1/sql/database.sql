-- Active: 1765006836152@@localhost@3306@gamestore_db
create database gamestore_db;

use gamestore_db;

create table berita(
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul varchar(255) not null,
    isi TEXT NOT NULL,
    penulis varchar(100) not null,
    tanggal_publish TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori varchar(100) not null
);

create table berita_kategori (
    berita_id INT,
    kategori_id INT,
    PRIMARY KEY (berita_id, kategori_id),
    FOREIGN KEY (berita_id) REFERENCES berita(id) ON DELETE CASCADE,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id) ON DELETE CASCADE
);

select judul, isi, penulis FROM berita;

INSERT INTO kategori (nama_kategori) VALUES ('Promo'), ('Event'), ('Hot News'), ('Tournament');