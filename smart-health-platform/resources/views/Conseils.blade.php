<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils de Santé | SantéPlus</title>
    <style>
        /* Base Styles */
        :root {
            --primary: #4a90e2;
            --primary-dark: #357abd;
            --secondary: #50c9ba;
            --dark: #2c3e50;
            --light: #f5f7fa;
            --danger: #e74c3c;
            --success: #2ecc71;
            --gray: #95a5a6;
            --light-gray: #ecf0f1;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Header */
        header {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 28px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            font-weight: 500;
            color: var(--dark);
            transition: color 0.3s ease;
            position: relative;
        }
        
        .nav-links a.active {
            color: var(--primary);
        }
        
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
        }
        
        .auth-buttons .btn {
            margin-left: 15px;
            padding: 10px 20px;
        }
        
        /* Hero Section */
        .health-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .health-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            opacity: 0.1;
        }
        
        .health-hero .container {
            position: relative;
            z-index: 1;
        }
        
        .health-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .health-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        /* Health Advice Section */
        .health-advice {
            padding: 80px 0;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary);
        }
        
        .filter-tabs {
            display: flex;
            gap: 10px;
        }
        
        .filter-tab {
            padding: 8px 20px;
            background: var(--light-gray);
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .filter-tab.active {
            background: var(--primary);
            color: white;
        }
        
        .advice-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .advice-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .advice-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        
        .advice-image {
            height: 200px;
            overflow: hidden;
        }
        
        .advice-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .advice-card:hover .advice-image img {
            transform: scale(1.05);
        }
        
        .advice-content {
            padding: 25px;
        }
        
        .advice-category {
            display: inline-block;
            background: var(--light-gray);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .advice-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .advice-excerpt {
            color: var(--gray);
            margin-bottom: 20px;
        }
        
        .advice-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .advice-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }
        
        /* Personalized Recommendations */
        .personalized-section {
            background: white;
            padding: 80px 0;
        }
        
        .personalized-container {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .personalized-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .personalized-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .personalized-content {
            flex: 1;
        }
        
        .personalized-content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .personalized-content p {
            margin-bottom: 30px;
            color: var(--gray);
        }
        
        .features-list {
            margin-bottom: 30px;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .feature-icon {
            color: var(--primary);
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        /* Chatbot */
        .chatbot-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .chatbot-toggle {
            width: 70px;
            height: 70px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 25px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            font-size: 1.5rem;
            position: relative;
        }
        
        .chatbot-toggle:hover {
            background: var(--primary-dark);
            transform: scale(1.1);
        }
        
        .chatbot-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .chatbot-window {
            width: 380px;
            height: 550px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            overflow: hidden;
            display: none;
            flex-direction: column;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .chatbot-window.active {
            display: flex;
            transform: translateY(0);
            opacity: 1;
        }
        
        .chatbot-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .chatbot-title {
            display: flex;
            align-items: center;
        }
        
        .chatbot-title i {
            font-size: 1.5rem;
            margin-right: 10px;
        }
        
        .chatbot-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
        }
        
        .chatbot-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f9f9f9;
        }
        
        .message {
            margin-bottom: 15px;
            max-width: 80%;
            padding: 12px 18px;
            border-radius: 18px;
            font-size: 0.95rem;
            line-height: 1.5;
            position: relative;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .bot-message {
            background: white;
            border-top-left-radius: 5px;
            align-self: flex-start;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .user-message {
            background: var(--primary);
            color: white;
            border-top-right-radius: 5px;
            align-self: flex-end;
        }
        
        .message-time {
            display: block;
            font-size: 0.7rem;
            opacity: 0.7;
            margin-top: 5px;
            text-align: right;
        }
        
        .chatbot-input-area {
            padding: 15px;
            border-top: 1px solid #eee;
            background: white;
            display: flex;
            align-items: center;
        }
        
        .chatbot-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            font-size: 0.95rem;
            transition: border 0.3s ease;
        }
        
        .chatbot-input:focus {
            border-color: var(--primary);
        }
        
        .chatbot-send {
            background: var(--primary);
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin-left: 10px;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .chatbot-send:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
        }
        
        .quick-replies {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 0 15px 15px;
            background: white;
        }
        
        .quick-reply {
            background: var(--light-gray);
            color: var(--dark);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .quick-reply:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #bbb;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-about p {
            color: #bbb;
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            color: white;
            background: rgba(255,255,255,0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .personalized-container {
                flex-direction: column;
            }
            
            .personalized-image, .personalized-content {
                flex: none;
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }
            
            .nav-links {
                margin-top: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 0 15px 10px;
            }
            
            .auth-buttons {
                margin-top: 20px;
            }
            
            .health-hero h1 {
                font-size: 2.2rem;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .filter-tabs {
                margin-top: 20px;
                flex-wrap: wrap;
            }
            
            .advice-grid {
                grid-template-columns: 1fr;
            }
            
            .chatbot-window {
                width: 320px;
                right: 10px;
                bottom: 80px;
            }
        }
        
        @media (max-width: 480px) {
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <i class="fas fa-heartbeat"></i>
                    Santé<span>Plus</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Symptômes</a></li>
                    <li><a href="#">Médicaments</a></li>
                    <li><a href="#" class="active">Conseils</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="#" class="btn btn-outline">Connexion</a>
                    <a href="#" class="btn">Inscription</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="health-hero">
        <div class="container">
            <h1>Conseils de Santé Personnalisés</h1>
            <p>Recevez des recommandations adaptées à votre profil santé et accédez à des conseils médicaux fiables.</p>
            <div class="hero-buttons">
                <a href="#" class="btn">Commencer l'évaluation</a>
                <a href="#" class="btn btn-outline">En savoir plus</a>
            </div>
        </div>
    </section>

    <!-- Health Advice Section -->
    <section class="health-advice">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nos Conseils Santé</h2>
                <div class="filter-tabs">
                    <div class="filter-tab active">Tous</div>
                    <div class="filter-tab">Prévention</div>
                    <div class="filter-tab">Nutrition</div>
                    <div class="filter-tab">Médicaments</div>
                    <div class="filter-tab">Fitness</div>
                </div>
            </div>
            
            <div class="advice-grid">
                <!-- Advice Card 1 -->
                <div class="advice-card">
                    <div class="advice-image">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Nutrition">
                    </div>
                    <div class="advice-content">
                        <span class="advice-category">Nutrition</span>
                        <h3 class="advice-title">10 superaliments pour booster votre immunité</h3>
                        <p class="advice-excerpt">Découvrez les aliments riches en nutriments essentiels pour renforcer votre système immunitaire naturellement.</p>
                        <div class="advice-meta">
                            <div class="advice-author">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Dr. Sophie Martin" class="author-avatar">
                                <span>Dr. Sophie Martin</span>
                            </div>
                            <span>15 juin 2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Advice Card 2 -->
                <div class="advice-card">
                    <div class="advice-image">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Exercice">
                    </div>
                    <div class="advice-content">
                        <span class="advice-category">Fitness</span>
                        <h3 class="advice-title">Exercices à domicile pour rester en forme</h3>
                        <p class="advice-excerpt">Une routine de 20 minutes sans équipement pour maintenir votre santé cardiovasculaire et musculaire.</p>
                        <div class="advice-meta">
                            <div class="advice-author">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Jean Dupont" class="author-avatar">
                                <span>Jean Dupont</span>
                            </div>
                            <span>10 juin 2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Advice Card 3 -->
                <div class="advice-card">
                    <div class="advice-image">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Prévention">
                    </div>
                    <div class="advice-content">
                        <span class="advice-category">Prévention</span>
                        <h3 class="advice-title">Signes avant-coureurs à ne pas ignorer</h3>
                        <p class="advice-excerpt">Les symptômes qui nécessitent une consultation médicale immédiate et ceux qui peuvent attendre.</p>
                        <div class="advice-meta">
                            <div class="advice-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dr. Claire Lefèvre" class="author-avatar">
                                <span>Dr. Claire Lefèvre</span>
                            </div>
                            <span>5 juin 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personalized Recommendations -->
    <section class="personalized-section">
        <div class="container">
            <div class="personalized-container">
                <div class="personalized-image">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Recommandations personnalisées">
                </div>
                <div class="personalized-content">
                    <h2>Recommandations Personnalisées</h2>
                    <p>Connectez-vous pour recevoir des conseils de santé adaptés à votre profil médical, vos antécédents et vos objectifs de bien-être.</p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-user-shield"></i></div>
                            <div>
                                <h4>Profil sécurisé</h4>
                                <p>Vos données médicales sont cryptées et protégées</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-pills"></i></div>
                            <div>
                                <h4>Suivi des médicaments</h4>
                                <p>Alertes et interactions médicamenteuses</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-heartbeat"></i></div>
                            <div>
                                <h4>Intégration d'appareils</h4>
                                <p>Connectez votre montre intelligente ou tracker d'activité</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="btn">Créer un compte gratuit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Chatbot Interface -->
    <div class="chatbot-container">
        <div class="chatbot-toggle" id="chatbotToggle">
            <i class="fas fa-comment-medical"></i>
            <div class="chatbot-badge">1</div>
        </div>
        <div class="chatbot-window" id="chatbotWindow">
            <!-- ... existing chat content ... -->
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column footer-about">
                    <h3>SantéPlus</h3>
                    <p>Votre compagnon santé intelligent pour des conseils médicaux personnalisés et un suivi de votre bien-être.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Recommandation de médicaments</a></li>
                        <li><a href="#">Conseils personnalisés</a></li>
                        <li><a href="#">Rappels de médicaments</a></li>
                        <li><a href="#">Suivi des symptômes</a></li>
                        <li><a href="#">Consultation en ligne</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Entreprise</h3>
                    <ul class="footer-links">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Notre équipe</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Presse</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Légal</h3>
                    <ul class="footer-links">
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 SantéPlus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Chatbot JavaScript -->
    <script>
        // Chatbot UI Toggle
        const chatbotToggle = document.getElementById('chatbotToggle');
        const chatbotWindow = document.getElementById('chatbotWindow');
        const chatbotClose = document.getElementById('chatbotClose');
        
        chatbotToggle.addEventListener('click', () => {
            chatbotWindow.classList.toggle('active');
            // Remove badge when opened
            document.querySelector('.chatbot-badge').style.display = 'none';
        });
        
        chatbotClose.addEventListener('click', () => {
            chatbotWindow.classList.remove('active');
        });
        
        // Chatbot Functionality
        const userInput = document.getElementById('userInput');
        const sendButton = document.getElementById('sendButton');
        const chatbotMessages = document.getElementById('chatbotMessages');
        const quickReplies = document.querySelectorAll('.quick-reply');
        
        // Format current time
        function getCurrentTime() {
            const now = new Date();
            return `${now.getHours()}:${now.getMinutes().toString().padStart(2, '0')}`;
        }
        
        // Add message to chat
        function addMessage(text, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message');
            messageDiv.classList.add(isUser ? 'user-message' : 'bot-message');
            
            const timeSpan = document.createElement('span');
            timeSpan.classList.add('message-time');
            timeSpan.textContent = getCurrentTime();
            
            messageDiv.textContent = text;
            messageDiv.appendChild(timeSpan);
            
            chatbotMessages.appendChild(messageDiv);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }
        
        // Handle user message
        function handleUserMessage() {
            const message = userInput.value.trim();
            if (message) {
                addMessage(message, true);
                userInput.value = '';
                
                // Simulate bot thinking
                setTimeout(() => {
                    // Sample responses based on keywords
                    let response;
                    if (message.toLowerCase().includes('mal de tête') || message.toLowerCase().includes('maux de tête')) {
                        response = "Les maux de tête peuvent avoir plusieurs causes. Avez-vous d'autres symptômes comme de la fièvre ou des nausées ? Je peux vous suggérer des médicaments adaptés si vous me donnez plus de détails.";
                    } else if (message.toLowerCase().includes('dos') || message.toLowerCase().includes('douloureux')) {
                        response = "Les douleurs dorsales sont fréquentes. Des exercices d'étirement peuvent aider. Voulez-vous que je vous envoie une routine adaptée ?";
                    } else if (message.toLowerCase().includes('sommeil')) {
                        response = "Les problèmes de sommeil peuvent être liés au stress ou à l'hygiène de vie. Nous avons un article sur l'amélioration du sommeil. Voulez-vous que je vous le montre ?";
                    } else if (message.toLowerCase().includes('fièvre')) {
                        response = "Une fièvre persistante au-dessus de 38.5°C nécessite une consultation médicale. Combien de temps avez-vous de la fièvre ?";
                    } else {
                        const randomResponses = [
                            "Je comprends votre préoccupation. Pour mieux vous aider, pourriez-vous préciser vos symptômes ?",
                            "Merci pour votre message. Je peux vous orienter vers des ressources adaptées si vous me donnez plus de détails.",
                            "Pour votre sécurité, je ne peux pas fournir de diagnostic. Je peux vous suggérer des conseils généraux ou vous recommander de consulter un professionnel.",
                            "Nous avons plusieurs articles sur ce sujet. Voulez-vous que je vous les montre ?",
                            "Avez-vous d'autres symptômes à part celui que vous mentionnez ? Cela m'aiderait à mieux vous conseiller."
                        ];
                        response = randomResponses[Math.floor(Math.random() * randomResponses.length)];
                    }
                    
                    addMessage(response, false);
                }, 1000);
            }
        }
        
        // Send message on button click or Enter key
        sendButton.addEventListener('click', handleUserMessage);
        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') handleUserMessage();
        });
        
        // Quick replies functionality
        quickReplies.forEach(reply => {
            reply.addEventListener('click', () => {
                addMessage(reply.textContent, true);
                
                setTimeout(() => {
                    let response;
                    switch(reply.textContent) {
                        case 'Maux de tête':
                            response = "Les maux de tête peuvent être causés par le stress, la déshydratation ou d'autres facteurs. Buvez-vous suffisamment d'eau ?";
                            break;
                        case 'Dos douloureux':
                            response = "Pour les douleurs dorsales, je peux vous recommander des exercices d'étirement. Voulez-vous voir une démonstration ?";
                            break;
                        case 'Problèmes digestifs':
                            response = "Les problèmes digestifs peuvent être liés à l'alimentation. Avez-vous noté des aliments qui semblent aggraver vos symptômes ?";
                            break;
                        case 'Problèmes de sommeil':
                            response = "L'hygiène du sommeil est importante. Essayez de maintenir des heures de coucher régulières et évitez les écrans avant de dormir.";
                            break;
                        default:
                            response = "Je peux vous aider avec ce problème. Pouvez-vous décrire vos symptômes plus en détail ?";
                    }
                    addMessage(response, false);
                }, 1000);
            });
        });
        
        // Simulate initial bot message after delay
        setTimeout(() => {
            if (!chatbotWindow.classList.contains('active')) {
                document.querySelector('.chatbot-badge').style.display =                 'flex';
            }
        }, 10000); // Show badge after 10 seconds
    </script>
</body>
</html>