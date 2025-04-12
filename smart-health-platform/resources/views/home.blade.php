<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartHealth | Plateforme Médicale Intelligente</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #0ea5e9;
            --accent: #3b82f6;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
            --success: #10b981;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: var(--dark);
            line-height: 1.6;
            background-color: #f1f5f9;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo-icon {
            width: 36px;
            height: 36px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 0;
            position: relative;
            transition: all 0.3s ease;
        }
        
        nav a:hover {
            opacity: 0.9;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        .auth-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-outline {
            background: transparent;
            color: white;
            border: 1px solid white;
        }
        
        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .btn-primary {
            background-color: white;
            color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: #e2e8f0;
        }
        
        /* Hero Section */
        .hero {
            padding: 4rem 0;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                        url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .hero p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .btn-accent {
            background-color: var(--accent);
            color: white;
        }
        
        .btn-accent:hover {
            background-color: var(--primary-dark);
        }
        
        /* Features Section */
        .features {
            padding: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: #e0f2fe;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .feature-icon svg {
            width: 30px;
            height: 30px;
            color: var(--primary);
        }
        
        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .feature-card p {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }
        
        /* How It Works */
        .how-it-works {
            padding: 4rem 0;
            background-color: white;
        }
        
        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 3rem;
        }
        
        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 1.5rem;
            position: relative;
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.25rem;
            margin: 0 auto 1rem;
        }
        
        .step h3 {
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .step p {
            color: var(--gray);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 4rem 0;
            background-color: #f8fafc;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }
        
        .author-info h4 {
            color: var(--dark);
            margin-bottom: 0.25rem;
        }
        
        .author-info p {
            color: var(--gray);
            font-size: 0.875rem;
        }
        
        /* CTA Section */
        .cta {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .cta p {
            max-width: 600px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column li {
            margin-bottom: 0.75rem;
        }
        
        .footer-column a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-column a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <svg class="logo-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1.5 15h-13c-.28 0-.5-.22-.5-.5v-13c0-.28.22-.5.5-.5h13c.28 0 .5.22.5.5v13c0 .28-.22.5-.5.5zM12 6c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zm-1 3.5h-1v-1h1v1zm1.5 0h-1v-1h1v1zm1.5 0h-1v-1h1v1z"/>
                </svg>
                <span>SmartHealth</span>
            </div>
            
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Recommandations Médicales</a></li>
                    <li><a href="#">Conseils de Santé</a></li>
                    <li><a href="#">Blog / FAQ</a></li>
                </ul>
            </nav>
            
            <div class="auth-buttons">
                <button class="btn btn-outline">Connexion</button>
                <button class="btn btn-primary">Inscription</button>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h1>Votre santé, notre priorité</h1>
            <p>Une plateforme médicale intelligente qui vous accompagne dans votre parcours de santé avec des recommandations personnalisées et un suivi médical complet.</p>
            
            <div class="hero-buttons">
                <button class="btn btn-accent">Commencer maintenant</button>
                <button class="btn btn-outline">En savoir plus</button>
            </div>
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Nos services intelligents</h2>
                <p>Découvrez comment notre plateforme révolutionnaire peut transformer votre expérience de soins de santé</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3>Dossiers médicaux électroniques</h3>
                    <p>Accédez à tous vos dossiers médicaux en un seul endroit sécurisé, disponible 24h/24.</p>
                    <button class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">En savoir plus</button>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3>Analyse intelligente</h3>
                    <p>Notre IA analyse vos symptômes et résultats médicaux pour des diagnostics préliminaires précis.</p>
                    <button class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">En savoir plus</button>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                    </div>
                    <h3>Chatbot médical</h3>
                    <p>Obtenez des réponses instantanées à vos questions de santé avec notre assistant virtuel.</p>
                    <button class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">En savoir plus</button>
                </div>
            </div>
        </div>
    </section>
    
    <section class="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>Comment ça marche</h2>
                <p>Trois étapes simples pour accéder à des soins de santé intelligents</p>
            </div>
            
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Créez votre compte</h3>
                    <p>Inscrivez-vous en quelques minutes avec vos informations de base.</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Complétez votre profil</h3>
                    <p>Ajoutez vos antécédents médicaux et informations importantes.</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Accédez aux services</h3>
                    <p>Utilisez nos outils intelligents et connectez-vous avec des professionnels.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Ce que nos patients disent</h2>
                <p>Découvrez les expériences de ceux qui ont transformé leur santé avec nous</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Grâce à SmartHealth, j'ai pu obtenir un diagnostic préliminaire rapidement et consulter le bon spécialiste sans perdre de temps. L'analyse de mes résultats sanguins était particulièrement utile."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sophie Martin" class="author-avatar">
                        <div class="author-info">
                            <h4>Sophie Martin</h4>
                            <p>Patient depuis 2023</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "En tant que personne âgée, j'apprécie particulièrement la simplicité de la plateforme. Le chatbot m'aide à comprendre mes médicaments et mes rendez-vous sont bien organisés."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Pierre Dubois" class="author-avatar">
                        <div class="author-info">
                            <h4>Pierre Dubois</h4>
                            <p>Patient depuis 2022</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "La fonction d'analyse des symptômes m'a permis de détecter un problème sérieux à temps. L'interface est moderne et les médecins disponibles sont très compétents."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Élodie Lambert" class="author-avatar">
                        <div class="author-info">
                            <h4>Élodie Lambert</h4>
                            <p>Patient depuis 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta">
        <div class="container">
            <h2>Prêt à prendre le contrôle de votre santé ?</h2>
            <p>Rejoignez des milliers de patients qui bénéficient déjà de notre plateforme intelligente.</p>
            <button class="btn btn-primary" style="background-color: white; color: var(--primary);">Commencer maintenant</button>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>SmartHealth</h3>
                    <p>La plateforme de santé intelligente qui révolutionne votre expérience médicale.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Diagnostic intelligent</a></li>
                        <li><a href="#">Dossiers médicaux</a></li>
                        <li><a href="#">Rendez-vous en ligne</a></li>
                        <li><a href="#">Suivi des médicaments</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Presse</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Légal</h3>
                    <ul>
                        <li><a href="#">Confidentialité</a></li>
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Sécurité</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="tel:+33123456789">01 23 45 67 89</a></li>
                        <li><a href="mailto:contact@smarthealth.fr">contact@smarthealth.fr</a></li>
                        <li>15 Rue de la Santé, 75013 Paris</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 SmartHealth. Tous droits réservés.</p>
            </div>
        </div>  </footer>
</body>
</html>