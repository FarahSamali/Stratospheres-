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

/* notifications/new.html.twig */
class __TwigTemplate_00c3637f160edf73682d456d5331b238 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notifications/new.html.twig", 1);
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

        echo "New Notifications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<!-- ======= Breadcrumbs ======= -->
<section id=\"breadcrumbs\" class=\"breadcrumbs\">
    <div class=\"container\">

        <div class=\"d-flex justify-content-between align-items-center\">
            <h2>Ajouter Notifications</h2>

        </div>

    </div>
</section><!-- End Breadcrumbs -->
<div style=\"display:flex; align-items:center;justify-content: center ;  margin-bottom: 100px\" >

    <div class=\"row mt-5 justify-content-center\" data-aos=\"fade-up\">
        <div class=\"col-lg-10\">

            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


            <div class=\"row\">

                <div class=\"col-md-6 form-group\" style=\"margin-bottom: 11px\"  >
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), 'label', ["label" => "Nom:"]);
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), 'errors');
        echo "

                </div>
                <div class=\"form-group mt-3\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "message", [], "any", false, false, false, 35), 'label', ["label" => "Adresse:"]);
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "message", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'errors');
        echo "
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "recipient", [], "any", false, false, false, 40), 'label', ["label" => "recepient:"]);
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "recipient", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "recipient", [], "any", false, false, false, 42), 'errors');
        echo "
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "sender", [], "any", false, false, false, 45), 'label', ["label" => "sender:"]);
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "sender", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "sender", [], "any", false, false, false, 47), 'errors');
        echo "
                </div>
            </div>



            <div class=\"text-center\" >

                <button type=\"submit\" style=\"background-color: #1bbd36 ;
                     padding: 10px 24px ;
                     color: #fff;
                     transition: 0.4s;
                     border: 0;
                     border-radius: 4px;\">Ajouter</button>


            </div>

            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "

        </div>

    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "notifications/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  166 => 47,  162 => 46,  158 => 45,  152 => 42,  148 => 41,  144 => 40,  138 => 37,  134 => 36,  130 => 35,  123 => 31,  119 => 30,  115 => 29,  106 => 23,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Notifications{% endblock %}


{% block body %}
<!-- ======= Breadcrumbs ======= -->
<section id=\"breadcrumbs\" class=\"breadcrumbs\">
    <div class=\"container\">

        <div class=\"d-flex justify-content-between align-items-center\">
            <h2>Ajouter Notifications</h2>

        </div>

    </div>
</section><!-- End Breadcrumbs -->
<div style=\"display:flex; align-items:center;justify-content: center ;  margin-bottom: 100px\" >

    <div class=\"row mt-5 justify-content-center\" data-aos=\"fade-up\">
        <div class=\"col-lg-10\">

            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}


            <div class=\"row\">

                <div class=\"col-md-6 form-group\" style=\"margin-bottom: 11px\"  >
                    {{ form_label(form.title, null, {'label': 'Nom:'}) }}
                    {{ form_widget(form.title,{'attr':{'class':'form-control'}}) }}
                    {{ form_errors(form.title) }}

                </div>
                <div class=\"form-group mt-3\">
                    {{ form_label(form.message, null, {'label': 'Adresse:'}) }}
                    {{ form_widget(form.message,{'attr':{'class':'form-control'}}) }}
                    {{ form_errors(form.message) }}
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                    {{ form_label(form.recipient, null, {'label': 'recepient:'}) }}
                    {{ form_widget(form.recipient,{'attr':{'class':'form-control'}}) }}
                    {{ form_errors(form.recipient) }}
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                    {{ form_label(form.sender, null, {'label': 'sender:'}) }}
                    {{ form_widget(form.sender,{'attr':{'class':'form-control'}}) }}
                    {{ form_errors(form.sender) }}
                </div>
            </div>



            <div class=\"text-center\" >

                <button type=\"submit\" style=\"background-color: #1bbd36 ;
                     padding: 10px 24px ;
                     color: #fff;
                     transition: 0.4s;
                     border: 0;
                     border-radius: 4px;\">Ajouter</button>


            </div>

            {{ form_end (form) }}

        </div>

    </div>

</div>
{% endblock %}
", "notifications/new.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\notifications\\new.html.twig");
    }
}
