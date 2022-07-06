CREATE TABLE jabatan(
    id_jabatan INT AUTO_INCREMENT PRIMARY KEY,
    nama_jabatan VARCHAR(100),
    id_level INT
);
CREATE TABLE level(
    id_level INT AUTO_INCREMENT PRIMARY KEY,
    nama_level VARCHAR(100)
);
CREATE TABLE department(
    id_dept INT AUTO_INCREMENT PRIMARY KEY,
    nama_dept VARCHAR(100)
);
CREATE TABLE karyawan(
    id_karyawan INT AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(10) UNIQUE,
    nama VARCHAR(100),
    ttl DATE,
    alamat TEXT,
    id_jabatan INT
)
INSERT INTO department(nama_dept)
VALUES ('HR GA'),
    ('Information Technology'),
    ('Sales Marketing');
INSERT INTO jabatan(nama_jabatan, id_level)
VALUES ('Manajer HR', 2),
    ('System Administrator', 3),
    ('Web Developer', 1);
INSERT INTO level(nama_level)
VALUES ('Staff'),
    ('Manajer'),
    ('Supervisor');
INSERT INTO karyawan(nik, nama, ttl, alamat, id_jabatan)
VALUES ('2508059', 'Ahmad', '1990-03-04', 'Jakarta', 2),
    ('2110305', 'Fauzi', '1989-11-27', 'Surabaya', 1),
    ('2030442', 'Fajar', '1993-03-21', 'Medan', 3);
SELECT nama,
    nama_jabatan,
    nama_level
FROM karyawan
    left JOIN jabatan on jabatan.id_jabatan = karyawan.id_jabatan
    left JOIN level on level.id_level = jabatan.id_level
UPDATE karyawan
SET nik = '1122334',
    nama = 'Alwafi Rahman',
    ttl = '1993-01-03',
    alamat = 'Sukabumi',
    id_jabatan = 1
WHERE id_karyawan = 3;
DELETE FROM karyawan
WHERE id_karyawan = 3;