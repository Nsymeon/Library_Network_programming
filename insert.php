<?php
$conn = new mysqli("localhost", "root", "", "bibliokosmos_db");
$conn->set_charset("utf8");
if ($conn->connect_error) { die("Σφάλμα: " . $conn->connect_error); }

$onoma    = $_POST['onoma'];
$epitheto = $_POST['epitheto'];
$email    = $_POST['email'];
$tilefono = $_POST['tilefono'];
$ilikia   = $_POST['ilikia'];
$oroi     = isset($_POST['oroi']) ? 'Ναι' : 'Όχι';

$pontoi = $ilikia * 10;
$plires_onoma = $onoma . " " . $epitheto;

$sql = "INSERT INTO pelates (onoma, epitheto, email, tilefono, ilikia, oroi)
        VALUES ('$onoma', '$epitheto', '$email', '$tilefono', '$ilikia', '$oroi')";
?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Επιτυχία</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand { font-weight: bold; font-size: 1.5rem; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        footer { margin-top: auto; }
    </style>
</head>
<body class="bg-light">

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
        <li class="nav-item ms-2"><a class="nav-link small" href="admin.php">(Admin)</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
    <div class="alert alert-success shadow-sm" role="alert">
        <h4 class="alert-heading display-6">Η εγγραφή ολοκληρώθηκε!</h4>
        <?php if ($conn->query($sql) === TRUE): ?>
            <hr>
            <p class="fs-5">Καλώς ήρθατε στον <b>Βιβλιόκοσμο</b>, κ. <?php echo $plires_onoma; ?>.</p>
            <p class="fs-5">Λόγω της ηλικίας σας (<?php echo $ilikia; ?>), κερδίσατε <strong><?php echo $pontoi; ?></strong> πόντους επιβράβευσης!</p>
            <br>
            <a href="index.php" class="btn btn-primary btn-lg">Επιστροφή στην Αρχική</a>
        <?php else: ?>
            <p class="text-danger">Υπήρξε πρόβλημα: <?php echo $conn->error; ?></p>
        <?php endif; ?>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p>&copy; Προγραμματισμός Διαδικτύου 2025-26 Νίντσιος Συμεών</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>