<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Βιβλία - Βιβλιόκοσμος</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 350px;
            object-fit: contain;
            padding: 10px;
            background-color: #fff;
        }
        .price { color: #d9534f; font-weight: bold; font-size: 1.3rem; }
        .category-title { border-bottom: 3px solid #0d6efd; padding-bottom: 10px; margin-top: 50px; }
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
        <li class="nav-item"><a class="nav-link active" href="books.php">Όλα τα Βιβλία</a></li>
        <li class="nav-item"><a class="nav-link" href="offers.php">Προσφορές</a></li>
        <li class="nav-item ms-2">
            <a class="btn btn-warning text-dark fw-bold px-3" href="form.php">Εγγραφή Μέλους</a>
        </li>
        <li class="nav-item ms-2"><a class="nav-link small" href="admin.php">(Admin)</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mb-5">
    <h1 class="text-center my-4">Κατάλογος Βιβλίων</h1>

    <!-- 1. ΛΟΓΟΤΕΧΝΙΑ -->
    <h3 id="logotexnia" class="category-title">📖 Λογοτεχνία</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/logotexnia1.jpg" class="card-img-top" alt="Μυστικό">
                <div class="card-body text-center">
                    <h5>ΤΟ ΜΥΣΤΙΚΟ ΤΩΝ ΜΥΣΤΙΚΩΝ</h5>
                    <p class="text-muted">DAN BROWN</p>
                    <p class="price">22,50 €</p>
                    <button class="btn btn-outline-primary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/logotexnia2.jpg" class="card-img-top" alt="Ο Γάτος">
                <div class="card-body text-center">
                    <h5>Ο ΓΑΤΟΣ ΠΟΥ ΕΣΩΣΕ ΤΗ ΒΙΒΛΙΟΘΗΚΗ</h5>
                    <p class="text-muted">SOSUKE NATSUKAWA</p>
                    <p class="price">14,94 €</p>
                    <button class="btn btn-outline-primary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/logotexnia3.jpg" class="card-img-top" alt="Κουνελάκι">
                <div class="card-body text-center">
                    <h5>ΚΟΥΝΕΛΑΚΙ</h5>
                    <p class="text-muted">MONA AWAD</p>
                    <p class="price">16,92 €</p>
                    <button class="btn btn-outline-primary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. ΕΚΠΑΙΔΕΥΤΙΚΑ -->
    <h3 id="ekpaideutika" class="category-title">🎓 Εκπαιδευτικά</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/ekpaideutika1.jpg" class="card-img-top" alt="Γραμματική">
                <div class="card-body text-center">
                    <h5>ΓΡΑΜΜΑΤΙΚΗ ΝΕΑΣ ΕΛΛΗΝΙΚΗΣ</h5>
                    <p class="text-muted">ΟΡΓΑΝΙΣΜΟΣ</p>
                    <p class="price">4,24 €</p>
                    <button class="btn btn-outline-secondary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/ekpaideutika2.jpg" class="card-img-top" alt="Μαθηματικά">
                <div class="card-body text-center">
                    <h5>ΜΑΘΗΜΑΤΙΚΑ Β' ΛΥΚΕΙΟΥ</h5>
                    <p class="text-muted">ΟΡΓΑΝΙΣΜΟΣ</p>
                    <p class="price">4,24 €</p>
                    <button class="btn btn-outline-secondary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/ekpaideutika3.jpg" class="card-img-top" alt="Άτλας">
                <div class="card-body text-center">
                    <h5>ΑΤΛΑΣ ΕΥΡΩΠΗΣ-ΗΠΕΙΡΩΝ</h5>
                    <p class="text-muted">Εκδ. ΣΤΕΡΕΩΜΑ</p>
                    <p class="price">12,00 €</p>
                    <button class="btn btn-outline-secondary w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. ΠΑΙΔΙΚΑ -->
    <h3 id="paidika" class="category-title">🧸 Παιδικά</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/paidika1.jpg" class="card-img-top" alt="Παραμύθια">
                <div class="card-body text-center">
                    <h5>Παραμύθια για παιδιά 1 έτους</h5>
                    <p class="text-muted">Εκδ. ΣΑΒΒΑΛΑΣ</p>
                    <p class="price">9,90 €</p>
                    <button class="btn btn-outline-success w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/paidika2.jpg" class="card-img-top" alt="Ρένος">
                <div class="card-body text-center">
                    <h5>Ο Ρένος αγαπά τη μουσική</h5>
                    <p class="text-muted">Εκδ. ΠΑΤΑΚΗΣ</p>
                    <p class="price">13,30 €</p>
                    <button class="btn btn-outline-success w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/paidika3.jpg" class="card-img-top" alt="Ζωάκια">
                <div class="card-body text-center">
                    <h5>ΜΑΘΑΙΝΩ ΠΑΡΕΑ ΜΕ ΤΑ ΖΩΑΚΙΑ</h5>
                    <p class="text-muted">Εκδ. ΔΕΣΥΛΛΑΣ</p>
                    <p class="price">7,20 €</p>
                    <button class="btn btn-outline-success w-100" onclick="alert('Προστέθηκε στο καλάθι!')">Προσθήκη στο Καλάθι</button>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p>&copy; Προγραμματισμός Διαδικτύου 2025-26 Νίντσιος Συμεών</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>