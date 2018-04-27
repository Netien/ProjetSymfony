<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_180727ed41f88155698b7c6cd6720616a1fdbc63562fe79d820c90f58cb2adc2 extends Twig_Template
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
        $__internal_3017c62f1a1971430114192c39eda5520eeac62c92ffbbcb5347015ede5abb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3017c62f1a1971430114192c39eda5520eeac62c92ffbbcb5347015ede5abb67->enter($__internal_3017c62f1a1971430114192c39eda5520eeac62c92ffbbcb5347015ede5abb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_c67bcab8b3477377873db5272130889e23bc7632d626f61bd0db39029ef604a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67bcab8b3477377873db5272130889e23bc7632d626f61bd0db39029ef604a3->enter($__internal_c67bcab8b3477377873db5272130889e23bc7632d626f61bd0db39029ef604a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Hello Annonce n°";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>
  </body>
</html>
<a href=\"../layout.html.twig\">layout.html.twig</a>
";
        
        $__internal_3017c62f1a1971430114192c39eda5520eeac62c92ffbbcb5347015ede5abb67->leave($__internal_3017c62f1a1971430114192c39eda5520eeac62c92ffbbcb5347015ede5abb67_prof);

        
        $__internal_c67bcab8b3477377873db5272130889e23bc7632d626f61bd0db39029ef604a3->leave($__internal_c67bcab8b3477377873db5272130889e23bc7632d626f61bd0db39029ef604a3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce {{ id }}</title>
  </head>
  <body>
    <h1>Hello Annonce n°{{ id }} !</h1>
  </body>
</html>
<a href=\"../layout.html.twig\">layout.html.twig</a>
", "OCPlatformBundle:Advert:view.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
