<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9e6eb5a50bdf6e46de95a2d8e526c098f321fc94be2f929817c18318d1a51ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46477085b909e3dcac8c4cb743a749c95a0b85e8cfc23739d3a786b818b0ce96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46477085b909e3dcac8c4cb743a749c95a0b85e8cfc23739d3a786b818b0ce96->enter($__internal_46477085b909e3dcac8c4cb743a749c95a0b85e8cfc23739d3a786b818b0ce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ac9d0cc0e1db199bfa38ce890f0150bb0fa0203ab518b5a3c98ca126617453b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9d0cc0e1db199bfa38ce890f0150bb0fa0203ab518b5a3c98ca126617453b4->enter($__internal_ac9d0cc0e1db199bfa38ce890f0150bb0fa0203ab518b5a3c98ca126617453b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_46477085b909e3dcac8c4cb743a749c95a0b85e8cfc23739d3a786b818b0ce96->leave($__internal_46477085b909e3dcac8c4cb743a749c95a0b85e8cfc23739d3a786b818b0ce96_prof);

        
        $__internal_ac9d0cc0e1db199bfa38ce890f0150bb0fa0203ab518b5a3c98ca126617453b4->leave($__internal_ac9d0cc0e1db199bfa38ce890f0150bb0fa0203ab518b5a3c98ca126617453b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
