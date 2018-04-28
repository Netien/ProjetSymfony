<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9592255c54b949b5fe64b9a7c79852ffdff6c47111741dcf2886570086b28d9b extends Twig_Template
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
        $__internal_538bac5bd72b08942e7a5d24c463ed0d628401e6d0d5064ce543099b8d37b56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538bac5bd72b08942e7a5d24c463ed0d628401e6d0d5064ce543099b8d37b56e->enter($__internal_538bac5bd72b08942e7a5d24c463ed0d628401e6d0d5064ce543099b8d37b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_abbee96ce852a02028580a135ce4422cfe31289143b0d865719b0276230670ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbee96ce852a02028580a135ce4422cfe31289143b0d865719b0276230670ad->enter($__internal_abbee96ce852a02028580a135ce4422cfe31289143b0d865719b0276230670ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_538bac5bd72b08942e7a5d24c463ed0d628401e6d0d5064ce543099b8d37b56e->leave($__internal_538bac5bd72b08942e7a5d24c463ed0d628401e6d0d5064ce543099b8d37b56e_prof);

        
        $__internal_abbee96ce852a02028580a135ce4422cfe31289143b0d865719b0276230670ad->leave($__internal_abbee96ce852a02028580a135ce4422cfe31289143b0d865719b0276230670ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
