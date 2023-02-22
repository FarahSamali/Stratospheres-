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

/* banque_de_sang/index.html.twig */
class __TwigTemplate_26ac0887efe5cb6ec8c050b741cd17c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "banque_de_sang/index.html.twig", 1);
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

        echo "Banque";
        
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
        echo "<div class=\"container\">
    <p class=\"fs-1\">La liste des banques de sang en Tunisie</p>
    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Tel</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banque_de_sangs"]) || array_key_exists("banque_de_sangs", $context) ? $context["banque_de_sangs"] : (function () { throw new RuntimeError('Variable "banque_de_sangs" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["banque_de_sang"]) {
            // line 19
            echo "
            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banque_de_sang"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banque_de_sang"], "adresse", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banque_de_sang"], "tel", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque_de_sang_show", ["id" => twig_get_attribute($this->env, $this->source, $context["banque_de_sang"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-dark\">Show</button></a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque_de_sang_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["banque_de_sang"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-dark\">Edit</button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <tr>
                <td colspan=\"5\">Aucune des banques de sang ajouté</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banque_de_sang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque_de_sang_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Create</button></a>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "banque_de_sang/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  146 => 34,  137 => 30,  128 => 26,  124 => 25,  119 => 23,  115 => 22,  111 => 21,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Banque{% endblock %}

{% block body %}
<div class=\"container\">
    <p class=\"fs-1\">La liste des banques de sang en Tunisie</p>
    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Tel</th>

        </tr>
        </thead>
        <tbody>
        {% for banque_de_sang in banque_de_sangs %}

            <tr>
                <td>{{ banque_de_sang.nom }}</td>
                <td>{{ banque_de_sang.adresse }}</td>
                <td>{{ banque_de_sang.tel }}</td>
                <td>
                    <a href=\"{{ path('app_banque_de_sang_show', {'id': banque_de_sang.id}) }}\"><button type=\"button\" class=\"btn btn-dark\">Show</button></a>
                    <a href=\"{{ path('app_banque_de_sang_edit', {'id': banque_de_sang.id}) }}\"><button type=\"button\" class=\"btn btn-dark\">Edit</button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucune des banques de sang ajouté</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ path('app_banque_de_sang_new') }}\"><button type=\"button\" class=\"btn btn-success\">Create</button></a>

</div>
{% endblock %}
", "banque_de_sang/index.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\banque_de_sang\\index.html.twig");
    }
}
