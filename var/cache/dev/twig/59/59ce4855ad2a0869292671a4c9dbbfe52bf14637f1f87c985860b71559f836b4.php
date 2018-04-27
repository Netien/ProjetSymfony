<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a747a1f2d2ba9eca43614b2f77b009e21f5a4f385e24bddbb05a6fb274f165e2 extends Twig_Template
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
        $__internal_bc4884bed34ddedb66de5d5814e5309790348bbda1e4f5a640d50a47dd99ebdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4884bed34ddedb66de5d5814e5309790348bbda1e4f5a640d50a47dd99ebdf->enter($__internal_bc4884bed34ddedb66de5d5814e5309790348bbda1e4f5a640d50a47dd99ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_79c590577e8e0f01d81bf089791e5227651da70c673867ae4bce762f8bd263fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c590577e8e0f01d81bf089791e5227651da70c673867ae4bce762f8bd263fb->enter($__internal_79c590577e8e0f01d81bf089791e5227651da70c673867ae4bce762f8bd263fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bc4884bed34ddedb66de5d5814e5309790348bbda1e4f5a640d50a47dd99ebdf->leave($__internal_bc4884bed34ddedb66de5d5814e5309790348bbda1e4f5a640d50a47dd99ebdf_prof);

        
        $__internal_79c590577e8e0f01d81bf089791e5227651da70c673867ae4bce762f8bd263fb->leave($__internal_79c590577e8e0f01d81bf089791e5227651da70c673867ae4bce762f8bd263fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
