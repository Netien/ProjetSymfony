<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3da9e57f763202da27290915cf5bc201b325bbd0994b417052f1e50bab71383c extends Twig_Template
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
        $__internal_333c3c47e70be1f9cfe47702d4d2eee41c838bb5b6321c542b16e1e8fd4b9b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333c3c47e70be1f9cfe47702d4d2eee41c838bb5b6321c542b16e1e8fd4b9b98->enter($__internal_333c3c47e70be1f9cfe47702d4d2eee41c838bb5b6321c542b16e1e8fd4b9b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2cedd54a2d649e414a759606361dd036cb1363fca5e9ab4e5a7a8dbaeefd0dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cedd54a2d649e414a759606361dd036cb1363fca5e9ab4e5a7a8dbaeefd0dc0->enter($__internal_2cedd54a2d649e414a759606361dd036cb1363fca5e9ab4e5a7a8dbaeefd0dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_333c3c47e70be1f9cfe47702d4d2eee41c838bb5b6321c542b16e1e8fd4b9b98->leave($__internal_333c3c47e70be1f9cfe47702d4d2eee41c838bb5b6321c542b16e1e8fd4b9b98_prof);

        
        $__internal_2cedd54a2d649e414a759606361dd036cb1363fca5e9ab4e5a7a8dbaeefd0dc0->leave($__internal_2cedd54a2d649e414a759606361dd036cb1363fca5e9ab4e5a7a8dbaeefd0dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
