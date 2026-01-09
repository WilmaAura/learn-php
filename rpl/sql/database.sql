-- Active: 1765006836152@@localhost@3306@krs

CREATE TABLE mhs (
    nim VARCHAR(15) PRIMARY KEY,
    nama_mhs VARCHAR(100),
    alamat TEXT,
    prodi VARCHAR(50),
    ipk DECIMAL(3,2),
    status_mhs ENUM('aktif','cuti','lulus')
);

CREATE TABLE semester (
    sem_id INT AUTO_INCREMENT PRIMARY KEY,
    semester VARCHAR(10),
    thn_ajar VARCHAR(9)
);

CREATE TABLE matkul (
    matkul_id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(10),
    nama_mk VARCHAR(100),
    sks INT,
    semester INT,
    status ENUM('aktif','nonaktif')
);

CREATE TABLE dosen (
    dos_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_dos VARCHAR(100),
    status_dos ENUM('aktif','nonaktif')
);

CREATE TABLE ruang (
    ruang_id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_waktu ENUM('pagi','siang','sore'),
    kuota INT
);

CREATE TABLE input_krs (
    input_id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(15),
    matkul_id INT,
    dos_id INT,
    ruang_id INT,
    sem_id INT,
    tgl_pengajuan DATE,
    status_verifikasi ENUM('pending','disetujui','ditolak'),

    FOREIGN KEY (nim) REFERENCES mhs(nim),
    FOREIGN KEY (matkul_id) REFERENCES matkul(matkul_id),
    FOREIGN KEY (dos_id) REFERENCES dosen(dos_id),
    FOREIGN KEY (ruang_id) REFERENCES ruang(ruang_id),
    FOREIGN KEY (sem_id) REFERENCES semester(sem_id)
);

INSERT INTO mhs VALUES
('2212345','Budi Santoso','Semarang','Informatika',3.45,'aktif');

INSERT INTO mhs VALUES
('A11.2024.15841', 'Wilma Auraruna Khalif', 'Semarang', 'Informatika', 4.00, 'aktif');

INSERT INTO semester (semester, thn_ajar)
VALUES ('Genap','2024/2025');

INSERT INTO matkul (kode_mk,nama_mk,sks,semester,status)
VALUES ('IF101','Basis Data',3,2,'aktif');

INSERT INTO dosen (nama_dos, status_dos)
VALUES ('Pak Andi', 'aktif');

INSERT INTO ruang (jenis_waktu, kuota)
VALUES ('pagi', 40);



INSERT INTO input_krs
(nim, matkul_id, dos_id, ruang_id, sem_id, tgl_pengajuan, status_verifikasi)
VALUES
('2212345',1,1,1,1,CURDATE(),'pending');

INSERT INTO input_krs
(nim, matkul_id, dos_id, ruang_id, sem_id, tgl_pengajuan, status_verifikasi)
VALUES
('A11.2024.15841',2,2,2,2,CURDATE(),'pending');

select * from input_krs;