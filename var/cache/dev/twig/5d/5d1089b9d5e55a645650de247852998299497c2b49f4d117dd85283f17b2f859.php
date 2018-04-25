<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8ea217db59889de9444b02b601785febc4781444531f7c6ec36736d5004d8570 extends Twig_Template
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
        $__internal_7375b043866540c3334f1f29f9dadf452b3c00606ec052c83c7ca945403aba60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7375b043866540c3334f1f29f9dadf452b3c00606ec052c83c7ca945403aba60->enter($__internal_7375b043866540c3334f1f29f9dadf452b3c00606ec052c83c7ca945403aba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5e7e21562b94f59f471d4857c5db2cb47211f6529659327be2aa1d1fd195634f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7e21562b94f59f471d4857c5db2cb47211f6529659327be2aa1d1fd195634f->enter($__internal_5e7e21562b94f59f471d4857c5db2cb47211f6529659327be2aa1d1fd195634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7375b043866540c3334f1f29f9dadf452b3c00606ec052c83c7ca945403aba60->leave($__internal_7375b043866540c3334f1f29f9dadf452b3c00606ec052c83c7ca945403aba60_prof);

        
        $__internal_5e7e21562b94f59f471d4857c5db2cb47211f6529659327be2aa1d1fd195634f->leave($__internal_5e7e21562b94f59f471d4857c5db2cb47211f6529659327be2aa1d1fd195634f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
