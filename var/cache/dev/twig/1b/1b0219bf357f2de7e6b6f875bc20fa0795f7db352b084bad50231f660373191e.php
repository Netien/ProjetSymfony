<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_da5eff4de9b1cfd5151dfb498d18b960ac1ebe4b30d82a989f9136fbd2ac1746 extends Twig_Template
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
        $__internal_ad49455b6cfc84ba5e2305c6801e751a338e3081ee194f98c66b7b5c90ff499d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad49455b6cfc84ba5e2305c6801e751a338e3081ee194f98c66b7b5c90ff499d->enter($__internal_ad49455b6cfc84ba5e2305c6801e751a338e3081ee194f98c66b7b5c90ff499d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2f5a441115322cd2cda58f0b3243b831c40ac2b970589c2c8437dd5d291a7eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5a441115322cd2cda58f0b3243b831c40ac2b970589c2c8437dd5d291a7eef->enter($__internal_2f5a441115322cd2cda58f0b3243b831c40ac2b970589c2c8437dd5d291a7eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ad49455b6cfc84ba5e2305c6801e751a338e3081ee194f98c66b7b5c90ff499d->leave($__internal_ad49455b6cfc84ba5e2305c6801e751a338e3081ee194f98c66b7b5c90ff499d_prof);

        
        $__internal_2f5a441115322cd2cda58f0b3243b831c40ac2b970589c2c8437dd5d291a7eef->leave($__internal_2f5a441115322cd2cda58f0b3243b831c40ac2b970589c2c8437dd5d291a7eef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
