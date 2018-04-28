<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7f8b962c3920827dc15672b9a838e12d91f37db35b765ce1b7ceadb9c824cbb9 extends Twig_Template
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
        $__internal_e999e8aa77cf2f80c22061142543c5c548cf0f73e269f9ee8931156b67e63edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e999e8aa77cf2f80c22061142543c5c548cf0f73e269f9ee8931156b67e63edc->enter($__internal_e999e8aa77cf2f80c22061142543c5c548cf0f73e269f9ee8931156b67e63edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0adad43758632c5df4453df06ed1b47f999e87f16569b89ccb62692880941e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adad43758632c5df4453df06ed1b47f999e87f16569b89ccb62692880941e68->enter($__internal_0adad43758632c5df4453df06ed1b47f999e87f16569b89ccb62692880941e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e999e8aa77cf2f80c22061142543c5c548cf0f73e269f9ee8931156b67e63edc->leave($__internal_e999e8aa77cf2f80c22061142543c5c548cf0f73e269f9ee8931156b67e63edc_prof);

        
        $__internal_0adad43758632c5df4453df06ed1b47f999e87f16569b89ccb62692880941e68->leave($__internal_0adad43758632c5df4453df06ed1b47f999e87f16569b89ccb62692880941e68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
