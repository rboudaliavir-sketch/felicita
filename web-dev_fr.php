<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development - BOUDALIA Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Services de développement web experts par BOUDALIA Agency. Créez des sites web modernes, rapides et responsifs avec les dernières technologies.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
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
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'scroll-left': 'scroll-left 35s linear infinite',
                        'scroll-right': 'scroll-right 35s linear infinite',
                        'spin-slow': 'spin 10s linear infinite',
                        'spin-slow-reverse': 'spin-reverse 12s linear infinite',
                        'pulse-glow': 'pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'flow-down': 'flow-down 4s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'scroll-left': {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        'scroll-right': {
                            '0%': { transform: 'translateX(-50%)' },
                            '100%': { transform: 'translateX(0)' },
                        },
                        'spin-reverse': {
                            '0%': { transform: 'rotate(360deg)' },
                            '100%': { transform: 'rotate(0deg)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: 1, boxShadow: '0 0 15px rgba(249,115,22,0.4)' },
                            '50%': { opacity: .8, boxShadow: '0 0 30px rgba(249,115,22,0.8)' },
                        },
                        'flow-down': {
                            '0%': { top: '-10%', opacity: 0 },
                            '20%': { opacity: 1 },
                            '80%': { opacity: 1 },
                            '100%': { top: '110%', opacity: 0 }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; overflow-x: hidden; }
        .starburst { color: #f97316; font-size: 3rem; position: absolute; z-index: -1; opacity: 0.8; }
        
        /* Tech Stack Animations */
        .marquee-container { display: flex; width: 200%; }
        .fade-edges { position: relative; }
        .fade-edges::before, .fade-edges::after {
            content: ""; position: absolute; top: 0; width: 80px; height: 100%; z-index: 10;
        }
        .fade-edges::before { left: 0; background: linear-gradient(to right, #f8fafc 0%, rgba(248,250,252,0) 100%); }
        .fade-edges::after { right: 0; background: linear-gradient(to left, #f8fafc 0%, rgba(248,250,252,0) 100%); }
        .tech-card {
            display: flex; align-items: center; gap: 12px; background: white; padding: 12px 24px;
            border-radius: 99px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid #f1f5f9;
            margin: 0 12px; transition: transform 0.3s ease;
        }
        .tech-card:hover { transform: translateY(-5px) scale(1.05); border-color: #f97316; box-shadow: 0 10px 15px -3px rgba(249,115,22,0.2); z-index: 20;}

        /* Workflow Effects */
        .node-card { transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .node-card:hover { transform: translateY(-10px) scale(1.03); box-shadow: 0 25px 30px -5px rgba(249, 115, 22, 0.15); border-color: #f97316;}
        
        /* Animated Background Snowflakes */
        .fixed-bg-snowflakes {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none; z-index: 0; overflow: hidden;
        }
        .snowflake { position: absolute; color: #f97316; opacity: 0.15; }
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
<body class="bg-white text-dark overflow-x-hidden">

    <div class="fixed-bg-snowflakes">
        <div class="snowflake animate-float" style="top: 15%; left: 8%;"><i class="fas fa-code text-4xl animate-spin-slow"></i></div>
        <div class="snowflake animate-float-delayed" style="top: 25%; right: 12%;"><i class="fas fa-certificate text-6xl animate-spin-slow-reverse opacity-50"></i></div>
        <div class="snowflake animate-float" style="top: 65%; left: 20%;"><i class="far fa-snowflake text-5xl animate-spin-slow"></i></div>
        <div class="snowflake animate-float-delayed" style="top: 75%; right: 15%;"><i class="fas fa-terminal text-4xl animate-spin-slow-reverse"></i></div>
        <div class="snowflake animate-float" style="top: 45%; left: 85%;"><i class="fas fa-cube text-7xl animate-spin-slow opacity-10"></i></div>
    </div>

    <header class="bg-white shadow-sm sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4 max-w-7xl relative z-10">
            <div class="flex justify-between items-center">
                <div class="flex items-center" data-aos="fade-right" data-aos-duration="800">
                    <a href="index.php" class="text-2xl font-extrabold text-gray-800 flex items-center hover:scale-105 transition-transform duration-300">
                        BOUDALIA<span class="bg-primary text-white text-sm px-2 py-1 rounded ml-1 uppercase shadow-md">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-8" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="index.php" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Home</a></li>
                        <li><a href="services.php" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Services</a></li>
                        <li><a href="index.html#portfolio" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Portfolio</a></li>
                    </ul>
                    
                    <a href="booking.php" class="bg-primary text-white font-bold py-2 px-6 rounded-full hover:bg-secondary transition hover:-translate-y-1 hover:shadow-lg animate-pulse-glow" data-aos="fade-left">Book a Call</a>
                    
                    <div class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                        <a href="web-dev.php" class="text-primary">EN</a>
                        <span>|</span>
                        <a href="web-dev_fr.php" class="hover:text-gray-800 transition">FR</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="py-20 md:py-28 relative overflow-hidden bg-white z-10 border-b border-gray-100">
        <i class="fas fa-certificate starburst top-10 left-32 animate-spin-slow-reverse"></i>
        <i class="fas fa-code starburst bottom-10 right-32 animate-spin-slow text-orange-200"></i>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 text-dark" data-aos="zoom-out-up" data-aos-duration="1000">
                Web <span class="text-primary inline-block animate-pulse">Development</span>
            </h1>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                At BOUDALIA Agency, we craft exceptional, high-performance, and secure web solutions tailored to meet your unique business needs.
            </p>
            <div data-aos="fade-up" data-aos-delay="500">
                <a href="#stack" class="inline-block border-2 border-primary text-primary font-bold py-3 px-8 rounded-full hover:bg-primary hover:text-white transition duration-300 hover:-translate-y-2 shadow-sm hover:shadow-lg animate-bounce">
                    Discover our expertise <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-light relative z-10">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative group" data-aos="fade-right" data-aos-duration="1200">
                    <div class="absolute -inset-4 bg-primary opacity-20 blur-xl rounded-[2.5rem] animate-pulse-glow"></div>
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Web Developer at work" class="relative rounded-[2rem] shadow-2xl w-full object-cover h-[500px] transform transition duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1200">
                    <h4 class="text-sm font-bold text-gray-800 mb-4 border-b-2 border-primary pb-2 inline-block uppercase tracking-wider">Robust – Scalable – Secure</h4>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-dark leading-tight">Drive Your Business Success with <span class="text-primary">Web Dev</span></h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-14 h-14 rounded-xl bg-orange-50 flex items-center justify-center text-primary text-2xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Custom Web Development</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Tailored solutions engineered to precisely match the unique requirements of your business.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-14 h-14 rounded-xl bg-orange-50 flex items-center justify-center text-primary text-2xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">100% Responsive Design</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">We optimize the user experience across all devices, from desktops to smartphones and tablets.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-14 h-14 rounded-xl bg-orange-50 flex items-center justify-center text-primary text-2xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Extreme Performance</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Clean code, optimized queries, and an architecture designed for lightning-fast load times.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stack" class="py-24 bg-white fade-edges overflow-hidden relative z-10">
        <div class="container mx-auto px-4 text-center mb-16" data-aos="zoom-in">
            <h4 class="text-sm font-bold uppercase tracking-wider text-primary mb-2">Technologies & Tools</h4>
            <h2 class="text-4xl md:text-5xl font-extrabold text-dark">Our Tech <span class="text-primary">Stack</span></h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">We master the most modern frameworks and programming languages to guarantee performance, security, and scalability.</p>
        </div>

        <div class="flex flex-col gap-10 w-full relative">
            
            <div class="flex items-center" data-aos="fade-left" data-aos-delay="100">
                <div class="w-48 md:w-64 shrink-0 z-20 bg-white pl-4 md:pl-10">
                    <div class="inline-flex items-center gap-3 bg-light px-5 py-3 rounded-2xl shadow-sm border border-gray-200 border-l-4 border-l-primary hover:scale-105 transition-transform">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shadow-sm">
                            <i class="fas fa-laptop-code text-lg"></i>
                        </div>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-sm hidden md:block">Front-End</h3>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-xs md:hidden">Front</h3>
                    </div>
                </div>
                <div class="marquee-container animate-scroll-left">
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" class="w-8 h-8" alt="React"><span class="font-bold">React.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" class="w-8 h-8" alt="Vue.js"><span class="font-bold">Vue.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nextjs/nextjs-original.svg" class="w-8 h-8" alt="Next.js"><span class="font-bold">Next.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" class="w-8 h-8" alt="Tailwind CSS"><span class="font-bold">Tailwind CSS</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" class="w-8 h-8" alt="HTML5"><span class="font-bold">HTML5</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" class="w-8 h-8" alt="JavaScript"><span class="font-bold">JavaScript</span></div>
                    </div>
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" class="w-8 h-8" alt="React"><span class="font-bold">React.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" class="w-8 h-8" alt="Vue.js"><span class="font-bold">Vue.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nextjs/nextjs-original.svg" class="w-8 h-8" alt="Next.js"><span class="font-bold">Next.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" class="w-8 h-8" alt="Tailwind CSS"><span class="font-bold">Tailwind CSS</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" class="w-8 h-8" alt="HTML5"><span class="font-bold">HTML5</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" class="w-8 h-8" alt="JavaScript"><span class="font-bold">JavaScript</span></div>
                    </div>
                </div>
            </div>

            <div class="flex items-center" data-aos="fade-right" data-aos-delay="200">
                <div class="w-48 md:w-64 shrink-0 z-20 bg-white pl-4 md:pl-10">
                    <div class="inline-flex items-center gap-3 bg-light px-5 py-3 rounded-2xl shadow-sm border border-gray-200 border-l-4 border-l-primary hover:scale-105 transition-transform">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shadow-sm">
                            <i class="fas fa-server text-lg"></i>
                        </div>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-sm hidden md:block">Back-End</h3>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-xs md:hidden">Back</h3>
                    </div>
                </div>
                <div class="marquee-container animate-scroll-right">
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/django/django-plain.svg" class="w-8 h-8" alt="Django"><span class="font-bold">Django</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" class="w-8 h-8" alt="Python"><span class="font-bold">Python</span></div>
                        <div class="tech-card border-orange-200 bg-orange-50 text-primary"><i class="fas fa-layer-group text-2xl"></i><span class="font-extrabold">MERN Stack</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg" class="w-8 h-8" alt="Node.js"><span class="font-bold">Node.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/express/express-original.svg" class="w-8 h-8 invert" alt="Express"><span class="font-bold">Express.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" class="w-8 h-8" alt="PHP"><span class="font-bold">PHP / Laravel</span></div>
                    </div>
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/django/django-plain.svg" class="w-8 h-8" alt="Django"><span class="font-bold">Django</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" class="w-8 h-8" alt="Python"><span class="font-bold">Python</span></div>
                        <div class="tech-card border-orange-200 bg-orange-50 text-primary"><i class="fas fa-layer-group text-2xl"></i><span class="font-extrabold">MERN Stack</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg" class="w-8 h-8" alt="Node.js"><span class="font-bold">Node.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/express/express-original.svg" class="w-8 h-8 invert" alt="Express"><span class="font-bold">Express.js</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" class="w-8 h-8" alt="PHP"><span class="font-bold">PHP / Laravel</span></div>
                    </div>
                </div>
            </div>

            <div class="flex items-center" data-aos="fade-left" data-aos-delay="300">
                <div class="w-48 md:w-64 shrink-0 z-20 bg-white pl-4 md:pl-10">
                    <div class="inline-flex items-center gap-3 bg-light px-5 py-3 rounded-2xl shadow-sm border border-gray-200 border-l-4 border-l-primary hover:scale-105 transition-transform">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shadow-sm">
                            <i class="fas fa-cloud text-lg"></i>
                        </div>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-sm hidden md:block">Cloud & DB</h3>
                        <h3 class="font-extrabold text-dark uppercase tracking-wider text-xs md:hidden">Data</h3>
                    </div>
                </div>
                <div class="marquee-container animate-scroll-left" style="animation-duration: 45s;">
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg" class="w-8 h-8" alt="MongoDB"><span class="font-bold">MongoDB</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg" class="w-8 h-8" alt="PostgreSQL"><span class="font-bold">PostgreSQL</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-8" alt="AWS"><span class="font-bold">AWS</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg" class="w-8 h-8" alt="Docker"><span class="font-bold">Docker</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/firebase/firebase-original.svg" class="w-8 h-8" alt="Firebase"><span class="font-bold">Firebase</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" class="w-8 h-8" alt="Git"><span class="font-bold">Git & CI/CD</span></div>
                    </div>
                    <div class="flex items-center">
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg" class="w-8 h-8" alt="MongoDB"><span class="font-bold">MongoDB</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg" class="w-8 h-8" alt="PostgreSQL"><span class="font-bold">PostgreSQL</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-8" alt="AWS"><span class="font-bold">AWS</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg" class="w-8 h-8" alt="Docker"><span class="font-bold">Docker</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/firebase/firebase-original.svg" class="w-8 h-8" alt="Firebase"><span class="font-bold">Firebase</span></div>
                        <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" class="w-8 h-8" alt="Git"><span class="font-bold">Git & CI/CD</span></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-peach relative z-10 overflow-hidden border-t border-gray-200">
        <div class="absolute right-0 top-10 text-primary opacity-5"><i class="fas fa-project-diagram text-[25rem] animate-spin-slow-reverse"></i></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="text-center mb-20" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-extrabold text-dark leading-tight mb-4">Development<br><span class="text-primary">Workflow</span></h2>
                <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    A structured node-based process to guarantee flawless execution, from initial design to production launch.
                </p>
            </div>

            <div class="relative w-full max-w-5xl mx-auto">
                
                <div class="absolute left-8 md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-orange-200 rounded-full z-0 overflow-hidden">
                    <div class="absolute w-full h-32 bg-gradient-to-b from-transparent via-primary to-transparent animate-flow-down"></div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">1</div>
                    <div class="w-full pl-20 md:pl-0 md:w-5/12 md:pr-12" data-aos="fade-right" data-aos-delay="100">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-l-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Technical Scoping</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Defining requirements, choosing the right languages, frameworks, and hosting tailored to your specific goals.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group md:flex-row-reverse">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">2</div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="200">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Data Architecture</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Designing data models and server architecture. A well-structured database is vital to your project's success.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">3</div>
                    <div class="w-full pl-20 md:pl-0 md:w-5/12 md:pr-12" data-aos="fade-right" data-aos-delay="300">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-l-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Front-End Dev</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Pixel-perfect integration of UI mockups. Delivering an interactive and perfectly responsive experience across all devices.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group md:flex-row-reverse">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">4</div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="400">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Back-End Dev & API</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Building the business logic, integrating payment systems, creating custom APIs, and connecting to third-party services.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">5</div>
                    <div class="w-full pl-20 md:pl-0 md:w-5/12 md:pr-12" data-aos="fade-right" data-aos-delay="500">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-l-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Testing & QA</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Rigorous debugging, load testing, automated tests, and extensive security vulnerability checks.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full group md:flex-row-reverse" id="deployment-node">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-primary text-white font-extrabold flex items-center justify-center shadow-[0_0_15px_rgba(249,115,22,0.6)] z-20 group-hover:scale-125 transition-all duration-500 animate-pulse-glow">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="600">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Deployment & Success</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Production launch on your cloud servers, DNS configuration, and continuous post-launch technical support.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-0 mb-20 relative z-20">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-gray-900 to-primary rounded-[3rem] flex flex-col md:flex-row items-center overflow-hidden shadow-2xl relative" data-aos="zoom-in" data-aos-duration="1000">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay"></div>
                <div class="absolute top-10 right-20 text-white opacity-20 animate-float"><i class="fas fa-satellite text-9xl"></i></div>
                
                <div class="md:w-1/2 h-full z-10 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80" alt="Code on screen" class="w-full h-full object-cover min-h-[400px] transition-transform duration-1000 hover:scale-110 opacity-90 mix-blend-overlay">
                </div>
                <div class="md:w-1/2 p-10 md:p-16 text-white relative z-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">Technical solutions aligned with your ambitions</h2>
                    <p class="text-gray-200 mb-10 text-lg leading-relaxed">
                        Whether you need a lightning-fast corporate site, a complex e-commerce platform, or a custom business application, our team of experts has the solution.
                    </p>
                    <a href="booking.php" class="inline-block bg-white text-primary font-bold py-4 px-10 rounded-full hover:bg-dark hover:text-white transition duration-500 shadow-lg transform hover:-translate-y-2 hover:shadow-2xl animate-pulse-glow">
                        Book a Call <i class="fas fa-arrow-right ml-2"></i>
                    </a>
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
                        BOUDALIA Agency is your premier destination for all your digital needs. From creating visually stunning websites on Shopify and WordPress to designing seamless user experiences (UI/UX).
                    </p>
                </div>
                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="index.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Home</a></li>
                        <li><a href="services.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        <li><a href="ui-ux.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev.php" class="text-primary transition hover:translate-x-2 inline-block transform">Web Development</a></li>
                        <li><a href="e-commerce.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">E-commerce Solutions</a></li>
                        <li><a href="digital-marketing.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Digital Marketing</a></li>
                        <li><a href="seo.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">SEO Optimization</a></li>
                        <li><a href="smm.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Social Media Marketing</a></li>
                    </ul>
                </div>
                <div class="md:w-4/12 md:text-right font-bold text-gray-800 text-sm flex flex-col space-y-3">
                    <a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a>
                    <a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a>
                    <div class="mt-8 pt-6 flex flex-col space-y-3">
                        <a href="privacy-policy.php" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Privacy Policy</a>
                        <a href="terms-conditions.php" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-12 border-t border-gray-200 pt-8">
                <p>&copy; 2026 BOUDALIA Agency. All rights reserved.</p>
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
        AOS.init({
            once: true,
            offset: 100, 
        });

        // Mobile Menu Button Logic (if needed)
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        if(mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        }

        // Fireworks Animation (Confetti) triggered on "Deployment" node visibility
        function triggerFireworks() {
            var duration = 3 * 1000; 
            var end = Date.now() + duration;

            (function frame() {
                // Left fireworks
                confetti({
                    particleCount: 5,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 },
                    colors: ['#f97316', '#ea580c', '#ffffff']
                });
                // Right fireworks
                confetti({
                    particleCount: 5,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 },
                    colors: ['#f97316', '#ea580c', '#ffffff']
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        }

        // Intersection Observer to trigger fireworks only once
        let deploymentObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Small delay to let the AOS animation finish
                    setTimeout(() => {
                        triggerFireworks();
                    }, 500);
                    // Stop observing after firing
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 }); // 50% of the node must be visible

        // Target the "Deployment" node
        const deploymentNode = document.getElementById('deployment-node');
        if(deploymentNode) {
            deploymentObserver.observe(deploymentNode);
        }
    </script>
</body>
</html>