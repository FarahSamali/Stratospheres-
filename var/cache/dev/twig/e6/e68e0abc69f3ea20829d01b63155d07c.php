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

/* banque_de_sang/new.html.twig */
class __TwigTemplate_aa11981a4bc621f3b3dcac0560204b58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque_de_sang/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "banque_de_sang/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- ======= Breadcrumbs ======= -->
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Ajouter Banque de sang</h2>

            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <div style=\"display:flex; align-items:center;justify-content: center ;  margin-bottom: 100px\" >

        <div class=\"row mt-5 justify-content-center\" data-aos=\"fade-up\">
            <div class=\"col-lg-10\">

                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


                <div class=\"row\">

                    <div class=\"col-md-6 form-group\" style=\"margin-bottom: 11px\"  >
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'label', ["label" => "Nom:"]);
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'errors');
        echo "

                    </div>
                    <div class=\"form-group mt-3\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), 'label', ["label" => "Adresse:"]);
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tel", [], "any", false, false, false, 37), 'label', ["label" => "Télephone:"]);
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "tel", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "tel", [], "any", false, false, false, 39), 'errors');
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
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
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
        return "banque_de_sang/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  132 => 39,  128 => 38,  124 => 37,  118 => 34,  114 => 33,  110 => 32,  103 => 28,  99 => 27,  95 => 26,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig'  %}

{% block body %}
    <!-- ======= Breadcrumbs ======= -->
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Ajouter Banque de sang</h2>

            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <div style=\"display:flex; align-items:center;justify-content: center ;  margin-bottom: 100px\" >

        <div class=\"row mt-5 justify-content-center\" data-aos=\"fade-up\">
            <div class=\"col-lg-10\">

                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}


                <div class=\"row\">

                    <div class=\"col-md-6 form-group\" style=\"margin-bottom: 11px\"  >
                        {{ form_label(form.nom, null, {'label': 'Nom:'}) }}
                        {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.nom) }}

                    </div>
                    <div class=\"form-group mt-3\">
                        {{ form_label(form.adresse, null, {'label': 'Adresse:'}) }}
                        {{ form_widget(form.adresse,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.adresse) }}
                    </div>
                    <div class=\"col-md-6 form-group mt-3 mt-md-0\" >
                        {{ form_label(form.tel, null, {'label': 'Télephone:'}) }}
                        {{ form_widget(form.tel,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.tel) }}
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


{% endblock  %}", "banque_de_sang/new.html.twig", "C:\\Users\\Fahd\\pidev\\templates\\banque_de_sang\\new.html.twig");
    }
}
