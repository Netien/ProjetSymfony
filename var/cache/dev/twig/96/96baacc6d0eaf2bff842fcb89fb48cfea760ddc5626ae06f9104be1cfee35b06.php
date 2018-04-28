<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2fa8bdc24db712d8ca359b0108fd6ae5ff036b43cfe87c04879e4a11c415cdd5 extends Twig_Template
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
        $__internal_3b7a240c9896447d1cef375e407e146d92ab6aeebf9c0206713845faba050b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7a240c9896447d1cef375e407e146d92ab6aeebf9c0206713845faba050b4e->enter($__internal_3b7a240c9896447d1cef375e407e146d92ab6aeebf9c0206713845faba050b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0bf7d36f91b202f788bb3759e634a1d75b3b47d06621521a94f22909b09a11af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf7d36f91b202f788bb3759e634a1d75b3b47d06621521a94f22909b09a11af->enter($__internal_0bf7d36f91b202f788bb3759e634a1d75b3b47d06621521a94f22909b09a11af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3b7a240c9896447d1cef375e407e146d92ab6aeebf9c0206713845faba050b4e->leave($__internal_3b7a240c9896447d1cef375e407e146d92ab6aeebf9c0206713845faba050b4e_prof);

        
        $__internal_0bf7d36f91b202f788bb3759e634a1d75b3b47d06621521a94f22909b09a11af->leave($__internal_0bf7d36f91b202f788bb3759e634a1d75b3b47d06621521a94f22909b09a11af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
