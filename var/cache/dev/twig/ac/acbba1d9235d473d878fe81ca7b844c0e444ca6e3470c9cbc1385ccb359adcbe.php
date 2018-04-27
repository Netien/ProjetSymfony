<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8bd5edbfd29f3e939e921db485e54e78eaf2ca2efc1a47455521b9c66b7017de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f1e3eacbd57e6eca9dcf4f0fca3440ffb27e365b3709d87162721bd782664d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1e3eacbd57e6eca9dcf4f0fca3440ffb27e365b3709d87162721bd782664d2->enter($__internal_0f1e3eacbd57e6eca9dcf4f0fca3440ffb27e365b3709d87162721bd782664d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_26791fe36288a6aadd8fb4d36871eeeedcb412d2520472ba916bf6074fee49b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26791fe36288a6aadd8fb4d36871eeeedcb412d2520472ba916bf6074fee49b8->enter($__internal_26791fe36288a6aadd8fb4d36871eeeedcb412d2520472ba916bf6074fee49b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1e3eacbd57e6eca9dcf4f0fca3440ffb27e365b3709d87162721bd782664d2->leave($__internal_0f1e3eacbd57e6eca9dcf4f0fca3440ffb27e365b3709d87162721bd782664d2_prof);

        
        $__internal_26791fe36288a6aadd8fb4d36871eeeedcb412d2520472ba916bf6074fee49b8->leave($__internal_26791fe36288a6aadd8fb4d36871eeeedcb412d2520472ba916bf6074fee49b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b20e6dc9c70c8e2ddae813276ecd72a730c8062cf302aa2ffc630b76e7aa82c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20e6dc9c70c8e2ddae813276ecd72a730c8062cf302aa2ffc630b76e7aa82c9->enter($__internal_b20e6dc9c70c8e2ddae813276ecd72a730c8062cf302aa2ffc630b76e7aa82c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e649de198e4a42ec17d2819be364940cd74715d85204bdf7e638876ea241c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e649de198e4a42ec17d2819be364940cd74715d85204bdf7e638876ea241c89->enter($__internal_9e649de198e4a42ec17d2819be364940cd74715d85204bdf7e638876ea241c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e649de198e4a42ec17d2819be364940cd74715d85204bdf7e638876ea241c89->leave($__internal_9e649de198e4a42ec17d2819be364940cd74715d85204bdf7e638876ea241c89_prof);

        
        $__internal_b20e6dc9c70c8e2ddae813276ecd72a730c8062cf302aa2ffc630b76e7aa82c9->leave($__internal_b20e6dc9c70c8e2ddae813276ecd72a730c8062cf302aa2ffc630b76e7aa82c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b967954f63cae35c67aaf061c4450ee24d47a30011a4d57ba6ea08c2e07c1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b967954f63cae35c67aaf061c4450ee24d47a30011a4d57ba6ea08c2e07c1a6->enter($__internal_1b967954f63cae35c67aaf061c4450ee24d47a30011a4d57ba6ea08c2e07c1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3fbd31c1e82608a9b8eaafb287bdeca27697b23492b61b8fd74028b5fba31bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbd31c1e82608a9b8eaafb287bdeca27697b23492b61b8fd74028b5fba31bdf->enter($__internal_3fbd31c1e82608a9b8eaafb287bdeca27697b23492b61b8fd74028b5fba31bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3fbd31c1e82608a9b8eaafb287bdeca27697b23492b61b8fd74028b5fba31bdf->leave($__internal_3fbd31c1e82608a9b8eaafb287bdeca27697b23492b61b8fd74028b5fba31bdf_prof);

        
        $__internal_1b967954f63cae35c67aaf061c4450ee24d47a30011a4d57ba6ea08c2e07c1a6->leave($__internal_1b967954f63cae35c67aaf061c4450ee24d47a30011a4d57ba6ea08c2e07c1a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38eb52f4cbee6d5b8aef150b2cda7326ae5beb25efe27f92a81066084c659ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38eb52f4cbee6d5b8aef150b2cda7326ae5beb25efe27f92a81066084c659ea2->enter($__internal_38eb52f4cbee6d5b8aef150b2cda7326ae5beb25efe27f92a81066084c659ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3c8c23b9a44fc7303b961593133fc34bd9ad17fc577ea33663ba41ae59c309c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c8c23b9a44fc7303b961593133fc34bd9ad17fc577ea33663ba41ae59c309c->enter($__internal_c3c8c23b9a44fc7303b961593133fc34bd9ad17fc577ea33663ba41ae59c309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3c8c23b9a44fc7303b961593133fc34bd9ad17fc577ea33663ba41ae59c309c->leave($__internal_c3c8c23b9a44fc7303b961593133fc34bd9ad17fc577ea33663ba41ae59c309c_prof);

        
        $__internal_38eb52f4cbee6d5b8aef150b2cda7326ae5beb25efe27f92a81066084c659ea2->leave($__internal_38eb52f4cbee6d5b8aef150b2cda7326ae5beb25efe27f92a81066084c659ea2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
