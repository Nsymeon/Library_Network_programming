<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Εγγραφή - Βιβλιόκοσμος</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-msg { color: #dc3545; font-size: 0.85rem; display: none; margin-top: 5px; }
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

<div class="container mt-5 mb-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Φόρμα Εγγραφής Μέλους</h4>
        </div>
        <div class="card-body">
            <form id="regForm" action="insert.php" method="POST" onsubmit="return validateForm()">
                
                <div class="mb-3">
                    <label class="form-label">Όνομα:</label>
                    <input type="text" class="form-control" name="onoma" onkeyup="checkInput(this)">
                    <span class="error-msg">Το όνομα είναι υποχρεωτικό.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Επίθετο:</label>
                    <input type="text" class="form-control" name="epitheto" onkeyup="checkInput(this)">
                    <span class="error-msg">Το επίθετο είναι υποχρεωτικό.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" onkeyup="checkEmail(this)">
                    <span class="error-msg">Παρακαλώ εισάγετε ένα έγκυρο email.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Τηλέφωνο:</label>
                    <input type="text" class="form-control" name="tilefono" onkeyup="checkInput(this)">
                    <span class="error-msg">Το τηλέφωνο είναι υποχρεωτικό.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ηλικία:</label>
                    <input type="number" class="form-control" name="ilikia" onkeyup="checkInput(this)">
                    <span class="error-msg">Η ηλικία είναι υποχρεωτική.</span>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="oroi" name="oroi" value="Ναι">
                    <label class="form-check-label" for="oroi">Αποδέχομαι τους όρους χρήσης</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg">Εγγραφή</button>
                    <a href="index.php" class="btn btn-secondary">Πίσω στην Αρχική</a>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p>&copy; Προγραμματισμός Διαδικτύου 2025-26 Νίντσιος Συμεών</p>
</footer>

<script>
    function checkInput(input) {
        if (input.value.trim() === "") { setError(input); } else { setSuccess(input); }
    }
    function checkEmail(input) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regex.test(input.value)) { setError(input); } else { setSuccess(input); }
    }
    function setError(element) {
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
        element.nextElementSibling.style.display = "block";
    }
    function setSuccess(element) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
        element.nextElementSibling.style.display = "none";
    }
    function validateForm() {
        const checkbox = document.getElementById("oroi");
        if (!checkbox.checked) {
            alert("Πρέπει να αποδεχτείτε τους όρους χρήσης για να συνεχίσετε!");
            return false;
        }
        return true;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>