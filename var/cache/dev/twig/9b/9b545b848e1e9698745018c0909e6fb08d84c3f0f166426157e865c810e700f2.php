<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e4d36eb4a91a4b1725e1b16ab5c68f8484cf2777f085421cd785e9b73165c40f extends Twig_Template
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
        $__internal_dbcec5ef1b25f0aff58b8d7d3887d1ed4e8492bdab44afb1de1f2aa3d200ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcec5ef1b25f0aff58b8d7d3887d1ed4e8492bdab44afb1de1f2aa3d200ef52->enter($__internal_dbcec5ef1b25f0aff58b8d7d3887d1ed4e8492bdab44afb1de1f2aa3d200ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_68ef0bd54c0954ffae8f469ddcd04c4d3d405beba44ea19a97e5d6a7ef7da5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef0bd54c0954ffae8f469ddcd04c4d3d405beba44ea19a97e5d6a7ef7da5d8->enter($__internal_68ef0bd54c0954ffae8f469ddcd04c4d3d405beba44ea19a97e5d6a7ef7da5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dbcec5ef1b25f0aff58b8d7d3887d1ed4e8492bdab44afb1de1f2aa3d200ef52->leave($__internal_dbcec5ef1b25f0aff58b8d7d3887d1ed4e8492bdab44afb1de1f2aa3d200ef52_prof);

        
        $__internal_68ef0bd54c0954ffae8f469ddcd04c4d3d405beba44ea19a97e5d6a7ef7da5d8->leave($__internal_68ef0bd54c0954ffae8f469ddcd04c4d3d405beba44ea19a97e5d6a7ef7da5d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
