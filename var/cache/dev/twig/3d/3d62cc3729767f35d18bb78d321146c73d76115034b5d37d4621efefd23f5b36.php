<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f92d07ea7b80a2121134bda850927f3a2c451836f2b7616187c6e071cccc0599 extends Twig_Template
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
        $__internal_f7a084bdf0c1bbdc385fa3390afba7b66094013cdfefe99f97e46526ef6d9383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a084bdf0c1bbdc385fa3390afba7b66094013cdfefe99f97e46526ef6d9383->enter($__internal_f7a084bdf0c1bbdc385fa3390afba7b66094013cdfefe99f97e46526ef6d9383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0e8f5c039c0b608421f94d6f54d257b397cda94e06b9abc036f2af2c02ec4603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8f5c039c0b608421f94d6f54d257b397cda94e06b9abc036f2af2c02ec4603->enter($__internal_0e8f5c039c0b608421f94d6f54d257b397cda94e06b9abc036f2af2c02ec4603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f7a084bdf0c1bbdc385fa3390afba7b66094013cdfefe99f97e46526ef6d9383->leave($__internal_f7a084bdf0c1bbdc385fa3390afba7b66094013cdfefe99f97e46526ef6d9383_prof);

        
        $__internal_0e8f5c039c0b608421f94d6f54d257b397cda94e06b9abc036f2af2c02ec4603->leave($__internal_0e8f5c039c0b608421f94d6f54d257b397cda94e06b9abc036f2af2c02ec4603_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
