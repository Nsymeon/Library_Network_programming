<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Προσφορές - Βιβλιόκοσμος</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand { font-weight: bold; font-size: 1.5rem; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        footer { margin-top: auto; }
        .xmas-box {
            background-color: #f8f9fa;
            border: 2px solid #dc3545;
            border-radius: 15px;
        }
    </style>
</head>
<body>

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
        <li class="nav-item"><a class="nav-link active" href="offers.php">Προσφορές</a></li>
        <li class="nav-item ms-2">
            <a class="btn btn-warning text-dark fw-bold px-3" href="form.php">Εγγραφή Μέλους</a>
        </li>
        <li class="nav-item ms-2"><a class="nav-link small" href="admin.php">(Admin)</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 mb-5 text-center">
    <div class="p-5 xmas-box shadow">
        <h1 class="display-4 text-danger fw-bold">🎄 Ho Ho Ho! 🎁</h1>
        <h2 class="mt-4">Μεγάλες Χριστουγεννιάτικες Προσφορές</h2>
        <p class="lead mt-3">
            Αναμένονται μοναδικές εκπτώσεις σε όλες τις κατηγορίες βιβλίων
        </p>
        <hr class="my-4">
        <p class="fs-5">
            Οι προσφορές θα ενεργοποιηθούν τις επόμενες ημέρες <br>
            Μείνετε συντονισμένοι για να προλάβετε τα καλύτερα δώρα των εορτών!
        </p>
        <div class="mt-4">
            <a class="btn btn-outline-danger btn-lg" href="books.php">Δείτε τον κατάλογο μέχρι τότε</a>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p>&copy; Προγραμματισμός Διαδικτύου 2025-26 Νίντσιος Συμεών</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>