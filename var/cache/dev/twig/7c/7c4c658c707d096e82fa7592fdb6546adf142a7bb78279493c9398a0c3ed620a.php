<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de7c9b3f820e3da97bc82d5e676c6c0673cf120645d11b6dc58da939415e3bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e27d57744a17c921c4411ab31151424fa74d1b82e0e593b48fa933ac52511a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27d57744a17c921c4411ab31151424fa74d1b82e0e593b48fa933ac52511a89->enter($__internal_e27d57744a17c921c4411ab31151424fa74d1b82e0e593b48fa933ac52511a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_11e8358eba09c423b8f1fb79ba46db29d8a6b41b0b00c1f5be0826f8036843bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e8358eba09c423b8f1fb79ba46db29d8a6b41b0b00c1f5be0826f8036843bd->enter($__internal_11e8358eba09c423b8f1fb79ba46db29d8a6b41b0b00c1f5be0826f8036843bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27d57744a17c921c4411ab31151424fa74d1b82e0e593b48fa933ac52511a89->leave($__internal_e27d57744a17c921c4411ab31151424fa74d1b82e0e593b48fa933ac52511a89_prof);

        
        $__internal_11e8358eba09c423b8f1fb79ba46db29d8a6b41b0b00c1f5be0826f8036843bd->leave($__internal_11e8358eba09c423b8f1fb79ba46db29d8a6b41b0b00c1f5be0826f8036843bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ae556779101b1d255de38d78bbad6be4d28d04a48f256fc206fed4eea094d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae556779101b1d255de38d78bbad6be4d28d04a48f256fc206fed4eea094d54->enter($__internal_9ae556779101b1d255de38d78bbad6be4d28d04a48f256fc206fed4eea094d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f0d82a6cd3d2679eac32451377040591182d896c97667b97ecb3f9e36da1264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0d82a6cd3d2679eac32451377040591182d896c97667b97ecb3f9e36da1264->enter($__internal_0f0d82a6cd3d2679eac32451377040591182d896c97667b97ecb3f9e36da1264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f0d82a6cd3d2679eac32451377040591182d896c97667b97ecb3f9e36da1264->leave($__internal_0f0d82a6cd3d2679eac32451377040591182d896c97667b97ecb3f9e36da1264_prof);

        
        $__internal_9ae556779101b1d255de38d78bbad6be4d28d04a48f256fc206fed4eea094d54->leave($__internal_9ae556779101b1d255de38d78bbad6be4d28d04a48f256fc206fed4eea094d54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7828bb94a30758e08062f92cfc8b65e2048d5c6ccc219894919f159e175b870e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7828bb94a30758e08062f92cfc8b65e2048d5c6ccc219894919f159e175b870e->enter($__internal_7828bb94a30758e08062f92cfc8b65e2048d5c6ccc219894919f159e175b870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ed581d023869e8afa80a9b614b53f13fc7a22e89d097fd9fa185036911f750f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed581d023869e8afa80a9b614b53f13fc7a22e89d097fd9fa185036911f750f->enter($__internal_9ed581d023869e8afa80a9b614b53f13fc7a22e89d097fd9fa185036911f750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ed581d023869e8afa80a9b614b53f13fc7a22e89d097fd9fa185036911f750f->leave($__internal_9ed581d023869e8afa80a9b614b53f13fc7a22e89d097fd9fa185036911f750f_prof);

        
        $__internal_7828bb94a30758e08062f92cfc8b65e2048d5c6ccc219894919f159e175b870e->leave($__internal_7828bb94a30758e08062f92cfc8b65e2048d5c6ccc219894919f159e175b870e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_732a703250ebfd638e822d13f25db4e06ee9ed278e3f0a2f28d2d9f4d9687ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732a703250ebfd638e822d13f25db4e06ee9ed278e3f0a2f28d2d9f4d9687ede->enter($__internal_732a703250ebfd638e822d13f25db4e06ee9ed278e3f0a2f28d2d9f4d9687ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_139efbdc2f1fb7183b67b6648b66859094a4a1e773c4e0c948bd3365ef90e477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139efbdc2f1fb7183b67b6648b66859094a4a1e773c4e0c948bd3365ef90e477->enter($__internal_139efbdc2f1fb7183b67b6648b66859094a4a1e773c4e0c948bd3365ef90e477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_139efbdc2f1fb7183b67b6648b66859094a4a1e773c4e0c948bd3365ef90e477->leave($__internal_139efbdc2f1fb7183b67b6648b66859094a4a1e773c4e0c948bd3365ef90e477_prof);

        
        $__internal_732a703250ebfd638e822d13f25db4e06ee9ed278e3f0a2f28d2d9f4d9687ede->leave($__internal_732a703250ebfd638e822d13f25db4e06ee9ed278e3f0a2f28d2d9f4d9687ede_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
