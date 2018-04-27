<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_445ff1f5bc4f4d58b47b58125845336b439c21c62bf92490af0cda8c7133a284 extends Twig_Template
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
        $__internal_bf9f39357539c2b214f961dfe20e9683682f5f72940fd3080f8ffcec1a256847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9f39357539c2b214f961dfe20e9683682f5f72940fd3080f8ffcec1a256847->enter($__internal_bf9f39357539c2b214f961dfe20e9683682f5f72940fd3080f8ffcec1a256847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_11955fd597959c9b25924eee848e32f3946e35b3b52c01f68e4b832876f9323f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11955fd597959c9b25924eee848e32f3946e35b3b52c01f68e4b832876f9323f->enter($__internal_11955fd597959c9b25924eee848e32f3946e35b3b52c01f68e4b832876f9323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bf9f39357539c2b214f961dfe20e9683682f5f72940fd3080f8ffcec1a256847->leave($__internal_bf9f39357539c2b214f961dfe20e9683682f5f72940fd3080f8ffcec1a256847_prof);

        
        $__internal_11955fd597959c9b25924eee848e32f3946e35b3b52c01f68e4b832876f9323f->leave($__internal_11955fd597959c9b25924eee848e32f3946e35b3b52c01f68e4b832876f9323f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
