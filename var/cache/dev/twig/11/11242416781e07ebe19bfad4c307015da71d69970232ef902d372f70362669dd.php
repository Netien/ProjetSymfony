<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_09e7e6f0f6c3d15966721659618d974d2f21a02954a70f9ba7bf5ee6b99197d5 extends Twig_Template
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
        $__internal_3e86c373fb8e8723130e6887e3d2b6fc766aab40a83387b91491d9717dce1ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e86c373fb8e8723130e6887e3d2b6fc766aab40a83387b91491d9717dce1ce1->enter($__internal_3e86c373fb8e8723130e6887e3d2b6fc766aab40a83387b91491d9717dce1ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1a9c925412487361a20d795132e51f0399cf63f0b5a5f21da95aa116a76d4053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9c925412487361a20d795132e51f0399cf63f0b5a5f21da95aa116a76d4053->enter($__internal_1a9c925412487361a20d795132e51f0399cf63f0b5a5f21da95aa116a76d4053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3e86c373fb8e8723130e6887e3d2b6fc766aab40a83387b91491d9717dce1ce1->leave($__internal_3e86c373fb8e8723130e6887e3d2b6fc766aab40a83387b91491d9717dce1ce1_prof);

        
        $__internal_1a9c925412487361a20d795132e51f0399cf63f0b5a5f21da95aa116a76d4053->leave($__internal_1a9c925412487361a20d795132e51f0399cf63f0b5a5f21da95aa116a76d4053_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
