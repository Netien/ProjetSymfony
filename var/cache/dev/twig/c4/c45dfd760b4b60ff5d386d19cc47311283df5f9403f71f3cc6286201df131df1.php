<?php

/* PWUserBundle::layout_auth.html.twig */
class __TwigTemplate_b70beca167f9285d1e8fde888f5b41018278e606033ddffd27bbb48aa95199d7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle::layout_auth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle::layout_auth.html.twig"));

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
            <nav class=\"navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow\">
      <a class=\"navbar-brand col mr-0\" href=\"#\" id=\"title\">CreateAndShare</a>
      <ul class=\"navbar-nav px-3\">
        <li class=\"nav-item text-nowrap\">
          <a class=\"nav-link\" href=\"#\">Sign out</a>
        </li>
      </ul>
    </nav>
    \t<header>
    \t\t<h1>Welcome to Create&amp;Share! Already a member ?</h1> 
    \t</header>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                  <span data-feather=\"home\"></span>
                  Dashboard <span class=\"sr-only\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file\"></span>
                  Orders
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"shopping-cart\"></span>
                  Products
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"users\"></span>
                  Customers
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"bar-chart-2\"></span>
                  Reports
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"layers\"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
              <span>Saved reports</span>
              <a class=\"d-flex align-items-center text-muted\" href=\"#\">
                <span data-feather=\"plus-circle\"></span>
              </a>
            </h6>
            <ul class=\"nav flex-column mb-2\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Current month
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Last quarter
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Social engagement
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          
        </nav>
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
            <div class=\"btn-toolbar mb-2 mb-md-0\">
              <div class=\"btn-group mr-2\">
                <button class=\"btn btn-sm btn-outline-secondary\">Share</button>
                <button class=\"btn btn-sm btn-outline-secondary\">Export</button>
              </div>
              <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
                <span data-feather=\"calendar\"></span>
                This week
              </button>
            </div>
          </div>
    \t";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "
    </main>
    \t<footer>
    \t
    \t</footer>
    </div>
</div>
    </body>



    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
</html>


    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 119
        echo "    \t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle::layout_auth.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 119,  174 => 118,  147 => 120,  145 => 118,  26 => 1,);
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
            <nav class=\"navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow\">
      <a class=\"navbar-brand col mr-0\" href=\"#\" id=\"title\">CreateAndShare</a>
      <ul class=\"navbar-nav px-3\">
        <li class=\"nav-item text-nowrap\">
          <a class=\"nav-link\" href=\"#\">Sign out</a>
        </li>
      </ul>
    </nav>
    \t<header>
    \t\t<h1>Welcome to Create&amp;Share! Already a member ?</h1> 
    \t</header>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                  <span data-feather=\"home\"></span>
                  Dashboard <span class=\"sr-only\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file\"></span>
                  Orders
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"shopping-cart\"></span>
                  Products
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"users\"></span>
                  Customers
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"bar-chart-2\"></span>
                  Reports
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"layers\"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
              <span>Saved reports</span>
              <a class=\"d-flex align-items-center text-muted\" href=\"#\">
                <span data-feather=\"plus-circle\"></span>
              </a>
            </h6>
            <ul class=\"nav flex-column mb-2\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Current month
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Last quarter
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Social engagement
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file-text\"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          
        </nav>
        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
          <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
            <h1 class=\"h2\">Dashboard</h1>
            <div class=\"btn-toolbar mb-2 mb-md-0\">
              <div class=\"btn-group mr-2\">
                <button class=\"btn btn-sm btn-outline-secondary\">Share</button>
                <button class=\"btn btn-sm btn-outline-secondary\">Export</button>
              </div>
              <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
                <span data-feather=\"calendar\"></span>
                This week
              </button>
            </div>
          </div>
    \t{% block body %}
    \t{% endblock %}

    </main>
    \t<footer>
    \t
    \t</footer>
    </div>
</div>
    </body>



    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
</html>


    ", "PWUserBundle::layout_auth.html.twig", "/Users/rrtaya/Site Symfony/Symfony/src/PW/UserBundle/Resources/views/layout_auth.html.twig");
    }
}
