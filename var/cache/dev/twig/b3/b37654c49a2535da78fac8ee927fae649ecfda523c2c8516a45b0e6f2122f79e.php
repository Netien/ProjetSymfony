<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2e98727b5b5402b7173e43ff1b648192df43e40b925811c1972eb0b92fab03e5 extends Twig_Template
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
        $__internal_a4e55fffcc45fcbb2c0f960bf6bd3d91de7ef4d19d77fc64a38dcc24d8719c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e55fffcc45fcbb2c0f960bf6bd3d91de7ef4d19d77fc64a38dcc24d8719c01->enter($__internal_a4e55fffcc45fcbb2c0f960bf6bd3d91de7ef4d19d77fc64a38dcc24d8719c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_214999738053d2aa445b3a1d46c171ae57a036fb93e2e4dd7a2f53e005ed7304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214999738053d2aa445b3a1d46c171ae57a036fb93e2e4dd7a2f53e005ed7304->enter($__internal_214999738053d2aa445b3a1d46c171ae57a036fb93e2e4dd7a2f53e005ed7304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a4e55fffcc45fcbb2c0f960bf6bd3d91de7ef4d19d77fc64a38dcc24d8719c01->leave($__internal_a4e55fffcc45fcbb2c0f960bf6bd3d91de7ef4d19d77fc64a38dcc24d8719c01_prof);

        
        $__internal_214999738053d2aa445b3a1d46c171ae57a036fb93e2e4dd7a2f53e005ed7304->leave($__internal_214999738053d2aa445b3a1d46c171ae57a036fb93e2e4dd7a2f53e005ed7304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
