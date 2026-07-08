<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOUDALIA Agency - Creative Digital Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Digital agency specializing in design, web development, e-commerce, and digital marketing">
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
                        'spin-slow': 'spin 15s linear infinite',
                        'spin-slow-reverse': 'spin-reverse 20s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'pulse-glow': 'pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'spin-reverse': {
                            '0%': { transform: 'rotate(360deg)' },
                            '100%': { transform: 'rotate(0deg)' },
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
        body { 
            font-family: 'Poppins', sans-serif; 
            scroll-behavior: smooth; 
            overflow-x: hidden; 
            background-color: #f8fafc;
        }

        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -5px; left: 0; background-color: #f97316; transition: width 0.3s ease; }
        .nav-link:hover::after, .active::after { width: 100%; }
        .process-card { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .process-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 25px 30px -5px rgba(249, 115, 22, 0.15); }
        .service-link:hover h3 { color: #f97316; transition: color 0.3s ease; }
        
        .fixed-bg-shapes {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none; z-index: 0; overflow: hidden;
        }
        .floating-shape { position: absolute; color: #f97316; opacity: 0.1; }
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
<body class="text-dark">

    <div class="fixed-bg-shapes">
        <div class="floating-shape animate-float" style="top: 10%; left: 5%;"><i class="fas fa-circle text-3xl"></i></div>
        <div class="floating-shape animate-float-delayed" style="top: 25%; right: 8%;"><i class="fas fa-square text-5xl animate-spin-slow-reverse"></i></div>
        <div class="floating-shape animate-float" style="top: 60%; left: 15%;"><i class="fas fa-star text-4xl animate-spin-slow"></i></div>
        <div class="floating-shape animate-float-delayed" style="top: 80%; right: 20%;"><i class="fas fa-play text-3xl transform rotate-45 animate-spin-slow"></i></div>
        <div class="floating-shape animate-float" style="top: 40%; left: 80%;"><i class="fas fa-certificate text-6xl animate-spin-slow-reverse opacity-5"></i></div>
    </div>

    <header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4 max-w-7xl relative z-10">
            <div class="flex justify-between items-center">
                <div class="flex items-center" data-aos="fade-right" data-aos-duration="800">
                    <a href="#home" class="text-2xl font-extrabold text-gray-800 flex items-center hover:scale-105 transition-transform duration-300">
                        BOUDALIA
                        <span class="bg-primary text-white text-sm px-2 py-1 rounded uppercase shadow-md ml-2">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                    <ul id="nav-menu" class="flex space-x-8 items-center">
                        <li><a href="#home" class="nav-link text-dark hover:text-primary font-medium">Home</a></li>
                        <li><a href="#about" class="nav-link text-dark hover:text-primary font-medium">About</a></li>
                        <li><a href="#services" class="nav-link text-dark hover:text-primary font-medium">Services</a></li>
                        <li><a href="#process" class="nav-link text-dark hover:text-primary font-medium">Process</a></li>
                        <li><a href="#portfolio" class="nav-link text-dark hover:text-primary font-medium">Portfolio</a></li>
                        <li><a href="#contact" class="nav-link text-dark hover:text-primary font-medium">Contact</a></li>
                        
                        <li class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                            <a href="index.php" class="text-primary">EN</a>
                            <span>|</span>
                            <a href="index_fr.php" class="hover:text-gray-800 transition">FR</a>
                        </li>
                    </ul>
                </nav>
                <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none" data-aos="fade-left">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white py-4 px-4 shadow-xl absolute w-full z-40 border-t border-gray-100">
            <ul class="space-y-4">
                <li><a href="#home" class="block text-dark hover:text-primary font-medium transition-colors">Home</a></li>
                <li><a href="#about" class="block text-dark hover:text-primary font-medium transition-colors">About</a></li>
                <li><a href="#services" class="block text-dark hover:text-primary font-medium transition-colors">Services</a></li>
                <li><a href="#process" class="block text-dark hover:text-primary font-medium transition-colors">Process</a></li>
                <li><a href="#portfolio" class="block text-dark hover:text-primary font-medium transition-colors">Portfolio</a></li>
                <li><a href="#contact" class="block text-dark hover:text-primary font-medium transition-colors">Contact</a></li>
                <li class="border-t pt-2 flex space-x-2 text-sm font-bold text-gray-400">
                    <a href="index.php" class="text-primary">EN</a>
                    <span>|</span>
                    <a href="index_fr.php" class="hover:text-gray-800 transition">FR</a>
                </li>
            </ul>
        </div>
    </header>

    <section id="home" class="py-20 md:py-32 bg-dark text-white relative z-10 overflow-hidden shadow-xl">
        <div class="absolute inset-0 bg-gradient-to-br from-dark to-gray-800 opacity-90"></div>
        <div class="container mx-auto px-4 max-w-7xl text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6" data-aos="zoom-out-up" data-aos-duration="1000">Creative Digital Agency</h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto text-gray-300" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">We transform your ideas into exceptional and high-performing digital experiences.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6" data-aos="fade-up" data-aos-delay="600">
                <a href="booking.php" class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-secondary transition duration-300 hover:-translate-y-2 animate-pulse-glow">Start a project</a>
                <a href="#services" class="border-2 border-white text-white font-bold py-4 px-10 rounded-full hover:bg-white hover:text-gray-900 transition duration-300 hover:-translate-y-2">Our services</a>
            </div>
            <div class="mt-16 text-primary opacity-50" data-aos="fade-in" data-aos-delay="1000">
                <i class="fas fa-chevron-down text-3xl animate-bounce"></i>
            </div>
        </div>
    </section>

    <section class="py-12 border-b border-gray-200/50 relative z-10 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary transition-all duration-300 transform hover:-translate-y-2" data-aos="flip-left" data-aos-delay="100">
                    <div class="text-primary text-3xl mb-3"><i class="fas fa-users"></i></div>
                    <p class="text-gray-500 font-medium mb-2">Team</p>
                    <h3 class="text-4xl font-extrabold text-dark"><span class="counter" data-target="10">0</span>+</h3>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary transition-all duration-300 transform hover:-translate-y-2" data-aos="flip-left" data-aos-delay="200">
                    <div class="text-primary text-3xl mb-3"><i class="fas fa-smile-beam"></i></div>
                    <p class="text-gray-500 font-medium mb-2">Satisfied Clients</p>
                    <h3 class="text-4xl font-extrabold text-dark"><span class="counter" data-target="85">0</span>+</h3>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary transition-all duration-300 transform hover:-translate-y-2" data-aos="flip-left" data-aos-delay="300">
                    <div class="text-primary text-3xl mb-3"><i class="fas fa-rocket"></i></div>
                    <p class="text-gray-500 font-medium mb-2">Completed Projects</p>
                    <h3 class="text-4xl font-extrabold text-dark"><span class="counter" data-target="60">0</span>+</h3>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary transition-all duration-300 transform hover:-translate-y-2" data-aos="flip-left" data-aos-delay="400">
                    <div class="text-primary text-3xl mb-3"><i class="fas fa-handshake"></i></div>
                    <p class="text-gray-500 font-medium mb-2">Partnerships</p>
                    <h3 class="text-4xl font-extrabold text-dark"><span class="counter" data-target="100">0</span>+</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white relative z-10 overflow-hidden shadow-sm">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative" data-aos="fade-right" data-aos-duration="1200">
                    <div class="absolute -inset-4 bg-primary opacity-20 blur-xl rounded-full animate-pulse-glow"></div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team working" class="relative rounded-3xl shadow-2xl w-full object-cover h-[500px] hover:scale-105 transition duration-700" loading="lazy">
                </div>
                <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1200">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-gray-500 mb-2 border-b-2 border-primary pb-1 inline-block">Helping your business practically</h4>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-8 text-dark">Why Choose <span class="text-primary animate-pulse inline-block">BOUDALIA</span></h2>
                    
                    <div class="flex space-x-6 border-b border-gray-200 mb-6 pb-3 text-sm font-bold text-gray-500 overflow-x-auto" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center text-dark border-b-2 border-primary pb-3 -mb-[14px] cursor-pointer whitespace-nowrap"><i class="fas fa-user-tie mr-2 text-primary"></i> Experience</div>
                        <div class="flex items-center cursor-pointer hover:text-primary whitespace-nowrap transition-colors"><i class="fas fa-cog mr-2"></i> Expertise</div>
                        <div class="flex items-center cursor-pointer hover:text-primary whitespace-nowrap transition-colors"><i class="fas fa-thumbs-up mr-2"></i> Client Satisfaction</div>
                    </div>

                    <p class="text-gray-600 mb-8 leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                        We have been in the industry for over 10 years, delivering successful projects to clients across various fields and sectors. We have a proven track record of providing high-quality results on time and within budget.
                    </p>
                    
                    <ul class="space-y-4 mb-10 text-dark font-medium" data-aos="fade-up" data-aos-delay="400">
                        <li class="flex items-center hover:translate-x-2 transition-transform"><i class="fas fa-arrow-right text-primary mr-3 bg-orange-100 p-2 rounded-full"></i> We provide top quality services</li>
                        <li class="flex items-center hover:translate-x-2 transition-transform"><i class="fas fa-arrow-right text-primary mr-3 bg-orange-100 p-2 rounded-full"></i> Our mission is to grow your business</li>
                        <li class="flex items-center hover:translate-x-2 transition-transform"><i class="fas fa-arrow-right text-primary mr-3 bg-orange-100 p-2 rounded-full"></i> A top-tier global presence</li>
                    </ul>

                    <a href="booking.php" class="inline-flex items-center bg-primary text-white font-bold py-3 px-8 rounded-full hover:bg-secondary hover:shadow-lg transition duration-300 hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="500">
                        Let's talk now <i class="fas fa-arrow-right ml-2 animate-bounce flex items-center" style="animation-direction: alternate;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 relative z-10 bg-light">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16 gap-8">
                <div class="md:w-1/3" data-aos="fade-right">
                    <h2 class="text-5xl font-extrabold text-dark leading-tight flex items-center">
                        Our<br>Services
                    </h2>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <p class="text-gray-700 font-medium leading-relaxed border-l-4 border-primary pl-4 bg-white p-4 rounded-r-xl shadow-sm">
                        At BOUDALIA Agency, we offer a range of innovative and cutting-edge solutions for your business needs. Whether you need web development, data analysis, or digital marketing.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-12">
                
                <a href="ui-ux.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:rotate-12 bg-orange-50">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">UX/UI Design <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Crafting intuitive, visually appealing, and user-centric digital experiences.</p>
                    </div>
                </a>

                <a href="web-dev.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:-rotate-12 bg-orange-50">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">Web Development <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Leverage the power of the web. Custom development for a stunning and functional website.</p>
                    </div>
                </a>

                <a href="e-commerce.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:rotate-12 bg-orange-50">
                        <i class="fas fa-store"></i> 
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">E-commerce Solutions <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Shopify, WooCommerce, and Stripe expertise. Launch a high-performing online store that converts.</p>
                    </div>
                </a>

                <a href="digital-marketing.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:-rotate-12 bg-orange-50">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">Digital Marketing <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Targeted advertising and data analytics, we create results-driven campaigns.</p>
                    </div>
                </a>

                <a href="seo.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:rotate-12 bg-orange-50">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">SEO Optimization <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Dominate search engine rankings and boost organic traffic with our strategies.</p>
                    </div>
                </a>

                <a href="smm.php" class="flex items-start gap-5 service-link cursor-pointer block group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 hover:-translate-y-2 border border-transparent hover:border-primary" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-14 h-14 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition duration-500 group-hover:-rotate-12 bg-orange-50">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-dark flex items-center group-hover:text-primary transition duration-300">Social Media <i class="fas fa-arrow-right text-sm ml-2 text-primary opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"></i></h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Engage and thrive. Amplify your brand presence with our Social Media services.</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section id="process" class="py-24 bg-white relative z-10 overflow-hidden shadow-sm">
        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="text-center mb-16" data-aos="zoom-in">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-dark">Our Working Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto p-3 rounded-lg inline-block bg-light shadow-sm">We follow a simple and effective process to deliver the best solutions for your business needs.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-light rounded-[2rem] p-10 text-center process-card transition duration-500 border border-transparent hover:border-orange-200" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative inline-block text-dark text-6xl mb-6">
                        <i class="fas fa-certificate text-orange-200 animate-spin-slow"></i>
                        <span class="absolute inset-0 flex items-center justify-center text-primary text-2xl font-black">1</span>
                    </div>
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/business-consultation-4268356-3560995.png" alt="Consultation" class="h-48 mx-auto mb-6 object-contain transform hover:scale-110 transition duration-500" loading="lazy">
                    <h3 class="text-3xl font-extrabold mb-4 text-dark text-left">Consultation</h3>
                    <p class="text-gray-600 text-left leading-relaxed">We understand your goals, challenges, and expectations through in-depth industry research.</p>
                </div>

                <div class="bg-light rounded-[2rem] p-10 text-center process-card transition duration-500 border border-transparent hover:border-orange-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative inline-block text-dark text-6xl mb-6">
                        <i class="fas fa-certificate text-orange-200 animate-spin-slow"></i>
                        <span class="absolute inset-0 flex items-center justify-center text-primary text-2xl font-black">2</span>
                    </div>
                    <h3 class="text-3xl font-extrabold mb-4 text-dark text-left">Planning</h3>
                    <p class="text-gray-600 text-left leading-relaxed mb-6">We create a detailed plan, define the scope, timeline, budget, and select the technologies.</p>
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/business-planning-4268361-3560999.png" alt="Planning" class="h-48 mx-auto object-contain transform hover:scale-110 transition duration-500" loading="lazy">
                </div>

                <div class="bg-light rounded-[2rem] p-10 text-center process-card transition duration-500 border border-transparent hover:border-orange-200" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative inline-block text-dark text-6xl mb-6">
                        <i class="fas fa-certificate text-orange-200 animate-spin-slow"></i>
                        <span class="absolute inset-0 flex items-center justify-center text-primary text-2xl font-black">3</span>
                    </div>
                    <h3 class="text-3xl font-extrabold mb-4 text-dark text-left">Execution</h3>
                    <p class="text-gray-600 text-left leading-relaxed mb-6">Developing your solution following the best standards, with rigorous testing and debugging.</p>
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/business-execution-4268358-3560997.png" alt="Execution" class="h-48 mx-auto object-contain transform hover:scale-110 transition duration-500" loading="lazy">
                </div>

                <div class="bg-light rounded-[2rem] p-10 text-center process-card transition duration-500 border border-transparent hover:border-orange-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative inline-block text-dark text-6xl mb-6">
                        <i class="fas fa-certificate text-orange-200 animate-spin-slow"></i>
                        <span class="absolute inset-0 flex items-center justify-center text-primary text-2xl font-black">4</span>
                    </div>
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/product-delivery-4268368-3561006.png" alt="Delivery" class="h-48 mx-auto mb-6 object-contain transform hover:scale-110 transition duration-500" loading="lazy">
                    <h3 class="text-3xl font-extrabold mb-4 text-dark text-left">Delivery</h3>
                    <p class="text-gray-600 text-left leading-relaxed">Launching to the world. We provide training, documentation, and continuous support.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 relative z-10 bg-light">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-dark">Our Portfolio</h2>
                <p class="text-gray-700 font-medium max-w-2xl mx-auto bg-white p-3 rounded-lg inline-block shadow-sm">Discover some of our recent projects that showcase our expertise and creativity.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 border border-gray-100 group" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="overflow-hidden relative">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="E-commerce project" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-700" loading="lazy">
                    </div>
                    <div class="p-6 relative z-20 bg-white group-hover:bg-orange-50 transition duration-500">
                        <h3 class="text-xl font-bold mb-2">E-commerce Store</h3>
                        <p class="text-gray-600 mb-4 text-sm">Complete online store with secure payment system</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center group-hover:translate-x-2 transition-transform">View Project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 border border-gray-100 group" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="overflow-hidden relative">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" alt="Mobile application" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-700" loading="lazy">
                    </div>
                    <div class="p-6 relative z-20 bg-white group-hover:bg-orange-50 transition duration-500">
                        <h3 class="text-xl font-bold mb-2">Mobile App</h3>
                        <p class="text-gray-600 mb-4 text-sm">Management app for innovative businesses</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center group-hover:translate-x-2 transition-transform">View Project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 border border-gray-100 group" data-aos="zoom-in-up" data-aos-delay="500">
                    <div class="overflow-hidden relative">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Website redesign" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-700" loading="lazy">
                    </div>
                    <div class="p-6 relative z-20 bg-white group-hover:bg-orange-50 transition duration-500">
                        <h3 class="text-xl font-bold mb-2">Website Redesign</h3>
                        <p class="text-gray-600 mb-4 text-sm">Digital transformation of an existing corporate website</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center group-hover:translate-x-2 transition-transform">View Project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-white relative z-10 overflow-hidden shadow-sm border-t border-gray-100">
        <div class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-orange-200 rounded-full blur-[100px] opacity-50 z-0"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-dark">Contact Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Ready to start your project? We are here to listen.</p>
            </div>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                    <form id="contact-form" class="bg-light p-8 md:p-10 rounded-3xl shadow-md border border-gray-100 hover:shadow-xl transition duration-500 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-white transition duration-300 hover:bg-white" placeholder="Your name" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-white transition duration-300 hover:bg-white" placeholder="your@email.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-white transition duration-300 hover:bg-white" placeholder="Tell us about your project..." required></textarea>
                        </div>
                        <button id="submit-btn" type="submit" class="w-full bg-primary text-white font-bold py-4 px-8 rounded-xl hover:bg-secondary hover:shadow-lg hover:-translate-y-1 transition-all duration-300">Send Message <i class="fas fa-paper-plane ml-2"></i></button>
                        <div id="form-response" class="hidden mt-4 p-4 rounded-xl text-sm font-medium text-center transition-all duration-300"></div>
                    </form>
                </div>
                <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bg-dark text-white p-8 md:p-10 rounded-3xl shadow-xl h-full flex flex-col justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-10 transition-opacity duration-700"></div>
                        <i class="fas fa-envelope-open-text absolute right-[-20px] bottom-[-20px] text-9xl opacity-5 transform group-hover:-rotate-12 transition duration-700"></i>
                        
                        <h3 class="text-3xl font-extrabold mb-8 relative z-10">Direct Information</h3>
                        <div class="space-y-8 relative z-10">
                            <div class="flex items-center group/item hover:translate-x-2 transition-transform">
                                <div class="w-14 h-14 bg-gray-800 text-primary rounded-2xl flex items-center justify-center text-xl mr-5 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Address</h4>
                                    <p class="text-gray-400">14BIS Avenue de Stalingrad, Saint-Denis (93200)</p>
                                </div>
                            </div>
                            <div class="flex items-center group/item hover:translate-x-2 transition-transform">
                                <div class="w-14 h-14 bg-gray-800 text-primary rounded-2xl flex items-center justify-center text-xl mr-5 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Phone</h4>
                                    <p class="text-gray-400">+33 06 56 81 35 03</p>
                                </div>
                            </div>
                            <div class="flex items-center group/item hover:translate-x-2 transition-transform">
                                <div class="w-14 h-14 bg-gray-800 text-primary rounded-2xl flex items-center justify-center text-xl mr-5 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Email</h4>
                                    <p class="text-gray-400">contact@boudalia-agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white text-dark py-16 mt-0 border-t border-gray-200 relative z-10" data-aos="fade-up" data-aos-duration="800">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between gap-10 mb-16">
                
                <div class="md:w-5/12">
                    <h2 class="text-3xl font-extrabold text-gray-800 mb-6 tracking-tight flex items-center">
                        BOUDALIA <span class="bg-primary text-white text-sm px-2 py-1 rounded ml-2 uppercase font-bold hover:animate-pulse">Agency</span>
                    </h2>
                    <p class="text-gray-700 font-medium text-sm leading-relaxed pr-4">
                        BOUDALIA Agency is your premier destination for all your digital needs. From creating visually stunning websites to crafting seamless user experiences, we build impactful solutions tailored for your growth.
                    </p>
                </div>

                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="#home" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Home</a></li>
                        <li><a href="#about" class="hover:text-primary transition hover:translate-x-2 inline-block transform">About</a></li>
                        <li><a href="#services" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        
                        <li><a href="ui-ux.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Web Development</a></li>
                        <li><a href="e-commerce.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">E-commerce Solutions</a></li>
                        <li><a href="digital-marketing.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Digital Marketing</a></li>
                        <li><a href="seo.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">SEO Optimization</a></li>
                        <li><a href="smm.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Social Media</a></li>
                    </ul>
                </div>

                <div class="md:w-4/12 md:text-right font-bold text-gray-800 text-sm flex flex-col space-y-3">
                    <a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a>
                    <a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a>
                    
                    <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col space-y-3">
                        <a href="privacy-policy.php" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Privacy Policy</a>
                        <a href="terms-conditions.php" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Terms & Conditions</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-700 font-medium mt-12 border-t border-gray-200 pt-8">
                <p>&copy; 2026 BOUDALIA Agency. All rights reserved.</p>
                <div class="flex space-x-4 mt-6 md:mt-0">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 bg-white flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white hover:border-primary transition duration-300 hover:rotate-[360deg]">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 bg-white flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white hover:border-primary transition duration-300 hover:rotate-[360deg]">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 bg-white flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white hover:border-primary transition duration-300 hover:rotate-[360deg]">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-400 bg-white flex items-center justify-center text-gray-800 hover:bg-primary hover:text-white hover:border-primary transition duration-300 hover:rotate-[360deg]">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });

        // Mobile Menu
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        mobileMenuButton.addEventListener("click", () => mobileMenu.classList.toggle("hidden"));

        // PHP FORM SUBMISSION LOGIC
        const contactForm = document.getElementById("contact-form");
        const submitBtn = document.getElementById("submit-btn");
        const formResponse = document.getElementById("form-response");

        if(contactForm) {
            contactForm.addEventListener("submit", function(e) {
                e.preventDefault();
                
                // Loading state
                submitBtn.disabled = true;
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-circle-notch animate-spin mr-2"></i> Sending...';

                // Collect data
                const formData = new FormData(this);

                // AJAX Request to contact.php
                fetch('contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    formResponse.classList.remove("hidden", "bg-green-100", "text-green-700", "bg-red-100", "text-red-700");
                    
                    if(data.status === 'success') {
                        formResponse.classList.add("bg-green-100", "text-green-700");
                        formResponse.innerHTML = '<i class="fas fa-check-circle mr-2"></i>' + data.message;
                        contactForm.reset();
                    } else {
                        formResponse.classList.add("bg-red-100", "text-red-700");
                        formResponse.innerHTML = "Error: " + data.message;
                    }
                })
                .catch(error => {
                    formResponse.classList.remove("hidden");
                    formResponse.classList.add("bg-red-100", "text-red-700");
                    formResponse.innerHTML = "An error occurred while sending.";
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
            });
        }
    </script>
</body>
</html>