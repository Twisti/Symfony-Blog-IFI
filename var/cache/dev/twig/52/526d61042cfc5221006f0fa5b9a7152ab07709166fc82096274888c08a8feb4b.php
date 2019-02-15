<?php

/* header.html.twig */
class __TwigTemplate_baf56e8e5a30c1b13e23f11f45f1a5ed07275afbbf9c542ec3809f1e62c42ad6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">LE BLOG SUR LES FRITES</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link\" href=\"#\">MAISON <span class=\"sr-only\">(current)</span></a>
            <a class=\"nav-item nav-link\" href=\"#\">Articles</a>
            ";
        // line 11
        $context["current_user"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "session", []), "get", [0 => "current user"], "method");
        // line 12
        echo "            ";
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 12, $this->source); })()) == "")) {
            // line 13
            echo "                <a class=\"nav-item nav-link\" href=\"#\">S'inscrire</a>
            ";
        } else {
            // line 15
            echo "                <a class=\"nav-item nav-link\" href=\"#\">Mon compte</a>
                <div class=\"nav-item\">Connecté en tant que : ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</div>

            ";
        }
        // line 19
        echo "        </div>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  50 => 16,  47 => 15,  43 => 13,  40 => 12,  38 => 11,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">LE BLOG SUR LES FRITES</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link\" href=\"#\">MAISON <span class=\"sr-only\">(current)</span></a>
            <a class=\"nav-item nav-link\" href=\"#\">Articles</a>
            {%  set current_user = app.session.get('current user')%}
            {% if current_user == \"\" %}
                <a class=\"nav-item nav-link\" href=\"#\">S'inscrire</a>
            {% else %}
                <a class=\"nav-item nav-link\" href=\"#\">Mon compte</a>
                <div class=\"nav-item\">Connecté en tant que : {{ current_user }}</div>

            {% endif %}
        </div>
    </div>
</nav>", "header.html.twig", "C:\\projetPhp\\Symfony-Blog-IFI\\templates\\header.html.twig");
    }
}
