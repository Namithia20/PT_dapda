<?php

/* promocion.html.twig */
class __TwigTemplate_62a508ddb68bd82d4ed1f2319bc42d0ce870817b8a876323211bde2efc5dbdaa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promocion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promocion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "       <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing/loadingStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
       <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing/landingStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
       <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "            <div class=\"container\">
                <div class=\"lightbox\" id=\"wait_lightbox\">
                    <div class=\"row centered\">
                        <div class=\"col-lg-12\">
                            <div class=\"loader col-lg-12\"></div>
                            <p>Procesando datos...</p>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"landing col-lg-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 \">
                                <img class=\"img-responsive center-block\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img-promo.png"), "html", null, true);
        echo "\" alt=\"img-promo\"/>
                            </div>                            
                        </div>
                        <div class=\"row title_form\">
                        Aproveche nuestras ofertas, informese
                        </div>
                        <div class=\"row form-landing\">  
                            <form id=\"promoForm\" method=\"post\" class=\"\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-6\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "Name", 1 => "Phone", 2 => "Car_type", 3 => "Preference_call"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (twig_get_attribute($this->env, $this->source,             // line 37
($context["form"] ?? null), $context["field"], array(), "any", true, true)) {
                // line 38
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), $context["field"]), 'row');
                echo "
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                    </div>
                                    <div class=\"form-group col-lg-6\">
                                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "Surname", 1 => "Email", 2 => "Car"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (twig_get_attribute($this->env, $this->source,             // line 43
($context["form"] ?? null), $context["field"], array(), "any", true, true)) {
                // line 44
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), $context["field"]), 'row');
                echo "
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                    
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'rest');
        echo "
                                    </div>  
                                </div>                             
                            </form>
                        </div>
                    <div>
                    <div class=\"row foot\">
                        <footer>
                            <p>© 2018<a href=\"#\"> Landing Dapda</a>, All rights reserved 2018.</p>
                        </footer>
                    </div>
                </diV>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/landing/promocion.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promocion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 66,  224 => 65,  215 => 64,  191 => 50,  184 => 45,  174 => 44,  172 => 43,  168 => 42,  164 => 40,  154 => 38,  152 => 37,  148 => 36,  135 => 26,  120 => 13,  111 => 12,  94 => 6,  76 => 5,  65 => 68,  62 => 64,  60 => 12,  54 => 9,  50 => 8,  45 => 7,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
       <link href=\"{{ asset('css/landing/loadingStyle.css') }}\" rel=\"stylesheet\">
       <link href=\"{{ asset('css/landing/landingStyle.css') }}\" rel=\"stylesheet\">
       <link href=\"{{ asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    </head>
    <body>
        {% block body %}
            <div class=\"container\">
                <div class=\"lightbox\" id=\"wait_lightbox\">
                    <div class=\"row centered\">
                        <div class=\"col-lg-12\">
                            <div class=\"loader col-lg-12\"></div>
                            <p>Procesando datos...</p>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"landing col-lg-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 \">
                                <img class=\"img-responsive center-block\" src=\"{{ asset('images/img-promo.png') }}\" alt=\"img-promo\"/>
                            </div>                            
                        </div>
                        <div class=\"row title_form\">
                        Aproveche nuestras ofertas, informese
                        </div>
                        <div class=\"row form-landing\">  
                            <form id=\"promoForm\" method=\"post\" class=\"\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-6\">
                                        {% for field in ['Name','Phone','Car_type','Preference_call'] 
                                            if (attribute(form, field) is defined) %}
                                            {{ form_row(attribute(form, field)) }}
                                        {% endfor %}
                                    </div>
                                    <div class=\"form-group col-lg-6\">
                                        {% for field in ['Surname','Email','Car'] 
                                            if (attribute(form, field) is defined) %}
                                            {{ form_row(attribute(form,field)) }}
                                        {% endfor %}                                    
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        {{ form_rest(form) }}
                                    </div>  
                                </div>                             
                            </form>
                        </div>
                    <div>
                    <div class=\"row foot\">
                        <footer>
                            <p>© 2018<a href=\"#\"> Landing Dapda</a>, All rights reserved 2018.</p>
                        </footer>
                    </div>
                </diV>
            </div>
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"{{ asset('js/landing/promocion.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "promocion.html.twig", "C:\\xampp\\htdocs\\workspace\\dapda\\publi\\templates\\promocion.html.twig");
    }
}
