<?php

/* article/show.html.twig */
class __TwigTemplate_b02dea9c251d69f008df5dc3de000fcdc945562deb54a71a6182c31645ca4e1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Article</h1>

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
        <p class=\"lead\">Publié le ";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "creationDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "creationDate", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "author", []), "username", []), "html", null, true);
        echo "</p>
        <hr class=\"my-4\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 12, $this->source); })()), "content", []), "html", null, true);
        echo "</p>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" role=\"button\">Retour</a>
        ";
        // line 14
        $context["current_user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", []);
        // line 15
        echo "        ";
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 15, $this->source); })()) != null)) {
            // line 16
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new Twig_Error_Runtime('Variable "current_user" does not exist.', 16, $this->source); })()), "username", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 16, $this->source); })()), "author", []), "username", []))) {
                // line 17
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->source); })()), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-lg \" role=\"button\" aria-pressed=\"true\">Éditez cette article</a>
                ";
                // line 18
                echo twig_include($this->env, $context, "article/_delete_form.html.twig");
                echo "
            ";
            }
            // line 20
            echo "        ";
        }
        // line 21
        echo "

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  99 => 20,  94 => 18,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  77 => 13,  73 => 12,  66 => 10,  62 => 9,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <h1>Article</h1>

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">{{ article.title }}</h1>
        <p class=\"lead\">Publié le {{ article.creationDate ? article.creationDate|date('Y-m-d H:i:s') : '' }} par {{ article.author.username }}</p>
        <hr class=\"my-4\">
        <p>{{ article.content }}</p>
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('article_index')}}\" role=\"button\">Retour</a>
        {%  set current_user = app.user%}
        {% if current_user != null %}
            {% if current_user.username == article.author.username %}
                <a href=\"{{ path('article_edit', {'id': article.id}) }}\" class=\"btn btn-primary btn-lg \" role=\"button\" aria-pressed=\"true\">Éditez cette article</a>
                {{ include('article/_delete_form.html.twig') }}
            {% endif %}
        {% endif %}


    </div>



{% endblock %}
", "article/show.html.twig", "C:\\projetPhp\\Symfony-Blog-IFI\\templates\\article\\show.html.twig");
    }
}
