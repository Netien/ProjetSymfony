<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_54907e7d30f1c69bfcae16a6f0675e53d4fa7434bb7c8d85eb59648322ff88c1 extends Twig_Template
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
        $__internal_245a8e9adb62c4007bb7771bc6c05ecafb11dfeec4dcd621000f296b2678962b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245a8e9adb62c4007bb7771bc6c05ecafb11dfeec4dcd621000f296b2678962b->enter($__internal_245a8e9adb62c4007bb7771bc6c05ecafb11dfeec4dcd621000f296b2678962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_c6fc133b3833d25f55428d94871acdbb8758454a954f88ec4bdf4fef1e0d3db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc133b3833d25f55428d94871acdbb8758454a954f88ec4bdf4fef1e0d3db5->enter($__internal_c6fc133b3833d25f55428d94871acdbb8758454a954f88ec4bdf4fef1e0d3db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Hello Annonce n°";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>
  </body>
</html>
";
        
        $__internal_245a8e9adb62c4007bb7771bc6c05ecafb11dfeec4dcd621000f296b2678962b->leave($__internal_245a8e9adb62c4007bb7771bc6c05ecafb11dfeec4dcd621000f296b2678962b_prof);

        
        $__internal_c6fc133b3833d25f55428d94871acdbb8758454a954f88ec4bdf4fef1e0d3db5->leave($__internal_c6fc133b3833d25f55428d94871acdbb8758454a954f88ec4bdf4fef1e0d3db5_prof);

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
", "OCPlatformBundle:Advert:view.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
