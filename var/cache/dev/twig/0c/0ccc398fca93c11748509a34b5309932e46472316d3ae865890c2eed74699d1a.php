<?php

/* header.html.twig */
class __TwigTemplate_fc26364cab813528d486071f7f118907bf1e6f03ca94c7db24e612cc7618d88f extends Twig_Template
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
            <a class=\"nav-item nav-link\" href=\"/article\">Articles</a>
            ";
        // line 10
        $context["current_user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", []);
        // line 11
        echo "            ";
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 11, $this->source); })()) == null)) {
            // line 12
            echo "                <a class=\"nav-item nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
                <a class=\"nav-item nav-link\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">S'inscrire</a>
            ";
        } else {
            // line 15
            echo "                <a class=\"nav-item nav-link\" href=\"/user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 15, $this->source); })()), "id", []), "html", null, true);
            echo "/edit\">Mon compte</a>
                <a class=\"nav-item nav-link\" href=\"/logout\">Se déconnecter</a>
                <div class=\"nav-item\">Connecté en tant que : ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 17, $this->source); })()), "username", []), "html", null, true);
            echo "</div>

            ";
        }
        // line 20
        echo "        </div>
    </div>
</nav>
";
        
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
        return array (  64 => 20,  58 => 17,  52 => 15,  47 => 13,  42 => 12,  39 => 11,  37 => 10,  26 => 1,);
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
            <a class=\"nav-item nav-link\" href=\"/article\">Articles</a>
            {%  set current_user = app.user%}
            {% if current_user == null %}
                <a class=\"nav-item nav-link\" href=\"{{ path('app_login')}}\">Se connecter</a>
                <a class=\"nav-item nav-link\" href=\"{{ path('user_new')}}\">S'inscrire</a>
            {% else %}
                <a class=\"nav-item nav-link\" href=\"/user/{{ current_user.id }}/edit\">Mon compte</a>
                <a class=\"nav-item nav-link\" href=\"/logout\">Se déconnecter</a>
                <div class=\"nav-item\">Connecté en tant que : {{ current_user.username }}</div>

            {% endif %}
        </div>
    </div>
</nav>
", "header.html.twig", "C:\\projetPhp\\Symfony-Blog-IFI\\templates\\header.html.twig");
    }
}
