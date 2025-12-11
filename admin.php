<?php
// Σύνδεση με τη βάση
$conn = new mysqli("localhost", "root", "", "bibliokosmos_db");
$conn->set_charset("utf8");

// Λογική Διαγραφής
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM pelates WHERE id=$id");
    header("Location: admin.php"); 
}

// Λήψη όλων των πελατών
$result = $conn->query("SELECT * FROM pelates ORDER BY imerominia DESC");
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Διαχείριση - Βιβλιόκοσμος</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand { font-weight: bold; font-size: 1.5rem; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        footer { margin-top: auto; }
    </style>
</head>
<body class="bg-light">

<!-- Navbar (ίδιο με τα άλλα αρχεία) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">📚 Βιβλιόκοσμος</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Αρχική</a></li>
        <li class="nav-item"><a class="nav-link" href="books.php">Όλα τα Βιβλία</a></li>
        <li class="nav-item"><a class="nav-link" href="offers.php">Προσφορές</a></li>
        <li class="nav-item ms-2">
            <a class="btn btn-warning text-dark fw-bold px-3" href="form.php">Εγγραφή Μέλους</a>
        </li>
        <li class="nav-item ms-2"><a class="nav-link small active" href="admin.php">(Admin)</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Κυρίως Περιεχόμενο -->
<div class="container mt-5 mb-5">
    <h3 class="mb-4">Λίστα Εγγεγραμμένων Πελατών</h3>
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered bg-white shadow-sm align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Ονοματεπώνυμο</th>
                    <th>Email</th>
                    <th>Τηλέφωνο</th>
                    <th>Ηλικία</th>
                    <th>Πόντοι</th> <!-- ΝΕΑ ΣΤΗΛΗ -->
                    <th>Ενέργεια</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['onoma'] . " " . $row['epitheto']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tilefono']; ?></td>
                        <td><?php echo $row['ilikia']; ?></td>
                        
                        <!-- Υπολογισμός και εμφάνιση πόντων (Bold και πράσινο χρώμα) -->
                        <td class="fw-bold text-success">
                            <?php echo $row['ilikia'] * 10; ?>
                        </td>
                        
                        <td>
                            <a href="admin.php?delete_id=<?php echo $row['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Είστε σίγουροι για τη διαγραφή;')">Διαγραφή</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="7" class="text-center">Δεν υπάρχουν εγγραφές ακόμα.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p>&copy; Προγραμματισμός Διαδικτύου 2025-26 Νίντσιος Συμεών</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>