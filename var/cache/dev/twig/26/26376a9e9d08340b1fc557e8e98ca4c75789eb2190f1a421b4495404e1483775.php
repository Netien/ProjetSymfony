<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d10afe707571e86edb5f1d37773e57b82b7c6d11e4de573702acd19f20a80b2c extends Twig_Template
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
        $__internal_616191551d5bd30ab73f15eb8bdc3c8e65a2122e628dd5e2a2562b9a7d6b487e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616191551d5bd30ab73f15eb8bdc3c8e65a2122e628dd5e2a2562b9a7d6b487e->enter($__internal_616191551d5bd30ab73f15eb8bdc3c8e65a2122e628dd5e2a2562b9a7d6b487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_da4ad098d2f78651288e709d4ca83ebbd3f15a7d588212357d35b30356ea94fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4ad098d2f78651288e709d4ca83ebbd3f15a7d588212357d35b30356ea94fa->enter($__internal_da4ad098d2f78651288e709d4ca83ebbd3f15a7d588212357d35b30356ea94fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_616191551d5bd30ab73f15eb8bdc3c8e65a2122e628dd5e2a2562b9a7d6b487e->leave($__internal_616191551d5bd30ab73f15eb8bdc3c8e65a2122e628dd5e2a2562b9a7d6b487e_prof);

        
        $__internal_da4ad098d2f78651288e709d4ca83ebbd3f15a7d588212357d35b30356ea94fa->leave($__internal_da4ad098d2f78651288e709d4ca83ebbd3f15a7d588212357d35b30356ea94fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
