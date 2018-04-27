<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6e09a6297135c0a55321d3fab65db5c734a9504d3c23d2cdcf6ff7a46cc67abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_836df534710a0b6ac857b9254174fe3b7868699fb5fbd1e2e85b3c78c988915c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836df534710a0b6ac857b9254174fe3b7868699fb5fbd1e2e85b3c78c988915c->enter($__internal_836df534710a0b6ac857b9254174fe3b7868699fb5fbd1e2e85b3c78c988915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e4e7372da260dc086fb5d2b36c5728350547cb73ff2c41f22fa00038b3c06495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e7372da260dc086fb5d2b36c5728350547cb73ff2c41f22fa00038b3c06495->enter($__internal_e4e7372da260dc086fb5d2b36c5728350547cb73ff2c41f22fa00038b3c06495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_836df534710a0b6ac857b9254174fe3b7868699fb5fbd1e2e85b3c78c988915c->leave($__internal_836df534710a0b6ac857b9254174fe3b7868699fb5fbd1e2e85b3c78c988915c_prof);

        
        $__internal_e4e7372da260dc086fb5d2b36c5728350547cb73ff2c41f22fa00038b3c06495->leave($__internal_e4e7372da260dc086fb5d2b36c5728350547cb73ff2c41f22fa00038b3c06495_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_877b33298d16d1b5d0a7ce5268ee111f01ecfa4c05b1692dda5a73c6aa270b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877b33298d16d1b5d0a7ce5268ee111f01ecfa4c05b1692dda5a73c6aa270b36->enter($__internal_877b33298d16d1b5d0a7ce5268ee111f01ecfa4c05b1692dda5a73c6aa270b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a74ec025aa47439efd3a0db3e4298f17fcf232915c4008c7e0b92b589eaf9dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74ec025aa47439efd3a0db3e4298f17fcf232915c4008c7e0b92b589eaf9dfd->enter($__internal_a74ec025aa47439efd3a0db3e4298f17fcf232915c4008c7e0b92b589eaf9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a74ec025aa47439efd3a0db3e4298f17fcf232915c4008c7e0b92b589eaf9dfd->leave($__internal_a74ec025aa47439efd3a0db3e4298f17fcf232915c4008c7e0b92b589eaf9dfd_prof);

        
        $__internal_877b33298d16d1b5d0a7ce5268ee111f01ecfa4c05b1692dda5a73c6aa270b36->leave($__internal_877b33298d16d1b5d0a7ce5268ee111f01ecfa4c05b1692dda5a73c6aa270b36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
