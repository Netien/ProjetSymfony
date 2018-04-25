<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_613d50fd0bdaaaaaf5b68f17c83dd6489c26ef0b3f4ffc51dd7dc2bc26ec1bb9 extends Twig_Template
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
        $__internal_36d95cce439c507297b4540f9a8ae9603aa33e2914d122905e7dbed060b488d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d95cce439c507297b4540f9a8ae9603aa33e2914d122905e7dbed060b488d7->enter($__internal_36d95cce439c507297b4540f9a8ae9603aa33e2914d122905e7dbed060b488d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c188b431ee18cc4a3aacb692a100a4c26b45d2688dc68e8c3f8ab3d0a6d8c2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c188b431ee18cc4a3aacb692a100a4c26b45d2688dc68e8c3f8ab3d0a6d8c2ee->enter($__internal_c188b431ee18cc4a3aacb692a100a4c26b45d2688dc68e8c3f8ab3d0a6d8c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_36d95cce439c507297b4540f9a8ae9603aa33e2914d122905e7dbed060b488d7->leave($__internal_36d95cce439c507297b4540f9a8ae9603aa33e2914d122905e7dbed060b488d7_prof);

        
        $__internal_c188b431ee18cc4a3aacb692a100a4c26b45d2688dc68e8c3f8ab3d0a6d8c2ee->leave($__internal_c188b431ee18cc4a3aacb692a100a4c26b45d2688dc68e8c3f8ab3d0a6d8c2ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
