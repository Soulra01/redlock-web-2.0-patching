USE Redlock;

CREATE TABLE users (
    id INT PRIMARY KEY,
    nama VARCHAR(255),
    alamat VARCHAR(255),
    jabatan VARCHAR(255)
);

INSERT INTO users (id, nama, alamat, jabatan) VALUES
    (1, 'John Kendi', 'Jl. Sudirman No. 123', 'Manager'),
    (2, 'Jane Kompos', 'Jl. Gatot Subroto No. 456', 'Supervisor'),
    (3, 'James Smith', 'Jl. Thamrin No. 789', 'Staff'),
    (4, 'Sarah Lee', 'Jl. Panglima Polim No. 234', 'Supervisor'),
    (5, 'David Chen', 'Jl. Kebon Sirih No. 567', 'Staff'),
    (6, 'Lisa Wong', 'Jl. MH Thamrin No. 890', 'Manager'),
    (7, 'Tommy Lee', 'Jl. Sudirman No. 901', 'Staff'),
    (8, 'Nancy Kim', 'Jl. Kuningan No. 234', 'Supervisor'),
    (9, 'Michael Brown', 'Jl. Kemang No. 567', 'Manager'),
    (10, 'Michelle Tan', 'Jl. Gatot Subroto No. 890', 'Staff'),
    (11, 'Chris Lee', 'Jl. Puri Indah No. 123', 'Supervisor'),
    (12, 'Stephanie Chen', 'Jl. TB Simatupang No. 456', 'Manager'),
    (13, 'Kevin Wong', 'Jl. Wahid Hasyim No. 789', 'Staff');