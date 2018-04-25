<?php

/* ::view.html.twig */
class __TwigTemplate_f88fe86435fa1d343b12fbf88f8f42f03547cf21e07faf06f5c40a813a41cb65 extends Twig_Template
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
        $__internal_1de54030514709c5c71d359ec4a783ba794cb680f656afa10de40188bdf8c29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de54030514709c5c71d359ec4a783ba794cb680f656afa10de40188bdf8c29e->enter($__internal_1de54030514709c5c71d359ec4a783ba794cb680f656afa10de40188bdf8c29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::view.html.twig"));

        $__internal_6cb95e6eedee9d710f33139a7f48e36a7dd2651dae6729081bf7dff34bd4d84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb95e6eedee9d710f33139a7f48e36a7dd2651dae6729081bf7dff34bd4d84c->enter($__internal_6cb95e6eedee9d710f33139a7f48e36a7dd2651dae6729081bf7dff34bd4d84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::view.html.twig"));

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
    <p>Tag éventuel : ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</p>
  </body>
</html>
";
        
        $__internal_1de54030514709c5c71d359ec4a783ba794cb680f656afa10de40188bdf8c29e->leave($__internal_1de54030514709c5c71d359ec4a783ba794cb680f656afa10de40188bdf8c29e_prof);

        
        $__internal_6cb95e6eedee9d710f33139a7f48e36a7dd2651dae6729081bf7dff34bd4d84c->leave($__internal_6cb95e6eedee9d710f33139a7f48e36a7dd2651dae6729081bf7dff34bd4d84c_prof);

    }

    public function getTemplateName()
    {
        return "::view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  37 => 9,  31 => 6,  25 => 2,);
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
    <p>Tag éventuel : {{ tag }}</p>
  </body>
</html>
", "::view.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/app/Resources/views/view.html.twig");
    }
}
