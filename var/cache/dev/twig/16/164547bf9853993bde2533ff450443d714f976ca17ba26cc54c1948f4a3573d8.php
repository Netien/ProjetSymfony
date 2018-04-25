<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4a39bb2fb0ce04d665dcb0aa611e7ca8395f11aeea25ac91ab0d73747f4222bf extends Twig_Template
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
        $__internal_7fbf704008890e938757d27efe758d0b2ca53072d5487ab6b03d9ac44f487e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbf704008890e938757d27efe758d0b2ca53072d5487ab6b03d9ac44f487e9e->enter($__internal_7fbf704008890e938757d27efe758d0b2ca53072d5487ab6b03d9ac44f487e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9ccc2713fadc358f05b39edd36ca2a11f38619cc6e6a919fcf12f9eb976427d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccc2713fadc358f05b39edd36ca2a11f38619cc6e6a919fcf12f9eb976427d4->enter($__internal_9ccc2713fadc358f05b39edd36ca2a11f38619cc6e6a919fcf12f9eb976427d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7fbf704008890e938757d27efe758d0b2ca53072d5487ab6b03d9ac44f487e9e->leave($__internal_7fbf704008890e938757d27efe758d0b2ca53072d5487ab6b03d9ac44f487e9e_prof);

        
        $__internal_9ccc2713fadc358f05b39edd36ca2a11f38619cc6e6a919fcf12f9eb976427d4->leave($__internal_9ccc2713fadc358f05b39edd36ca2a11f38619cc6e6a919fcf12f9eb976427d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
