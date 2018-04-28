<?php

/* ::base.html.twig */
class __TwigTemplate_168373775b7e98459a42141fd891efc60f474d7d95f56672954e55245650c7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe78410c764bae9b5c6c1bd0557f373c5b6a8fa709027cef0db234b7e56ae6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe78410c764bae9b5c6c1bd0557f373c5b6a8fa709027cef0db234b7e56ae6d5->enter($__internal_fe78410c764bae9b5c6c1bd0557f373c5b6a8fa709027cef0db234b7e56ae6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b6d46be6fbf5bcf641f45148e8f393523a6a2900ccf13d1e72417760a9c4552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d46be6fbf5bcf641f45148e8f393523a6a2900ccf13d1e72417760a9c4552f->enter($__internal_b6d46be6fbf5bcf641f45148e8f393523a6a2900ccf13d1e72417760a9c4552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fe78410c764bae9b5c6c1bd0557f373c5b6a8fa709027cef0db234b7e56ae6d5->leave($__internal_fe78410c764bae9b5c6c1bd0557f373c5b6a8fa709027cef0db234b7e56ae6d5_prof);

        
        $__internal_b6d46be6fbf5bcf641f45148e8f393523a6a2900ccf13d1e72417760a9c4552f->leave($__internal_b6d46be6fbf5bcf641f45148e8f393523a6a2900ccf13d1e72417760a9c4552f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_198749c188f479cd4927d00c7858e625a4832a70f3d510fc544c9c721b47796c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198749c188f479cd4927d00c7858e625a4832a70f3d510fc544c9c721b47796c->enter($__internal_198749c188f479cd4927d00c7858e625a4832a70f3d510fc544c9c721b47796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_002c1610e0ffab61088655c54e1b30b77d8abea16273195271610918559665fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002c1610e0ffab61088655c54e1b30b77d8abea16273195271610918559665fd->enter($__internal_002c1610e0ffab61088655c54e1b30b77d8abea16273195271610918559665fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_002c1610e0ffab61088655c54e1b30b77d8abea16273195271610918559665fd->leave($__internal_002c1610e0ffab61088655c54e1b30b77d8abea16273195271610918559665fd_prof);

        
        $__internal_198749c188f479cd4927d00c7858e625a4832a70f3d510fc544c9c721b47796c->leave($__internal_198749c188f479cd4927d00c7858e625a4832a70f3d510fc544c9c721b47796c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_824569dc2f517a8bb4ddfdc1c002b96c5df5aec73acdf7812da5563afb5ebdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824569dc2f517a8bb4ddfdc1c002b96c5df5aec73acdf7812da5563afb5ebdf8->enter($__internal_824569dc2f517a8bb4ddfdc1c002b96c5df5aec73acdf7812da5563afb5ebdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_51c6979558fd07a66d8e72fdf573e7603c07edfa09f063927171bfe1172a876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c6979558fd07a66d8e72fdf573e7603c07edfa09f063927171bfe1172a876a->enter($__internal_51c6979558fd07a66d8e72fdf573e7603c07edfa09f063927171bfe1172a876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51c6979558fd07a66d8e72fdf573e7603c07edfa09f063927171bfe1172a876a->leave($__internal_51c6979558fd07a66d8e72fdf573e7603c07edfa09f063927171bfe1172a876a_prof);

        
        $__internal_824569dc2f517a8bb4ddfdc1c002b96c5df5aec73acdf7812da5563afb5ebdf8->leave($__internal_824569dc2f517a8bb4ddfdc1c002b96c5df5aec73acdf7812da5563afb5ebdf8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7edf77456c0c8a00719730ef8ac3de6e478a429e7828d29224c7408113e1ca05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edf77456c0c8a00719730ef8ac3de6e478a429e7828d29224c7408113e1ca05->enter($__internal_7edf77456c0c8a00719730ef8ac3de6e478a429e7828d29224c7408113e1ca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c00b09fb9d906402814c12fbe1c82fb8689982ff06b4c6ec97c8494a10cfd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c00b09fb9d906402814c12fbe1c82fb8689982ff06b4c6ec97c8494a10cfd3f->enter($__internal_2c00b09fb9d906402814c12fbe1c82fb8689982ff06b4c6ec97c8494a10cfd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c00b09fb9d906402814c12fbe1c82fb8689982ff06b4c6ec97c8494a10cfd3f->leave($__internal_2c00b09fb9d906402814c12fbe1c82fb8689982ff06b4c6ec97c8494a10cfd3f_prof);

        
        $__internal_7edf77456c0c8a00719730ef8ac3de6e478a429e7828d29224c7408113e1ca05->leave($__internal_7edf77456c0c8a00719730ef8ac3de6e478a429e7828d29224c7408113e1ca05_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fac79dd54f73497874c113174fd83623380f0bd96d3ff0b87e8fd2247b61146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fac79dd54f73497874c113174fd83623380f0bd96d3ff0b87e8fd2247b61146->enter($__internal_3fac79dd54f73497874c113174fd83623380f0bd96d3ff0b87e8fd2247b61146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_238edb2bc623c441968f204fd223cd1dd674fa1c53327e772c7d9f15dee3d3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238edb2bc623c441968f204fd223cd1dd674fa1c53327e772c7d9f15dee3d3d1->enter($__internal_238edb2bc623c441968f204fd223cd1dd674fa1c53327e772c7d9f15dee3d3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_238edb2bc623c441968f204fd223cd1dd674fa1c53327e772c7d9f15dee3d3d1->leave($__internal_238edb2bc623c441968f204fd223cd1dd674fa1c53327e772c7d9f15dee3d3d1_prof);

        
        $__internal_3fac79dd54f73497874c113174fd83623380f0bd96d3ff0b87e8fd2247b61146->leave($__internal_3fac79dd54f73497874c113174fd83623380f0bd96d3ff0b87e8fd2247b61146_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/app/Resources/views/base.html.twig");
    }
}
