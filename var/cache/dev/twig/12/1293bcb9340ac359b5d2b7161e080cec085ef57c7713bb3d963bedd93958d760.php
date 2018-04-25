<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d4b70286e1bd89c0e1b275f1b75575aa003d9b1c54b0ff5ed3ebb7e692e7cf2 extends Twig_Template
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
        $__internal_c5ecfa0c7f417f831a77461f487700d84303ec7b0a338f26afe4c454bd64c397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ecfa0c7f417f831a77461f487700d84303ec7b0a338f26afe4c454bd64c397->enter($__internal_c5ecfa0c7f417f831a77461f487700d84303ec7b0a338f26afe4c454bd64c397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_217c40a8ee16061d387628029c8332c42a2b486a432fa13dbad3346e671821b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217c40a8ee16061d387628029c8332c42a2b486a432fa13dbad3346e671821b9->enter($__internal_217c40a8ee16061d387628029c8332c42a2b486a432fa13dbad3346e671821b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c5ecfa0c7f417f831a77461f487700d84303ec7b0a338f26afe4c454bd64c397->leave($__internal_c5ecfa0c7f417f831a77461f487700d84303ec7b0a338f26afe4c454bd64c397_prof);

        
        $__internal_217c40a8ee16061d387628029c8332c42a2b486a432fa13dbad3346e671821b9->leave($__internal_217c40a8ee16061d387628029c8332c42a2b486a432fa13dbad3346e671821b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
