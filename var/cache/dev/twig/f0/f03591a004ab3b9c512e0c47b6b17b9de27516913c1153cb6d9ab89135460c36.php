<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d424fec088ab131c9c4ffe1df8693b865fb2544a04e25db9f93a0485398ec859 extends Twig_Template
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
        $__internal_3b4ccc258c4e4bfd1eefda3c7a0e9d825ed976ca0f776f17299b5b0fcc1ad0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4ccc258c4e4bfd1eefda3c7a0e9d825ed976ca0f776f17299b5b0fcc1ad0c6->enter($__internal_3b4ccc258c4e4bfd1eefda3c7a0e9d825ed976ca0f776f17299b5b0fcc1ad0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_07aa22fe9c80bc9bfecae7df27bb1ffd204937e9a6bae6c9c2fdd4170fee2f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aa22fe9c80bc9bfecae7df27bb1ffd204937e9a6bae6c9c2fdd4170fee2f93->enter($__internal_07aa22fe9c80bc9bfecae7df27bb1ffd204937e9a6bae6c9c2fdd4170fee2f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3b4ccc258c4e4bfd1eefda3c7a0e9d825ed976ca0f776f17299b5b0fcc1ad0c6->leave($__internal_3b4ccc258c4e4bfd1eefda3c7a0e9d825ed976ca0f776f17299b5b0fcc1ad0c6_prof);

        
        $__internal_07aa22fe9c80bc9bfecae7df27bb1ffd204937e9a6bae6c9c2fdd4170fee2f93->leave($__internal_07aa22fe9c80bc9bfecae7df27bb1ffd204937e9a6bae6c9c2fdd4170fee2f93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
