<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e57b0d23bd4b7c80038834e44b39fda26de50dd4f3fd8503cd20a6eb288e42dd extends Twig_Template
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
        $__internal_1a8d064fa0b2c76ac602fd02e5dce21244d6d7882d72e1aca2cc7752e3ee8144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8d064fa0b2c76ac602fd02e5dce21244d6d7882d72e1aca2cc7752e3ee8144->enter($__internal_1a8d064fa0b2c76ac602fd02e5dce21244d6d7882d72e1aca2cc7752e3ee8144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_64c1043c4e67161a37c44335909753b9008a0c735f2f7961e379e702cbfd0e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c1043c4e67161a37c44335909753b9008a0c735f2f7961e379e702cbfd0e1d->enter($__internal_64c1043c4e67161a37c44335909753b9008a0c735f2f7961e379e702cbfd0e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1a8d064fa0b2c76ac602fd02e5dce21244d6d7882d72e1aca2cc7752e3ee8144->leave($__internal_1a8d064fa0b2c76ac602fd02e5dce21244d6d7882d72e1aca2cc7752e3ee8144_prof);

        
        $__internal_64c1043c4e67161a37c44335909753b9008a0c735f2f7961e379e702cbfd0e1d->leave($__internal_64c1043c4e67161a37c44335909753b9008a0c735f2f7961e379e702cbfd0e1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
