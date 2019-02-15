<?php

/* article/index.html.twig */
class __TwigTemplate_ce7fe08072d8e9efa95cff6fcf1dc6eb8d6f0fa2244685053464d7d415550084 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Tous les articles</h1>


        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
            <table class=\"table-center\">
                <div class=\"card text-center\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo "</h5>
                        <h4 class=\"card-subtitle mb-2 text-muted\">";
            // line 15
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "creationDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "creationDate", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</h4>
                        <a href=\"/article/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire ce super post</a>
                    </div>
                    <div class=\"card-footer text-muted\">
                       écrit par :  ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", []), "username", []), "html", null, true);
            echo "
                    </div>
                </div>


                   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    ";
        // line 32
        $context["current_user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->source); })()), "user", []);
        // line 33
        echo "    ";
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 33, $this->source); })()) != null)) {
            // line 34
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
            echo "\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Créer un article</a>
    ";
        }
        // line 36
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  117 => 34,  114 => 33,  112 => 32,  107 => 29,  98 => 25,  87 => 19,  81 => 16,  77 => 15,  73 => 14,  67 => 10,  62 => 9,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Article index{% endblock %}

{% block body %}
    <h1>Tous les articles</h1>


        {% for article in articles %}

            <table class=\"table-center\">
                <div class=\"card text-center\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ article.title }}</h5>
                        <h4 class=\"card-subtitle mb-2 text-muted\">{{ article.creationDate ? article.creationDate|date('Y-m-d H:i:s') : '' }}</h4>
                        <a href=\"/article/{{ article.id }}\" class=\"btn btn-primary\">Lire ce super post</a>
                    </div>
                    <div class=\"card-footer text-muted\">
                       écrit par :  {{ article.author.username}}
                    </div>
                </div>


                   {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {%  set current_user = app.user%}
    {% if current_user != null %}
        <a href=\"{{ path('article_new') }}\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Créer un article</a>
    {% endif %}

{% endblock %}
", "article/index.html.twig", "C:\\projetPhp\\Symfony-Blog-IFI\\templates\\article\\index.html.twig");
    }
}
