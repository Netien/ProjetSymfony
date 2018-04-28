<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1e92d4efe8b680ff8ff6e8d0d9d85129fae31e454e8e47ee009fb32a95c0666d extends Twig_Template
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
        $__internal_36cd176e126350a89fa9eb0508c2db85713e0a0a337cfd3a5dd8bc9daa02f5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36cd176e126350a89fa9eb0508c2db85713e0a0a337cfd3a5dd8bc9daa02f5cd->enter($__internal_36cd176e126350a89fa9eb0508c2db85713e0a0a337cfd3a5dd8bc9daa02f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4eaa6c23a8897d4adc8e64ad78db927e1df0c997c68c57f64aa485ceabb7ecdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eaa6c23a8897d4adc8e64ad78db927e1df0c997c68c57f64aa485ceabb7ecdb->enter($__internal_4eaa6c23a8897d4adc8e64ad78db927e1df0c997c68c57f64aa485ceabb7ecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_36cd176e126350a89fa9eb0508c2db85713e0a0a337cfd3a5dd8bc9daa02f5cd->leave($__internal_36cd176e126350a89fa9eb0508c2db85713e0a0a337cfd3a5dd8bc9daa02f5cd_prof);

        
        $__internal_4eaa6c23a8897d4adc8e64ad78db927e1df0c997c68c57f64aa485ceabb7ecdb->leave($__internal_4eaa6c23a8897d4adc8e64ad78db927e1df0c997c68c57f64aa485ceabb7ecdb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
