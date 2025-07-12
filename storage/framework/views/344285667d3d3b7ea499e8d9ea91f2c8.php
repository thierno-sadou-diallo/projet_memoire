<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f0f8ff;
        }

        .login-wrapper {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-card {
            max-height: 80vh;
            max-width: 1100px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 0 40px rgba(0, 123, 255, 0.2);
            background-color: #fff;
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .login-image {
            width: 50%;
            height: auto;
            object-fit: cover;
        }

        .login-form {
            padding: 40px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .toggle-password {
            cursor: pointer;
        }

        .logo {
            width: 90px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                max-height: none;
            }

            .login-image {
                display: none;
            }

            .login-form {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid login-wrapper">
    <div class="login-card">
        <!-- Image à gauche -->
        <img src="<?php echo e(asset('images/photo_connect.png')); ?>" alt="Image connexion" class="login-image">

        <!-- Formulaire -->
        <div class="login-form">
            <!-- Logo -->
            <div class="text-center">
                <img src="<?php echo e(asset('images/logo_memoire.png')); ?>" alt="Logo Mémoire" class="logo">
            </div>

            <h4 class="text-center text-primary mb-4">Se connecter à votre compte</h4>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Adresse email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope text-primary"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse email" required>
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Mot de passe -->
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock text-primary"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                        <span class="input-group-text toggle-password" onclick="togglePassword()">
                            <i class="fa fa-eye text-secondary" id="toggle-icon"></i>
                        </span>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Bouton de connexion -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>

                <!-- Lien vers inscription -->
                <div class="text-center">
                    <small>Vous n'avez pas encore de compte ?</small><br>
                    <a href="<?php echo e(route('register')); ?>" class="text-decoration-none text-primary fw-bold">Créer un compte</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS + Script pour afficher/masquer le mot de passe -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('toggle-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

</body>
</html>
<?php /**PATH C:\Users\user\projet_memoire\resources\views/auth/login.blade.php ENDPATH**/ ?>