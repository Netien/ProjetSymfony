<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_80c103d43d2f0d4236385404e3d37b42fe6268e04eb165e63077f625a05e6922 extends Twig_Template
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
        $__internal_9274f15bd53d460b984ea6b6e1ce102bcd5b34892daaa0896805f2e6a4226b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9274f15bd53d460b984ea6b6e1ce102bcd5b34892daaa0896805f2e6a4226b93->enter($__internal_9274f15bd53d460b984ea6b6e1ce102bcd5b34892daaa0896805f2e6a4226b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fefa97336a6c5750ed0eb23bdc1f62a282855af53770de251a28361f594dacb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefa97336a6c5750ed0eb23bdc1f62a282855af53770de251a28361f594dacb6->enter($__internal_fefa97336a6c5750ed0eb23bdc1f62a282855af53770de251a28361f594dacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9274f15bd53d460b984ea6b6e1ce102bcd5b34892daaa0896805f2e6a4226b93->leave($__internal_9274f15bd53d460b984ea6b6e1ce102bcd5b34892daaa0896805f2e6a4226b93_prof);

        
        $__internal_fefa97336a6c5750ed0eb23bdc1f62a282855af53770de251a28361f594dacb6->leave($__internal_fefa97336a6c5750ed0eb23bdc1f62a282855af53770de251a28361f594dacb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
