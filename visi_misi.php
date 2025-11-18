<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - Citalaksanamandiri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="style.css" rel="stylesheet">
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 3px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 2px;
        }
        
        .vision-card, .mission-card, .value-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .vision-card:hover, .mission-card:hover, .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
        }
        
        /* Progress Bar Styles */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            z-index: 9999;
            transition: width 0.3s ease;
        }
        
        /* Floating Action Button */
        .floating-action-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.4);
            cursor: pointer;
            z-index: 1000;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .floating-action-btn.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .floating-action-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(59, 130, 246, 0.6);
        }

        /* Fade In Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeIn 0.8s ease-out forwards;
}

/* Staggered animations for different sections */
.hero-fade {
    opacity: 0;
    animation: fadeIn 1s ease-out 0.2s forwards;
}

.vision-fade {
    opacity: 0;
    animation: fadeIn 1s ease-out 0.4s forwards;
}

.mission-fade {
    opacity: 0;
    animation: fadeIn 1s ease-out 0.6s forwards;
}

.values-fade {
    opacity: 0;
    animation: fadeIn 1s ease-out 0.8s forwards;
}

.commitment-fade {
    opacity: 0;
    animation: fadeIn 1s ease-out 1s forwards;
}

/* Individual card animations */
.vision-card, .mission-card, .value-card {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.8s ease-out forwards;
}

/* Stagger animation for mission cards */
.mission-card:nth-child(1) { animation-delay: 0.5s; }
.mission-card:nth-child(2) { animation-delay: 0.6s; }
.mission-card:nth-child(3) { animation-delay: 0.7s; }
.mission-card:nth-child(4) { animation-delay: 0.8s; }
.mission-card:nth-child(5) { animation-delay: 0.9s; }
.mission-card:nth-child(6) { animation-delay: 1s; }

/* Stagger animation for value cards */
.value-card:nth-child(1) { animation-delay: 0.7s; }
.value-card:nth-child(2) { animation-delay: 0.8s; }
.value-card:nth-child(3) { animation-delay: 0.9s; }
.value-card:nth-child(4) { animation-delay: 1s; }
        
        
    </style>
