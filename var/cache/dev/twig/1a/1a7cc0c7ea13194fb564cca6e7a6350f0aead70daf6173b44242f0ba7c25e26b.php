<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7f4868530587e3718b720ee2e78f882b7c74f027bbfcedc46af603cc218e0454 extends Twig_Template
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
        $__internal_64916457478ed0cd988c4fad1deb1337c994b55e58be38ff88cb409b8f8a18a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64916457478ed0cd988c4fad1deb1337c994b55e58be38ff88cb409b8f8a18a1->enter($__internal_64916457478ed0cd988c4fad1deb1337c994b55e58be38ff88cb409b8f8a18a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2ffe6bc8cb6070d6832d9649a0ec3c90f55d4d307c3a4d8b75628af87e1979fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffe6bc8cb6070d6832d9649a0ec3c90f55d4d307c3a4d8b75628af87e1979fa->enter($__internal_2ffe6bc8cb6070d6832d9649a0ec3c90f55d4d307c3a4d8b75628af87e1979fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_64916457478ed0cd988c4fad1deb1337c994b55e58be38ff88cb409b8f8a18a1->leave($__internal_64916457478ed0cd988c4fad1deb1337c994b55e58be38ff88cb409b8f8a18a1_prof);

        
        $__internal_2ffe6bc8cb6070d6832d9649a0ec3c90f55d4d307c3a4d8b75628af87e1979fa->leave($__internal_2ffe6bc8cb6070d6832d9649a0ec3c90f55d4d307c3a4d8b75628af87e1979fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
