<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_825e7e4a419d7dcee237c5f4be694183c93205ce0266877dc2a728f67071f7eb extends Twig_Template
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
        $__internal_319a95ca8023c3c20dd99637bb2a7314a769eb7ad3c66e13e463f51a2a45b48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319a95ca8023c3c20dd99637bb2a7314a769eb7ad3c66e13e463f51a2a45b48c->enter($__internal_319a95ca8023c3c20dd99637bb2a7314a769eb7ad3c66e13e463f51a2a45b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1e652b713c5b8db001dea6ab058f58475cae320e1e26805004139d588a2f8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e652b713c5b8db001dea6ab058f58475cae320e1e26805004139d588a2f8f58->enter($__internal_1e652b713c5b8db001dea6ab058f58475cae320e1e26805004139d588a2f8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_319a95ca8023c3c20dd99637bb2a7314a769eb7ad3c66e13e463f51a2a45b48c->leave($__internal_319a95ca8023c3c20dd99637bb2a7314a769eb7ad3c66e13e463f51a2a45b48c_prof);

        
        $__internal_1e652b713c5b8db001dea6ab058f58475cae320e1e26805004139d588a2f8f58->leave($__internal_1e652b713c5b8db001dea6ab058f58475cae320e1e26805004139d588a2f8f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