</head>
<body class="bg-gray-50">
    <!-- Progress Bar -->
    <div class="progress-bar"></div>
    
    <!-- Floating Action Button -->
    <div class="floating-action-btn">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <!-- Header/Navbar -->
    <header class="sticky-nav fixed top-0 w-full z-50 bg-transparent transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 shadow-lg transform transition-transform duration-300 hover:rotate-12 border border-white/30">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-white logo-text">Citalaksanamandiri</h1>
                        <p class="text-xs text-white/80 logo-subtext">Professional Contractor</p>
                    </div>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="index.php" class="nav-link text-white/90 hover:text-white transition flex items-center">
                        <i class="fas fa-home mr-2"></i>
                        Beranda
                    </a>
                    
                    <!-- Tentang Kami Dropdown -->
                    <div class="nav-dropdown">
                        <a href="index.php#about" class="nav-link text-white/90 hover:text-white transition flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Tentang Kami
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="index.php#about" class="dropdown-item">
                                <i class="fas fa-building"></i>
                                Profil Perusahaan
                            </a>
                            <a href="visi_misi.php" class="dropdown-item">
                                <i class="fas fa-eye"></i>
                                Visi & Misi
                            </a>
                            <a href="tim.php" class="dropdown-item">
                                <i class="fas fa-users"></i>
                                Tim Kami
                            </a>
                            <a href="sertifikasi.php" class="dropdown-item">
                                <i class="fas fa-award"></i>
                                Sertifikasi
                            </a>
                        </div>
                    </div>
                    
                    <!-- Layanan Dropdown -->
                    <div class="nav-dropdown">
                        <a href="index.php#services" class="nav-link text-white/90 hover:text-white transition flex items-center">
                            <i class="fas fa-concierge-bell mr-2"></i>
                            Layanan
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-home"></i>
                                Konstruksi Perumahan
                            </a>
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-building"></i>
                                Konstruksi Komersial
                            </a>
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-industry"></i>
                                Konstruksi Industri
                            </a>
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-tools"></i>
                                Renovasi & Perbaikan
                            </a>
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-pencil-ruler"></i>
                                Desain Arsitektur
                            </a>
                            <a href="index.php#services" class="dropdown-item">
                                <i class="fas fa-hard-hat"></i>
                                Manajemen Proyek
                            </a>
                        </div>
                    </div>
                    
                    <a href="index.php#projects" class="nav-link text-white/90 hover:text-white transition">
                        <i class="fas fa-project-diagram mr-2"></i>
                        Proyek
                    </a>
                    <a href="index.php#process" class="nav-link text-white/90 hover:text-white transition">
                        <i class="fas fa-tasks mr-2"></i>
                        Proses Kerja
                    </a>
                    <a href="index.php#testimonials" class="nav-link text-white/90 hover:text-white transition">
                        <i class="fas fa-comments mr-2"></i>
                        Testimoni
                    </a>
                    <a href="index.php#contact" class="nav-link text-white/90 hover:text-white transition">
                        <i class="fas fa-envelope mr-2"></i>
                        Kontak
                    </a>
                </nav>
                
                <button id="mobile-menu-toggle" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-nav-overlay" class="mobile-nav-overlay md:hidden"></div>
    <div id="mobile-nav-menu" class="mobile-nav-menu md:hidden">
        <button id="mobile-nav-close" class="mobile-nav-close">
            <i class="fas fa-times"></i>
        </button>
        
        <a href="index.php" class="mobile-nav-link">
            <i class="fas fa-home"></i>
            Beranda
        </a>
        
        <!-- Tentang Kami Dropdown Mobile -->
        <div class="mobile-dropdown">
            <button class="mobile-dropdown-toggle">
                <span class="flex items-center">
                    <i class="fas fa-info-circle mr-2"></i>
                    Tentang Kami
                </span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="mobile-dropdown-menu">
                <a href="index.php#about" class="mobile-dropdown-item">
                    <i class="fas fa-building"></i>
                    Profil Perusahaan
                </a>
                <a href="visi_misi.php" class="mobile-dropdown-item">
                    <i class="fas fa-eye"></i>
                    Visi & Misi
                </a>
                <a href="tim.php" class="mobile-dropdown-item">
                    <i class="fas fa-users"></i>
                    Tim Kami
                </a>
                <a href="sertifikasi.php" class="mobile-dropdown-item">
                    <i class="fas fa-award"></i>
                    Sertifikasi
                </a>
            </div>
        </div>
        
        <!-- Layanan Dropdown Mobile -->
        <div class="mobile-dropdown">
            <button class="mobile-dropdown-toggle">
                <span class="flex items-center">
                    <i class="fas fa-concierge-bell mr-2"></i>
                    Layanan
                </span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="mobile-dropdown-menu">
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-home"></i>
                    Konstruksi Perumahan
                </a>
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-building"></i>
                    Konstruksi Komersial
                </a>
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-industry"></i>
                    Konstruksi Industri
                </a>
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-tools"></i>
                    Renovasi & Perbaikan
                </a>
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-pencil-ruler"></i>
                    Desain Arsitektur
                </a>
                <a href="index.php#services" class="mobile-dropdown-item">
                    <i class="fas fa-hard-hat"></i>
                    Manajemen Proyek
                </a>
            </div>
        </div>
        
        <a href="index.php#projects" class="mobile-nav-link">
            <i class="fas fa-project-diagram"></i>
            Proyek
        </a>
        <a href="index.php#process" class="mobile-nav-link">
            <i class="fas fa-tasks"></i>
            Proses Kerja
        </a>
        <a href="index.php#testimonials" class="mobile-nav-link">
            <i class="fas fa-comments"></i>
            Testimoni
        </a>
        <a href="index.php#contact" class="mobile-nav-link">
            <i class="fas fa-envelope"></i>
            Kontak
        </a>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24 pt-32 hero-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Visi & Misi Perusahaan</h1>
                <p class="text-xl text-blue-100">Menjadi mitra terpercaya dalam mewujudkan impian konstruksi dengan standar kualitas tertinggi dan komitmen terhadap kepuasan pelanggan.</p>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="py-20 bg-white vision-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Visi <span class="gradient-text">Perusahaan</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Pandangan jangka panjang kami untuk masa depan perusahaan dan kontribusi kami dalam industri konstruksi.</p>
                </div>
                
                <div class="vision-card bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-2xl border-l-4 border-blue-600">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/4 mb-6 md:mb-0 flex justify-center">
                            <div class="w-24 h-24 bg-gradient-to-r from-blue-600 to-blue-800 rounded-full flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-eye text-3xl"></i>
                            </div>
                        </div>
                        <div class="md:w-3/4 md:pl-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Menjadi Perusahaan Konstruksi Terdepan di Indonesia</h3>
                            <p class="text-gray-700 text-lg leading-relaxed">
                                Menjadi perusahaan konstruksi terdepan yang memberikan solusi inovatif dan berkualitas tinggi, 
                                sambil tetap memegang teguh nilai-nilai integritas, profesionalisme, dan kepuasan pelanggan. 
                                Kami bercita-cita untuk terus berkembang dan memberikan kontribusi positif dalam pembangunan infrastruktur Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-gray-50 mission-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Misi <span class="gradient-text">Perusahaan</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tujuan dan komitmen kami dalam memberikan layanan terbaik kepada klien dan masyarakat.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-medal text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Memberikan Kualitas Terbaik</h3>
                        <p class="text-gray-600">Menyediakan layanan konstruksi dengan kualitas terbaik menggunakan material berkualitas tinggi dan teknologi terkini untuk memastikan kepuasan pelanggan.</p>
                    </div>
                    
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Tepat Waktu</h3>
                        <p class="text-gray-600">Menyelesaikan setiap proyek tepat waktu dengan perencanaan yang matang, manajemen yang efisien, dan eksekusi yang profesional.</p>
                    </div>
                    
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Mengembangkan SDM</h3>
                        <p class="text-gray-600">Mengembangkan dan memberdayakan sumber daya manusia yang kompeten, profesional, dan berintegritas untuk memberikan layanan terbaik.</p>
                    </div>
                    
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-leaf text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Ramah Lingkungan</h3>
                        <p class="text-gray-600">Menerapkan praktik konstruksi yang berkelanjutan dan ramah lingkungan dengan memanfaatkan teknologi hijau dan material ramah lingkungan.</p>
                    </div>
                    
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-handshake text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Kemitraan yang Berkelanjutan</h3>
                        <p class="text-gray-600">Membangun kemitraan yang saling menguntungkan dengan klien, pemasok, dan masyarakat untuk menciptakan nilai tambah yang berkelanjutan.</p>
                    </div>
                    
                    <div class="mission-card bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-600">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Inovasi Berkelanjutan</h3>
                        <p class="text-gray-600">Terus berinovasi dalam metode konstruksi, teknologi, dan manajemen proyek untuk meningkatkan efisiensi dan kualitas layanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white values-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Nilai-Nilai <span class="gradient-text">Perusahaan</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Prinsip-prinsip yang menjadi pedoman dalam setiap aktivitas dan keputusan perusahaan.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="value-card bg-white p-6 rounded-xl shadow-md border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600">
                            <i class="fas fa-shield-alt text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Integritas</h3>
                        <p class="text-gray-600 text-sm">Bertindak jujur, transparan, dan konsisten dalam semua aspek bisnis.</p>
                    </div>
                    
                    <div class="value-card bg-white p-6 rounded-xl shadow-md border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600">
                            <i class="fas fa-award text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Profesionalisme</h3>
                        <p class="text-gray-600 text-sm">Menjunjung tinggi etika kerja, kompetensi, dan tanggung jawab profesional.</p>
                    </div>
                    
                    <div class="value-card bg-white p-6 rounded-xl shadow-md border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600">
                            <i class="fas fa-heart text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Kepuasan Pelanggan</h3>
                        <p class="text-gray-600 text-sm">Mengedepankan kebutuhan dan kepuasan pelanggan dalam setiap proyek.</p>
                    </div>
                    
                    <div class="value-card bg-white p-6 rounded-xl shadow-md border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600">
                            <i class="fas fa-lightbulb text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Inovasi</h3>
                        <p class="text-gray-600 text-sm">Terus mencari cara baru yang lebih baik dan efisien dalam bekerja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white commitment-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Komitmen Kami</h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Dengan visi yang jelas dan misi yang kuat, Citalaksanamandiri berkomitmen untuk terus memberikan 
                    layanan konstruksi terbaik dengan standar kualitas tertinggi. Kami percaya bahwa setiap proyek 
                    adalah kesempatan untuk membangun kepercayaan dan menciptakan nilai tambah bagi semua pihak yang terlibat.
                </p>
                <a href="index.php#contact" class="btn-primary px-8 py-3 rounded-lg font-semibold inline-flex items-center">
                    <i class="fas fa-handshake mr-2"></i>
                    <span>Mulai Proyek Anda</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white font-bold">C</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">Citalaksanamandiri</h2>
                            <p class="text-gray-400 text-sm">Professional Contractor</p>
                        </div>
                    </div>
                    <p class="text-gray-400 max-w-xs">Perusahaan contractor terpercaya dengan pengalaman lebih dari 10 tahun dalam industri konstruksi, memberikan solusi terbaik untuk setiap proyek Anda.</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                        <ul class="space-y-2">
                            <li><a href="index.php" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                            <li><a href="index.php#about" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                            <li><a href="index.php#services" class="text-gray-400 hover:text-white transition">Layanan</a></li>
                            <li><a href="visi_misi.php" class="text-gray-400 hover:text-white transition">Visi & Misi</a></li>
                            <li><a href="index.php#contact" class="text-gray-400 hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Layanan</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Konstruksi Perumahan</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Konstruksi Komersial</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Konstruksi Industri</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Renovasi</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2 mt-1"></i>
                                <span class="text-gray-400">Jl. Konstruksi No. 123, Jakarta Selatan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone text-gray-400 mr-2"></i>
                                <span class="text-gray-400">+62 21 1234 5678</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-envelope text-gray-400 mr-2"></i>
                                <span class="text-gray-400">info@citalaksanamandiri.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 Citalaksanamandiri. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Progress Bar Functionality
        window.addEventListener('scroll', function() {
            const winHeight = window.innerHeight;
            const docHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
            
            const progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = scrollPercent + '%';
            
            // Show/hide floating action button
            const floatingBtn = document.querySelector('.floating-action-btn');
            if (scrollTop > 300) {
                floatingBtn.classList.add('show');
            } else {
                floatingBtn.classList.remove('show');
            }
        });

        // Floating Action Button - Scroll to Top
        document.querySelector('.floating-action-btn').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Sticky Navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.sticky-nav');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
        const mobileNavMenu = document.getElementById('mobile-nav-menu');
        const mobileNavClose = document.getElementById('mobile-nav-close');
        
        mobileMenuToggle.addEventListener('click', function() {
            mobileNavOverlay.classList.add('active');
            mobileNavMenu.classList.add('active');
        });
        
        mobileNavClose.addEventListener('click', function() {
            mobileNavOverlay.classList.remove('active');
            mobileNavMenu.classList.remove('active');
        });
        
        mobileNavOverlay.addEventListener('click', function() {
            mobileNavOverlay.classList.remove('active');
            mobileNavMenu.classList.remove('active');
        });
        
        // Mobile Dropdown Toggle
        const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        
        mobileDropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const dropdown = this.parentElement;
                dropdown.classList.toggle('active');
            });
        });
        // Page Load Animation
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in classes to sections
    const heroSection = document.querySelector('section.bg-gradient-to-r');
    if (heroSection) heroSection.classList.add('hero-fade');
    
    const visionSection = document.querySelector('section.py-20.bg-white');
    if (visionSection) visionSection.classList.add('vision-fade');
    
    const missionSection = document.querySelector('section.py-20.bg-gray-50');
    if (missionSection) missionSection.classList.add('mission-fade');
    
    const valuesSection = document.querySelectorAll('section.py-20.bg-white')[1];
    if (valuesSection) valuesSection.classList.add('values-fade');
    
    const commitmentSection = document.querySelector('section.py-20.bg-gradient-to-r');
    if (commitmentSection) commitmentSection.classList.add('commitment-fade');
    
    // Add animation to individual cards
    const visionCard = document.querySelector('.vision-card');
    if (visionCard) visionCard.style.animationDelay = '0.4s';
    
    const missionCards = document.querySelectorAll('.mission-card');
    missionCards.forEach((card, index) => {
        card.style.animationDelay = `${0.5 + (index * 0.1)}s`;
    });
    
    const valueCards = document.querySelectorAll('.value-card');
    valueCards.forEach((card, index) => {
        card.style.animationDelay = `${0.7 + (index * 0.1)}s`;
    });
});
    </script>
</body>
</html>