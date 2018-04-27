<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2016d5baa5b668863f8793e786534582906b4be7dc5fed65f8bcc70c1ce56ecf extends Twig_Template
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
        $__internal_fb905f2d25540095216ef40bb952803aa7a2db02e82063e51c1dcc85c3f7847d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb905f2d25540095216ef40bb952803aa7a2db02e82063e51c1dcc85c3f7847d->enter($__internal_fb905f2d25540095216ef40bb952803aa7a2db02e82063e51c1dcc85c3f7847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_69c844123d7a24eea0b5f11b8950376231bf6333f7366bd6eebd9838f6a17241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c844123d7a24eea0b5f11b8950376231bf6333f7366bd6eebd9838f6a17241->enter($__internal_69c844123d7a24eea0b5f11b8950376231bf6333f7366bd6eebd9838f6a17241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fb905f2d25540095216ef40bb952803aa7a2db02e82063e51c1dcc85c3f7847d->leave($__internal_fb905f2d25540095216ef40bb952803aa7a2db02e82063e51c1dcc85c3f7847d_prof);

        
        $__internal_69c844123d7a24eea0b5f11b8950376231bf6333f7366bd6eebd9838f6a17241->leave($__internal_69c844123d7a24eea0b5f11b8950376231bf6333f7366bd6eebd9838f6a17241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
