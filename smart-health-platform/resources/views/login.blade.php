<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Recommandations Médicales</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
        }
        
        /* Auth Container */
        .auth-container {
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 600px;
        }
        
        /* Auth Illustration */
        .auth-illustration {
            flex: 1;
            background: linear-gradient(135deg, #3498db, #2c3e50);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            color: white;
            text-align: center;
        }
        
        .auth-illustration img {
            max-width: 80%;
            margin-bottom: 30px;
        }
        
        .auth-illustration h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        .auth-illustration p {
            opacity: 0.9;
        }
        
        /* Auth Form */
        .auth-form {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .auth-form h1 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .auth-form p {
            color: #7f8c8d;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border 0.3s;
        }
        
        .form-group input:focus {
            border-color: #3498db;
            outline: none;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 8px;
        }
        
        .forgot-password {
            color: #3498db;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .auth-button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }
        
        .auth-button:hover {
            background-color: #2980b9;
        }
        
        .auth-switch {
            text-align: center;
            color: #7f8c8d;
        }
        
        .auth-switch a {
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
        }
        
        .auth-switch a:hover {
            text-decoration: underline;
        }
        
        /* Social Login */
        .social-login {
            margin-top: 30px;
        }
        
        .social-login p {
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }
        
        .social-login p::before,
        .social-login p::after {
            content: "";
            position: absolute;
            height: 1px;
            width: 30%;
            background-color: #ddd;
            top: 50%;
        }
        
        .social-login p::before {
            left: 0;
        }
        
        .social-login p::after {
            right: 0;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f7fa;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .social-icon:hover {
            background-color: #e0e0e0;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-container {
                flex-direction: column;
            }
            
            .auth-illustration {
                padding: 30px 20px;
            }
            
            .auth-form {
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .auth-form {
                padding: 20px;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
        
        /* Hidden class for JS toggling */
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-container">
            <!-- Illustration Section -->
            <div class="auth-illustration">
                <img src="https://via.placeholder.com/400x300?text=Medical+Illustration" alt="Medical Illustration">
                <h2>Votre santé, notre priorité</h2>
                <p>Accédez à des recommandations médicales personnalisées et à un suivi de santé complet.</p>
            </div>
            
            <!-- Forms Section -->
            <div class="auth-forms">
                <!-- Login Form -->
                <div class="auth-form" id="login-form">
                    <h1>Connexion</h1>
                    <p>Connectez-vous pour accéder à votre espace personnel.</p>
                    
                    <form id="login">
                        <div class="form-group">
                            <label for="login-email">Email</label>
                            <input type="email" id="login-email" required placeholder="votre@email.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="login-password">Mot de passe</label>
                            <input type="password" id="login-password" required placeholder="••••••••">
                        </div>
                        
                        <div class="remember-forgot">
                            <div class="remember-me">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                        </div>
                        
                        <button type="submit" class="auth-button">Se connecter</button>
                    </form>
                    
                    <div class="auth-switch">
                        Vous n'avez pas de compte ? <a href="#" id="show-register">S'inscrire</a>
                    </div>
                    
                    <div class="social-login">
                        <p>Ou connectez-vous avec</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">G</a>
                            <a href="#" class="social-icon">f</a>
                            <a href="#" class="social-icon">in</a>
                        </div>
                    </div>
                </div>
                
                <!-- Register Form -->
                <div class="auth-form hidden" id="register-form">
                    <h1>Créer un compte</h1>
                    <p>Rejoignez notre plateforme pour des recommandations personnalisées.</p>
                    
                    <form id="register">
                        <div class="form-group">
                            <label for="register-name">Nom complet</label>
                            <input type="text" id="register-name" required placeholder="Jean Dupont">
                        </div>
                        
                        <div class="form-group">
                            <label for="register-email">Email</label>
                            <input type="email" id="register-email" required placeholder="votre@email.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="register-password">Mot de passe</label>
                            <input type="password" id="register-password" required placeholder="••••••••">
                        </div>
                        
                        <div class="form-group">
                            <label for="register-confirm">Confirmer le mot de passe</label>
                            <input type="password" id="register-confirm" required placeholder="••••••••">
                        </div>
                        
                        <button type="submit" class="auth-button">S'inscrire</button>
                    </form>
                    
                    <div class="auth-switch">
                        Vous avez déjà un compte ? <a href="#" id="show-login">Se connecter</a>
                    </div>
                    
                    <div class="social-login">
                        <p>Ou inscrivez-vous avec</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">G</a>
                            <a href="#" class="social-icon">f</a>
                            <a href="#" class="social-icon">in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get form elements
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const showRegister = document.getElementById('show-register');
            const showLogin = document.getElementById('show-login');
            
            // Form submission handlers
            const loginFormElement = document.getElementById('login');
            const registerFormElement = document.getElementById('register');
            
            // Switch between login and register forms
            showRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
            });
            
            showLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerForm.classList.add('hidden');
                loginForm.classList.remove('hidden');
            });
            
            // Login form submission
            loginFormElement.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('login-email').value;
                const password = document.getElementById('login-password').value;
                const rememberMe = document.getElementById('remember-me').checked;
                
                // Here you would typically send this data to your backend
                console.log('Login attempt:', { email, password, rememberMe });
                
                // Simulate successful login
                setTimeout(() => {
                    alert('Connexion réussie! Redirection...');
                    // In a real app, you would redirect to the dashboard
                    // window.location.href = 'dashboard.html';
                }, 1000);
            });
            
            // Register form submission
            registerFormElement.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const name = document.getElementById('register-name').value;
                const email = document.getElementById('register-email').value;
                const password = document.getElementById('register-password').value;
                const confirmPassword = document.getElementById('register-confirm').value;
                
                // Simple validation
                if (password !== confirmPassword) {
                    alert('Les mots de passe ne correspondent pas!');
                    return;
                }
                
                // Here you would typically send this data to your backend
                console.log('Registration attempt:', { name, email, password });
                
                // Simulate successful registration
                setTimeout(() => {
                    alert('Inscription réussie! Vous pouvez maintenant vous connecter.');
                    // Switch back to login form
                    registerForm.classList.add('hidden');
                    loginForm.classList.remove('hidden');
                    
                    // Pre-fill the login form
                    document.getElementById('login-email').value = email;
                    document.getElementById('login-password').value = password;
                }, 1000);
            });
        });
    </script>
</body>
</html>