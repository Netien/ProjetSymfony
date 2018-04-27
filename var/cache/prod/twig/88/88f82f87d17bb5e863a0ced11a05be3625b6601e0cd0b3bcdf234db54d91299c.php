<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_29e5c6101c7c183bea56f30d4e00e301b2601f459552aa36e7915540a37bdb13 extends Twig_Template
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
        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCPlatformBundle:Default:index.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
