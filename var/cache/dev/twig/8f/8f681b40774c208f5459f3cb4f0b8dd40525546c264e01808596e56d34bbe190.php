<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ee38b5059b5f1c07f36908c21120aee5804c8b4b2d64f2165fbccaf4aae1cd56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d83e4c1fc47ff01a63386274384114c1225332e0280fd6f1883849576cdadd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83e4c1fc47ff01a63386274384114c1225332e0280fd6f1883849576cdadd7d->enter($__internal_d83e4c1fc47ff01a63386274384114c1225332e0280fd6f1883849576cdadd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_073eb01d482c01bba5b4b4031aceef4812df27825eaea589dc375154af0e59a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073eb01d482c01bba5b4b4031aceef4812df27825eaea589dc375154af0e59a6->enter($__internal_073eb01d482c01bba5b4b4031aceef4812df27825eaea589dc375154af0e59a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83e4c1fc47ff01a63386274384114c1225332e0280fd6f1883849576cdadd7d->leave($__internal_d83e4c1fc47ff01a63386274384114c1225332e0280fd6f1883849576cdadd7d_prof);

        
        $__internal_073eb01d482c01bba5b4b4031aceef4812df27825eaea589dc375154af0e59a6->leave($__internal_073eb01d482c01bba5b4b4031aceef4812df27825eaea589dc375154af0e59a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8259ea7dc9fe0aba9e0dfd6a308ad02de9ec829ac76a311955419b705e2abce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8259ea7dc9fe0aba9e0dfd6a308ad02de9ec829ac76a311955419b705e2abce->enter($__internal_a8259ea7dc9fe0aba9e0dfd6a308ad02de9ec829ac76a311955419b705e2abce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e354baac89943da7d78a78f9dbdab0f1d22f734b3bd383c68a20b1618b0fe31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e354baac89943da7d78a78f9dbdab0f1d22f734b3bd383c68a20b1618b0fe31a->enter($__internal_e354baac89943da7d78a78f9dbdab0f1d22f734b3bd383c68a20b1618b0fe31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e354baac89943da7d78a78f9dbdab0f1d22f734b3bd383c68a20b1618b0fe31a->leave($__internal_e354baac89943da7d78a78f9dbdab0f1d22f734b3bd383c68a20b1618b0fe31a_prof);

        
        $__internal_a8259ea7dc9fe0aba9e0dfd6a308ad02de9ec829ac76a311955419b705e2abce->leave($__internal_a8259ea7dc9fe0aba9e0dfd6a308ad02de9ec829ac76a311955419b705e2abce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
