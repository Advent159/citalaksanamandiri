<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi - Citalaksanamandiri</title>
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
        
        .certification-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .certification-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .cert-badge {
            transition: transform 0.5s ease;
        }
        
        .certification-card:hover .cert-badge {
            transform: scale(1.1) rotate(5deg);
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
        
        .certifications-fade {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.4s forwards;
        }
        
        .benefits-fade {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.6s forwards;
        }
        
        .process-fade {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.8s forwards;
        }
        
        .cta-fade {
            opacity: 0;
            animation: fadeIn 1s ease-out 1s forwards;
        }
        
        /* Individual card animations */
        .certification-card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        /* Stagger animation for certification cards */
        .certification-card:nth-child(1) { animation-delay: 0.5s; }
        .certification-card:nth-child(2) { animation-delay: 0.6s; }
        .certification-card:nth-child(3) { animation-delay: 0.7s; }
        .certification-card:nth-child(4) { animation-delay: 0.8s; }
        .certification-card:nth-child(5) { animation-delay: 0.9s; }
        .certification-card:nth-child(6) { animation-delay: 1s; }
        
        /* Benefit items animation */
        .benefit-item {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .benefit-item:nth-child(1) { animation-delay: 0.7s; }
        .benefit-item:nth-child(2) { animation-delay: 0.8s; }
        .benefit-item:nth-child(3) { animation-delay: 0.9s; }
        .benefit-item:nth-child(4) { animation-delay: 1s; }
        
        /* Process steps animation */
        .process-step {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .process-step:nth-child(1) { animation-delay: 0.7s; }
        .process-step:nth-child(2) { animation-delay: 0.8s; }
        .process-step:nth-child(3) { animation-delay: 0.9s; }
        .process-step:nth-child(4) { animation-delay: 1s; }
        
        /* Certification Status Badges */
        .status-valid {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        
        .status-pending {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }
        
        .status-renewal {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
        
        /* Process steps styling without timeline */
        .process-step {
            border-left: none;
            padding-left: 0;
        }
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
                            <a href="tim_kami.php" class="dropdown-item">
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
                <a href="tim_kami.php" class="mobile-dropdown-item">
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
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Sertifikasi & Akreditasi</h1>
                <p class="text-xl text-blue-100">Bukti komitmen kami terhadap standar kualitas, keselamatan, dan profesionalisme dalam setiap proyek konstruksi.</p>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-20 bg-white certifications-fade">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Sertifikasi <span class="gradient-text">Kami</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami memiliki berbagai sertifikasi yang membuktikan komitmen kami terhadap kualitas dan standar industri.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Certification 1 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-shield-alt text-2xl text-blue-600"></i>
                            </div>
                            <span class="status-valid text-white text-xs font-semibold px-3 py-1 rounded-full">Valid</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">ISO 9001:2015</h3>
                        <p class="text-gray-600 text-sm mb-4">Sistem Manajemen Mutu untuk memastikan konsistensi kualitas dalam semua proses bisnis.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Diterbitkan: Jan 2023</span>
                            <span>Kadaluarsa: Jan 2026</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: TUV Rheinland</span>
                        </div>
                    </div>
                </div>
                
                <!-- Certification 2 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-teal-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-heart text-2xl text-green-600"></i>
                            </div>
                            <span class="status-valid text-white text-xs font-semibold px-3 py-1 rounded-full">Valid</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">ISO 45001:2018</h3>
                        <p class="text-gray-600 text-sm mb-4">Sistem Manajemen Keselamatan dan Kesehatan Kerja untuk melindungi pekerja.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Diterbitkan: Mar 2023</span>
                            <span>Kadaluarsa: Mar 2026</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: SGS Indonesia</span>
                        </div>
                    </div>
                </div>
                
                <!-- Certification 3 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-pink-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-leaf text-2xl text-purple-600"></i>
                            </div>
                            <span class="status-valid text-white text-xs font-semibold px-3 py-1 rounded-full">Valid</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">ISO 14001:2015</h3>
                        <p class="text-gray-600 text-sm mb-4">Sistem Manajemen Lingkungan untuk praktik konstruksi yang berkelanjutan.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Diterbitkan: Feb 2023</span>
                            <span>Kadaluarsa: Feb 2026</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: Bureau Veritas</span>
                        </div>
                    </div>
                </div>
                
                <!-- Certification 4 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-100 to-red-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-hard-hat text-2xl text-orange-600"></i>
                            </div>
                            <span class="status-valid text-white text-xs font-semibold px-3 py-1 rounded-full">Valid</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">SBU Konstruksi</h3>
                        <p class="text-gray-600 text-sm mb-4">Sertifikasi Badan Usaha Konstruksi dengan kualifikasi besar untuk berbagai jenis pekerjaan.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Diterbitkan: Des 2022</span>
                            <span>Kadaluarsa: Des 2025</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: LPJK</span>
                        </div>
                    </div>
                </div>
                
                <!-- Certification 5 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-fire-extinguisher text-2xl text-teal-600"></i>
                            </div>
                            <span class="status-renewal text-white text-xs font-semibold px-3 py-1 rounded-full">Perpanjangan</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sertifikasi K3 Konstruksi</h3>
                        <p class="text-gray-600 text-sm mb-4">Sertifikasi Keselamatan dan Kesehatan Kerja khusus untuk industri konstruksi.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Diterbitkan: Apr 2023</span>
                            <span>Kadaluarsa: Apr 2026</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: Kemnaker RI</span>
                        </div>
                    </div>
                </div>
                
                <!-- Certification 6 -->
                <div class="certification-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-100 to-blue-100 rounded-xl flex items-center justify-center cert-badge">
                                <i class="fas fa-certificate text-2xl text-indigo-600"></i>
                            </div>
                            <span class="status-pending text-white text-xs font-semibold px-3 py-1 rounded-full">Dalam Proses</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Green Building Certification</h3>
                        <p class="text-gray-600 text-sm mb-4">Sertifikasi bangunan hijau untuk proyek konstruksi berkelanjutan dan ramah lingkungan.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>Pengajuan: Jun 2024</span>
                            <span>Estimasi: Des 2024</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-building mr-2"></i>
                            <span>Lembaga Sertifikasi: GBC Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gray-50 benefits-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Manfaat <span class="gradient-text">Sertifikasi</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Sertifikasi yang kami miliki memberikan nilai tambah dan keunggulan kompetitif dalam setiap proyek.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="benefit-item bg-white p-6 rounded-xl shadow-md border-l-4 border-blue-600">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Kualitas Terjamin</h3>
                        <p class="text-gray-600">Standar kualitas yang konsisten dan terukur dalam setiap tahap proyek konstruksi.</p>
                    </div>
                    
                    <div class="benefit-item bg-white p-6 rounded-xl shadow-md border-l-4 border-green-600">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Keselamatan Optimal</h3>
                        <p class="text-gray-600">Prosedur keselamatan yang ketat untuk melindungi pekerja dan lingkungan sekitar.</p>
                    </div>
                    
                    <div class="benefit-item bg-white p-6 rounded-xl shadow-md border-l-4 border-purple-600">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4 text-purple-600">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Kepercayaan Klien</h3>
                        <p class="text-gray-600">Meningkatkan kepercayaan klien dengan bukti komitmen terhadap standar industri.</p>
                    </div>
                    
                    <div class="benefit-item bg-white p-6 rounded-xl shadow-md border-l-4 border-orange-600">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4 text-orange-600">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Efisiensi Operasional</h3>
                        <p class="text-gray-600">Proses kerja yang lebih efisien dan terstruktur untuk penyelesaian proyek tepat waktu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Process Section -->
    <section class="py-20 bg-white process-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 section-title">Proses <span class="gradient-text">Sertifikasi</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tahapan yang kami lalui untuk mendapatkan dan mempertahankan sertifikasi berkualitas.</p>
                </div>
                
                <div class="space-y-8">
                    <div class="process-step flex items-start">
                        <div class="flex-shrink-0 w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-6">
                            <i class="fas fa-search text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Audit Awal & Assessment</h3>
                            <p class="text-gray-600">Evaluasi menyeluruh terhadap sistem dan proses yang sudah berjalan untuk mengidentifikasi area perbaikan.</p>
                        </div>
                    </div>
                    
                    <div class="process-step flex items-start">
                        <div class="flex-shrink-0 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600 mr-6">
                            <i class="fas fa-cogs text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Implementasi Sistem</h3>
                            <p class="text-gray-600">Penerapan sistem manajemen sesuai dengan standar sertifikasi yang ditargetkan.</p>
                        </div>
                    </div>
                    
                    <div class="process-step flex items-start">
                        <div class="flex-shrink-0 w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-6">
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Dokumentasi & Verifikasi</h3>
                            <p class="text-gray-600">Penyusunan dokumentasi lengkap dan verifikasi oleh lembaga sertifikasi independen.</p>
                        </div>
                    </div>
                    
                    <div class="process-step flex items-start">
                        <div class="flex-shrink-0 w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 mr-6">
                            <i class="fas fa-sync-alt text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pemeliharaan & Perbaikan</h3>
                            <p class="text-gray-600">Audit berkala dan perbaikan berkelanjutan untuk mempertahankan sertifikasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white cta-fade">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Percayakan Proyek Anda pada Perusahaan Bersertifikat</h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Dengan berbagai sertifikasi yang kami miliki, kami menjamin kualitas, keselamatan, dan profesionalisme 
                    dalam setiap tahap proyek konstruksi Anda.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="index.php#contact" class="btn-primary px-8 py-3 rounded-lg font-semibold inline-flex items-center justify-center">
                        <i class="fas fa-file-contract mr-2"></i>
                        <span>Request Sertifikasi</span>
                    </a>
                    <a href="tim.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold inline-flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fas fa-users mr-2"></i>
                        <span>Lihat Tim Kami</span>
                    </a>
                </div>
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
                            <li><a href="sertifikasi.php" class="text-gray-400 hover:text-white transition">Sertifikasi</a></li>
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
            
            const certificationsSection = document.querySelector('section.py-20.bg-white');
            if (certificationsSection) certificationsSection.classList.add('certifications-fade');
            
            const benefitsSection = document.querySelector('section.py-20.bg-gray-50');
            if (benefitsSection) benefitsSection.classList.add('benefits-fade');
            
            const processSection = document.querySelectorAll('section.py-20.bg-white')[1];
            if (processSection) processSection.classList.add('process-fade');
            
            const ctaSection = document.querySelectorAll('section.py-20.bg-gradient-to-r')[1];
            if (ctaSection) ctaSection.classList.add('cta-fade');
            
            // Add animation to individual cards
            const certificationCards = document.querySelectorAll('.certification-card');
            certificationCards.forEach((card, index) => {
                card.style.animationDelay = `${0.5 + (index * 0.1)}s`;
            });
            
            const benefitItems = document.querySelectorAll('.benefit-item');
            benefitItems.forEach((item, index) => {
                item.style.animationDelay = `${0.7 + (index * 0.1)}s`;
            });
            
            const processSteps = document.querySelectorAll('.process-step');
            processSteps.forEach((step, index) => {
                step.style.animationDelay = `${0.7 + (index * 0.1)}s`;
            });
        });
    </script>
</body>
</html>