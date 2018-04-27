<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1f92ab3ef03944e6e197016407e6e8104e95a047b91907d27eea80521060a3bc extends Twig_Template
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
        $__internal_2a52dff582fb22b09fc84957665dc1521a1788de4362ff6e11961cafa8d9581a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a52dff582fb22b09fc84957665dc1521a1788de4362ff6e11961cafa8d9581a->enter($__internal_2a52dff582fb22b09fc84957665dc1521a1788de4362ff6e11961cafa8d9581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_97c99fc2d7688ee09b1421245f205c0dd211712b42c5f4da417a57342e99afe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c99fc2d7688ee09b1421245f205c0dd211712b42c5f4da417a57342e99afe2->enter($__internal_97c99fc2d7688ee09b1421245f205c0dd211712b42c5f4da417a57342e99afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a52dff582fb22b09fc84957665dc1521a1788de4362ff6e11961cafa8d9581a->leave($__internal_2a52dff582fb22b09fc84957665dc1521a1788de4362ff6e11961cafa8d9581a_prof);

        
        $__internal_97c99fc2d7688ee09b1421245f205c0dd211712b42c5f4da417a57342e99afe2->leave($__internal_97c99fc2d7688ee09b1421245f205c0dd211712b42c5f4da417a57342e99afe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
