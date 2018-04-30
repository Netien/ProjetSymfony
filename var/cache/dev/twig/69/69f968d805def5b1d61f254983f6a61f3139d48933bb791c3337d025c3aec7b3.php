<?php

/* PWMainBundle::layout.html.twig */
class __TwigTemplate_c442ca9ad8af3a0c53b6c14595695c4f49a9f5c4d36cc7be43672d74ea120711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"layout.css\">
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\">
        <div class=\"row\">
        <nav class=\"navbar navbar-default\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"/Fichier\">Fichier</a></li>
                <li class=\"list-inline-item\"><a href=\"\">Chat</a></li>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <a href=\"/Symfony/web/app_dev.php/logout\">Logout</a>
              </ul>
            </div>
          </div>
        </nav>
      </div>


    <div class=\"container-fluid\">
      <div class=\"row\">

        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
              <ul>

              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arraygrp"] ?? $this->getContext($context, "arraygrp")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 45
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"/group/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "/chat\">
                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "titre", array()), "html", null, true);
            echo "
                  </a>
                </li>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                <li>Pas de groupe trouve</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </ul>
          </div>
        </nav>
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
          </div>
        

    \t";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "      </main>
      </div>
    \t<footer>
    \t
    \t</footer>
</div>
    </body>
    <script src=\"/js/jquery.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
</html>


    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    \t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PWMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  134 => 62,  112 => 64,  110 => 62,  99 => 53,  92 => 51,  83 => 47,  79 => 46,  76 => 45,  71 => 44,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"layout.css\">
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\">
        <div class=\"row\">
        <nav class=\"navbar navbar-default\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"/Fichier\">Fichier</a></li>
                <li class=\"list-inline-item\"><a href=\"\">Chat</a></li>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <a href=\"/Symfony/web/app_dev.php/logout\">Logout</a>
              </ul>
            </div>
          </div>
        </nav>
      </div>


    <div class=\"container-fluid\">
      <div class=\"row\">

        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
              <ul>

              {% for groupe in arraygrp %}
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"/group/{{groupe.id}}/chat\">
                    {{ groupe.titre }}
                  </a>
                </li>
              {% else %}
                <li>Pas de groupe trouve</li>
              {% endfor %}
            </ul>
          </div>
        </nav>
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
          </div>
        

    \t{% block body %}
    \t{% endblock %}
      </main>
      </div>
    \t<footer>
    \t
    \t</footer>
</div>
    </body>
    <script src=\"/js/jquery.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
</html>


    ", "PWMainBundle::layout.html.twig", "/Users/rrtaya/Site Symfony/Symfony/src/PW/MainBundle/Resources/views/layout.html.twig");
    }
}