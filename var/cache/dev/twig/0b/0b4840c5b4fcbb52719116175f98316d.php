<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/not.css.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\">


        ";
        // line 11
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
        ";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 118
        echo "        ";
        $this->displayBlock('hero', $context, $blocks);
        // line 171
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 468
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 543
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <meta charset=\"utf-8\">
            <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

            <title>Company Bootstrap Template - Index</title>
            <meta content=\"\" name=\"description\">
            <meta content=\"\" name=\"keywords\">

            <!-- Favicons -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

            <!-- Google Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"), "html", null, true);
        echo "\"
                  integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\"
                  crossorigin=\"\"/>

            <!-- Template Main CSS File -->
            <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- =======================================================
            * Template Name: Company - v4.10.0
            * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "            <!-- Vendor JS Files -->
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"), "html", null, true);
        echo "\"
                    integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\"
                    crossorigin=\"\"></script>

            <!-- Template Main JS File -->
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 69
        echo "            <header id=\"header\" class=\"fixed-top\">
                <div class=\"container d-flex align-items-center\">

                    <h1 class=\"logo me-auto\"><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><span>GF</span>L</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

                    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
                        <ul>
                            <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"active\">Home</a></li>

                            <li class=\"dropdown\"><a href=\"/banquedesang\"><span>Banque de sang</span> <i class=\"bi bi-chevron-down\"></i></a>
                                <ul>
                                    <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/banquedesang"), "html", null, true);
        echo "\">Banques de sang disponible </a></li>
                                    <li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/banquedesang/new"), "html", null, true);
        echo "\">Ajouter un banque de sang</a></li>
                                    <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("testimonials.html"), "html", null, true);
        echo "\">Testimonials</a></li>
                                    <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                        <ul>
                                            <li><a href=\"#\">Deep Drop Down 1</a></li>
                                            <li><a href=\"#\">Deep Drop Down 2</a></li>
                                            <li><a href=\"#\">Deep Drop Down 3</a></li>
                                            <li><a href=\"#\">Deep Drop Down 4</a></li>
                                            <li><a href=\"#\">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\">Portfolio</a></li>
                            <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pricing.html"), "html", null, true);
        echo "\">Pricing</a></li>
                            <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Blog</a></li>
                            <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/notifications"), "html", null, true);
        echo "\">Notifications</a></li>

                        </ul>
                        <i class=\"bi bi-list mobile-nav-toggle\"></i>

                    </nav><!-- .navbar -->

                    <div class=\"header-social-links d-flex\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bu bi-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bu bi-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bu bi-instagram\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bu bi-linkedin\"></i></a>
                    </div>

                </div>
            </header><!-- End Header -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 119
        echo "            <section id=\"hero\">
                <div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

                    <div class=\"carousel-inner\" role=\"listbox\">

                        <!-- Slide 1 -->
                        <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slide/slide-1.jpg"), "html", null, true);
        echo ");\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Welcome to <span>GFL</span></h2>
                                    <p>Le site peut également offrir des fonctionnalités pour prendre rendez-vous pour un don de sang, localiser les centres de collecte de sang les plus proches, et suivre les campagnes de collecte de sang en cours. Il peut également inclure des témoignages de donneurs de sang et des ressources pour répondre aux questions fréquentes sur le don de sang et les procédures associées.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class=\"carousel-item\" style=\"background-image: url(";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slide/slide-2.jpg"), "html", null, true);
        echo ");\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Lorem Ipsum Dolor</h2>
                                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class=\"carousel-item\" style=\"background-image: url";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slide/slide-3.jpg"), "html", null, true);
        echo ";\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Sequi ea ut et est quaerat</h2>
                                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
                    </a>

                    <a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
                    </a>

                    <ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

                </div>
            </section><!-- End Hero -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 171
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 172
        echo "            <main id=\"main\">

                <!-- ======= About Us Section ======= -->
                <section id=\"about-us\" class=\"about-us\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"row content\">
                            <div class=\"col-lg-6\" data-aos=\"fade-right\">
                                <h2>Eum ipsam laborum deleniti velitena</h2>
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                            </div>
                            <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-left\">
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <ul>
                                    <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                                    <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                    <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                                </ul>
                                <p class=\"fst-italic\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Us Section -->

                <!-- ======= Services Section ======= -->
                <section id=\"services\" class=\"services section-bg\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"icon-box iconbox-blue\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                                        </svg>
                                        <i class=\"bx bxl-dribbble\"></i>
                                    </div>
                                    <h4><a href=\"\">Lorem Ipsum</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                                <div class=\"icon-box iconbox-orange \">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                                        </svg>
                                        <i class=\"bx bx-file\"></i>
                                    </div>
                                    <h4><a href=\"\">Sed Perspiciatis</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                                <div class=\"icon-box iconbox-pink\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                                        </svg>
                                        <i class=\"bx bx-tachometer\"></i>
                                    </div>
                                    <h4><a href=\"\">Magni Dolores</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"icon-box iconbox-yellow\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813\"></path>
                                        </svg>
                                        <i class=\"bx bx-layer\"></i>
                                    </div>
                                    <h4><a href=\"\">Nemo Enim</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                                <div class=\"icon-box iconbox-red\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572\"></path>
                                        </svg>
                                        <i class=\"bx bx-slideshow\"></i>
                                    </div>
                                    <h4><a href=\"\">Dele Cardo</a></h4>
                                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                                <div class=\"icon-box iconbox-teal\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762\"></path>
                                        </svg>
                                        <i class=\"bx bx-arch\"></i>
                                    </div>
                                    <h4><a href=\"\">Divera Don</a></h4>
                                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Services Section -->

                <!-- ======= Portfolio Section ======= -->
                <section id=\"portfolio\" class=\"portfolio\">
                    <div class=\"container\">

                        <div class=\"row\" data-aos=\"fade-up\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <ul id=\"portfolio-flters\">
                                    <li data-filter=\"*\" class=\"filter-active\">All</li>
                                    <li data-filter=\".filter-app\">App</li>
                                    <li data-filter=\".filter-card\">Card</li>
                                    <li data-filter=\".filter-web\">Web</li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <a href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <a href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <a href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <a href=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Portfolio Section -->

                <!-- ======= Our Clients Section ======= -->
                <section id=\"clients\" class=\"clients\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"section-title\">
                            <h2>Clients</h2>
                        </div>

                        <div class=\"row no-gutters clients-wrap clearfix\" data-aos=\"fade-up\">

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-7.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Our Clients Section -->

            </main><!-- End #main -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 468
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 469
        echo "            <footer id=\"footer\">

                <div class=\"footer-top\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-lg-3 col-md-6 footer-contact\">
                                <h3>GFL</h3>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class=\"col-lg-2 col-md-6 footer-links\">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"/banquedesang\">Banque de sang disponible</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"/banquedesang/new\">Ajouter banque de sang</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class=\"col-lg-3 col-md-6 footer-links\">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                                </ul>
                            </div>

                            <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                                <h4>Join Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action=\"\" method=\"post\">
                                    <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"container d-md-flex py-4\">

                    <div class=\"me-md-auto text-center text-md-start\">
                        <div class=\"copyright\">
                            &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
                        </div>
                        <div class=\"credits\">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                        </div>
                    </div>
                    <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                    </div>
                </div>
            </footer><!-- End Footer -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 469,  875 => 468,  855 => 458,  846 => 452,  837 => 446,  828 => 440,  819 => 434,  810 => 428,  801 => 422,  792 => 416,  768 => 395,  764 => 394,  757 => 390,  749 => 385,  745 => 384,  738 => 380,  730 => 375,  726 => 374,  719 => 370,  711 => 365,  707 => 364,  700 => 360,  692 => 355,  688 => 354,  681 => 350,  673 => 345,  669 => 344,  662 => 340,  654 => 335,  650 => 334,  643 => 330,  635 => 325,  631 => 324,  624 => 320,  616 => 315,  612 => 314,  605 => 310,  465 => 172,  455 => 171,  421 => 147,  407 => 136,  393 => 125,  385 => 119,  375 => 118,  348 => 101,  344 => 100,  340 => 99,  336 => 98,  332 => 97,  316 => 84,  312 => 83,  308 => 82,  301 => 78,  292 => 72,  287 => 69,  277 => 68,  265 => 64,  257 => 59,  253 => 58,  249 => 57,  245 => 56,  241 => 55,  237 => 54,  233 => 53,  229 => 52,  226 => 51,  216 => 50,  197 => 40,  189 => 35,  185 => 34,  181 => 33,  177 => 32,  173 => 31,  169 => 30,  165 => 29,  161 => 28,  157 => 27,  148 => 21,  144 => 20,  134 => 12,  124 => 11,  105 => 5,  93 => 543,  90 => 468,  87 => 171,  84 => 118,  82 => 68,  78 => 66,  76 => 50,  73 => 49,  70 => 11,  64 => 7,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/not.css.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('') }}\">


        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <meta charset=\"utf-8\">
            <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

            <title>Company Bootstrap Template - Index</title>
            <meta content=\"\" name=\"description\">
            <meta content=\"\" name=\"keywords\">

            <!-- Favicons -->
            <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
            <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

            <!-- Google Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"{{ asset('assets/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/leaflet@1.9.3/dist/leaflet.css') }}\"
                  integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\"
                  crossorigin=\"\"/>

            <!-- Template Main CSS File -->
            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

            <!-- =======================================================
            * Template Name: Company - v4.10.0
            * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
        {% endblock %}

        {% block javascripts %}
            <!-- Vendor JS Files -->
            <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
            <script src=\"{{ asset('https://unpkg.com/leaflet@1.9.3/dist/leaflet.js') }}\"
                    integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\"
                    crossorigin=\"\"></script>

            <!-- Template Main JS File -->
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block header %}
            <header id=\"header\" class=\"fixed-top\">
                <div class=\"container d-flex align-items-center\">

                    <h1 class=\"logo me-auto\"><a href=\"{{ asset('index.html') }}\"><span>GF</span>L</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

                    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
                        <ul>
                            <li><a href=\"{{ asset('index.html') }}\" class=\"active\">Home</a></li>

                            <li class=\"dropdown\"><a href=\"/banquedesang\"><span>Banque de sang</span> <i class=\"bi bi-chevron-down\"></i></a>
                                <ul>
                                    <li><a href=\"{{ asset('/banquedesang') }}\">Banques de sang disponible </a></li>
                                    <li><a href=\"{{ asset('/banquedesang/new') }}\">Ajouter un banque de sang</a></li>
                                    <li><a href=\"{{ asset('testimonials.html') }}\">Testimonials</a></li>
                                    <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                        <ul>
                                            <li><a href=\"#\">Deep Drop Down 1</a></li>
                                            <li><a href=\"#\">Deep Drop Down 2</a></li>
                                            <li><a href=\"#\">Deep Drop Down 3</a></li>
                                            <li><a href=\"#\">Deep Drop Down 4</a></li>
                                            <li><a href=\"#\">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href=\"{{ asset('services.html') }}\">Services</a></li>
                            <li><a href=\"{{ asset('portfolio.html') }}\">Portfolio</a></li>
                            <li><a href=\"{{ asset('pricing.html') }}\">Pricing</a></li>
                            <li><a href=\"{{ asset('blog.html') }}\">Blog</a></li>
                            <li><a href=\"{{ asset('/notifications') }}\">Notifications</a></li>

                        </ul>
                        <i class=\"bi bi-list mobile-nav-toggle\"></i>

                    </nav><!-- .navbar -->

                    <div class=\"header-social-links d-flex\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bu bi-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bu bi-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bu bi-instagram\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bu bi-linkedin\"></i></a>
                    </div>

                </div>
            </header><!-- End Header -->
        {% endblock %}
        {% block hero %}
            <section id=\"hero\">
                <div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

                    <div class=\"carousel-inner\" role=\"listbox\">

                        <!-- Slide 1 -->
                        <div class=\"carousel-item active\" style=\"background-image: url({{ asset('assets/img/slide/slide-1.jpg') }});\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Welcome to <span>GFL</span></h2>
                                    <p>Le site peut également offrir des fonctionnalités pour prendre rendez-vous pour un don de sang, localiser les centres de collecte de sang les plus proches, et suivre les campagnes de collecte de sang en cours. Il peut également inclure des témoignages de donneurs de sang et des ressources pour répondre aux questions fréquentes sur le don de sang et les procédures associées.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class=\"carousel-item\" style=\"background-image: url({{ asset('assets/img/slide/slide-2.jpg') }});\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Lorem Ipsum Dolor</h2>
                                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class=\"carousel-item\" style=\"background-image: url{{ asset('assets/img/slide/slide-3.jpg') }};\">
                            <div class=\"carousel-container\">
                                <div class=\"carousel-content animate__animated animate__fadeInUp\">
                                    <h2>Sequi ea ut et est quaerat</h2>
                                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <div class=\"text-center\"><a href=\"\" class=\"btn-get-started\">Read More</a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
                    </a>

                    <a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
                    </a>

                    <ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

                </div>
            </section><!-- End Hero -->{% endblock %}
        {% block body %}
            <main id=\"main\">

                <!-- ======= About Us Section ======= -->
                <section id=\"about-us\" class=\"about-us\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"row content\">
                            <div class=\"col-lg-6\" data-aos=\"fade-right\">
                                <h2>Eum ipsam laborum deleniti velitena</h2>
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                            </div>
                            <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-left\">
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <ul>
                                    <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                                    <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                    <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                                </ul>
                                <p class=\"fst-italic\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Us Section -->

                <!-- ======= Services Section ======= -->
                <section id=\"services\" class=\"services section-bg\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"icon-box iconbox-blue\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                                        </svg>
                                        <i class=\"bx bxl-dribbble\"></i>
                                    </div>
                                    <h4><a href=\"\">Lorem Ipsum</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                                <div class=\"icon-box iconbox-orange \">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                                        </svg>
                                        <i class=\"bx bx-file\"></i>
                                    </div>
                                    <h4><a href=\"\">Sed Perspiciatis</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                                <div class=\"icon-box iconbox-pink\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                                        </svg>
                                        <i class=\"bx bx-tachometer\"></i>
                                    </div>
                                    <h4><a href=\"\">Magni Dolores</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"icon-box iconbox-yellow\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813\"></path>
                                        </svg>
                                        <i class=\"bx bx-layer\"></i>
                                    </div>
                                    <h4><a href=\"\">Nemo Enim</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                                <div class=\"icon-box iconbox-red\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572\"></path>
                                        </svg>
                                        <i class=\"bx bx-slideshow\"></i>
                                    </div>
                                    <h4><a href=\"\">Dele Cardo</a></h4>
                                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                                <div class=\"icon-box iconbox-teal\">
                                    <div class=\"icon\">
                                        <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762\"></path>
                                        </svg>
                                        <i class=\"bx bx-arch\"></i>
                                    </div>
                                    <h4><a href=\"\">Divera Don</a></h4>
                                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Services Section -->

                <!-- ======= Portfolio Section ======= -->
                <section id=\"portfolio\" class=\"portfolio\">
                    <div class=\"container\">

                        <div class=\"row\" data-aos=\"fade-up\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <ul id=\"portfolio-flters\">
                                    <li data-filter=\"*\" class=\"filter-active\">All</li>
                                    <li data-filter=\".filter-app\">App</li>
                                    <li data-filter=\".filter-card\">Card</li>
                                    <li data-filter=\".filter-web\">Web</li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"{{asset('assets/img/portfolio/portfolio-1.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-1.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-2.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-2.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-3.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-4.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-4.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-5.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-5.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-6.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-6.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-7.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-7.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-8.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-8.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                                <img src=\"{{ asset('assets/img/portfolio/portfolio-9.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                <div class=\"portfolio-info\">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href=\"{{ asset('assets/img/portfolio/portfolio-9.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                                    <a href=\"{{ asset('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Portfolio Section -->

                <!-- ======= Our Clients Section ======= -->
                <section id=\"clients\" class=\"clients\">
                    <div class=\"container\" data-aos=\"fade-up\">

                        <div class=\"section-title\">
                            <h2>Clients</h2>
                        </div>

                        <div class=\"row no-gutters clients-wrap clearfix\" data-aos=\"fade-up\">

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-1.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-2.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-3.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-4.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-5.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-6.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-7.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"client-logo\">
                                    <img src=\"{{ asset('assets/img/clients/client-8.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Our Clients Section -->

            </main><!-- End #main -->{% endblock %}
        {% block footer %}
            <footer id=\"footer\">

                <div class=\"footer-top\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-lg-3 col-md-6 footer-contact\">
                                <h3>GFL</h3>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class=\"col-lg-2 col-md-6 footer-links\">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"/banquedesang\">Banque de sang disponible</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"/banquedesang/new\">Ajouter banque de sang</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class=\"col-lg-3 col-md-6 footer-links\">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                                    <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                                </ul>
                            </div>

                            <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                                <h4>Join Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action=\"\" method=\"post\">
                                    <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"container d-md-flex py-4\">

                    <div class=\"me-md-auto text-center text-md-start\">
                        <div class=\"copyright\">
                            &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
                        </div>
                        <div class=\"credits\">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                        </div>
                    </div>
                    <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                    </div>
                </div>
            </footer><!-- End Footer -->{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\base.html.twig");
    }
}
