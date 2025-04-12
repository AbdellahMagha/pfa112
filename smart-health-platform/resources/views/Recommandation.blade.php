<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommandations Médicales</title>
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
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header Styles */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        header h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }
        
        /* Main Content Styles */
        .main-content {
            display: flex;
            gap: 30px;
        }
        
        /* Chatbot Section */
        .chatbot-section {
            flex: 1;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }
        
        .chatbot-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .chatbot-header h2 {
            font-size: 1.5rem;
            color: #2c3e50;
        }
        
        .chatbot-icon {
            width: 40px;
            height: 40px;
            margin-right: 15px;
            background-color: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }
        
        .chatbot-messages {
            height: 400px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #eee;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        
        .message {
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 18px;
            max-width: 80%;
            word-wrap: break-word;
        }
        
        .user-message {
            background-color: #3498db;
            color: white;
            margin-left: auto;
            border-bottom-right-radius: 5px;
        }
        
        .bot-message {
            background-color: #ecf0f1;
            color: #333;
            margin-right: auto;
            border-bottom-left-radius: 5px;
        }
        
        .chatbot-input {
            display: flex;
            gap: 10px;
        }
        
        .chatbot-input input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 1rem;
            outline: none;
            transition: border 0.3s;
        }
        
        .chatbot-input input:focus {
            border-color: #3498db;
        }
        
        .chatbot-input button {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0 20px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        
        .chatbot-input button:hover {
            background-color: #2980b9;
        }
        
        /* Recommendations Section */
        .recommendations-section {
            flex: 1;
        }
        
        .recommendations-header {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .recommendations-header h2 {
            font-size: 1.5rem;
            color: #2c3e50;
        }
        
        .recommendation-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .recommendation-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .recommendation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .card-image {
            height: 180px;
            overflow: hidden;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .recommendation-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-content {
            padding: 15px;
        }
        
        .card-content h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .card-content p {
            color: #7f8c8d;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .card-price {
            font-weight: bold;
            color: #27ae60;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .card-button {
            display: block;
            text-align: center;
            background-color: #27ae60;
            color: white;
            padding: 8px 0;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .card-button:hover {
            background-color: #219653;
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
            
            .recommendation-cards {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
        
        @media (max-width: 480px) {
            .recommendation-cards {
                grid-template-columns: 1fr;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Recommandations Médicales</h1>
            <p>Obtenez des conseils de santé personnalisés</p>
        </div>
    </header>
    
    <div class="container">
        <div class="main-content">
            <section class="chatbot-section">
                <div class="chatbot-header">
                    <div class="chatbot-icon">AI</div>
                    <h2>Assistant Santé</h2>
                </div>
                
                <div class="chatbot-messages" id="chatbot-messages">
                    <div class="message bot-message">
                        Bonjour! Je suis votre assistant santé. Décrivez vos symptômes ou problèmes de santé et je vous ferai des recommandations appropriées.
                    </div>
                </div>
                
                <div class="chatbot-input">
                    <input type="text" id="user-input" placeholder="Décrivez vos symptômes..." autocomplete="off">
                    <button id="send-button">Envoyer</button>
                </div>
            </section>
            
            <section class="recommendations-section">
                <div class="recommendations-header">
                    <h2>Recommandations pour vous</h2>
                </div>
                
                <div class="recommendation-cards" id="recommendation-cards">
                    <!-- Cards will be added dynamically by JavaScript -->
                    <div class="recommendation-card">
                        <div class="card-image">
                            <img src="https://via.placeholder.com/300x200?text=Medicament" alt="Médicament">
                        </div>
                        <div class="card-content">
                            <h3>Paracétamol 500mg</h3>
                            <p>Pour le traitement des douleurs légères à modérées et de la fièvre.</p>
                            <div class="card-price">5,99 €</div>
                            <a href="#" class="card-button">Acheter</a>
                        </div>
                    </div>
                    
                    <div class="recommendation-card">
                        <div class="card-image">
                            <img src="https://via.placeholder.com/300x200?text=Vitamines" alt="Vitamines">
                        </div>
                        <div class="card-content">
                            <h3>Complexe Vitaminé B</h3>
                            <p>Complément alimentaire pour renforcer le système immunitaire.</p>
                            <div class="card-price">12,50 €</div>
                            <a href="#" class="card-button">Acheter</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userInput = document.getElementById('user-input');
            const sendButton = document.getElementById('send-button');
            const chatMessages = document.getElementById('chatbot-messages');
            const recommendationsContainer = document.getElementById('recommendation-cards');
            
            // Sample medical recommendations data
            const medicalRecommendations = {
                "fièvre": [
                    {
                        title: "Paracétamol 500mg",
                        description: "Pour réduire la fièvre et soulager les douleurs légères à modérées.",
                        price: "5,99 €",
                        image: "https://via.placeholder.com/300x200?text=Paracétamol"
                    },
                    {
                        title: "Thermomètre Digital",
                        description: "Pour surveiller votre température corporelle avec précision.",
                        price: "9,99 €",
                        image: "https://via.placeholder.com/300x200?text=Thermomètre"
                    }
                ],
                "maux de tête": [
                    {
                        title: "Ibuprofène 200mg",
                        description: "Anti-inflammatoire pour soulager les maux de tête et douleurs.",
                        price: "6,50 €",
                        image: "https://via.placeholder.com/300x200?text=Ibuprofène"
                    },
                    {
                        title: "Patchs Refroidissants",
                        description: "Soulagement immédiat des maux de tête par effet froid.",
                        price: "7,20 €",
                        image: "https://via.placeholder.com/300x200?text=Patchs"
                    }
                ],
                "toux": [
                    {
                        title: "Sirop contre la toux sèche",
                        description: "Calme les irritations de la gorge et réduit la toux sèche.",
                        price: "8,30 €",
                        image: "https://via.placeholder.com/300x200?text=Sirop+Toux"
                    },
                    {
                        title: "Pastilles pour la gorge",
                        description: "Adoucit la gorge et réduit l'irritation causée par la toux.",
                        price: "4,99 €",
                        image: "https://via.placeholder.com/300x200?text=Pastilles"
                    }
                ],
                "douleurs musculaires": [
                    {
                        title: "Gel Anti-douleur",
                        description: "Appliquez localement pour soulager les douleurs musculaires.",
                        price: "11,99 €",
                        image: "https://via.placeholder.com/300x200?text=Gel+Douleurs"
                    },
                    {
                        title: "Patchs chauffants",
                        description: "Soulagement prolongé des douleurs musculaires par chaleur.",
                        price: "12,50 €",
                        image: "https://via.placeholder.com/300x200?text=Patchs+Chauds"
                    }
                ]
            };
            
            // Function to add a message to the chat
            function addMessage(sender, message) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.classList.add(sender === 'user' ? 'user-message' : 'bot-message');
                messageDiv.textContent = message;
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            
            // Function to display recommendations
            function displayRecommendations(symptom) {
                recommendationsContainer.innerHTML = '';
                
                // Default message if no specific recommendations
                if (!medicalRecommendations[symptom]) {
                    const defaultRecommendations = [
                        {
                            title: "Complexe Vitaminé",
                            description: "Renforcez votre système immunitaire avec ce complexe de vitamines.",
                            price: "15,99 €",
                            image: "https://via.placeholder.com/300x200?text=Vitamines"
                        },
                        {
                            title: "Thermomètre Digital",
                            description: "Surveillez votre température corporelle avec précision.",
                            price: "9,99 €",
                            image: "https://via.placeholder.com/300x200?text=Thermomètre"
                        }
                    ];
                    
                    defaultRecommendations.forEach(item => {
                        createRecommendationCard(item);
                    });
                    
                    return;
                }
                
                medicalRecommendations[symptom].forEach(item => {
                    createRecommendationCard(item);
                });
            }
            
            // Function to create a recommendation card
            function createRecommendationCard(item) {
                const card = document.createElement('div');
                card.className = 'recommendation-card';
                
                card.innerHTML = `
                    <div class="card-image">
                        <img src="${item.image}" alt="${item.title}">
                    </div>
                    <div class="card-content">
                        <h3>${item.title}</h3>
                        <p>${item.description}</p>
                        <div class="card-price">${item.price}</div>
                        <a href="#" class="card-button">Acheter</a>
                    </div>
                `;
                
                recommendationsContainer.appendChild(card);
            }
            
            // Function to process user input
            function processUserInput() {
                const message = userInput.value.trim();
                if (message === '') return;
                
                addMessage('user', message);
                userInput.value = '';
                
                // Show loading state
                sendButton.innerHTML = '<div class="loading"></div>';
                
                // Simulate AI processing delay
                setTimeout(() => {
                    sendButton.textContent = 'Envoyer';
                    
                    // Simple symptom detection (in a real app, this would be more sophisticated)
                    let response = "";
                    let detectedSymptom = null;
                    
                    if (message.toLowerCase().includes('fièvre') || message.toLowerCase().includes('fievre')) {
                        response = "Je vois que vous mentionnez une fièvre. Voici quelques recommandations pour vous aider. N'oubliez pas de bien vous hydrater et de vous reposer.";
                        detectedSymptom = "fièvre";
                    } else if (message.toLowerCase().includes('mal de tête') || message.toLowerCase().includes('maux de tête')) {
                        response = "Les maux de tête peuvent être gênants. Voici des produits qui pourraient vous soulager. Si les symptômes persistent, consultez un médecin.";
                        detectedSymptom = "maux de tête";
                    } else if (message.toLowerCase().includes('toux')) {
                        response = "Une toux persistante peut être irritante. Voici des solutions pour vous aider. Si elle dure plus d'une semaine, consultez un professionnel.";
                        detectedSymptom = "toux";
                    } else if (message.toLowerCase().includes('muscle') || message.toLowerCase().includes('douleur')) {
                        response = "Les douleurs musculaires peuvent être soulagées avec les bons produits. Voici mes recommandations.";
                        detectedSymptom = "douleurs musculaires";
                    } else {
                        response = "Merci pour votre description. Voici quelques recommandations générales pour votre bien-être. Pour des conseils plus précis, veuillez décrire vos symptômes plus en détail.";
                    }
                    
                    addMessage('bot', response);
                    
                    // Display recommendations based on detected symptom
                    if (detectedSymptom) {
                        displayRecommendations(detectedSymptom);
                    } else {
                        displayRecommendations('general');
                    }
                }, 1500);
            }
            
            // Event listeners
            sendButton.addEventListener('click', processUserInput);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    processUserInput();
                }
            });
            
            // Initial recommendations
            displayRecommendations('general');
        });
    </script>
</body>
</html>
