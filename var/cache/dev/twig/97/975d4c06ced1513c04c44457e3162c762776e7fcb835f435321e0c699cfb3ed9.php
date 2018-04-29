<?php

/* PWMainBundle::layout.html.twig */
class __TwigTemplate_476e3edde031ab454c38b5256d6b3b62833ec43fb4b657bfdefdb4ba98ad3352 extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/css/layout.css\">
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\">
        <nav class=\"navbar navbar-default\">

          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"\">aie</a></li>
                <li class=\"list-inline-item\"><a href=\"\">aie</a></li>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <ul class=\"nav navbar-nav d-flex justify-content-end\">
                <li>fnzuofz</li>
              </ul>
            </div>
          </div>
        </nav>


    <div class=\"container-fluid\">
      <div class=\"row\">

        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">

              <ul>

              ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arraygrp"] ?? $this->getContext($context, "arraygrp")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 48
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"/group/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "/chat\">
                    ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "titre", array()), "html", null, true);
            echo "
                  </a>
                </li>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                <li>Pas de groupe trouve</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
              
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                  Dashboard
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Products
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Customers
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Reports
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Integrations
                </a>
              </li>
            </ul>
          </div>
        </nav>
    <div class=\"col-xl\">
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
          </div>
        

    \t";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "      </main>
      </div>
    \t<footer>
    \t
    \t</footer>
</div>
</div>
    </body>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
</html>


    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 98
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
        return array (  185 => 98,  176 => 97,  147 => 99,  145 => 97,  102 => 56,  95 => 54,  86 => 50,  82 => 49,  79 => 48,  74 => 47,  26 => 1,);
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
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/css/layout.css\">
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


        <title>Autentification Create&amp;Share</title>
    </head>

    <body>
      <div class=\"container\">
        <nav class=\"navbar navbar-default\">

          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"#\">CreateAndShare</a>
            </div>
            <div class=\"navbar col-sm-8\" id=\"navbar\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"\">aie</a></li>
                <li class=\"list-inline-item\"><a href=\"\">aie</a></li>
              </ul>
            </div>
            <div class=\"navbar col-sm w-25 p-3\" id=\"navbar\">
              <ul class=\"nav navbar-nav d-flex justify-content-end\">
                <li>fnzuofz</li>
              </ul>
            </div>
          </div>
        </nav>


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

              
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                  Dashboard
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Products
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Customers
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Reports
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  
                  Integrations
                </a>
              </li>
            </ul>
          </div>
        </nav>
    <div class=\"col-xl\">
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
</div>
    </body>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
</html>


    ", "PWMainBundle::layout.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/PW/MainBundle/Resources/views/layout.html.twig");
    }
}
