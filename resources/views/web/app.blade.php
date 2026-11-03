<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('meta-tags')
    <title>Phd Assistants</title>
    <link rel="icon" href="{{ asset('images/icon/4.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css2.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/analytics.js') }}" async></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KFX3CGVS');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Header -->
    @include('template.header')

    <main>
        @yield('content')
    </main>
    <!-- Footer -->
    @include('template.footer')
    @include('web.popup-form')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                duration: 700,
                easing: 'ease-out'
            });
        }
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Toggle top-level dropdown
            document.querySelectorAll(".nav-item.dropdown > .nav-link").forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    const menu = parent.querySelector(".dropdown-menu");

                    // Close other dropdowns
                    document.querySelectorAll(".nav-item.dropdown .dropdown-menu.show").forEach(openMenu => {
                        if (openMenu !== menu) {
                            openMenu.classList.remove("show");
                            // Also hide all submenus inside
                            openMenu.querySelectorAll(".dropdown-menu").forEach(sub => sub.classList.remove("show"));
                        }
                    });

                    menu.classList.toggle("show");
                });
            });

            // Toggle submenus
            document.querySelectorAll(".dropdown-submenu > .toggle-submenu").forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;

                    // Close other submenus at the same level
                    const siblingSubmenus = this.closest(".dropdown-menu").querySelectorAll(".dropdown-submenu .dropdown-menu");
                    siblingSubmenus.forEach(sm => {
                        if (sm !== submenu) sm.classList.remove("show");
                    });

                    submenu.classList.toggle("show");
                });
            });

            // Prevent menu from collapsing on submenu item click
            document.querySelectorAll(".dropdown-submenu .dropdown-item").forEach(item => {
                item.addEventListener("click", function(e) {
                    e.stopPropagation();
                    // Optional: if you want submenu to stay open after click, don't collapse anything
                    // Otherwise: clear all `.show` when clicking a leaf node
                    // document.querySelectorAll(".dropdown-menu.show").forEach(menu => menu.classList.remove("show"));
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(equalizeTestimonialHeight, 500);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".custom-navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 70) {
                    navbar.classList.add("is-stuck");
                } else {
                    navbar.classList.remove("is-stuck");
                }
            });
        });

        function updateCountryCode() {
            var countrySelect = document.getElementById("country");
            var selectedOption = countrySelect.options[countrySelect.selectedIndex];
            var countryCode = selectedOption.getAttribute("data-name");

            document.getElementById("country-code").value = countryCode;
        }

        function isNumber(event) {
            var key = event.key;
            // Allow: backspace, delete, tab, escape, enter
            if (key === "Backspace" || key === "Delete" || key === "Tab" || key === "Escape" || key === "Enter") {
                return true;
            }
            // Ensure that it is a number and stop the keypress
            if ((event.shiftKey || (key < "0" || key > "9"))) {
                event.preventDefault();
            }
        }
    </script>
    <script>
        function equalizeTestimonialHeight() {
            const cards = document.querySelectorAll('.testimony-wrap');
            let maxHeight = 0;

            // Reset heights first
            cards.forEach(card => {
                card.style.height = 'auto';
            });

            // Find tallest
            cards.forEach(card => {
                if (card.offsetHeight > maxHeight) {
                    maxHeight = card.offsetHeight;
                }
            });

            // Apply tallest height to all
            cards.forEach(card => {
                card.style.height = maxHeight + 'px';
            });
        }

        // Run on load
        window.addEventListener('load', equalizeTestimonialHeight);

        // Run after resize
        window.addEventListener('resize', equalizeTestimonialHeight);
    </script>

    <script>
        const tabs = document.querySelectorAll(".phd-tab");
        const contents = document.querySelectorAll(".content-box");

        if (tabs.length && contents.length) {

            tabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    tabs.forEach(t => t.classList.remove("active"));
                    contents.forEach(c => c.classList.remove("active"));

                    tab.classList.add("active");

                    const target = document.getElementById(tab.dataset.tab);
                    if (target) {
                        target.classList.add("active");
                    }
                });
            });

            let index = 0;

            function autoSwitchTabs() {
                if (window.innerWidth <= 768 && tabs.length) {
                    tabs[index].click();
                    index = (index + 1) % tabs.length;
                }
            }

            setInterval(autoSwitchTabs, 3000);
        }
    </script>
    <script>
    const counters = document.querySelectorAll('.counter');

    const startCounter = (entry) => {
        if (!entry.isIntersecting) return;

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;

            const speed = target / 100;

            const update = () => {
                count += speed;
                if (count < target) {
                    counter.innerText = Math.floor(count);
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target + "+";
                }
            };

            update();
        });
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(startCounter);
    }, { threshold: 0.5 });

    document.querySelectorAll('.stats-section').forEach(section => {
        observer.observe(section);
    });
    </script>

    <script defer="" src="./vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;966b37c41b607fe3&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfExtPri&quot;:true,&quot;cfEdge&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfL4&quot;:true,&quot;cfSpeedBrain&quot;:true,&quot;cfCacheStatus&quot;:true}},&quot;version&quot;:&quot;2025.7.0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}" crossorigin="anonymous"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFX3CGVS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>

