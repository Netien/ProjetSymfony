<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f56617030b91aa13c033d549d9025e06d754b392aa3ec3813b7ddb062c4257d7 extends Twig_Template
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
        $__internal_fb84ca8b25d84e1873c12051aae12e962a5112825e1e5896c08bfcc6f1ffc0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb84ca8b25d84e1873c12051aae12e962a5112825e1e5896c08bfcc6f1ffc0e6->enter($__internal_fb84ca8b25d84e1873c12051aae12e962a5112825e1e5896c08bfcc6f1ffc0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2812f70440ef332c63382ee20d90030d38b4d8561ead7517e2f18a75a607f357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2812f70440ef332c63382ee20d90030d38b4d8561ead7517e2f18a75a607f357->enter($__internal_2812f70440ef332c63382ee20d90030d38b4d8561ead7517e2f18a75a607f357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fb84ca8b25d84e1873c12051aae12e962a5112825e1e5896c08bfcc6f1ffc0e6->leave($__internal_fb84ca8b25d84e1873c12051aae12e962a5112825e1e5896c08bfcc6f1ffc0e6_prof);

        
        $__internal_2812f70440ef332c63382ee20d90030d38b4d8561ead7517e2f18a75a607f357->leave($__internal_2812f70440ef332c63382ee20d90030d38b4d8561ead7517e2f18a75a607f357_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}