<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_df7b6caea9fddc8ed619721309f0f462b5432153ba58397a92874963fd641314 extends Twig_Template
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
        $__internal_12c8550bd668e03165e37857947fe95870d2ac12d8183322f8f442e42fb25f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c8550bd668e03165e37857947fe95870d2ac12d8183322f8f442e42fb25f19->enter($__internal_12c8550bd668e03165e37857947fe95870d2ac12d8183322f8f442e42fb25f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_788302688bd21ee923728afa5faa177ac4dca8b14811cc8dc29417ff017c1191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788302688bd21ee923728afa5faa177ac4dca8b14811cc8dc29417ff017c1191->enter($__internal_788302688bd21ee923728afa5faa177ac4dca8b14811cc8dc29417ff017c1191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>
";
        
        $__internal_12c8550bd668e03165e37857947fe95870d2ac12d8183322f8f442e42fb25f19->leave($__internal_12c8550bd668e03165e37857947fe95870d2ac12d8183322f8f442e42fb25f19_prof);

        
        $__internal_788302688bd21ee923728afa5faa177ac4dca8b14811cc8dc29417ff017c1191->leave($__internal_788302688bd21ee923728afa5faa177ac4dca8b14811cc8dc29417ff017c1191_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}

<html>
  <body>
    Hello World!
  </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
