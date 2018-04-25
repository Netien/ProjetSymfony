<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_994dea83eb4e4e32aca28ddbe1ed57616722915e067b075924a296a4ecd22849 extends Twig_Template
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
        $__internal_b79a366461aad0a4628465d3ba9ac42c223da996808b9e4518e799a084ae2c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79a366461aad0a4628465d3ba9ac42c223da996808b9e4518e799a084ae2c65->enter($__internal_b79a366461aad0a4628465d3ba9ac42c223da996808b9e4518e799a084ae2c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7267a82c897846a07e1908e5c4d581f08dd3ed716ade1fc035796dbd72a8ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7267a82c897846a07e1908e5c4d581f08dd3ed716ade1fc035796dbd72a8ebfc->enter($__internal_7267a82c897846a07e1908e5c4d581f08dd3ed716ade1fc035796dbd72a8ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b79a366461aad0a4628465d3ba9ac42c223da996808b9e4518e799a084ae2c65->leave($__internal_b79a366461aad0a4628465d3ba9ac42c223da996808b9e4518e799a084ae2c65_prof);

        
        $__internal_7267a82c897846a07e1908e5c4d581f08dd3ed716ade1fc035796dbd72a8ebfc->leave($__internal_7267a82c897846a07e1908e5c4d581f08dd3ed716ade1fc035796dbd72a8ebfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
