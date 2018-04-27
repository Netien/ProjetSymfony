<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_711796232b6d127c6463711734c980a8f914f18c2cd6f78cc396ae0ee33d4412 extends Twig_Template
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
        $__internal_53b9d7d1c08cea4fdf8f5fd706cb3d69151a8755d5ed4dbdbf82579e48b648e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b9d7d1c08cea4fdf8f5fd706cb3d69151a8755d5ed4dbdbf82579e48b648e7->enter($__internal_53b9d7d1c08cea4fdf8f5fd706cb3d69151a8755d5ed4dbdbf82579e48b648e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_be5aaa60cd267935fa47867078ffcb89c5cd9f058b11c9d09b8937a8e0d2e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5aaa60cd267935fa47867078ffcb89c5cd9f058b11c9d09b8937a8e0d2e645->enter($__internal_be5aaa60cd267935fa47867078ffcb89c5cd9f058b11c9d09b8937a8e0d2e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53b9d7d1c08cea4fdf8f5fd706cb3d69151a8755d5ed4dbdbf82579e48b648e7->leave($__internal_53b9d7d1c08cea4fdf8f5fd706cb3d69151a8755d5ed4dbdbf82579e48b648e7_prof);

        
        $__internal_be5aaa60cd267935fa47867078ffcb89c5cd9f058b11c9d09b8937a8e0d2e645->leave($__internal_be5aaa60cd267935fa47867078ffcb89c5cd9f058b11c9d09b8937a8e0d2e645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
