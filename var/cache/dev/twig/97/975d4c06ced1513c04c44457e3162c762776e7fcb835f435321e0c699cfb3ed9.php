<?php

/* PWMainBundle::layout.html.twig */
class __TwigTemplate_476e3edde031ab454c38b5256d6b3b62833ec43fb4b657bfdefdb4ba98ad3352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
<<<<<<< HEAD
           <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/layout.css\">
         <meta charset=\"utf-8\">
=======
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "         <meta charset=\"utf-8\">
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\" style=\"height:100%;width:100%;overflow:scroll\">
      <div class=\"container\">
        <div class=\"row\">
        <nav class=\"navbar navbar-default\">
<<<<<<< HEAD
            <div class=\"navbar-header\">
              <a class=\"navbar-brand \" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"/Fichier\">Fichier</a></li>
                <li class=\"list-inline-item\"><a href=\"\">Chat</a></li>
                <li class=\"list-inline-item\"><a href=\"/Symfony/web/app_dev.php/profile\">Profile</a>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <a href=\"/Symfony/web/app_dev.php/logout\">Logout</a>
              </div>
              </nav>
=======

          <div class=\"container-fluid \" style=\"float:left\">
            <div style=\"position:absolute;left:20px;width:100px\" class=\"col\" >
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"d-flex p-2 justify-content-around \" style=\"min-width:75%\">
              
              <div class=\"p-3\">
                <p><a href=";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sections"] ?? $this->getContext($context, "sections")), "chat", array()), "html", null, true);
        echo " class=\"btn btn-primary\" style=\"min-width:10%\">Chat</a></p>
              </div>
              <div class=\"p-3\">
                <p><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sections"] ?? $this->getContext($context, "sections")), "files", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"min-width:10%\">Fichiers Partages</a></p>
              </div>
              <div class=\"p-3\">
                <p><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sections"] ?? $this->getContext($context, "sections")), "project", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"min-width:10%\">Projet</a></p>
              </div>
            </div>
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
          </div>
      </div>


    <div class=\"container-fluid\" >
      <div class=\"row\">

        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
<<<<<<< HEAD
              <ul>

              ";
        // line 42
=======

              ";
        // line 49
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arraygrp"] ?? $this->getContext($context, "arraygrp")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
<<<<<<< HEAD
            // line 43
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"/group/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "/chat\">
                    ";
            // line 45
=======
            // line 50
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "url", array()), "html", null, true);
            echo ">
                    ";
            // line 52
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "titre", array()), "html", null, true);
            echo "
                  </a>
                </li>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
<<<<<<< HEAD
            // line 49
=======
            // line 56
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
            echo "                <li>Pas de groupe trouve</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 51
        echo "            </ul>
          </div>
        </nav>
=======
        // line 58
        echo "            </ul>
          </div>
        </nav>
    <div class=\"col-xl\" >
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
          </div>
        

    \t";
<<<<<<< HEAD
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
=======
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
        echo "      </main>
      </div>
    \t<footer>
    \t
    \t</footer>
</div>
<<<<<<< HEAD
=======
</div>
</div>
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
    </body>
    <script src=\"/js/jquery.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
</html>


    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

<<<<<<< HEAD
    // line 60
=======
    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

<<<<<<< HEAD
        // line 61
=======
        // line 69
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
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
<<<<<<< HEAD
        return array (  141 => 61,  132 => 60,  110 => 62,  108 => 60,  97 => 51,  90 => 49,  81 => 45,  77 => 44,  74 => 43,  69 => 42,  26 => 1,);
=======
        return array (  190 => 69,  181 => 68,  168 => 8,  159 => 7,  129 => 70,  127 => 68,  115 => 58,  108 => 56,  99 => 52,  95 => 51,  92 => 50,  87 => 49,  70 => 35,  64 => 32,  58 => 29,  37 => 10,  35 => 7,  27 => 1,);
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
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
<<<<<<< HEAD
           <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/layout.css\">
=======
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        {% block stylesheets %}
            <link href=\"{{ asset('layout.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\" style=\"height:100%;width:100%;overflow:scroll\">
      <div class=\"container\">
        <div class=\"row\">
        <nav class=\"navbar navbar-default\">
<<<<<<< HEAD
            <div class=\"navbar-header\">
              <a class=\"navbar-brand \" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"/Fichier\">Fichier</a></li>
                <li class=\"list-inline-item\"><a href=\"\">Chat</a></li>
                <li class=\"list-inline-item\"><a href=\"/Symfony/web/app_dev.php/profile\">Profile</a>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <a href=\"/Symfony/web/app_dev.php/logout\">Logout</a>
              </div>
              </nav>
=======

          <div class=\"container-fluid \" style=\"float:left\">
            <div style=\"position:absolute;left:20px;width:100px\" class=\"col\" >
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"d-flex p-2 justify-content-around \" style=\"min-width:75%\">
              
              <div class=\"p-3\">
                <p><a href={{sections.chat}} class=\"btn btn-primary\" style=\"min-width:10%\">Chat</a></p>
              </div>
              <div class=\"p-3\">
                <p><a href=\"{{sections.files}}\" class=\"btn btn-primary\" style=\"min-width:10%\">Fichiers Partages</a></p>
              </div>
              <div class=\"p-3\">
                <p><a href=\"{{sections.project}}\" class=\"btn btn-primary\" style=\"min-width:10%\">Projet</a></p>
              </div>
            </div>
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
          </div>
      </div>


    <div class=\"container-fluid\" >
      <div class=\"row\">

        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
<<<<<<< HEAD
              <ul>

              {% for groupe in arraygrp %}
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"/group/{{groupe.id}}/chat\">
=======

              {% for groupe in arraygrp %}
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href={{groupe.url}}>
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
                    {{ groupe.titre }}
                  </a>
                </li>
              {% else %}
                <li>Pas de groupe trouve</li>
              {% endfor %}
            </ul>
          </div>
        </nav>
<<<<<<< HEAD
=======
    <div class=\"col-xl\" >
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
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
<<<<<<< HEAD
=======
</div>
</div>
>>>>>>> 6d5477c7dc8ef80aaaeae7c8472ceaf9252f70b9
    </body>
    <script src=\"/js/jquery.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
</html>


    ", "PWMainBundle::layout.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/PW/MainBundle/Resources/views/layout.html.twig");
    }
}
