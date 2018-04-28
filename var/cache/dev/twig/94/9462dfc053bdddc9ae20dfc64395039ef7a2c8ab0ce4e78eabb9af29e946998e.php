<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_362500c00eacaca143d9a61619d8df2804641c0d430c88a896828684abfb5a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b5aecfcdca3c16e1b6bca397acf1cc50ad52f9b1010892f9657f1409603b112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5aecfcdca3c16e1b6bca397acf1cc50ad52f9b1010892f9657f1409603b112->enter($__internal_1b5aecfcdca3c16e1b6bca397acf1cc50ad52f9b1010892f9657f1409603b112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9eb04d4c24255667263fb2c9a1d6ece0b0de7890ba7344ec117a4c468dc5da2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb04d4c24255667263fb2c9a1d6ece0b0de7890ba7344ec117a4c468dc5da2c->enter($__internal_9eb04d4c24255667263fb2c9a1d6ece0b0de7890ba7344ec117a4c468dc5da2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5aecfcdca3c16e1b6bca397acf1cc50ad52f9b1010892f9657f1409603b112->leave($__internal_1b5aecfcdca3c16e1b6bca397acf1cc50ad52f9b1010892f9657f1409603b112_prof);

        
        $__internal_9eb04d4c24255667263fb2c9a1d6ece0b0de7890ba7344ec117a4c468dc5da2c->leave($__internal_9eb04d4c24255667263fb2c9a1d6ece0b0de7890ba7344ec117a4c468dc5da2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01b1e01989d29c7106f53098aeb95edbeb747fd8f7642711ba2fba67b8dc22c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b1e01989d29c7106f53098aeb95edbeb747fd8f7642711ba2fba67b8dc22c0->enter($__internal_01b1e01989d29c7106f53098aeb95edbeb747fd8f7642711ba2fba67b8dc22c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a3e47668cc8b43185c0d1a82fc84895fdd35dcd1288123b396c2a22939a1e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3e47668cc8b43185c0d1a82fc84895fdd35dcd1288123b396c2a22939a1e29->enter($__internal_5a3e47668cc8b43185c0d1a82fc84895fdd35dcd1288123b396c2a22939a1e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5a3e47668cc8b43185c0d1a82fc84895fdd35dcd1288123b396c2a22939a1e29->leave($__internal_5a3e47668cc8b43185c0d1a82fc84895fdd35dcd1288123b396c2a22939a1e29_prof);

        
        $__internal_01b1e01989d29c7106f53098aeb95edbeb747fd8f7642711ba2fba67b8dc22c0->leave($__internal_01b1e01989d29c7106f53098aeb95edbeb747fd8f7642711ba2fba67b8dc22c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf488bd07a1f5cc7b92dcdfcec30c665f559d44deb591b452f2ed98ef2e02ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf488bd07a1f5cc7b92dcdfcec30c665f559d44deb591b452f2ed98ef2e02ff2->enter($__internal_bf488bd07a1f5cc7b92dcdfcec30c665f559d44deb591b452f2ed98ef2e02ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0c17750e373d00c03fbbc27f3064c2b76da2eac27b66bf279a0640aa0ac6d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c17750e373d00c03fbbc27f3064c2b76da2eac27b66bf279a0640aa0ac6d84->enter($__internal_f0c17750e373d00c03fbbc27f3064c2b76da2eac27b66bf279a0640aa0ac6d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f0c17750e373d00c03fbbc27f3064c2b76da2eac27b66bf279a0640aa0ac6d84->leave($__internal_f0c17750e373d00c03fbbc27f3064c2b76da2eac27b66bf279a0640aa0ac6d84_prof);

        
        $__internal_bf488bd07a1f5cc7b92dcdfcec30c665f559d44deb591b452f2ed98ef2e02ff2->leave($__internal_bf488bd07a1f5cc7b92dcdfcec30c665f559d44deb591b452f2ed98ef2e02ff2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
