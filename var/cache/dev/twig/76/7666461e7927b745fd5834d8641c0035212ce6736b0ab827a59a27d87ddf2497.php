<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4afe3a8476d9437995925ea9253d8875a8c054f6c1a119581248bac76d5a1fbc extends Twig_Template
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
        $__internal_94e467d9e98828af2a4945695fcb5033a36cbafb99fe3c8cafea6a1ef5980774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e467d9e98828af2a4945695fcb5033a36cbafb99fe3c8cafea6a1ef5980774->enter($__internal_94e467d9e98828af2a4945695fcb5033a36cbafb99fe3c8cafea6a1ef5980774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba94d924c07d7fbd914d1e08ff228d30068c39fa96a85efd864d2e7d56d91b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba94d924c07d7fbd914d1e08ff228d30068c39fa96a85efd864d2e7d56d91b80->enter($__internal_ba94d924c07d7fbd914d1e08ff228d30068c39fa96a85efd864d2e7d56d91b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_94e467d9e98828af2a4945695fcb5033a36cbafb99fe3c8cafea6a1ef5980774->leave($__internal_94e467d9e98828af2a4945695fcb5033a36cbafb99fe3c8cafea6a1ef5980774_prof);

        
        $__internal_ba94d924c07d7fbd914d1e08ff228d30068c39fa96a85efd864d2e7d56d91b80->leave($__internal_ba94d924c07d7fbd914d1e08ff228d30068c39fa96a85efd864d2e7d56d91b80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
