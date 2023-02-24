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

/* back.html.twig */
class __TwigTemplate_91d1451f95013abc1962b923327aa792 extends Template
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
            'HeaderMobile' => [$this, 'block_HeaderMobile'],
            'HeaderDesktop' => [$this, 'block_HeaderDesktop'],
            'body' => [$this, 'block_body'],
            'SideBar' => [$this, 'block_SideBar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\" defer></script>
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "</head>
<body>
";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('HeaderMobile', $context, $blocks);
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('HeaderDesktop', $context, $blocks);
        // line 372
        $this->displayBlock('body', $context, $blocks);
        // line 374
        $this->displayBlock('SideBar', $context, $blocks);
        // line 483
        $this->displayBlock('content', $context, $blocks);
        // line 485
        echo "
</body>
</html>";
        
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- Required meta tags-->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"au theme template\">
        <meta name=\"author\" content=\"Hau Nguyen\">
        <meta name=\"keywords\" content=\"au theme template\">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Vendor CSS-->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">

        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <!-- Vendor JS Files -->
        <!-- Jquery JS-->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap JS-->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Vendor JS       -->
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/slick/slick.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/select2/select2.min.js"), "html", null, true);
        echo "\">
        </script>

        <!-- Main JS-->
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_HeaderMobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderMobile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderMobile"));

        // line 79
        echo "    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/logo.png"), "html", null, true);
        echo "\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index.html"), "html", null, true);
        echo "\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index2.html"), "html", null, true);
        echo "\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index3.html"), "html", null, true);
        echo "\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index4.html"), "html", null, true);
        echo "\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/chart.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/table.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/form.html"), "html", null, true);
        echo "\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/calendar.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/map.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/login.html"), "html", null, true);
        echo "\">Login</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/register.html"), "html", null, true);
        echo "\">Register</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/forget-pass.html"), "html", null, true);
        echo "\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/button.html"), "html", null, true);
        echo "\">Button</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/badge.html"), "html", null, true);
        echo "\">Badges</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tab.html"), "html", null, true);
        echo "\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/card.html"), "html", null, true);
        echo "\">Cards</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/alert.html"), "html", null, true);
        echo "\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/progress-bar.html"), "html", null, true);
        echo "\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/modal.html"), "html", null, true);
        echo "\">Modals</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/switch.html"), "html", null, true);
        echo "\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/grid.html"), "html", null, true);
        echo "\">Grids</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/fontawesome.html"), "html", null, true);
        echo "\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/typo.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_HeaderDesktop($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderDesktop"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderDesktop"));

        // line 198
        echo "    <!-- HEADER DESKTOP-->
    <header class=\"header-desktop\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"header-wrap\">
                    <form class=\"form-header\" action=\"\" method=\"POST\">
                        <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                        <button class=\"au-btn--submit\" type=\"submit\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>
                    </form>
                    <div class=\"header-button\">
                        <div class=\"noti-wrap\">
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-comment-more\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"mess-dropdown js-dropdown\">
                                    <div class=\"mess__title\">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Moreno\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class=\"time\">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Diane Myers\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class=\"time\">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__footer\">
                                        <a href=\"#\">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-email\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"email-dropdown js-dropdown\">
                                    <div class=\"email__title\">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"admin/images/icon/avatar-05.jpg\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"admin/images/icon/avatar-04.jpg\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class=\"email__footer\">
                                        <a href=\"#\">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">3</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c1 img-cir img-40\">
                                            <i class=\"zmdi zmdi-email-open\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a email notification</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c2 img-cir img-40\">
                                            <i class=\"zmdi zmdi-account-box\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>Your account has been blocked</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a new file</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__footer\">
                                        <a href=\"#\">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"account-wrap\">
                            <div class=\"account-item clearfix js-item-menu\">
                                <div class=\"image\">
                                    <img src=\"admin/images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                </div>
                                <div class=\"content\">
                                    <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                </div>
                                <div class=\"account-dropdown js-dropdown\">
                                    <div class=\"info clearfix\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"admin/images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <h5 class=\"name\">
                                                <a href=\"#\">john doe</a>
                                            </h5>
                                            <span class=\"email\">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__body\">
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-account\"></i>Account</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__footer\">
                                        <a href=\"#\">
                                            <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 372
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 373
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 374
    public function block_SideBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "SideBar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "SideBar"));

        // line 375
        echo "    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"admin/images/icon/logo.png\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"admin/index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"admin/index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"admin/index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"admin/chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 408
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notify_alert_new");
        echo "\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"admin/form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"admin/calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"admin/map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"admin/has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"admin/register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"admin/forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"admin/badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"admin/tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"admin/card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"admin/alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"admin/progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"admin/modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"admin/switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"admin/grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"admin/fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/typo.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 483
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 483,  868 => 473,  800 => 408,  765 => 375,  755 => 374,  745 => 373,  735 => 372,  605 => 252,  580 => 230,  567 => 220,  543 => 198,  533 => 197,  513 => 186,  507 => 183,  501 => 180,  495 => 177,  489 => 174,  483 => 171,  477 => 168,  471 => 165,  465 => 162,  459 => 159,  453 => 156,  441 => 147,  435 => 144,  429 => 141,  418 => 133,  411 => 129,  404 => 125,  397 => 121,  390 => 117,  382 => 112,  376 => 109,  370 => 106,  364 => 103,  343 => 85,  339 => 84,  332 => 79,  322 => 78,  310 => 68,  303 => 64,  299 => 63,  295 => 62,  291 => 61,  286 => 59,  282 => 58,  277 => 56,  273 => 55,  269 => 54,  264 => 52,  259 => 50,  255 => 49,  250 => 47,  246 => 45,  236 => 44,  224 => 41,  218 => 38,  214 => 37,  210 => 36,  206 => 35,  202 => 34,  198 => 33,  193 => 31,  189 => 30,  183 => 27,  177 => 24,  173 => 23,  169 => 22,  165 => 21,  152 => 10,  142 => 9,  123 => 5,  111 => 485,  109 => 483,  107 => 374,  105 => 372,  103 => 197,  100 => 196,  98 => 78,  95 => 77,  84 => 73,  80 => 72,  76 => 70,  74 => 44,  69 => 43,  67 => 9,  62 => 8,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    <link href=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    {% block stylesheets %}
        <!-- Required meta tags-->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"au theme template\">
        <meta name=\"author\" content=\"Hau Nguyen\">
        <meta name=\"keywords\" content=\"au theme template\">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href=\"{{ asset('admin/css/font-face.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Vendor CSS-->
        <link href=\"{{ asset('admin/vendor/animsition/animsition.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">

        <link href=\"{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/wow/animate.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/slick/slick.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('admin/vendor/select2/select2.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset('admin/css/theme.css') }}\" rel=\"stylesheet\" media=\"all\">
    {% endblock %}
    <script src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\" defer></script>
    {% block javascripts %}
        <!-- Vendor JS Files -->
        <!-- Jquery JS-->
        <script src=\"{{ asset('admin/vendor/jquery-3.2.1.min.js') }}\"></script>
        <!-- Bootstrap JS-->
        <script src=\"{{ asset('admin/vendor/bootstrap-4.1/popper.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}\"></script>
        <!-- Vendor JS       -->
        <script src=\"{{ asset('admin/vendor/slick/slick.min.js') }}\">
        </script>
        <script src=\"{{ asset('admin/vendor/wow/wow.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/animsition/animsition.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\">
        </script>
        <script src=\"{{ asset('admin/vendor/counter-up/jquery.waypoints.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/counter-up/jquery.counterup.min.js') }}\">
        </script>
        <script src=\"{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/chartjs/Chart.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/select2/select2.min.js') }}\">
        </script>

        <!-- Main JS-->
        <script src=\"{{ asset('admin/js/main.js') }}\"></script>
    {% endblock %}
