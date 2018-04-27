<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e06f5f9fe4b090731b559b8f1100c086850027a4d69ccf4b9f8bbaa1d48163d7 extends Twig_Template
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
        $__internal_474fd82287a3048f6042429b142fae4c554924493f2cae92a385874bc836d4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474fd82287a3048f6042429b142fae4c554924493f2cae92a385874bc836d4b0->enter($__internal_474fd82287a3048f6042429b142fae4c554924493f2cae92a385874bc836d4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0d56fcb68f6729bae82430bf91a22c6825b6aa249d1857638ad7b74599b044e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d56fcb68f6729bae82430bf91a22c6825b6aa249d1857638ad7b74599b044e6->enter($__internal_0d56fcb68f6729bae82430bf91a22c6825b6aa249d1857638ad7b74599b044e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_474fd82287a3048f6042429b142fae4c554924493f2cae92a385874bc836d4b0->leave($__internal_474fd82287a3048f6042429b142fae4c554924493f2cae92a385874bc836d4b0_prof);

        
        $__internal_0d56fcb68f6729bae82430bf91a22c6825b6aa249d1857638ad7b74599b044e6->leave($__internal_0d56fcb68f6729bae82430bf91a22c6825b6aa249d1857638ad7b74599b044e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
