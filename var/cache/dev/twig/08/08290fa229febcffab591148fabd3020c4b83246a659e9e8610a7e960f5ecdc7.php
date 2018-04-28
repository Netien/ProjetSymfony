<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e7664091dbeb026860c20aaa0dd04446347e603959e83c7d8371d7d614c35627 extends Twig_Template
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
        $__internal_effce72bc044a8349ca4d64fa8688557694cbcf158e06d8583f90bfd3eb54c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effce72bc044a8349ca4d64fa8688557694cbcf158e06d8583f90bfd3eb54c02->enter($__internal_effce72bc044a8349ca4d64fa8688557694cbcf158e06d8583f90bfd3eb54c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4813d5b0871ab21102deac6fae94b265e425b53e005c78b47472b95df48415f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4813d5b0871ab21102deac6fae94b265e425b53e005c78b47472b95df48415f2->enter($__internal_4813d5b0871ab21102deac6fae94b265e425b53e005c78b47472b95df48415f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_effce72bc044a8349ca4d64fa8688557694cbcf158e06d8583f90bfd3eb54c02->leave($__internal_effce72bc044a8349ca4d64fa8688557694cbcf158e06d8583f90bfd3eb54c02_prof);

        
        $__internal_4813d5b0871ab21102deac6fae94b265e425b53e005c78b47472b95df48415f2->leave($__internal_4813d5b0871ab21102deac6fae94b265e425b53e005c78b47472b95df48415f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
