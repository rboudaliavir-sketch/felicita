<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UX/UI Design - BOUDALIA Agency</title>
    <link rel="icon" type="image/png" href="logo.ico">
    <meta name="description" content="Professional UX/UI design services by BOUDALIA Agency. Create stunning user experiences and interfaces that convert and engage.">
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
                    <a href="index.php" class="text-2xl font-extrabold text-gray-800 flex items-center">
                        BOUDALIA<span class="bg-primary text-white text-sm px-2 py-1 rounded ml-1 uppercase">Agency</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="index.php" class="hover:text-primary transition">Home</a></li>
                        <li><a href="services.php" class="hover:text-primary transition">Services</a></li>
                        <li><a href="index.html#portfolio" class="hover:text-primary transition">Portfolio</a></li>
                    </ul>
                    <a href="booking.php" class="bg-primary text-white font-bold py-2 px-6 rounded-full hover:bg-secondary transition shadow-md">Book a Call</a>
                    
                    <div class="border-l-2 pl-4 flex space-x-2 text-sm font-bold text-gray-400">
                        <a href="ui-ux.php" class="text-primary">EN</a>
                        <span>|</span>
                        <a href="ui-ux_fr.php" class="hover:text-gray-800 transition">FR</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="py-20 relative overflow-hidden bg-peach">
        <i class="fas fa-certificate starburst top-10 left-20"></i>
        <i class="fas fa-certificate starburst bottom-10 right-32"></i>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 text-dark">UX/UI Design</h1>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed">
                BOUDALIA Agency combines user-centered design principles with cutting-edge technologies to deliver innovative and impactful UX/UI solutions, tailored to meet the specific needs and goals of our clients.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Mobile UI/UX Interface" class="rounded-[2rem] shadow-2xl w-full object-cover h-[600px]" loading="lazy">
                </div>
                
                <div class="lg:w-1/2">
                    <h4 class="text-sm font-bold text-gray-800 mb-4 border-b-2 border-primary pb-2 inline-block">Passionate – Dedicated – Professional</h4>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-dark leading-tight">Drive Your Business Success with <span class="text-primary">UX/UI</span></h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Enhanced User Experience</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">A well-designed website or application ensures smooth navigation and increased satisfaction for your users.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Increased Conversion Rates</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Contributes to the growth and profitability of your business by turning your visitors into loyal customers.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-full border-2 border-primary flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-mouse-pointer"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-dark">Interaction Design</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Creating interactive interfaces that engage the user and make every action clear and rewarding.</p>
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
                    <h2 class="text-5xl font-extrabold text-dark leading-tight">The Steps<br><span class="text-primary">We Follow</span></h2>
                </div>
                <div class="md:w-1/2">
                    <p class="text-gray-600 leading-relaxed">
                        BOUDALIA Agency offers a comprehensive range of UX/UI design services aimed at creating intuitive, visually appealing, and user-centered digital experiences across various platforms. These services include:
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-12">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 01</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">User Research & Analysis</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">We start by conducting in-depth research to understand the target audience, their behaviors, needs, and pain points. This includes interviews, surveys, and competitor analysis.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 02</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Information Architecture</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Building a solid architecture is crucial for logically organizing content. We design sitemaps and navigation structures to ensure users easily find what they are looking for.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 03</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Wireframing & Prototyping</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Before visual design, we create wireframes and prototypes to define layout and functionality. This allows for rapid iterations and feedback prior to development.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 04</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">UI Design</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">We focus on creating visually appealing interfaces that align with your brand identity while prioritizing usability (colors, typography, icons).</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 05</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Responsive Design</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">With the increasing use of mobile devices, we ensure all designs adapt perfectly to different screen sizes and devices, providing a consistent experience.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <span class="inline-block bg-primary text-white text-sm font-bold px-4 py-1 rounded-full mb-4 shadow-md">Step - 06</span>
                    <h3 class="text-2xl font-bold mb-4 text-dark">Usability Testing & Iteration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Once implemented, we conduct tests to gather feedback from real users and identify areas for improvement. Iterations are made based on this valuable feedback.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-peach via-orange-300 to-primary rounded-[3rem] flex flex-col md:flex-row items-center overflow-hidden shadow-2xl">
                <div class="md:w-1/2 h-full">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="Strategic team meeting" class="w-full h-full object-cover min-h-[400px]">
                </div>
                <div class="md:w-1/2 p-10 md:p-16 text-white">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight text-dark">Our Services are always aligned with your strategy</h2>
                    <p class="text-dark opacity-90 mb-10 text-lg leading-relaxed">
                        At BOUDALIA Agency, we offer a range of innovative, cutting-edge solutions for your business needs. Whether you need web development, UI/UX design, SEO, or digital marketing, we have the expertise to deliver high-quality results.
                    </p>
                    <a href="booking.php" class="inline-block bg-dark text-white font-bold py-3 px-8 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">
                        Get Started <i class="fas fa-arrow-right ml-2"></i>
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
                        BOUDALIA Agency is your premier destination for all your digital needs. From creating visually stunning websites on Shopify and WordPress to designing seamless user experiences (UI/UX).
                    </p>
                </div>
                <div class="md:w-3/12 flex md:justify-center">
                    <ul class="space-y-3 font-bold text-gray-800 text-sm">
                        <li><a href="index.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Home</a></li>
                        <li><a href="services.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Services</a></li>
                        <li><a href="ui-ux.php" class="text-primary transition hover:translate-x-2 inline-block transform">UX/UI Design</a></li>
                        <li><a href="web-dev.php" class="hover:text-primary transition hover:translate-x-2 inline-block transform">Web Development</a></li>
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
                        <a href="privacy-policy.php" class="hover:text-primary transition">Privacy Policy</a>
                        <a href="terms-conditions.php" class="hover:text-primary transition">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-12 border-t border-gray-200 pt-8">
                <p>&copy; 2026 BOUDALIA Agency. All rights reserved.</p>
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