<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_145787740f096b964321e7847dc49dbeb31f081145f0306dfaf54a773cc825fd extends Twig_Template
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
        $__internal_60dd80141109d36c0803b3ba3a3e0227f0aa8641f5a794aba7a88fc50a3d431d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dd80141109d36c0803b3ba3a3e0227f0aa8641f5a794aba7a88fc50a3d431d->enter($__internal_60dd80141109d36c0803b3ba3a3e0227f0aa8641f5a794aba7a88fc50a3d431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3fc28ed0aa08d82d4e4d123fc156453728bfdaea2c4606b7a61ef556da2b0f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc28ed0aa08d82d4e4d123fc156453728bfdaea2c4606b7a61ef556da2b0f17->enter($__internal_3fc28ed0aa08d82d4e4d123fc156453728bfdaea2c4606b7a61ef556da2b0f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_60dd80141109d36c0803b3ba3a3e0227f0aa8641f5a794aba7a88fc50a3d431d->leave($__internal_60dd80141109d36c0803b3ba3a3e0227f0aa8641f5a794aba7a88fc50a3d431d_prof);

        
        $__internal_3fc28ed0aa08d82d4e4d123fc156453728bfdaea2c4606b7a61ef556da2b0f17->leave($__internal_3fc28ed0aa08d82d4e4d123fc156453728bfdaea2c4606b7a61ef556da2b0f17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
