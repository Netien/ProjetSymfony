<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e55cd7179f2e9da0d3cd6d1d0633435d10dbb9ae3af7e8c4e27cf08020a70ac7 extends Twig_Template
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
        $__internal_2a5e03732dca0632e738bc827823df561707468bf0dfe1d68fef7eb240b6e9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5e03732dca0632e738bc827823df561707468bf0dfe1d68fef7eb240b6e9e5->enter($__internal_2a5e03732dca0632e738bc827823df561707468bf0dfe1d68fef7eb240b6e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_56ce1a2a13e2ed677775c8be89d5bc7ec99c6271b84ada70aa96b322557392ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ce1a2a13e2ed677775c8be89d5bc7ec99c6271b84ada70aa96b322557392ec->enter($__internal_56ce1a2a13e2ed677775c8be89d5bc7ec99c6271b84ada70aa96b322557392ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2a5e03732dca0632e738bc827823df561707468bf0dfe1d68fef7eb240b6e9e5->leave($__internal_2a5e03732dca0632e738bc827823df561707468bf0dfe1d68fef7eb240b6e9e5_prof);

        
        $__internal_56ce1a2a13e2ed677775c8be89d5bc7ec99c6271b84ada70aa96b322557392ec->leave($__internal_56ce1a2a13e2ed677775c8be89d5bc7ec99c6271b84ada70aa96b322557392ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
