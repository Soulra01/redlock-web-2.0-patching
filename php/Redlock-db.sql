USE Redlock;

CREATE TABLE users (
    id INT PRIMARY KEY,
    nama VARCHAR(255),
    alamat VARCHAR(255),
    jabatan VARCHAR(255)
);

INSERT INTO users (id, nama, alamat, jabatan) VALUES
    (1, 'John Doe', 'Jl. Sudirman No. 123', 'Manager'),
    (2, 'Jane Doe', 'Jl. Gatot Subroto No. 456', 'Supervisor'),
    (3, 'James Smith', 'Jl. Thamrin No. 789', 'Staff');
