<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3d7559424f55a79cd76f14cdd7d3125146c0cf342f73b7ae85a1eae2e25f4547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86dabd3ab0ec16cd504520b129f94f89cbe61f11d2f785fdb7351a116aec32c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86dabd3ab0ec16cd504520b129f94f89cbe61f11d2f785fdb7351a116aec32c5->enter($__internal_86dabd3ab0ec16cd504520b129f94f89cbe61f11d2f785fdb7351a116aec32c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f7b8012fbfd0d3072e882cb04d7320509557aec0663a2e912d5e9d1190e9a246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b8012fbfd0d3072e882cb04d7320509557aec0663a2e912d5e9d1190e9a246->enter($__internal_f7b8012fbfd0d3072e882cb04d7320509557aec0663a2e912d5e9d1190e9a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86dabd3ab0ec16cd504520b129f94f89cbe61f11d2f785fdb7351a116aec32c5->leave($__internal_86dabd3ab0ec16cd504520b129f94f89cbe61f11d2f785fdb7351a116aec32c5_prof);

        
        $__internal_f7b8012fbfd0d3072e882cb04d7320509557aec0663a2e912d5e9d1190e9a246->leave($__internal_f7b8012fbfd0d3072e882cb04d7320509557aec0663a2e912d5e9d1190e9a246_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2566c852da72bbd83bc208bb500dd671d7ac48b76fa6c79129c0c487a07378de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2566c852da72bbd83bc208bb500dd671d7ac48b76fa6c79129c0c487a07378de->enter($__internal_2566c852da72bbd83bc208bb500dd671d7ac48b76fa6c79129c0c487a07378de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b99b23a17980d3936315c954b797988250c5138d1935d3873134b0248c85f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b99b23a17980d3936315c954b797988250c5138d1935d3873134b0248c85f34->enter($__internal_4b99b23a17980d3936315c954b797988250c5138d1935d3873134b0248c85f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4b99b23a17980d3936315c954b797988250c5138d1935d3873134b0248c85f34->leave($__internal_4b99b23a17980d3936315c954b797988250c5138d1935d3873134b0248c85f34_prof);

        
        $__internal_2566c852da72bbd83bc208bb500dd671d7ac48b76fa6c79129c0c487a07378de->leave($__internal_2566c852da72bbd83bc208bb500dd671d7ac48b76fa6c79129c0c487a07378de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_034bcb2de93d40af8649b08fc89631c1bc4806a54ceafdb80e0eeaf9a4265671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034bcb2de93d40af8649b08fc89631c1bc4806a54ceafdb80e0eeaf9a4265671->enter($__internal_034bcb2de93d40af8649b08fc89631c1bc4806a54ceafdb80e0eeaf9a4265671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d53ae422c88ccdb9382c22315a24387ad0b67a65c3773976d83c9f43d4670c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53ae422c88ccdb9382c22315a24387ad0b67a65c3773976d83c9f43d4670c2e->enter($__internal_d53ae422c88ccdb9382c22315a24387ad0b67a65c3773976d83c9f43d4670c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d53ae422c88ccdb9382c22315a24387ad0b67a65c3773976d83c9f43d4670c2e->leave($__internal_d53ae422c88ccdb9382c22315a24387ad0b67a65c3773976d83c9f43d4670c2e_prof);

        
        $__internal_034bcb2de93d40af8649b08fc89631c1bc4806a54ceafdb80e0eeaf9a4265671->leave($__internal_034bcb2de93d40af8649b08fc89631c1bc4806a54ceafdb80e0eeaf9a4265671_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
