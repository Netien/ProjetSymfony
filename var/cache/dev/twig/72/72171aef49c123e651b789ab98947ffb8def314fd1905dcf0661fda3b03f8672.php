<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d1378bb471f7a44a9dcb3b4cef610632fef94484cfba97c32ef0ae06d56eabee extends Twig_Template
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
        $__internal_322d448ba652d74b7acd55b98d03855f2818e650f936779aaaaa682123b7f9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322d448ba652d74b7acd55b98d03855f2818e650f936779aaaaa682123b7f9a9->enter($__internal_322d448ba652d74b7acd55b98d03855f2818e650f936779aaaaa682123b7f9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_64c0b1240f23995f05deb56bb7bda451da7952877a28895aa59e0845cdc9243d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c0b1240f23995f05deb56bb7bda451da7952877a28895aa59e0845cdc9243d->enter($__internal_64c0b1240f23995f05deb56bb7bda451da7952877a28895aa59e0845cdc9243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_322d448ba652d74b7acd55b98d03855f2818e650f936779aaaaa682123b7f9a9->leave($__internal_322d448ba652d74b7acd55b98d03855f2818e650f936779aaaaa682123b7f9a9_prof);

        
        $__internal_64c0b1240f23995f05deb56bb7bda451da7952877a28895aa59e0845cdc9243d->leave($__internal_64c0b1240f23995f05deb56bb7bda451da7952877a28895aa59e0845cdc9243d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
