<?php
// setup_db.php
$servername = "localhost";
$username = "root";
$password = "";

// Σύνδεση με τον Server
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) { die("Αποτυχία σύνδεσης: " . $conn->connect_error); }

// 1. Δημιουργία Βάσης "bibliokosmos_db"
$sql = "CREATE DATABASE IF NOT EXISTS bibliokosmos_db CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === TRUE) {
    echo "Η Βάση 'bibliokosmos_db' δημιουργήθηκε.<br>";
} else {
    echo "Σφάλμα δημιουργίας βάσης: " . $conn->error;
}

// 2. Επιλογή της Βάσης
$conn->select_db("bibliokosmos_db");

// 3. Δημιουργία Πίνακα "pelates"
$sqlTable = "CREATE TABLE IF NOT EXISTS pelates (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    onoma VARCHAR(50) NOT NULL,
    epitheto VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tilefono VARCHAR(15),
    ilikia INT(3),
    oroi VARCHAR(10),
    imerominia TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sqlTable) === TRUE) {
    echo "Ο Πίνακας 'pelates' δημιουργήθηκε.<br>";
    echo "<a href='index.php'>Πάμε στην Αρχική Σελίδα</a>";
} else {
    echo "Σφάλμα πίνακα: " . $conn->error;
}

$conn->close();
?>