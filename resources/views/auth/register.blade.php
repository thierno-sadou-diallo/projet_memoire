<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f0f8ff;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 15px;
        }

        .register-container {
            max-width: 900px;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 25px rgba(0, 123, 255, 0.2);
            display: flex;
            background: white;
            height: 480px;
        }

        .register-image {
            width: 52%;
            object-fit: cover;
            height: 100%;
        }

        .register-form {
            width: 48%;
            padding: 20px 30px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .logo {
            width: 100px;
            margin: 0 auto 15px auto;
            display: block;
        }

        form {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .form-fields {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 8px;
        }

        .form-fields > div {
            margin-bottom: 12px;
        }

        .input-group-text {
            background-color: #fff;
        }

        .btn-submit {
            margin-top: 10px;
        }

        .login-link {
            text-align: center;
            margin-top: 8px;
            font-size: 0.9rem;
        }

        .form-fields::-webkit-scrollbar {
            width: 6px;
        }
        .form-fields::-webkit-scrollbar-thumb {
            background-color: rgba(0, 123, 255, 0.3);
            border-radius: 3px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px 10px;
            }
            .register-container {
                flex-direction: column;
                max-width: 400px;
                height: auto;
                box-shadow: none;
                border-radius: 0;
                background: transparent;
            }
            .register-image {
                display: none;
            }
            .register-form {
                padding: 20px 15px;
                box-shadow: 0 0 15px rgba(0,123,255,0.2);
                border-radius: 12px;
                width: 100%;
                height: auto;
            }
            .logo {
                margin-bottom: 20px;
            }
            form {
                flex: unset;
            }
            .form-fields {
                overflow-y: visible;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>

<div class="register-container">
    <!-- Image à gauche -->
    <img src="{{ asset('images/inscription.png') }}" alt="Image Inscription" class="register-image" />

    <!-- Formulaire -->
    <div class="register-form">
        <img src="{{ asset('images/logo_memoire.png') }}" alt="Logo Mémoire" class="logo" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-fields">
                <!-- Nom -->
                <div>
                    <label class="form-label">Nom complet</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user text-primary"></i></span>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="Nom complet" />
                    </div>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="form-label">Adresse email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope text-primary"></i></span>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="Email" />
                    </div>
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mot de passe -->
                <div>
                    <label class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock text-primary"></i></span>
                        <input type="password" name="password" class="form-control" required placeholder="Mot de passe" />
                    </div>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirmation mot de passe -->
                <div>
                    <label class="form-label">Confirmer le mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock text-primary"></i></span>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="Confirmation" />
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Bouton -->
            <div class="d-grid btn-submit">
                <button class="btn btn-primary">S'inscrire</button>
            </div>

            <!-- Lien vers login -->
            <div class="login-link">
                <small>Déjà inscrit ?</small><br />
                <a href="{{ route('login') }}" class="text-primary fw-bold">Se connecter</a>
            </div>
        </form>
    </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
