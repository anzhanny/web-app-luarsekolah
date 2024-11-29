<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Page</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        .container {
            margin-top: 100px;
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-container {
            background: linear-gradient(to right, #9089CA, #7A64C7);
            color: white;
            padding: 30px;
            width: 50%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .form-container textarea {
            height: 120px;
        }

        .form-container button {
            background-color: #e74c3c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #7A64C7
    }
    
    .image-container {
        width: 50%;
        background-image: url('path/to/your/image.jpg'); 
        background-size: cover;
        background-position: center;
    }
    </style>
    </style>
</head>
<body>
    <header id="header" class="header d-flex align-items-center sticky-top" style="background-color: white;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="asset/img/luarsekolah-logo.png" alt="logo" >
            </a>

            <div class="dropdown">
                <button class="dropbtn">
                        Program <img src="asset/icon/chevron-down.png" alt="Panah" class="arrow"> 
                </button>                
                <div class="dropdown-content">
                    <a href="#">Prakerja</a>
                    <a href="#">Belajar Bekerja</a>
                    <a href="#">Indonesia Skills Week</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                        Layanan <img src="asset/icon/chevron-down.png" alt="Panah" class="arrow"> 
                </button> 
                <div class="dropdown-content">
                    <a href="#">Tentang kami</a>
                    <a href="#">Promo</a>
                    <a href="#">Blog</a>
                    <a href="#">Komunitas</a>
                </div>
            </div>
            <div class="auth-links">
                <button class="auth-link1-btn">
                    <a href="login.html" class="auth-link1">Masuk</a> 
                </button>
                <button class="auth-link2-btn">
                    <a href="login.html" class="auth-link2">Daftar</a> 
                </button>
            </div>

    </header>

    <main>
        <section>
            <div class="about-me" style=" height: auto; padding: 20px;">
                <h1 style="text-align: center;">Tentang Kami</h1>
                <p style="text-align: center; line-height: 1.8; margin: 20px 0;">
                    Luarsekolah adalah platform marketplace edukasi vokasi dan pengembangan diri berbasis online yang dapat diakses kapan saja dan di mana saja untuk mendampingi generasi muda Indonesia #sampaijadibisa</p>
            </div>
        </section>

        <section>
            <div class="story" style="background-color: rgb(164, 238, 213); height: auto; padding: 20px;">
                <h1 style="text-align: center;">Berawal Dari</h1>
                <p style="text-align: center; line-height: 1.8; margin: 20px 0;">
                    Luarsekolah adalah platform edukasi vokasi dan pengembangan diri yang menggabungkan teknologi digital dengan materi-materi dari pengajar berpengalaman. Kami hadir untuk mendampingi generasi muda Indonesia belajar dan berkembang. Kurikulum formal sering kali tidak sejalan dengan kebutuhan industri. Hal ini menciptakan kesenjangan keterampilan yang signifikan antara lulusan dan tuntutan dunia kerja. Akibatnya, banyak perusahaan di Indonesia kesulitan menemukan talenta yang siap bersaing.
                </p>
            </div>
        </section>

        <section> 
    <div class="visi-misi" style="text-align: center;">
        <h1 style="margin-bottom: 50px; padding: 20px;">Visi dan Misi</h1>
    
        <div style="display: flex; justify-content: center; gap: 10rem;">
            <!-- Card Visi -->
            <div style="position: relative; width: 300px; text-align: center;">
                <!-- Lingkaran -->
                <div style="width: 25rem; height: 25rem; background-color: #72efd4; border-radius: 50%; margin: 0 auto; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 10px; box-sizing: border-box; gap: 10px;">
                    <!-- Ikon -->
                    <div style="font-size: 30px; color: white; margin-top: 10px;">
                        &#9733; <!-- Ikon bintang -->
                    </div>
                    <!-- Teks -->
                    <p style="font-size: 14px; line-height: 1.5; color: #333; margin: 0;">
                        Menjadi platform pendidikan non-formal berbasis teknologi yang mencetak generasi muda unggul, berkarakter, berpengetahuan, terampil, dan berdaya saing.
                    </p>
                </div>
                <!-- Label Visi -->
                <h1 style="position: absolute; top: 28rem; left: 68%; transform: translateX(-50%); background-color: #128269; color: white; border-radius: 10px; padding: 5px 15px; margin-top: -5rem;">
                    Visi
                </h1>
            </div>
    
            <!-- Card Misi -->
            <div style="position: relative; width: 300px; text-align: center;">
                <!-- Lingkaran -->
                <div style="width: 25rem; height: 25rem; background-color: #72efd4; border-radius: 50%; margin: 0 auto; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 10px; box-sizing: border-box; gap: 10px;">
                    <!-- Ikon -->
                    <div style="font-size: 30px; color: white; margin-top: 10px;">
                        &#9881; <!-- Ikon gear -->
                    </div>
                    <!-- Teks -->
                    <ul style="font-size: 12px; line-height: 1.5; color: #333; padding: 0; margin: 0; list-style: none;">
                        <li>Merancang program pendidikan yang sesuai kebutuhan industri.</li>
                        <li>Menyediakan platform teknologi untuk mendukung pembelajaran dan pengembangan diri.</li>
                        <li>Menyelenggarakan pelatihan berkualitas yang relevan dengan tantangan global.</li>
                        <li>Mendorong kolaborasi melalui pembelajaran kelompok.</li>
                        <li>Menanamkan budaya belajar sepanjang hayat dengan pendampingan aktif.</li>
                    </ul>
                </div>
                <!-- Label Misi -->
                <h1 style="position: absolute; top: 28rem; left: 68%; transform: translateX(-50%); background-color: #128269; color: white; border-radius: 10px; padding: 5px 15px; margin-top: -5rem;">
                    Misi
                </h1>
            </div>
        </div>
    </div>
</section>

        
        
        
        <div class="container">
            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </div>
            <div class="image-container"></div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="asset/img/luarsekolah-logo.png" alt="" width="80px">
                </div>
                <div class="footer-info" >
                    <p>
                    Luarsekolah merupakan wadah belajar dan mengajar pelajaran non-formal/alternatif dengan cara menyediakan kelas pengajaran dalam bentuk online dasn offline
                    </p>
                    <P>PT Teknologi Edukasi Indonesia</P>
                
                    <div class="footer-social">
                    <a href="https://www.linkedin.com/">
                        <img src="asset/icon/linkedin.png" alt="LinkedIn">
                    </a>
                    <a href="https://www.tiktok.com/">
                        <img src="asset/icon/tiktok.png" alt="TikTok">
                    </a>
                    <a href="https://www.instagram.com" >
                        <img src="asset/icon/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/" >
                        <img src="asset/icon/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.twitter.com" >
                        <img src="asset/icon/twitter.png" alt="Twitter">
                    </a>
                    <a href="https://www.youtube.com" >
                        <img src="asset/icon/youtube.png" alt="YouTube">
                    </a>

                    </div>
                    <div class="footer-playstore">
                        <a href="https://play.google.com/" target="_blank"><img src="asset/icon/PlayStore.png"></a>
                    </div>
                </div>
            </div>

            <div class="footer-content-tentang">
                <ul>
                    <li><a href="#"><b>Tentang</b></a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Blog</a></li>   
                    <li><a href="#">Komunitas</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Kegiatan</a></li>
                </ul>
            </div>
            <div class="footer-content-program">
            <ul>
                    <li><a href="#"><b>Program</b></a></li>
                    <li><a href="#">Prakerja</a></li>
                    <li><a href="#">Belajar Bekerja</a></li>   
                    <li><a href="#">ISW (Indonesia Skill Week)</a></li>
                </ul>
            </div>
            <div class="footer-content-dukungan">
            <ul>
                    <li><a href="#"><b>Dukungan</b></a></li>
                    <li><a href="#">Bantuan</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>   
                    <li><a href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
        <p>&copy; 2024 All Rights Reserved</p>
        </div>

    </footer>

    <script src="asset/js/script.js"></script>
</body>
</html>
 