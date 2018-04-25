<?php

/* PWMainBundle:Default:index.html.twig */
class __TwigTemplate_26d83a44f4a199fb9873276941d903f7db1198f20370e9b190e3a895856cda2b extends Twig_Template
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
        $__internal_46811e3f194ad7f5ce0a262c88dc9e0cd97006be2763b1a0716cb5a2374f7e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46811e3f194ad7f5ce0a262c88dc9e0cd97006be2763b1a0716cb5a2374f7e3d->enter($__internal_46811e3f194ad7f5ce0a262c88dc9e0cd97006be2763b1a0716cb5a2374f7e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:Default:index.html.twig"));

        $__internal_263ba045a831d383b5f2b3f3f8439d7a75c829f6339494b09ef883805d1f1a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263ba045a831d383b5f2b3f3f8439d7a75c829f6339494b09ef883805d1f1a22->enter($__internal_263ba045a831d383b5f2b3f3f8439d7a75c829f6339494b09ef883805d1f1a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>";
        
        $__internal_46811e3f194ad7f5ce0a262c88dc9e0cd97006be2763b1a0716cb5a2374f7e3d->leave($__internal_46811e3f194ad7f5ce0a262c88dc9e0cd97006be2763b1a0716cb5a2374f7e3d_prof);

        
        $__internal_263ba045a831d383b5f2b3f3f8439d7a75c829f6339494b09ef883805d1f1a22->leave($__internal_263ba045a831d383b5f2b3f3f8439d7a75c829f6339494b09ef883805d1f1a22_prof);

    }

    public function getTemplateName()
    {
        return "PWMainBundle:Default:index.html.twig";
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
</html>", "PWMainBundle:Default:index.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/PW/MainBundle/Resources/views/Default/index.html.twig");
    }
}
