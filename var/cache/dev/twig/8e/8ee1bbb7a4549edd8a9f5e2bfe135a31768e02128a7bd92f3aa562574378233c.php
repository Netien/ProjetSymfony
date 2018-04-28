<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_56afe13ae580fbc2898ca97af581e7e50d360bacbf280a80c2664910df593b19 extends Twig_Template
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
        $__internal_a7522898c189a52456b861d0a751476a832103c7481103be1b63003af2250a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7522898c189a52456b861d0a751476a832103c7481103be1b63003af2250a5d->enter($__internal_a7522898c189a52456b861d0a751476a832103c7481103be1b63003af2250a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e3ad2ad5e701d0e605a1cd15f9d847d9f0978def3b3595349d7b5a34e648348e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ad2ad5e701d0e605a1cd15f9d847d9f0978def3b3595349d7b5a34e648348e->enter($__internal_e3ad2ad5e701d0e605a1cd15f9d847d9f0978def3b3595349d7b5a34e648348e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a7522898c189a52456b861d0a751476a832103c7481103be1b63003af2250a5d->leave($__internal_a7522898c189a52456b861d0a751476a832103c7481103be1b63003af2250a5d_prof);

        
        $__internal_e3ad2ad5e701d0e605a1cd15f9d847d9f0978def3b3595349d7b5a34e648348e->leave($__internal_e3ad2ad5e701d0e605a1cd15f9d847d9f0978def3b3595349d7b5a34e648348e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
