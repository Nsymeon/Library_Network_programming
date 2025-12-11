<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Βιβλιόκοσμος - Αρχική</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item { height: 500px; background-color: #000; }
        .carousel-item img { height: 100%; width: 100%; object-fit: cover; opacity: 0.7; }
        .category-card { transition: transform 0.3s; }
        .category-card:hover { transform: translateY(-5px); }
        .navbar-brand { font-weight: bold; font-size: 1.5rem; }
        /* Footer sticky στο κάτω μέρος */
        body { display: flex; flex-direction: column; min-height: 100vh; }
        footer { margin-top: auto; }
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
        <li class="nav-item"><a class="nav-link active" href="index.php">Αρχική</a></li>
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

<!-- Slider -->
<div id="slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider1.jpg" alt="Library">
      <div class="carousel-caption d-block">
        <h1 class="display-4 fw-bold">Καλώς ήρθατε στον Βιβλιόκοσμο</h1>
        <p class="fs-4">Το μεγαλύτερο διαδικτυακό βιβλιοπωλείο</p>
        <a href="form.php" class="btn btn-warning btn-lg mt-3">Γίνετε Μέλος Τώρα</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider2.jpg" alt="Books">
      <div class="carousel-caption d-block">
        <h1 class="display-4 fw-bold">Ανακαλύψτε νέους κόσμους</h1>
        <p class="fs-4">Χιλιάδες τίτλοι βιβλίων σε περιμένουν</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider3.jpg" alt="Education">
      <div class="carousel-caption d-block">
        <h1 class="display-4 fw-bold">Εκπαίδευση & Γνώση</h1>
        <p class="fs-4">Όλα τα σχολικά βοηθήματα</p>
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Κατηγορίες -->
<div class="container mt-5 mb-5 text-center">
    <h2 class="mb-4">Οι Κατηγορίες Μας</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm category-card border-primary">
                <div class="card-header bg-primary text-white"><h4>📖 Λογοτεχνία</h4></div>
                <div class="card-body">
                    <p>Best sellers και κλασικά μυθιστορήματα.</p>
                    <a href="books.php#logotexnia" class="btn btn-outline-primary w-100 mt-auto">Δείτε τα βιβλία</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm category-card border-success">
                <div class="card-header bg-success text-white"><h4>🧸 Παιδικά</h4></div>
                <div class="card-body">
                    <p>Παραμύθια και ιστορίες για παιδιά.</p>
                    <a href="books.php#paidika" class="btn btn-outline-success w-100 mt-auto">Δείτε τα βιβλία</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm category-card border-secondary">
                <div class="card-header bg-secondary text-white"><h4>🎓 Εκπαιδευτικά</h4></div>
                <div class="card-body">
                    <p>Σχολικά βοηθήματα και γραμματικές</p>
                    <a href="books.php#ekpaideutika" class="btn btn-outline-secondary w-100 mt-auto">Δείτε τα βιβλία</a>
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