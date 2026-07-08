<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design UX/UI - BOUDALIA Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Services professionnels de design UX/UI par BOUDALIA Agency. Créez des expériences utilisateur et interfaces magnifiques qui convertissent et engagent.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        .starburst { color: #f97316; font-size: 3rem; position: absolute; z-index: -1; opacity: 0.8; }
    </style>

<style id="modern-upgrade">
:root{
  --brand:#f97316;
  --brand2:#ea580c;
  --bg:#f8fafc;
  --text:#1e293b;
}
html,body{background:linear-gradient(180deg,#ffffff 0%,var(--bg) 100%);}
header{backdrop-filter: blur(10px);}
section, footer{position:relative;}
a,button{transition:all .25s ease;}
a:hover{filter:saturate(1.1);}
.card,.service-card,.process-card,[class*="rounded"]{transition:transform .25s ease, box-shadow .25s ease;}
.card:hover,.service-card:hover,.process-card:hover{transform:translateY(-4px);}
img{image-rendering:auto;}
::selection{background:var(--brand);color:white;}
</style>

</head>
<body class="bg-white text-dark">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 max-w-7xl">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="index_fr.php" class="text-2xl font-extrabold text-gray-800 flex items-center">
                        BOUDALIA<span class="bg-primary text-white text-sm px-2 py-1 rounded ml-1 uppercase">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="index_fr.php" class="hover:text-primary transition">Accueil</a></li>
                        <li><a href="services_fr.php" class="hover:text-primary transition">Services</a></li>
                        <li><a href="index_fr.html#portfolio" class="hover:text-primary transition">Portfolio</a></li>
                    </ul>
                    <a href="formulaire.php" class="bg-primary text-white font-bold py-2 px-6 rounded-full hover:bg-secondary transition shadow-md">Réserver un créneau</a>
                    
                    <div class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                        <a href="ui-ux.php" class="hover:text-gray-800 transition">EN</a>
                        <span>|</span>
                        <a href="ui-ux_fr.php" class="text-primary">FR</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="py-20 relative overflow-hidden bg-peach">
        <i class="fas fa-certificate starburst top-10 left-20"></i>
        <i class="fas fa-certificate starburst bottom-10 right-32"></i>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 text-dark">Design UX/UI</h1>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed">
                BOUDALIA Agency combine des principes de conception centrés sur l'utilisateur avec des technologies de pointe pour fournir des solutions UX/UI innovantes et percutantes, adaptées pour répondre aux besoins et objectifs spécifiques de nos clients.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Interface Mobile UI/UX" class="rounded-[2rem] shadow-2xl w-full object-cover h-[600px]" loading="lazy">
                </div>
                
                <div class="lg:w-1/2">
                    <h4 class="text-sm font-bold text-gray-800 mb-4 border-b-2 border-primary pb-2 inline-block">Passionné – Dévoué – Professionnel</h4>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-dark leading-tight">Propulsez le Succès de Votre Entreprise avec <span class="text-primary">l'UX/UI</span></h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Expérience Utilisateur Améliorée</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Un site web ou une application bien conçu garantit une navigation fluide et une satisfaction accrue pour vos utilisateurs.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Taux de Conversion Accrus</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Contribue à la croissance et à la rentabilité de votre entreprise en transformant vos visiteurs en clients fidèles.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-mouse-pointer"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Design d'Interaction</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Création d'interfaces interactives qui engagent l'utilisateur et rendent chaque action claire et gratifiante.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-light">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between items-start mb-16 gap-8">
                <div class="md:w-1/3">
                    <h2 class="text-5xl font-extrabold text-dark leading-tight">Les Étapes Que<br><span class="text-primary">Nous Suivons</span></h2>
                </div>
                <div class="md:w-1/2">
                    <p class="text-gray-600 leading-relaxed">
                        BOUDALIA Agency propose une gamme complète de services de design UX/UI visant à créer des expériences numériques intuitives, visuellement attrayantes et centrées sur l'utilisateur à travers diverses plateformes. Ces services comprennent :
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-12">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 01</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Recherche et Analyse</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Nous commençons par mener des recherches approfondies pour comprendre le public cible, ses comportements, besoins et points de douleur. Cela inclut des entretiens, des sondages et l'analyse de la concurrence.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 02</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Architecture de l'Information</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">L'élaboration d'une architecture solide est cruciale pour organiser le contenu de manière logique. Nous concevons des plans de site et des structures de navigation pour s'assurer que les utilisateurs trouvent facilement ce qu'ils cherchent.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 03</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Wireframing et Prototypage</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Avant le design visuel, nous créons des wireframes et prototypes pour définir la mise en page et les fonctionnalités. Cela permet des itérations rapides et des retours avant le développement.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 04</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Design UI</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Nous nous concentrons sur la création d'interfaces visuellement attrayantes qui s'alignent avec l'identité de marque tout en privilégiant l'utilisabilité (couleurs, typographie, icônes).</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 05</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Design Responsive</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Avec l'utilisation croissante du mobile, nous veillons à ce que tous les designs s'adaptent parfaitement aux différentes tailles d'écrans et appareils, offrant une expérience cohérente.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Étape - 06</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Tests d'Utilisabilité</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Une fois implémentés, nous effectuons des tests pour recueillir les retours d'utilisateurs réels et identifier les axes d'amélioration. Sur la base de ces retours, des itérations sont faites.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 mb-20">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-peach via-orange-300 to-primary rounded-[3rem] flex flex-col md:flex-row items-center overflow-hidden shadow-2xl">
                <div class="md:w-1/2 h-full">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="Réunion d'équipe stratégique" class="w-full h-full object-cover min-h-[400px]">
                </div>
                <div class="md:w-1/2 p-10 md:p-16 text-white">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight text-dark">Nos Services sont toujours en phase avec votre stratégie</h2>
                    <p class="text-dark opacity-90 mb-10 text-lg leading-relaxed">
                        Chez BOUDALIA Agency, nous offrons une gamme de solutions innovantes et de pointe pour les besoins de votre entreprise. Que vous ayez besoin de développement web, de conception UI/UX, de SEO ou de marketing digital, nous avons l'expertise pour fournir des résultats de haute qualité.
                    </p>
                    <a href="formulaire.php" class="inline-block bg-dark text-white font-bold py-3 px-8 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">
                        Commencer <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-50 text-dark py-16 border-t border-gray-200">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between gap-10 mb-16">
                <div class="md:w-5/12">
                    <h2 class="text-3xl font-extrabold text-gray-800 mb-6 tracking-tight flex items-center">
                        BOUDALIA <span class="bg-primary text-white text-sm px-2 py-1 rounded ml-2 uppercase font-bold">Agency</span>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed pr-4">
                        BOUDALIA Agency est votre destination privilégiée pour tous vos besoins digitaux. De la création de sites web visuellement époustouflants sur Shopify et WordPress à la conception d'expériences utilisateur (UI/UX) fluides.
                    </p>
                </div>
                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="index_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Accueil</a></li>
                        <li><a href="services_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        <li><a href="ui-ux_fr.php" class="text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Développement Web</a></li>
                        <li><a href="e-commerce_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Solutions E-commerce</a></li>
                        <li><a href="digital-marketing_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Marketing Digital</a></li>
                        <li><a href="seo_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Référencement SEO</a></li>
                        <li><a href="smm_fr.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Social Media Marketing</a></li>
                    </ul>
                </div>
                <div class="md:w-4/12 md:text-right font-bold text-gray-800 text-sm flex flex-col space-y-3">
                    <a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a>
                    <a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a>
                    <div class="mt-8 pt-6 flex flex-col space-y-3">
                        <a href="politique-confidentialite.php" class="hover:text-primary transition">Politique de Confidentialité</a>
                        <a href="termes-conditions.php" class="hover:text-primary transition">Termes & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-12 border-t border-gray-200 pt-8">
                <p>&copy; 2026 BOUDALIA Agency. Tous droits réservés.</p>
                <div class="flex space-x-4 mt-6 md:mt-0">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white transition duration-300"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });
    </script>
</body>
</html>