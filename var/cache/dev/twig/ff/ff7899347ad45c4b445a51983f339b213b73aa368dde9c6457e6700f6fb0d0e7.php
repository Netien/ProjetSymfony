<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_35b8382618789e214e987a123b7670bfc6cc0409f2e3f47bd0b9c6abf581fb83 extends Twig_Template
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
        $__internal_f9c482c4e11b755b95765ca47064efd16cb0bf48d4ff03213ac7dc18b65e6650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c482c4e11b755b95765ca47064efd16cb0bf48d4ff03213ac7dc18b65e6650->enter($__internal_f9c482c4e11b755b95765ca47064efd16cb0bf48d4ff03213ac7dc18b65e6650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e95101bdf5291baa6d5b18bf8009dd1da628246eef46ca626a86bd6da52a0652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95101bdf5291baa6d5b18bf8009dd1da628246eef46ca626a86bd6da52a0652->enter($__internal_e95101bdf5291baa6d5b18bf8009dd1da628246eef46ca626a86bd6da52a0652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f9c482c4e11b755b95765ca47064efd16cb0bf48d4ff03213ac7dc18b65e6650->leave($__internal_f9c482c4e11b755b95765ca47064efd16cb0bf48d4ff03213ac7dc18b65e6650_prof);

        
        $__internal_e95101bdf5291baa6d5b18bf8009dd1da628246eef46ca626a86bd6da52a0652->leave($__internal_e95101bdf5291baa6d5b18bf8009dd1da628246eef46ca626a86bd6da52a0652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