</head>
<body>
{% for message in app.flashes(\"message\") %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endfor %}

{% block HeaderMobile %}
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"{{ asset('admin/index.html') }}\">
                        <img src=\"{{ asset('admin/images/icon/logo.png') }}\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset('admin/index.html') }}\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/index2.html') }}\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/index3.html') }}\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/index4.html') }}\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ asset('admin/chart.html') }}\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"{{ asset('admin/table.html') }}\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"{{ asset('admin/form.html') }}\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"{{ asset('admin/calendar.html') }}\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"{{ asset('admin/map.html') }}\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset('admin/login.html') }}\">Login</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/register.html') }}\">Register</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/forget-pass.html') }}\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset('admin/button.html') }}\">Button</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/badge.html') }}\">Badges</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/tab.html') }}\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"{{asset('admin/card.html') }}\">Cards</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/alert.html') }}\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/progress-bar.html') }}\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/modal.html') }}\">Modals</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/switch.html') }}\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/grid.html') }}\">Grids</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/fontawesome.html') }}\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/typo.html') }}\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->
{% endblock %}

{% block HeaderDesktop %}
    <!-- HEADER DESKTOP-->
    <header class=\"header-desktop\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"header-wrap\">
                    <form class=\"form-header\" action=\"\" method=\"POST\">
                        <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                        <button class=\"au-btn--submit\" type=\"submit\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>
                    </form>
                    <div class=\"header-button\">
                        <div class=\"noti-wrap\">
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-comment-more\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"mess-dropdown js-dropdown\">
                                    <div class=\"mess__title\">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset('admin/images/icon/avatar-06.jpg') }}\" alt=\"Michelle Moreno\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class=\"time\">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset('admin/images/icon/avatar-04.jpg') }}\" alt=\"Diane Myers\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class=\"time\">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__footer\">
                                        <a href=\"#\">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-email\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"email-dropdown js-dropdown\">
                                    <div class=\"email__title\">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset('admin/images/icon/avatar-06.jpg') }}\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"admin/images/icon/avatar-05.jpg\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"admin/images/icon/avatar-04.jpg\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class=\"email__footer\">
                                        <a href=\"#\">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">3</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c1 img-cir img-40\">
                                            <i class=\"zmdi zmdi-email-open\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a email notification</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c2 img-cir img-40\">
                                            <i class=\"zmdi zmdi-account-box\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>Your account has been blocked</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a new file</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__footer\">
                                        <a href=\"#\">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"account-wrap\">
                            <div class=\"account-item clearfix js-item-menu\">
                                <div class=\"image\">
                                    <img src=\"admin/images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                </div>
                                <div class=\"content\">
                                    <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                </div>
                                <div class=\"account-dropdown js-dropdown\">
                                    <div class=\"info clearfix\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"admin/images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <h5 class=\"name\">
                                                <a href=\"#\">john doe</a>
                                            </h5>
                                            <span class=\"email\">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__body\">
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-account\"></i>Account</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__footer\">
                                        <a href=\"#\">
                                            <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
{% endblock %}
{% block body %}
 {% endblock %}
{% block SideBar %}
    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"admin/images/icon/logo.png\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"admin/index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"admin/index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"admin/index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"admin/chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_notify_alert_new') }}\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"admin/form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"admin/calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"admin/map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"admin/has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"admin/register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"admin/forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"admin/button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"admin/badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"admin/tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"admin/card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"admin/alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"admin/progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"admin/modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"admin/switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"admin/grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"admin/fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"{{ asset('admin/typo.html') }}\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
{% endblock %}
{% block content %}
{% endblock %}

</body>
</html>", "back.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\back.html.twig");
    }
}
