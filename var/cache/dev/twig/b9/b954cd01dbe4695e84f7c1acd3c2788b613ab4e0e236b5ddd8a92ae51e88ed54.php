<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_34e121b3ad8c217b47a6565552a2db11de10c34f038973525ddcb0506f3d00cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_36f09ccb4241c82c6bd5460b09580712dd8f2523bf386faa500d8e7e752cadbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f09ccb4241c82c6bd5460b09580712dd8f2523bf386faa500d8e7e752cadbb->enter($__internal_36f09ccb4241c82c6bd5460b09580712dd8f2523bf386faa500d8e7e752cadbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8d4e2b9badd047563c4cead8fd73509d09c47b3ac2283f05c3c3a1ce9c3e21ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4e2b9badd047563c4cead8fd73509d09c47b3ac2283f05c3c3a1ce9c3e21ec->enter($__internal_8d4e2b9badd047563c4cead8fd73509d09c47b3ac2283f05c3c3a1ce9c3e21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f09ccb4241c82c6bd5460b09580712dd8f2523bf386faa500d8e7e752cadbb->leave($__internal_36f09ccb4241c82c6bd5460b09580712dd8f2523bf386faa500d8e7e752cadbb_prof);

        
        $__internal_8d4e2b9badd047563c4cead8fd73509d09c47b3ac2283f05c3c3a1ce9c3e21ec->leave($__internal_8d4e2b9badd047563c4cead8fd73509d09c47b3ac2283f05c3c3a1ce9c3e21ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59a57aa1f37177e3831f45fe7957e155527caae3e1055ffae5d2a5f3c959641b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a57aa1f37177e3831f45fe7957e155527caae3e1055ffae5d2a5f3c959641b->enter($__internal_59a57aa1f37177e3831f45fe7957e155527caae3e1055ffae5d2a5f3c959641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89979dc7cfbc95347f390406a10f460e3325ffcf8d3e4b9ba499dda103a8845f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89979dc7cfbc95347f390406a10f460e3325ffcf8d3e4b9ba499dda103a8845f->enter($__internal_89979dc7cfbc95347f390406a10f460e3325ffcf8d3e4b9ba499dda103a8845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89979dc7cfbc95347f390406a10f460e3325ffcf8d3e4b9ba499dda103a8845f->leave($__internal_89979dc7cfbc95347f390406a10f460e3325ffcf8d3e4b9ba499dda103a8845f_prof);

        
        $__internal_59a57aa1f37177e3831f45fe7957e155527caae3e1055ffae5d2a5f3c959641b->leave($__internal_59a57aa1f37177e3831f45fe7957e155527caae3e1055ffae5d2a5f3c959641b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a04f4320e4a703a7ace1b784ed78f0dbbafdca81d0a11069b7fe1775c913fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a04f4320e4a703a7ace1b784ed78f0dbbafdca81d0a11069b7fe1775c913fa8->enter($__internal_8a04f4320e4a703a7ace1b784ed78f0dbbafdca81d0a11069b7fe1775c913fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00aabb746105bd1e66431b90217fa0a9d0ac8f49a7e2f9865a6cb2befa255ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00aabb746105bd1e66431b90217fa0a9d0ac8f49a7e2f9865a6cb2befa255ce8->enter($__internal_00aabb746105bd1e66431b90217fa0a9d0ac8f49a7e2f9865a6cb2befa255ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00aabb746105bd1e66431b90217fa0a9d0ac8f49a7e2f9865a6cb2befa255ce8->leave($__internal_00aabb746105bd1e66431b90217fa0a9d0ac8f49a7e2f9865a6cb2befa255ce8_prof);

        
        $__internal_8a04f4320e4a703a7ace1b784ed78f0dbbafdca81d0a11069b7fe1775c913fa8->leave($__internal_8a04f4320e4a703a7ace1b784ed78f0dbbafdca81d0a11069b7fe1775c913fa8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2d370f0a47e80cc83e417b3ada078726735c2a0459b17e45c473ea767774476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d370f0a47e80cc83e417b3ada078726735c2a0459b17e45c473ea767774476->enter($__internal_f2d370f0a47e80cc83e417b3ada078726735c2a0459b17e45c473ea767774476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcbd23d293ae1b74f90a73441257e7cfab96938b09b8a9529d232292c511286f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbd23d293ae1b74f90a73441257e7cfab96938b09b8a9529d232292c511286f->enter($__internal_bcbd23d293ae1b74f90a73441257e7cfab96938b09b8a9529d232292c511286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bcbd23d293ae1b74f90a73441257e7cfab96938b09b8a9529d232292c511286f->leave($__internal_bcbd23d293ae1b74f90a73441257e7cfab96938b09b8a9529d232292c511286f_prof);

        
        $__internal_f2d370f0a47e80cc83e417b3ada078726735c2a0459b17e45c473ea767774476->leave($__internal_f2d370f0a47e80cc83e417b3ada078726735c2a0459b17e45c473ea767774476_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
