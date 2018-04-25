<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c3747d0f78a0b3876f44470863f13e8ee3ac0326231f44a7b359330407d8127 extends Twig_Template
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
        $__internal_f6b266122d0cdc2556717cf783e1876d2813930f132f19079e815742d2f9b279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b266122d0cdc2556717cf783e1876d2813930f132f19079e815742d2f9b279->enter($__internal_f6b266122d0cdc2556717cf783e1876d2813930f132f19079e815742d2f9b279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7500da8c079fdbaae3754c1f661ac1e04fb6226ff273e2e82a5c4bf8b4e633cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7500da8c079fdbaae3754c1f661ac1e04fb6226ff273e2e82a5c4bf8b4e633cd->enter($__internal_7500da8c079fdbaae3754c1f661ac1e04fb6226ff273e2e82a5c4bf8b4e633cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f6b266122d0cdc2556717cf783e1876d2813930f132f19079e815742d2f9b279->leave($__internal_f6b266122d0cdc2556717cf783e1876d2813930f132f19079e815742d2f9b279_prof);

        
        $__internal_7500da8c079fdbaae3754c1f661ac1e04fb6226ff273e2e82a5c4bf8b4e633cd->leave($__internal_7500da8c079fdbaae3754c1f661ac1e04fb6226ff273e2e82a5c4bf8b4e633cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
