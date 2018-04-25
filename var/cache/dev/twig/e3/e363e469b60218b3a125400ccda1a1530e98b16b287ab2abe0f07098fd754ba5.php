<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3ebb2421375fcd32c80291c43ce87d89d2de3f301fcdb77211f4e81d8b78c2e extends Twig_Template
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
        $__internal_e30cdbd20938e51d3a7a66a6ee2384e0a48a08ab55b406de9f1f13d84698cf7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30cdbd20938e51d3a7a66a6ee2384e0a48a08ab55b406de9f1f13d84698cf7d->enter($__internal_e30cdbd20938e51d3a7a66a6ee2384e0a48a08ab55b406de9f1f13d84698cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_76d19da75f33090a5d0bef716cdeddcbec35915a4af91825f624a6b1ca4904b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d19da75f33090a5d0bef716cdeddcbec35915a4af91825f624a6b1ca4904b1->enter($__internal_76d19da75f33090a5d0bef716cdeddcbec35915a4af91825f624a6b1ca4904b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e30cdbd20938e51d3a7a66a6ee2384e0a48a08ab55b406de9f1f13d84698cf7d->leave($__internal_e30cdbd20938e51d3a7a66a6ee2384e0a48a08ab55b406de9f1f13d84698cf7d_prof);

        
        $__internal_76d19da75f33090a5d0bef716cdeddcbec35915a4af91825f624a6b1ca4904b1->leave($__internal_76d19da75f33090a5d0bef716cdeddcbec35915a4af91825f624a6b1ca4904b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
