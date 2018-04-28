<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c3b28350cf39f46af88566568005e24a1ef332f959a0812fc7c7de23b1f8bf33 extends Twig_Template
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
        $__internal_5d039142cb743e43d0924412222723232322912573d86a9692e22b1a88a6f53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d039142cb743e43d0924412222723232322912573d86a9692e22b1a88a6f53a->enter($__internal_5d039142cb743e43d0924412222723232322912573d86a9692e22b1a88a6f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6eef34b0904f51a26ec68b5b346ae0347de965bc5b30141280655387c3325f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eef34b0904f51a26ec68b5b346ae0347de965bc5b30141280655387c3325f23->enter($__internal_6eef34b0904f51a26ec68b5b346ae0347de965bc5b30141280655387c3325f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d039142cb743e43d0924412222723232322912573d86a9692e22b1a88a6f53a->leave($__internal_5d039142cb743e43d0924412222723232322912573d86a9692e22b1a88a6f53a_prof);

        
        $__internal_6eef34b0904f51a26ec68b5b346ae0347de965bc5b30141280655387c3325f23->leave($__internal_6eef34b0904f51a26ec68b5b346ae0347de965bc5b30141280655387c3325f23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
