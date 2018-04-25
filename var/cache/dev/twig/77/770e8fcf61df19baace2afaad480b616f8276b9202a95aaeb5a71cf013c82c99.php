<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_da4c43d023a59762286dc72dafc833edcab8a244f11129da88c392fc849e4c85 extends Twig_Template
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
        $__internal_610da2ebcb5eb048111aab2129c0376307572377c42219f7bb2a53601bf009d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610da2ebcb5eb048111aab2129c0376307572377c42219f7bb2a53601bf009d8->enter($__internal_610da2ebcb5eb048111aab2129c0376307572377c42219f7bb2a53601bf009d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_61625c297738739cbb7d1f6a6429aa58411a73c087a40f540ce2096153ed974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61625c297738739cbb7d1f6a6429aa58411a73c087a40f540ce2096153ed974e->enter($__internal_61625c297738739cbb7d1f6a6429aa58411a73c087a40f540ce2096153ed974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_610da2ebcb5eb048111aab2129c0376307572377c42219f7bb2a53601bf009d8->leave($__internal_610da2ebcb5eb048111aab2129c0376307572377c42219f7bb2a53601bf009d8_prof);

        
        $__internal_61625c297738739cbb7d1f6a6429aa58411a73c087a40f540ce2096153ed974e->leave($__internal_61625c297738739cbb7d1f6a6429aa58411a73c087a40f540ce2096153ed974e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
