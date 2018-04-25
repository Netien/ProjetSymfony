<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a759a596bd8ede21017804ec29138477eb1e2b18af4437da52573d87e5f3de72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_13330a5a99e70b3dd81f285dad353981a23c67a23f975b58b719488a4cc453ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13330a5a99e70b3dd81f285dad353981a23c67a23f975b58b719488a4cc453ea->enter($__internal_13330a5a99e70b3dd81f285dad353981a23c67a23f975b58b719488a4cc453ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a1f005c70a208bcfe99751c9f1278de284601eb121506457c391807d58607c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f005c70a208bcfe99751c9f1278de284601eb121506457c391807d58607c58->enter($__internal_a1f005c70a208bcfe99751c9f1278de284601eb121506457c391807d58607c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13330a5a99e70b3dd81f285dad353981a23c67a23f975b58b719488a4cc453ea->leave($__internal_13330a5a99e70b3dd81f285dad353981a23c67a23f975b58b719488a4cc453ea_prof);

        
        $__internal_a1f005c70a208bcfe99751c9f1278de284601eb121506457c391807d58607c58->leave($__internal_a1f005c70a208bcfe99751c9f1278de284601eb121506457c391807d58607c58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62f4d607944c4c6f031c77461929c4c7fb8c921608fc6b0ab4a09247687c2928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f4d607944c4c6f031c77461929c4c7fb8c921608fc6b0ab4a09247687c2928->enter($__internal_62f4d607944c4c6f031c77461929c4c7fb8c921608fc6b0ab4a09247687c2928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_309d9ea2f5d1c7b8b92ce88ddf4759dc2e5980475371e800016d2c89cc02f301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309d9ea2f5d1c7b8b92ce88ddf4759dc2e5980475371e800016d2c89cc02f301->enter($__internal_309d9ea2f5d1c7b8b92ce88ddf4759dc2e5980475371e800016d2c89cc02f301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_309d9ea2f5d1c7b8b92ce88ddf4759dc2e5980475371e800016d2c89cc02f301->leave($__internal_309d9ea2f5d1c7b8b92ce88ddf4759dc2e5980475371e800016d2c89cc02f301_prof);

        
        $__internal_62f4d607944c4c6f031c77461929c4c7fb8c921608fc6b0ab4a09247687c2928->leave($__internal_62f4d607944c4c6f031c77461929c4c7fb8c921608fc6b0ab4a09247687c2928_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_452d9b671c0d61f543dcf74154cf3192ff01103e33162dfe0593e6ff046b804a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452d9b671c0d61f543dcf74154cf3192ff01103e33162dfe0593e6ff046b804a->enter($__internal_452d9b671c0d61f543dcf74154cf3192ff01103e33162dfe0593e6ff046b804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b600ca5380007566208cf15bd9ea238819d690b347dd0c7cf953f67412cf4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b600ca5380007566208cf15bd9ea238819d690b347dd0c7cf953f67412cf4a1->enter($__internal_5b600ca5380007566208cf15bd9ea238819d690b347dd0c7cf953f67412cf4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_5b600ca5380007566208cf15bd9ea238819d690b347dd0c7cf953f67412cf4a1->leave($__internal_5b600ca5380007566208cf15bd9ea238819d690b347dd0c7cf953f67412cf4a1_prof);

        
        $__internal_452d9b671c0d61f543dcf74154cf3192ff01103e33162dfe0593e6ff046b804a->leave($__internal_452d9b671c0d61f543dcf74154cf3192ff01103e33162dfe0593e6ff046b804a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
