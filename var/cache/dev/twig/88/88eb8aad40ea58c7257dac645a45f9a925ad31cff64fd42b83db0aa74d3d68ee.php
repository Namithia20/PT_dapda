<?php

/* email.html.twig */
class __TwigTemplate_607ac57e6e26ecf3819b95ddd677d57ae0929688a1ae4c68ced97732ff132931 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email.html.twig"));

        // line 1
        echo "<h3>Gracias por enviarnos sus datos</h3>
<div>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new Twig_Error_Runtime('Variable "surname" does not exist.', 3, $this->source); })()), "html", null, true);
        echo ", sus datos de contacto han sido registrados en nuestro sistema correctamente.</p>
    <p>En breve uno de nuestros comerciales se pondrá en contacto con usted.</p>
    <p>Gracias</p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Gracias por enviarnos sus datos</h3>
<div>
    <p>{{ name }} {{surname}}, sus datos de contacto han sido registrados en nuestro sistema correctamente.</p>
    <p>En breve uno de nuestros comerciales se pondrá en contacto con usted.</p>
    <p>Gracias</p>
</div>
", "email.html.twig", "C:\\xampp\\htdocs\\workspace\\dapda\\publi\\templates\\email.html.twig");
    }
}
