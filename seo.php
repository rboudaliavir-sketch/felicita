<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Optimization - BOUDALIA Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Expert SEO optimization services by BOUDALIA Agency. Improve your search engine rankings and drive organic traffic to your website.">
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
        .bg-grid-pattern {
            background-image: radial-gradient(rgba(249, 115, 22, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        
        /* Workflow / Process Effects */
        .node-card { transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .node-card:hover { transform: translateY(-10px) scale(1.03); box-shadow: 0 25px 30px -5px rgba(249, 115, 22, 0.15); border-color: #f97316;}
        
        /* SEO Snowflakes/Shapes Animated Background */
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
        <div class="snowflake animate-float" style="top: 15%; left: 8%;"><i class="fas fa-search text-4xl animate-spin-slow"></i></div>
        <div class="snowflake animate-float-delayed" style="top: 25%; right: 12%;"><i class="fas fa-chart-line text-6xl animate-spin-slow-reverse opacity-50"></i></div>
        <div class="snowflake animate-float" style="top: 65%; left: 20%;"><i class="fas fa-link text-5xl animate-spin-slow"></i></div>
        <div class="snowflake animate-float-delayed" style="top: 75%; right: 15%;"><i class="fas fa-globe text-4xl animate-spin-slow-reverse"></i></div>
        <div class="snowflake animate-float" style="top: 45%; left: 85%;"><i class="fas fa-chart-bar text-7xl animate-spin-slow opacity-10"></i></div>
    </div>

    <header class="bg-white shadow-sm sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4 max-w-7xl relative z-10">
            <div class="flex justify-between items-center">
                <div class="flex items-center" data-aos="fade-right" data-aos-duration="800">
                    <a href="index.php" class="text-2xl font-extrabold text-gray-800 flex items-center hover:scale-105 transition-transform duration-300">
                        BOUDALIA<span class="bg-primary text-white text-sm px-2 py-1 rounded ml-1 uppercase shadow-md">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="index.html#home" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Home</a></li>
                        <li><a href="index.html#about" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">About</a></li>
                        <li><a href="index.html#services" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Services</a></li>
                        <li><a href="index.html#portfolio" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Portfolio</a></li>
                        <li><a href="index.html#contact" class="hover:text-primary transition hover:-translate-y-1 inline-block transform">Contact</a></li>
                    </ul>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="index.html#contact" class="hidden md:block bg-primary text-white font-bold py-2 px-6 rounded-full hover:bg-secondary transition hover:-translate-y-1 hover:shadow-lg animate-pulse-glow" data-aos="fade-left">Hire Us</a>
                    <div class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                        <a href="seo.php" class="text-primary">EN</a>
                        <span>|</span>
                        <a href="seo_fr.php" class="hover:text-gray-800 transition">FR</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-24 md:py-32 relative overflow-hidden bg-dark z-10">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
            <i class="fas fa-search text-primary text-6xl absolute top-20 left-[10%] animate-float" style="animation-delay: 0s;"></i>
            <i class="fas fa-chart-pie text-white text-5xl absolute top-40 right-[15%] animate-float" style="animation-delay: 2s;"></i>
            <i class="fas fa-level-up-alt text-primary text-7xl absolute bottom-20 left-[20%] animate-float" style="animation-delay: 4s;"></i>
            <i class="fas fa-link text-white text-4xl absolute bottom-40 right-[10%] animate-float" style="animation-delay: 1s;"></i>
        </div>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight" data-aos="zoom-out-up" data-aos-duration="1000">
                SEO <span class="text-primary inline-block animate-pulse">Optimization</span>
            </h1>
            <p class="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                Unlock top rankings and increased visibility with our custom SEO strategies. Leverage the power of advanced optimization techniques for sustainable digital growth with BOUDALIA Agency.
            </p>
            <div data-aos="fade-up" data-aos-delay="500">
                <a href="#process" class="inline-block border-2 border-primary text-primary font-bold py-3 px-8 rounded-full hover:bg-primary hover:text-white transition duration-300 hover:-translate-y-2 animate-bounce">
                    Our SEO Strategy <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white relative z-10 overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative group" data-aos="fade-right" data-aos-duration="1200">
                    <div class="absolute -inset-4 bg-primary opacity-20 blur-xl rounded-[2.5rem] animate-pulse-glow"></div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="SEO Analysis and Rankings" class="relative rounded-[2rem] shadow-2xl w-full object-cover h-[500px] transform transition duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                
                <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1200">
                    <h4 class="text-sm font-bold text-gray-800 mb-4 border-b-2 border-primary pb-2 inline-block uppercase tracking-wider">Passionate – Dedicated – Professional</h4>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-dark leading-tight">Propel Your Business Success with <span class="text-primary">SEO</span></h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100 hover:bg-orange-50" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Strategic Keyword Analysis</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Increase your online presence by meticulously targeting the most relevant and profitable keywords for your industry.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100 hover:bg-orange-50" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">On-Page Optimization Mastery</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Experience a meteoric rise in search engine rankings through our expert structural optimization techniques.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group hover:translate-x-2 transition-transform duration-300 bg-white p-4 rounded-2xl shadow-sm border border-transparent hover:border-orange-100 hover:bg-orange-50" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center text-primary text-xl shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Tailored Content Strategy</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Harness the power of purpose-built content to engage your audience and boost your brand's visibility.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="py-24 bg-peach relative z-10 overflow-hidden border-t border-gray-200">
        <div class="absolute right-0 top-10 text-primary opacity-5"><i class="fas fa-search-plus text-[25rem] animate-spin-slow-reverse"></i></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="text-center mb-20" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-extrabold text-dark leading-tight mb-4">The Steps <br><span class="text-primary">We Follow</span></h2>
                <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    At BOUDALIA Agency, our approach to search engine optimization is designed to propel your online presence to new heights. Here is our method for driving quality organic traffic.
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
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Comprehensive Site Analysis</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Our journey begins with an in-depth analysis of your site's current state. We evaluate the structure, content quality, and technical elements. This insightful audit forms the foundation of a tailored SEO strategy.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group md:flex-row-reverse">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">2</div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="200">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Keyword Research & Strategy</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Strategic keyword selection is paramount. We conduct thorough research to identify phrases that resonate with your target audience. We then optimize your content to align perfectly with search intent.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">3</div>
                    <div class="w-full pl-20 md:pl-0 md:w-5/12 md:pr-12" data-aos="fade-right" data-aos-delay="300">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-l-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">On-Page Optimization</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Our experts implement on-page optimization techniques, fine-tuning meta tags, headers, and content structure. This meticulous approach enhances your site's relevance to search engines.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group md:flex-row-reverse">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">4</div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="400">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Technical SEO Enhancements</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">We prioritize technical excellence. We address issues such as site speed, mobile responsiveness, and crawlability. These improvements are crucial for search engines to navigate and index your site efficiently.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full mb-12 md:mb-16 group">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-dark text-white font-extrabold flex items-center justify-center shadow-lg z-20 group-hover:bg-primary group-hover:scale-125 transition-all duration-500 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.8)]">5</div>
                    <div class="w-full pl-20 md:pl-0 md:w-5/12 md:pr-12" data-aos="fade-right" data-aos-delay="500">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-l-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Link Building Strategies</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Our link building strategies prioritize quality over quantity. We build relevant and authoritative backlinks to improve your domain's credibility and authority, fostering long-term SEO success.</p>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start md:justify-end items-center w-full group md:flex-row-reverse" id="deployment-node">
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-primary text-white font-extrabold flex items-center justify-center shadow-[0_0_15px_rgba(249,115,22,0.6)] z-20 group-hover:scale-125 transition-all duration-500 animate-pulse-glow">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="w-full pl-20 md:pl-12 md:w-5/12" data-aos="fade-left" data-aos-delay="600">
                        <div class="node-card bg-white p-8 rounded-2xl shadow-md border-r-4 border-transparent">
                            <h3 class="text-2xl font-bold mb-3 text-dark group-hover:text-primary transition-colors">Analytics and Reporting</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Transparency is key. We provide detailed analytics and regular reports, allowing you to track the impact of our efforts. This data-driven approach helps us refine strategies for continuous improvement.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-0 mb-20 relative z-20">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-gray-900 to-primary rounded-[3rem] flex flex-col md:flex-row items-center overflow-hidden shadow-2xl relative" data-aos="zoom-in" data-aos-duration="1000">
                <div class="absolute inset-0 bg-grid-pattern opacity-20 mix-blend-overlay"></div>
                <div class="absolute top-10 right-20 text-white opacity-20 animate-float"><i class="fas fa-arrow-trend-up text-9xl"></i></div>
                
                <div class="md:w-1/2 h-full z-10 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="SEO Strategy Team" class="w-full h-full object-cover min-h-[400px] transition-transform duration-1000 hover:scale-110 opacity-90 mix-blend-overlay">
                </div>
                <div class="md:w-1/2 p-10 md:p-16 text-white relative z-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">Our Services are always aligned with your strategy</h2>
                    <p class="text-gray-200 mb-10 text-lg leading-relaxed">
                        At BOUDALIA Agency, we offer a range of innovative and cutting-edge solutions for your business needs. Whether you need web development, design, or SEO, we have the expertise to deliver high-quality results.
                    </p>
                    <a href="index.html#contact" class="inline-block bg-white text-primary font-bold py-4 px-10 rounded-full hover:bg-dark hover:text-white transition duration-500 shadow-lg transform hover:-translate-y-2 hover:shadow-2xl animate-pulse-glow">
                        Boost my SEO <i class="fas fa-arrow-right ml-2"></i>
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
                        BOUDALIA Agency is your premier destination for all your digital needs. From creating visually stunning websites to implementing formidable acquisition and SEO strategies.
                    </p>
                </div>
                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="index.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Home</a></li>
                        <li><a href="about.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">About</a></li>
                        <li><a href="services.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        <li><a href="ui-ux.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Web Development</a></li>
                        <li><a href="e-commerce.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">E-commerce Solutions</a></li>
                        <li><a href="digital-marketing.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Digital Marketing</a></li>
                        <li><a href="seo.php" class="text-primary transition hover:translate-x-2 inline-block transform">SEO Optimization</a></li>
                        <li><a href="smm.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Social Media Marketing</a></li>
                    </ul>
                </div>
                <div class="md:w-4/12 md:text-right font-bold text-gray-800 text-sm flex flex-col space-y-3">
                    <a href="mailto:contact@boudalia-agency.com" class="hover:text-primary transition">contact@boudalia-agency.com</a>
                    <a href="tel:+330656813503" class="hover:text-primary transition">+33 06 56 81 35 03</a>
                    <div class="mt-8 pt-6 flex flex-col space-y-3">
                        <a href="#" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Privacy Policy</a>
                        <a href="#" class="hover:text-primary transition hover:-translate-y-1 transform inline-block">Terms & Conditions</a>
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

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        }

        // FIREWORKS Animation (Confetti) on the final Node
        function triggerFireworks() {
            var duration = 3 * 1000; 
            var end = Date.now() + duration;

            (function frame() {
                // Left fireworks (Brand colors)
                confetti({
                    particleCount: 5, angle: 60, spread: 55, origin: { x: 0 },
                    colors: ['#f97316', '#ea580c', '#ffffff', '#1e293b']
                });
                // Right fireworks
                confetti({
                    particleCount: 5, angle: 120, spread: 55, origin: { x: 1 },
                    colors: ['#f97316', '#ea580c', '#ffffff', '#1e293b']
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        }

        // Intersection Observer : launch fireworks once the element is visible
        let deploymentObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => { triggerFireworks(); }, 500); // Small delay to let AOS finish
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const deploymentNode = document.getElementById('deployment-node');
        if(deploymentNode) {
            deploymentObserver.observe(deploymentNode);
        }
    </script>
</body>
</html>