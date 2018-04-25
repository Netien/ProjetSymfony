<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d180a32bfa13f9e61c734866501950104f0f7f7fdff65653ef564c01a233e423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_51287cb00d34827c6672a172f6fe3eaf94aa5ca1317088164212c49503b1b9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51287cb00d34827c6672a172f6fe3eaf94aa5ca1317088164212c49503b1b9cb->enter($__internal_51287cb00d34827c6672a172f6fe3eaf94aa5ca1317088164212c49503b1b9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ee25c592f93f6ddb93e07a515f091b74fa08e052107287da12fbe8a6c399ee9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee25c592f93f6ddb93e07a515f091b74fa08e052107287da12fbe8a6c399ee9a->enter($__internal_ee25c592f93f6ddb93e07a515f091b74fa08e052107287da12fbe8a6c399ee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51287cb00d34827c6672a172f6fe3eaf94aa5ca1317088164212c49503b1b9cb->leave($__internal_51287cb00d34827c6672a172f6fe3eaf94aa5ca1317088164212c49503b1b9cb_prof);

        
        $__internal_ee25c592f93f6ddb93e07a515f091b74fa08e052107287da12fbe8a6c399ee9a->leave($__internal_ee25c592f93f6ddb93e07a515f091b74fa08e052107287da12fbe8a6c399ee9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05916a31b9ec7256815a098ced2dab2c1bc18c732725123ed4cab72f55682e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05916a31b9ec7256815a098ced2dab2c1bc18c732725123ed4cab72f55682e8f->enter($__internal_05916a31b9ec7256815a098ced2dab2c1bc18c732725123ed4cab72f55682e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fda4dfff8284de2f3e3ca8c8931fadc318492b2e8f523f927ae95950b9be2763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda4dfff8284de2f3e3ca8c8931fadc318492b2e8f523f927ae95950b9be2763->enter($__internal_fda4dfff8284de2f3e3ca8c8931fadc318492b2e8f523f927ae95950b9be2763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fda4dfff8284de2f3e3ca8c8931fadc318492b2e8f523f927ae95950b9be2763->leave($__internal_fda4dfff8284de2f3e3ca8c8931fadc318492b2e8f523f927ae95950b9be2763_prof);

        
        $__internal_05916a31b9ec7256815a098ced2dab2c1bc18c732725123ed4cab72f55682e8f->leave($__internal_05916a31b9ec7256815a098ced2dab2c1bc18c732725123ed4cab72f55682e8f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bde0b580f5368d203ad4fd1ce60307c9ccf5eac158a6d2491f04efb478da295a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde0b580f5368d203ad4fd1ce60307c9ccf5eac158a6d2491f04efb478da295a->enter($__internal_bde0b580f5368d203ad4fd1ce60307c9ccf5eac158a6d2491f04efb478da295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf9b1ea8ec302133f866663a9f016f09d9297930f15dc94ca2281086a82b0c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9b1ea8ec302133f866663a9f016f09d9297930f15dc94ca2281086a82b0c87->enter($__internal_cf9b1ea8ec302133f866663a9f016f09d9297930f15dc94ca2281086a82b0c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cf9b1ea8ec302133f866663a9f016f09d9297930f15dc94ca2281086a82b0c87->leave($__internal_cf9b1ea8ec302133f866663a9f016f09d9297930f15dc94ca2281086a82b0c87_prof);

        
        $__internal_bde0b580f5368d203ad4fd1ce60307c9ccf5eac158a6d2491f04efb478da295a->leave($__internal_bde0b580f5368d203ad4fd1ce60307c9ccf5eac158a6d2491f04efb478da295a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9354c0815a8a9b2de2f9be89da630bc3eaa4e234862c57fa767cf664ceb5e08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9354c0815a8a9b2de2f9be89da630bc3eaa4e234862c57fa767cf664ceb5e08a->enter($__internal_9354c0815a8a9b2de2f9be89da630bc3eaa4e234862c57fa767cf664ceb5e08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55e15a4059ff7edd7f7530bd1538c51c54214e253a271fc410a6d3ffed0bcb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e15a4059ff7edd7f7530bd1538c51c54214e253a271fc410a6d3ffed0bcb11->enter($__internal_55e15a4059ff7edd7f7530bd1538c51c54214e253a271fc410a6d3ffed0bcb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_55e15a4059ff7edd7f7530bd1538c51c54214e253a271fc410a6d3ffed0bcb11->leave($__internal_55e15a4059ff7edd7f7530bd1538c51c54214e253a271fc410a6d3ffed0bcb11_prof);

        
        $__internal_9354c0815a8a9b2de2f9be89da630bc3eaa4e234862c57fa767cf664ceb5e08a->leave($__internal_9354c0815a8a9b2de2f9be89da630bc3eaa4e234862c57fa767cf664ceb5e08a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
