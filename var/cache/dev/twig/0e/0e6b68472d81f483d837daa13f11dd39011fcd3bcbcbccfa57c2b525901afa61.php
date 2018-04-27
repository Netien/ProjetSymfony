<?php

/* PWMainBundle:CreateAndShare:index.html.twig */
class __TwigTemplate_a9cd25aa680e5b0683038626ab919eb284985f3972db1f3b1c2ea9bb326ca980 extends Twig_Template
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
        $__internal_f6f82267bd31cce310a28eac320d9030f1dd6dd56e2c8d1685d439074062a634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f82267bd31cce310a28eac320d9030f1dd6dd56e2c8d1685d439074062a634->enter($__internal_f6f82267bd31cce310a28eac320d9030f1dd6dd56e2c8d1685d439074062a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:CreateAndShare:index.html.twig"));

        $__internal_3f83879079f12cbb89e2ffd03c43bead577b072ec9eb98ce2afeca46830f925a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f83879079f12cbb89e2ffd03c43bead577b072ec9eb98ce2afeca46830f925a->enter($__internal_3f83879079f12cbb89e2ffd03c43bead577b072ec9eb98ce2afeca46830f925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:CreateAndShare:index.html.twig"));

        // line 2
        echo "

<html>
  <body>
    <div id=\"page-wrap\">

    <h2>jQuery/PHP Chat</h2>
    
    <p id=\"name-area\"></p>
    
    <div id=\"chat-wrap\"><div id=\"chat-area\"></div></div>
    
    <form id=\"send-message-area\">
        <p>Your message: </p>
        <textarea id=\"sendie\" maxlength = '100'></textarea>
    </form>

</div>
  </body>
</html>
";
        
        $__internal_f6f82267bd31cce310a28eac320d9030f1dd6dd56e2c8d1685d439074062a634->leave($__internal_f6f82267bd31cce310a28eac320d9030f1dd6dd56e2c8d1685d439074062a634_prof);

        
        $__internal_3f83879079f12cbb89e2ffd03c43bead577b072ec9eb98ce2afeca46830f925a->leave($__internal_3f83879079f12cbb89e2ffd03c43bead577b072ec9eb98ce2afeca46830f925a_prof);

    }

    public function getTemplateName()
    {
        return "PWMainBundle:CreateAndShare:index.html.twig";
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
    <div id=\"page-wrap\">

    <h2>jQuery/PHP Chat</h2>
    
    <p id=\"name-area\"></p>
    
    <div id=\"chat-wrap\"><div id=\"chat-area\"></div></div>
    
    <form id=\"send-message-area\">
        <p>Your message: </p>
        <textarea id=\"sendie\" maxlength = '100'></textarea>
    </form>

</div>
  </body>
</html>
", "PWMainBundle:CreateAndShare:index.html.twig", "/Users/rrtaya/Site Symfony/Symfony/src/PW/MainBundle/Resources/views/CreateAndShare/index.html.twig");
    }
}
