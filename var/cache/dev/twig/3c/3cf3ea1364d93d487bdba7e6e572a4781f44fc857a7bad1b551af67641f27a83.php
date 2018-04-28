<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6d8610b2e18f2c7c57b9a08325309e694360b175f7a93276cba821e97abb2969 extends Twig_Template
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
        $__internal_c9349836492ec5f666a8ed248f031734f680fb1b2660060844513f2f8bd97c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9349836492ec5f666a8ed248f031734f680fb1b2660060844513f2f8bd97c38->enter($__internal_c9349836492ec5f666a8ed248f031734f680fb1b2660060844513f2f8bd97c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ec23206835c1832a9c6077cfc1641f750e0021f5d0b096bc94a4ee562063f98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec23206835c1832a9c6077cfc1641f750e0021f5d0b096bc94a4ee562063f98b->enter($__internal_ec23206835c1832a9c6077cfc1641f750e0021f5d0b096bc94a4ee562063f98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c9349836492ec5f666a8ed248f031734f680fb1b2660060844513f2f8bd97c38->leave($__internal_c9349836492ec5f666a8ed248f031734f680fb1b2660060844513f2f8bd97c38_prof);

        
        $__internal_ec23206835c1832a9c6077cfc1641f750e0021f5d0b096bc94a4ee562063f98b->leave($__internal_ec23206835c1832a9c6077cfc1641f750e0021f5d0b096bc94a4ee562063f98b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
