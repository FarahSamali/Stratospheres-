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

/* banque_de_sang/show.html.twig */
class __TwigTemplate_2d208ba58581a02ef4b238a770c2cabc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "banque_de_sang/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BanqueDeSang";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p class=\"fs-1\">Informations sur un banque de sang</p>
    <div class=\"ab\">
        <table class=\"table table-bordered border-primary\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banque_de_sang"]) || array_key_exists("banque_de_sang", $context) ? $context["banque_de_sang"] : (function () { throw new RuntimeError('Variable "banque_de_sang" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banque_de_sang"]) || array_key_exists("banque_de_sang", $context) ? $context["banque_de_sang"] : (function () { throw new RuntimeError('Variable "banque_de_sang" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banque_de_sang"]) || array_key_exists("banque_de_sang", $context) ? $context["banque_de_sang"] : (function () { throw new RuntimeError('Variable "banque_de_sang" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banque_de_sang"]) || array_key_exists("banque_de_sang", $context) ? $context["banque_de_sang"] : (function () { throw new RuntimeError('Variable "banque_de_sang" does not exist.', 24, $this->source); })()), "tel", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    </div>

    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque_de_sang_index");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Back</button></a>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque_de_sang_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["banque_de_sang"]) || array_key_exists("banque_de_sang", $context) ? $context["banque_de_sang"] : (function () { throw new RuntimeError('Variable "banque_de_sang" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-info\">Edit</button></a>

    ";
        // line 34
        echo twig_include($this->env, $context, "banque_de_sang/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "banque_de_sang/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  131 => 32,  126 => 30,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}BanqueDeSang{% endblock %}

{% block body %}
    <p class=\"fs-1\">Informations sur un banque de sang</p>
    <div class=\"ab\">
        <table class=\"table table-bordered border-primary\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ banque_de_sang.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ banque_de_sang.nom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ banque_de_sang.adresse }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ banque_de_sang.tel }}</td>
            </tr>
        </tbody>
    </table>
    </div>

    <a href=\"{{ path('app_banque_de_sang_index') }}\"><button type=\"button\" class=\"btn btn-primary\">Back</button></a>

    <a href=\"{{ path('app_banque_de_sang_edit', {'id': banque_de_sang.id}) }}\"><button type=\"button\" class=\"btn btn-info\">Edit</button></a>

    {{ include('banque_de_sang/_delete_form.html.twig') }}
{% endblock %}
", "banque_de_sang/show.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\banque_de_sang\\show.html.twig");
    }
}
