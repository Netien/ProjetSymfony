<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8c30815eaab7c224a6e363eab5f76a9d8c85c8b59e3ce2e223c242e9c9cde08 extends Twig_Template
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
        $__internal_2a295913fa93613bed92044d4f8fe7544c6554e74d4c49acdb4e8400df01b002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a295913fa93613bed92044d4f8fe7544c6554e74d4c49acdb4e8400df01b002->enter($__internal_2a295913fa93613bed92044d4f8fe7544c6554e74d4c49acdb4e8400df01b002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_36cfc6ce9b7173a2d248f0cd7eb69d072cdf57099993830035208b3611db8288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cfc6ce9b7173a2d248f0cd7eb69d072cdf57099993830035208b3611db8288->enter($__internal_36cfc6ce9b7173a2d248f0cd7eb69d072cdf57099993830035208b3611db8288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2a295913fa93613bed92044d4f8fe7544c6554e74d4c49acdb4e8400df01b002->leave($__internal_2a295913fa93613bed92044d4f8fe7544c6554e74d4c49acdb4e8400df01b002_prof);

        
        $__internal_36cfc6ce9b7173a2d248f0cd7eb69d072cdf57099993830035208b3611db8288->leave($__internal_36cfc6ce9b7173a2d248f0cd7eb69d072cdf57099993830035208b3611db8288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
