<?php 
    get_header()
?>
<body>
    <header class="other-header">
        <div class="menu">
            <div class="menu__block">
                <div class="menu__close">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1568 14.4999L28.4489 3.20755C29.1837 2.47303 29.1837 1.28541 28.4489 0.550891C27.7144 -0.18363 26.5267 -0.18363 25.7922 0.550891L14.4998 11.8433L3.20781 0.550891C2.47295 -0.18363 1.28567 -0.18363 0.551149 0.550891C-0.183716 1.28541 -0.183716 2.47303 0.551149 3.20755L11.8432 14.4999L0.551149 25.7923C-0.183716 26.5268 -0.183716 27.7144 0.551149 28.449C0.917206 28.8154 1.39852 28.9994 1.87948 28.9994C2.36045 28.9994 2.84141 28.8154 3.20781 28.449L14.4998 17.1566L25.7922 28.449C26.1586 28.8154 26.6396 28.9994 27.1205 28.9994C27.6015 28.9994 28.0825 28.8154 28.4489 28.449C29.1837 27.7144 29.1837 26.5268 28.4489 25.7923L17.1568 14.4999Z" fill="white"/>
                    </svg>
                </div>

                <div class="menu__lang">
                    <a href="#" class="menu__lang-item">
                        <img src="assets/icons/turkey.png" alt="türkçe">
                    </a>
                    <a href="#" class="menu__lang-item">
                        <img src="assets/icons/en.png" alt="english">
                    </a>
                </div>
    
                <nav>
                    <ul class="menu__list">
                        <li class="menu__link"><a href="#">Ana Sayfa</a></li>
                        <li class="menu__link"><a href="#">Hakkımızda</a></li>
                        <li class="menu__link"><a href="#">Ekibimiz</a></li>
                        <li class="menu__link"><a href="#">Duyurular</a></li>
                        <li class="menu__link"><a href="#">Makaleler</a></li>
                        <li class="menu__link"><a href="#">Techbilgi Köşesi</a></li>
                        <li class="menu__link"><a href="#">İletişim</a></li>
                    </ul>
                </nav>
    
                <div class="menu__social">
                    <a href="https://twitter.com/technouskudar" target="_blank" class="header__social">
                        <img src="assets/icons/twitter.svg" alt="twitter" class="header__img">
                    </a>
                    <a href="https://www.instagram.com/technouskudar/" target="_blank" class="header__social">
                        <img src="assets/icons/instagram.svg" alt="instagram" class="header__img">
                    </a>
                    <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="header__social">
                        <img src="assets/icons/youtube.svg" alt="youtube" class="header__img">
                    </a>
                    
                </div>
            </div>
            <div class="menu__overlay"></div>
        </div>

        <div class="hamburger">
            <span></span>
            <span class="long"></span>
            <span></span>
        </div>
        
        <div class="languages">
            <a href="#" class="languages__item">
                <img src="assets/icons/turkey.png" alt="türkçe">
            </a>
            <a href="#" class="languages__item">
                <img src="assets/icons/en.png" alt="türkçe">
            </a>
        </div>

        <div class="container">
            <nav class="other-header__content">
                <div class="other-header__logo">
                    <?php the_custom_logo( ); ?>
                </div>
                <div class="title other-header__title">
                    <span>Üsküdar Üniversitesi</span><br>
                    TEKNOLOJI KULÜBÜ
                </div>
                <div class="other-header__flag">
                    <img src="assets/icons/tr_flag.gif" alt="logo">
                </div>
                <ul class="other-header__menu">
                    <li class="other-header__link"><a href="#">Ana Sayfa</a></li>
                    <li class="other-header__link"><a href="#">Hakkımızda</a></li>
                    <li class="other-header__link"><a href="#">Ekibimiz</a></li>
                    <li class="other-header__link"><a href="#">Duyurular</a></li>
                    <li class="other-header__link"><a href="#">Makaleler</a></li>
                    <li class="other-header__link"><a href="#">Etkinlikler</a></li>
                    <li class="other-header__link"><a href="#">Techbilgi Köşesi</a></li>
                    <li class="other-header__link"><a href="#">İletişim</a></li>
                </ul>
                <div class="other-header__wrapper">
                    <a href="https://twitter.com/technouskudar" target="_blank" class="other-header__img">
                        <img src="assets/icons/twitter.svg" alt="twitter" class="other-header__img">
                    </a>
                    <a href="https://www.instagram.com/technouskudar/" target="_blank" class="other-header__social">
                        <img src="assets/icons/instagram.svg" alt="instagram" class="other-header__img">
                    </a>
                    <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="other-header__social">
                        <img src="assets/icons/youtube.svg" alt="youtube" class="other-header__img">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="about" id="about">
        <div class="container">
            <h2 class="title about__title">Hakkımızda</h2>
            <div class="about__wrapper">
                <div class="about__img">
                    <img src="assets/img/misionvision.jpg" alt="about">
                </div>
                <div class="about__descr">
                    <div class="about__item">
                        <div class="title about__item-title">Biz Kimiz</div>
                        <div class="about__item-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est aut vitae exercitationem expedita iure reiciendis. 
                        </div>
                    </div>
                    <div class="about__item">
                        <div class="title about__item-title">Vizyonumuz</div>
                        <div class="about__item-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est aut vitae exercitationem expedita iure reiciendis.
                        </div>
                    </div>
                    <div class="about__item">
                        <div class="title about__item-title">Misyonumuz</div>
                        <div class="about__item-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est aut vitae exercitationem expedita iure reiciendis.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="title team__title">Ekibimiz</div>
            <div class="team__wrapper">
                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>

                <div class="team__item">
                    <div class="team__item-img">
                        <img src="assets/img/team.jpg" alt="team member">
                    </div>
                    <div class="team__item-title">Eda Rumeysa GÜRGEN</div>
                    <div class="team__item-subtitle">Yönetim Kurulu Başkanı</div>
                    <div class="team__item-icon">
                        <a href="#">
                            <img src="assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="announcements page-content">
        <div class="container">
            <h2 class="title page-content__title">Duyurular</h2>

            <div  style="position: relative;">
                <input class="page-content__search" type="search" name="search" id="announcements-search" placeholder="Search">
                <button type="submit" class="page-content__search-img">
                    <img src="assets/icons/search_black.png" alt="search">
                </button>
            </div>

            <div class="page-content__wrapper">
                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="articles page-content">
        <div class="container">
            <h2 class="title page-content__title">Makaleler</h2>

            <div style="position: relative;">
                <input class="page-content__search" type="search" name="search" id="articles-search" placeholder="Search">
                <button type="submit" class="page-content__search-img">
                    <img src="assets/icons/search_black.png" alt="search">
                </button>
            </div>

            <div class="page-content__wrapper">
                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events page-content">
        <div class="container">
            <h2 class="title page-content__title">Etkinlikler</h2>

            <div  style="position: relative;">
                <input class="page-content__search" type="search" name="search" id="events-search" placeholder="Search">
                <button type="submit" class="page-content__search-img">
                    <img src="assets/icons/search_black.png" alt="search">
                </button>
            </div>

            <div class="page-content__wrapper">
                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tech page-content">
        <div class="container">
            <h2 class="title page-content__title">Techbilgi Köşesi</h2>

            <div  style="position: relative;">
                <input class="page-content__search" type="search" name="search" id="tech-search" placeholder="Search">
                <button type="submit" class="page-content__search-img">
                    <img src="assets/icons/search_black.png" alt="search">
                </button>
            </div>

            <div class="page-content__wrapper">
                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>

                <div class="page-content__item">
                    <a href="#" class="page-content__img">
                        <img src="assets/img/announce.jpg" alt="announcement">
                    </a>
                    <div class="page-content__descr">
                        <div class="title page-content__subtitle">BAŞLIK</div>
                        <div class="page-content__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non, minus quaerat quisquam esse architecto suscipit explicabo tempore tenetur corrupti totam doloremque illo perspiciatis nihil? Unde magni dicta iusto voluptatem.
                        </div>
                        <button class="btn page-content__btn">Devamını Oku</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-content contacts">
        <div class="container">
            <h2 class="title page-content__title">İletişim</h2>

            <form  class="contacts__form" name="contact-form" netlify>
                <div class="contacts__descr">Bu formu kullanarak bize ulaşın, ekibimiz en kısa sürede sizinle iletişime geçecektir.</div>
                <input type="text" name="text" id="text" class="contacts__input" placeholder="Ad Soyad" required>
                <input type="email" name="email" id="email" class="contacts__input" placeholder="Email" required>
                <input type="text" name="title" id="title" class="contacts__input" placeholder="Başlık">
                <textarea name="message" maxlength="350" minlength="5" id="message" cols="30" rows="10" class="contacts__textarea" required placeholder="Mesaj"></textarea>
                <button class="btn contacts__btn" type="submit">GÖNDER</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <ul class="footer__menu">
            <li class="footer__link"><a href="#">Ana Sayfa</a></li>
            <li class="footer__link"><a href="#">Hakkımızda</a></li>
            <li class="footer__link"><a href="#">Ekibimiz</a></li>
            <li class="footer__link"><a href="#">Duyurular</a></li>
            <li class="footer__link"><a href="#">Makaleler</a></li>
            <li class="footer__link"><a href="#">Etkinlikler</a></li>
            <li class="footer__link"><a href="#">Techbilgi Köşesi</a></li>
            <li class="footer__link"><a href="#">İletişim</a></li>
        </ul>
        <div class="container">
            <div class="footer__logo">
                <img src="assets/icons/logo.png" alt="logo">
            </div>
            <div class="title footer__title">Üsküdar Üniversitesi<br>Teknoloji Kulübü</div>
            <div class="footer__descr">
                Üsküdar Üniversitesi Mühendislik fakültesinde faaliyetlerini yürüten araştırmacı, teknolojik, üretken, genç mühendisler olarak tüm fakültelerden bireyleri içinde barındıran Üsküdar Üniversitesi Teknoloji Kulübüyüz. <br>ÜTECH
            </div>
            <div class="footer__wrapper">
                <a href="https://twitter.com/technouskudar" target="_blank" class="footer__social">
                    <img src="assets/icons/twitter.png" alt="twitter" class="footer__img">
                </a>
                <a href="https://www.instagram.com/technouskudar/" target="_blank" class="footer__social">
                    <img src="assets/icons/instagram.png" alt="instagram" class="footer__img">
                </a>
                <a href="https://www.youtube.com/channel/UChbV8hHG1ByoyOxS3UVdE-A" target="_blank" class="footer__social">
                    <img src="assets/icons/youtube.png" alt="youtube" class="footer__img">
                </a>
            </div>
        </div>
        <div class="footer__address">Üsküdar / İstanbul / TÜRKİYE</div>
            <div class="footer__bottom">
                <div class="footer__author">
                    <div class="footer__developer">Developed by <a target="_blank" href="https://www.linkedin.com/company/uskudar-university-technology-clubs">ÜTECH</a></div>
                </div>
                <div class="footer__copyright">Tüm Hakları Saklıdır © 2021 <span>ÜTECH</span></div>
            </div>
    </footer>

    <script src="assets/js/script.min.js"></script>
</body>
</html>