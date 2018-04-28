<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ace7c01272a6e5ba8b100be798208d797e47bef98b04ac6fa5ee9e32fce50c31 extends Twig_Template
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
        $__internal_981a49aeb02b9d58b49bbf716eb9451e30d7b55481ca705e3890a50db651ec5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981a49aeb02b9d58b49bbf716eb9451e30d7b55481ca705e3890a50db651ec5f->enter($__internal_981a49aeb02b9d58b49bbf716eb9451e30d7b55481ca705e3890a50db651ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a683fbdbbd19c84b4b7fd886c461ec7a66206b69b8224afe2458a0bcd7fd0561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a683fbdbbd19c84b4b7fd886c461ec7a66206b69b8224afe2458a0bcd7fd0561->enter($__internal_a683fbdbbd19c84b4b7fd886c461ec7a66206b69b8224afe2458a0bcd7fd0561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_981a49aeb02b9d58b49bbf716eb9451e30d7b55481ca705e3890a50db651ec5f->leave($__internal_981a49aeb02b9d58b49bbf716eb9451e30d7b55481ca705e3890a50db651ec5f_prof);

        
        $__internal_a683fbdbbd19c84b4b7fd886c461ec7a66206b69b8224afe2458a0bcd7fd0561->leave($__internal_a683fbdbbd19c84b4b7fd886c461ec7a66206b69b8224afe2458a0bcd7fd0561_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
