<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santé Blog & FAQ | Votre Assistant Médical</title>
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Variables */
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #50c9ba;
            --dark-color: #2c3e50;
            --light-color: #f5f7fa;
            --danger-color: #e74c3c;
            --success-color: #2ecc71;
        }

        /* Global Styles */
        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #357abd;
            transform: translateY(-2px);
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
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
            color: var(--primary-color);
        }

        .logo span {
            color: var(--secondary-color);
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
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--secondary-color);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* Main Content */
        .main-content {
            display: flex;
            margin: 40px 0;
            gap: 30px;
        }

        /* Blog Section */
        .blog-section {
            flex: 2;
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
        }

        .blog-posts {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .blog-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            height: 200px;
            overflow: hidden;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.1);
        }

        .blog-content {
            padding: 20px;
        }

        .blog-date {
            font-size: 0.8rem;
            color: #777;
            margin-bottom: 10px;
        }

        .blog-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .blog-excerpt {
            color: #666;
            margin-bottom: 15px;
        }

        .read-more {
            font-weight: 500;
            color: var(--primary-color);
            display: inline-flex;
            align-items: center;
        }

        .read-more:hover {
            color: var(--secondary-color);
        }

        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .read-more:hover i {
            transform: translateX(3px);
        }

        /* FAQ Section */
        .faq-section {
            flex: 1;
        }

        .faq-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .faq-question {
            padding: 15px 20px;
            background: var(--primary-color);
            color: white;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item.active .faq-answer {
            padding: 20px;
            max-height: 500px;
        }

        .faq-toggle {
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(180deg);
        }

        /* Sidebar */
        .sidebar {
            flex: 1;
        }

        .sidebar-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .categories-list {
            list-style: none;
        }

        .categories-list li {
            margin-bottom: 10px;
        }

        .categories-list a {
            display: block;
            padding: 8px 0;
            color: #555;
            transition: color 0.3s ease, padding-left 0.3s ease;
        }

        .categories-list a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .search-bar {
            position: relative;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-bar button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #777;
            cursor: pointer;
        }

        /* Newsletter */
        .newsletter-form {
            display: flex;
            flex-direction: column;
        }

        .newsletter-form input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
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
            background: var(--secondary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }

            .nav-links {
                margin-top: 15px;
            }

            .nav-links li {
                margin: 0 10px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .nav-links {
                flex-direction: column;
                align-items: center;
            }

            .nav-links li {
                margin: 5px 0;
            }

            .blog-posts {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">Santé<span>Plus</span></div>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Symptômes</a></li>
                    <li><a href="#">Médicaments</a></li>
                    <li><a href="#" class="active">Blog & FAQ</a></li>
                    <li><a href="#">Mon Compte</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Blog Santé & Foire Aux Questions</h1>
            <p>Trouvez des articles éducatifs et des réponses à vos questions sur la santé et les médicaments.</p>
            <a href="#" class="btn">Poser une question</a>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
            <!-- Blog Section -->
            <section class="blog-section">
                <h2 class="section-title">Derniers Articles</h2>
                <div class="blog-posts">
                    <!-- Blog Post 1 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Santé article">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">15 Juin 2023 | Prévention</div>
                            <h3 class="blog-title">Comment reconnaître les symptômes de la grippe</h3>
                            <p class="blog-excerpt">Apprenez à distinguer les symptômes de la grippe saisonnière d'un simple rhume et quand consulter un médecin.</p>
                            <a href="#" class="read-more">Lire plus <i>→</i></a>
                        </div>
                    </article>

                    <!-- Blog Post 2 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Médicaments">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">10 Juin 2023 | Médicaments</div>
                            <h3 class="blog-title">Les interactions médicamenteuses à connaître</h3>
                            <p class="blog-excerpt">Découvrez les combinaisons de médicaments courantes qui peuvent être dangereuses et comment les éviter.</p>
                            <a href="#" class="read-more">Lire plus <i>→</i></a>
                        </div>
                    </article>

                    <!-- Blog Post 3 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Nutrition">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">5 Juin 2023 | Nutrition</div>
                            <h3 class="blog-title">10 aliments pour booster votre système immunitaire</h3>
                            <p class="blog-excerpt">Explorez ces superaliments qui peuvent aider à renforcer vos défenses naturelles contre les maladies.</p>
                            <a href="#" class="read-more">Lire plus <i>→</i></a>
                        </div>
                    </article>
                </div>

                <!-- FAQ Section -->
                <h2 class="section-title" style="margin-top: 50px;">Foire Aux Questions</h2>
                <div class="faq-section">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            Comment fonctionne la recommandation de médicaments ?
                            <span class="faq-toggle">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Notre système analyse les symptômes que vous renseignez et les compare avec une base de données médicale pour suggérer les médicaments les plus appropriés. Cependant, ces recommandations ne remplacent pas un avis médical professionnel.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            Mes données de santé sont-elles sécurisées ?
                            <span class="faq-toggle">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Oui, nous utilisons un chiffrement de bout en bout et suivons les strictes normes de protection des données de santé. Vos informations ne sont jamais partagées sans votre consentement explicite.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            Puis-je utiliser cette application pour les urgences médicales ?
                            <span class="faq-toggle">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Non, en cas d'urgence médicale, composez immédiatement le numéro d'urgence de votre pays (comme le 15 en France). Notre application est conçue pour des conseils généraux de santé et non pour les situations critiques.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            Comment puis-je connecter ma montre connectée ?
                            <span class="faq-toggle">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Dans la section "Profil" de l'application, vous trouverez l'option "Connecter un appareil". Suivez les instructions pour appairer votre montre connectée. Cette fonctionnalité est actuellement disponible pour les modèles Apple Watch, Fitbit et Samsung Galaxy Watch.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Rechercher</h3>
                    <div class="search-bar">
                        <input type="text" placeholder="Rechercher des articles...">
                        <button>🔍</button>
                    </div>
                </div>

                <div class="sidebar-card">
                    <h3 class="sidebar-title">Catégories</h3>
                    <ul class="categories-list">
                        <li><a href="#">Médicaments</a></li>
                        <li><a href="#">Symptômes</a></li>
                        <li><a href="#">Prévention</a></li>
                        <li><a href="#">Nutrition</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Santé mentale</a></li>
                    </ul>
                </div>

                <div class="sidebar-card">
                    <h3 class="sidebar-title">Newsletter</h3>
                    <p>Abonnez-vous pour recevoir nos derniers articles et conseils santé.</p>
                    <form class="newsletter-form">
                        <input type="text" placeholder="Votre nom">
                        <input type="email" placeholder="Votre email">
                        <button type="submit" class="btn">S'abonner</button>
                    </form>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>SantéPlus</h3>
                    <p>Votre assistant santé intelligent pour des recommandations médicales personnalisées et des conseils de professionnels.</p>
                    <div class="social-links">
                        <a href="#">f</a>
                        <a href="#">t</a>
                        <a href="#">in</a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Symptômes</a></li>
                        <li><a href="#">Médicaments</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Informations</h3>
                    <ul class="footer-links">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li>contact@santeplus.com</li>
                        <li>+33 1 23 45 67 89</li>
                        <li>123 Rue de la Santé<br>75000 Paris, France</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 SantéPlus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for FAQ toggle -->
    <script>
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>