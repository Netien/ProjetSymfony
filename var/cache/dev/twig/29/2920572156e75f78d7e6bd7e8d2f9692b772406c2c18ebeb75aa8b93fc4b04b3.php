<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2bb7abb1546d9270dd6a5d03fd809adddcb0c8405c49e5d56d89404f0bf81ab1 extends Twig_Template
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
        $__internal_2c0bb873e976c27333e5a7620a49879e837df1292eebdb277f38d40e3da07fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0bb873e976c27333e5a7620a49879e837df1292eebdb277f38d40e3da07fb7->enter($__internal_2c0bb873e976c27333e5a7620a49879e837df1292eebdb277f38d40e3da07fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_314f674c656246eacf289c013b3733f7418e497aede465260900af4c4f9470bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314f674c656246eacf289c013b3733f7418e497aede465260900af4c4f9470bd->enter($__internal_314f674c656246eacf289c013b3733f7418e497aede465260900af4c4f9470bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2c0bb873e976c27333e5a7620a49879e837df1292eebdb277f38d40e3da07fb7->leave($__internal_2c0bb873e976c27333e5a7620a49879e837df1292eebdb277f38d40e3da07fb7_prof);

        
        $__internal_314f674c656246eacf289c013b3733f7418e497aede465260900af4c4f9470bd->leave($__internal_314f674c656246eacf289c013b3733f7418e497aede465260900af4c4f9470bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
