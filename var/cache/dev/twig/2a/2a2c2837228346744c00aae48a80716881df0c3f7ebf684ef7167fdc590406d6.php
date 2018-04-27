<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f3e10be53e3f534f3f0644320cf3f694a05cff1c8dfb87fbad0201a9e00dfdb5 extends Twig_Template
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
        $__internal_37a984676ee91225d4f83821dd63d37a1c3541cc1f5b2844019e55a2b7c026bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a984676ee91225d4f83821dd63d37a1c3541cc1f5b2844019e55a2b7c026bf->enter($__internal_37a984676ee91225d4f83821dd63d37a1c3541cc1f5b2844019e55a2b7c026bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_03ce926f77a3c4241a351a5f9b41fea1a201fe99a7c47a6038502557e46f47fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ce926f77a3c4241a351a5f9b41fea1a201fe99a7c47a6038502557e46f47fb->enter($__internal_03ce926f77a3c4241a351a5f9b41fea1a201fe99a7c47a6038502557e46f47fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_37a984676ee91225d4f83821dd63d37a1c3541cc1f5b2844019e55a2b7c026bf->leave($__internal_37a984676ee91225d4f83821dd63d37a1c3541cc1f5b2844019e55a2b7c026bf_prof);

        
        $__internal_03ce926f77a3c4241a351a5f9b41fea1a201fe99a7c47a6038502557e46f47fb->leave($__internal_03ce926f77a3c4241a351a5f9b41fea1a201fe99a7c47a6038502557e46f47fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
