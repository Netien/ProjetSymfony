<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_205ba722ee0381de858e073c42202ab62c7783f54dcaa4577729834c0348ca0f extends Twig_Template
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
        $__internal_463838ba3b03c615d539c7ef6c8149b02c989469908a6b6d7fd810914846a396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463838ba3b03c615d539c7ef6c8149b02c989469908a6b6d7fd810914846a396->enter($__internal_463838ba3b03c615d539c7ef6c8149b02c989469908a6b6d7fd810914846a396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_14e1562a3da51087a56c281cf06f6c0720c867d9f2bea0a2fd6195fd79a25d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e1562a3da51087a56c281cf06f6c0720c867d9f2bea0a2fd6195fd79a25d8e->enter($__internal_14e1562a3da51087a56c281cf06f6c0720c867d9f2bea0a2fd6195fd79a25d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_463838ba3b03c615d539c7ef6c8149b02c989469908a6b6d7fd810914846a396->leave($__internal_463838ba3b03c615d539c7ef6c8149b02c989469908a6b6d7fd810914846a396_prof);

        
        $__internal_14e1562a3da51087a56c281cf06f6c0720c867d9f2bea0a2fd6195fd79a25d8e->leave($__internal_14e1562a3da51087a56c281cf06f6c0720c867d9f2bea0a2fd6195fd79a25d8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
