<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver un créneau - BOUDALIA Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Réservez un créneau de consultation gratuit avec BOUDALIA Agency. Discutez de vos besoins en marketing digital et web development avec nos experts.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#f97316", 
                        secondary: "#ea580c",
                        dark: "#1e293b",
                        light: "#f8fafc",
                        peach: "#fff8f5"
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: 1, boxShadow: '0 0 15px rgba(249,115,22,0.4)' },
                            '50%': { opacity: .8, boxShadow: '0 0 30px rgba(249,115,22,0.8)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; overflow-x: hidden; background-color: #f8fafc; }
        .bg-grid-pattern {
            background-image: radial-gradient(rgba(249, 115, 22, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        .form-input {
            width: 100%; padding: 0.75rem 1rem; border-radius: 0.75rem; border: 1px solid #e2e8f0; 
            background-color: #f8fafc; transition: all 0.3s;
        }
        .form-input:focus {
            outline: none; border-color: #f97316; box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.2); background-color: #ffffff;
        }
        .fixed-bg-shapes {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none; z-index: 0; overflow: hidden;
        }
        .shape { position: absolute; color: #f97316; opacity: 0.05; }
    </style>
</head>
<body class="text-dark">

    <div class="fixed-bg-shapes">
        <div class="shape animate-float" style="top: 20%; left: 10%;"><i class="fas fa-calendar-check text-6xl"></i></div>
        <div class="shape animate-float" style="top: 70%; right: 15%; animation-delay: 2s;"><i class="fas fa-envelope text-8xl"></i></div>
    </div>

    <header class="bg-white shadow-sm sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4 max-w-7xl relative z-10">
            <div class="flex justify-between items-center">
                <div class="flex items-center" data-aos="fade-right" data-aos-duration="800">
                    <a href="index_fr.html" class="text-2xl font-extrabold text-gray-800 flex items-center hover:scale-105 transition-transform duration-300">
                        BOUDALIA<span class="bg-primary text-white text-sm px-2 py-1 rounded ml-1 uppercase shadow-md">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-8" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="index_fr.html" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Accueil</a></li>
                        <li><a href="services_fr.html" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Services</a></li>
                        <li><a href="index_fr.html#portfolio" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Portfolio</a></li>
                    </ul>
                    
                    <a href="formulaire.html" class="bg-primary text-white font-bold py-2 px-6 rounded-full shadow-lg">Réserver un créneau</a>
                    
                    <div class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                        <a href="booking.html" class="hover:text-gray-800 transition">EN</a>
                        <span>|</span>
                        <a href="formulaire.html" class="text-primary">FR</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="py-16 md:py-24 relative z-10">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-5/12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="sticky top-32">
                        <h4 class="text-primary font-bold tracking-wider uppercase mb-2">Parlons-en</h4>
                        <h1 class="text-4xl md:text-6xl font-extrabold text-dark leading-tight mb-6">
                            Prêt à <span class="text-primary">développer</span> votre entreprise ?
                        </h1>
                        <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                            Réservez un appel de découverte gratuit avec nos experts. Nous discuterons de vos objectifs, analyserons votre présence numérique actuelle et vous montrerons comment BOUDALIA Agency peut vous aider à vous développer.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                                <div class="w-12 h-12 bg-orange-50 text-primary rounded-full flex items-center justify-center text-xl shrink-0">
                                    <i class="fas fa-video"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-dark">Appel Stratégique de 30 Minutes</h3>
                                    <p class="text-sm text-gray-500">Consultation gratuite et sans engagement via Google Meet ou Zoom.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                                <div class="w-12 h-12 bg-orange-50 text-primary rounded-full flex items-center justify-center text-xl shrink-0">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-dark">Envoyez-nous un Email</h3>
                                    <p class="text-sm text-gray-500"><a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a></p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                                <div class="w-12 h-12 bg-orange-50 text-primary rounded-full flex items-center justify-center text-xl shrink-0">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-dark">Appelez-nous directement</h3>
                                    <p class="text-sm text-gray-500"><a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-7/12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl relative overflow-hidden">
                        <div class="absolute -top-20 -right-20 w-40 h-40 bg-primary opacity-10 rounded-full blur-2xl"></div>
                        
                        <h2 class="text-2xl font-bold text-dark mb-8">Remplissez le formulaire ci-dessous</h2>
                        
                        <form id="booking-form" method="POST" class="space-y-6 relative z-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="firstName">Prénom <span class="text-red-500">*</span></label>
                                    <input type="text" id="firstName" name="firstName" required class="form-input" placeholder="Jean">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="lastName">Nom <span class="text-red-500">*</span></label>
                                    <input type="text" id="lastName" name="lastName" required class="form-input" placeholder="Dupont">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="email">Adresse Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required class="form-input" placeholder="jean@entreprise.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="phone">Numéro de Téléphone</label>
                                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+33 6 00 00 00 00">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="service">Quels services vous intéressent ? <span class="text-red-500">*</span></label>
                                <select id="service" name="service" required class="form-input text-gray-600">
                                    <option value="" disabled selected>Sélectionnez un service...</option>
                                    <option value="web-dev">Développement Web</option>
                                    <option value="ecommerce">Solutions E-commerce</option>
                                    <option value="ui-ux">Design UI/UX</option>
                                    <option value="seo">Optimisation SEO</option>
                                    <option value="smm">Social Media Marketing</option>
                                    <option value="other">Autre / Demande générale</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="date">Date souhaitée</label>
                                    <input type="date" id="date" name="date" class="form-input text-gray-600">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="time">Heure souhaitée</label>
                                    <input type="time" id="time" name="time" class="form-input text-gray-600">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="message">Parlez-nous de votre projet</label>
                                <textarea id="message" name="message" rows="4" class="form-input resize-none" placeholder="Décrivez vos objectifs, vos défis actuels ou toute exigence spécifique..."></textarea>
                            </div>

                            <button id="submit-btn" type="submit" class="w-full bg-primary text-white font-bold py-4 px-8 rounded-xl hover:bg-secondary transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 animate-pulse-glow flex justify-center items-center">
                                <span>Demander un Rendez-vous</span>
                                <i class="fas fa-paper-plane ml-3"></i>
                            </button>
                            
                            <div id="form-response" class="hidden mt-4 p-4 rounded-xl text-sm font-medium text-center"></div>

                            <p class="text-xs text-gray-400 text-center mt-4">
                                En soumettant ce formulaire, vous acceptez notre <a href="politique-confidentialite.html" class="underline hover:text-primary">Politique de Confidentialité</a>.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-50 text-dark py-16 border-t border-gray-200 relative z-10" data-aos="fade-up" data-aos-duration="800">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between gap-10 mb-16">
                <div class="md:w-5/12">
                    <h2 class="text-3xl font-extrabold text-gray-800 mb-6 tracking-tight flex items-center">
                        BOUDALIA <span class="bg-primary text-white text-sm px-2 py-1 rounded ml-2 uppercase font-bold hover:animate-pulse">Agency</span>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed pr-4">
                        BOUDALIA Agency est votre destination privilégiée pour tous vos besoins digitaux. De la création de sites web visuellement époustouflants à la mise en œuvre de stratégies d'acquisition redoutables.
                    </p>
                </div>
                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="index_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Accueil</a></li>
                        <li><a href="services_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        <li><a href="ui-ux_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Développement Web</a></li>
                        <li><a href="e-commerce_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Solutions E-commerce</a></li>
                        <li><a href="digital-marketing_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Marketing Digital</a></li>
                        <li><a href="seo_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Référencement SEO</a></li>
                        <li><a href="smm_fr.html" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Social Media Marketing</a></li>
                    </ul>
                </div>
                <div class="md:w-4/12 md:text-right font-bold text-gray-800 text-sm flex flex-col space-y-3">
                    <a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a>
                    <a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a>
                    <div class="mt-8 pt-6 flex flex-col space-y-3">
                        <a href="politique-confidentialite.html" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Politique de Confidentialité</a>
                        <a href="termes-conditions.html" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Termes & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-12 border-t border-gray-200 pt-8">
                <p>&copy; 2026 BOUDALIA Agency. Tous droits réservés.</p>
                <div class="flex space-x-4 mt-6 md:mt-0">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300 hover:rotate-[360deg]"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300 hover:rotate-[360deg]"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300 hover:rotate-[360deg]"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300 hover:rotate-[360deg]"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init AOS
        AOS.init({ once: true, offset: 50 });

        // Logique de soumission du formulaire
        const bookingForm = document.getElementById("booking-form");
        const submitBtn = document.getElementById("submit-btn");
        const formResponse = document.getElementById("form-response");

        if(bookingForm) {
            bookingForm.addEventListener("submit", function(e) {
                e.preventDefault();
                
                // État de chargement
                submitBtn.disabled = true;
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-circle-notch animate-spin mr-2"></i> Envoi en cours...';

                // Collecte des données
                const formData = new FormData(this);

                // Requête AJAX vers formulaire.php
                fetch('formulaire.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    formResponse.classList.remove("hidden", "bg-green-100", "text-green-700", "bg-red-100", "text-red-700");
                    
                    if(data.status === 'success') {
                        formResponse.classList.add("bg-green-100", "text-green-700");
                        formResponse.innerHTML = '<i class="fas fa-check-circle mr-2"></i> ' + data.message;
                        bookingForm.reset();
                    } else {
                        formResponse.classList.add("bg-red-100", "text-red-700");
                        formResponse.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i> Erreur: ' + data.message;
                    }
                })
                .catch(error => {
                    formResponse.classList.add("bg-red-100", "text-red-700");
                    formResponse.innerHTML = "Une erreur technique est survenue. Veuillez réessayer.";
                })
                .finally(() => {
                    formResponse.classList.remove("hidden");
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
            });
        }
    </script>
</body>
</html>