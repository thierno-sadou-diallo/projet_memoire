<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Dépôt de Mémoire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #0d6efd;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #0b5ed7;
        }

        .logo {
            font-size: 1.5rem;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .topbar {
            padding: 15px 30px;
            background-color: white;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-input {
            max-width: 300px;
        }

        .content-area {
            padding: 30px;
        }

        @media (max-width: 768px) {
            .sidebar {
                flex-direction: row;
                overflow-x: auto;
                min-height: auto;
            }

            .sidebar a {
                padding: 10px;
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0">
            <div>
                <div class="logo">
                    <i class="fa fa-graduation-cap me-2"></i> Dépôt Memoire
                </div>
                <a href="#" class="active"><i class="fa fa-dashboard me-2"></i> Tableau de bord</a>
                <a href="{{ route('memoires') }}" ><i class="fa fa-book me-2"></i> Mémoires</a>
                <a href="#"><i class="fa fa-users me-2"></i> Étudiants</a>
                <a href="#"><i class="fa fa-user-shield me-2"></i> Encadreurs</a>
                <a href="#"><i class="fa fa-cogs me-2"></i> Paramètres</a>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="m-3">
                @csrf
                <button type="submit" class="btn btn-outline-light w-100">
                    <i class="fa fa-sign-out-alt me-2"></i> Déconnexion
                </button>
            </form>
        </div>

        <!-- Main -->
        <div class="col-md-10 p-0">
            <!-- Topbar -->
            <div class="topbar">
                <div>
                    <h5 class="m-0">Tableau de bord</h5>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <input type="text" class="form-control search-input" placeholder="Rechercher...">
                    <span class="fw-bold text-primary">
                        {{ Auth::user()->name }}
                    </span>
                </div>
            </div>

            <!-- Content -->
            <div class="content-area">
                @yield('content')
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
