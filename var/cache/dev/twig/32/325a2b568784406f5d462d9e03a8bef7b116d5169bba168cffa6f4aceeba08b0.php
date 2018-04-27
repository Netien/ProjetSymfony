<?php

/* PWMainBundle:CreateAndShare:chat.html.twig */
class __TwigTemplate_bcb824d578bd3f9745596cade30803b55db8f0ece5fb01c9eac4deda2be5f270 extends Twig_Template
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
        $__internal_2cd3b230d99c62ffe9f111d2732ee22c73f24b9a9b15d3677990619c61a2600a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd3b230d99c62ffe9f111d2732ee22c73f24b9a9b15d3677990619c61a2600a->enter($__internal_2cd3b230d99c62ffe9f111d2732ee22c73f24b9a9b15d3677990619c61a2600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:CreateAndShare:chat.html.twig"));

        $__internal_31a3f3584aacc9d89ef75ca57ac32f3cab85a5c830827dbbdba53df6aa04ed4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a3f3584aacc9d89ef75ca57ac32f3cab85a5c830827dbbdba53df6aa04ed4f->enter($__internal_31a3f3584aacc9d89ef75ca57ac32f3cab85a5c830827dbbdba53df6aa04ed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMainBundle:CreateAndShare:chat.html.twig"));

        // line 1
        echo "<html>
<head>
\t<title>Chatter</title>
\t<link rel='stylesheet' type='text/css' href='css/style.css'/>
\t<script src=\"//code.jquery.com.jsquery-1.11.0.min.js\"></script>
</head>
<body>
\t<div class=\"chatContainer\">
\t\t<div class=\"ChatHeader\">
\t\t\t<h3> Welcome </h3>
\t\t</div>
\t\t<div class=\"chatBottom\">
\t\t\t<form action=\"#\" onSubmit=\"return false;\" id=\"chatForm\">
\t\t\t\t<input type=\"hidden\" id=\"name\" value=\"1\" />
\t\t\t\t<input type=\"text\" name=\"text\" id=\"text\" value=\"\" placeholder=\"Taper votre message\" />
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Post\" />
\t\t\t</form>
\t\t</div>
</body>
</html>";
        
        $__internal_2cd3b230d99c62ffe9f111d2732ee22c73f24b9a9b15d3677990619c61a2600a->leave($__internal_2cd3b230d99c62ffe9f111d2732ee22c73f24b9a9b15d3677990619c61a2600a_prof);

        
        $__internal_31a3f3584aacc9d89ef75ca57ac32f3cab85a5c830827dbbdba53df6aa04ed4f->leave($__internal_31a3f3584aacc9d89ef75ca57ac32f3cab85a5c830827dbbdba53df6aa04ed4f_prof);

    }

    public function getTemplateName()
    {
        return "PWMainBundle:CreateAndShare:chat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<title>Chatter</title>
\t<link rel='stylesheet' type='text/css' href='css/style.css'/>
\t<script src=\"//code.jquery.com.jsquery-1.11.0.min.js\"></script>
</head>
<body>
\t<div class=\"chatContainer\">
\t\t<div class=\"ChatHeader\">
\t\t\t<h3> Welcome </h3>
\t\t</div>
\t\t<div class=\"chatBottom\">
\t\t\t<form action=\"#\" onSubmit=\"return false;\" id=\"chatForm\">
\t\t\t\t<input type=\"hidden\" id=\"name\" value=\"1\" />
\t\t\t\t<input type=\"text\" name=\"text\" id=\"text\" value=\"\" placeholder=\"Taper votre message\" />
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Post\" />
\t\t\t</form>
\t\t</div>
</body>
</html>", "PWMainBundle:CreateAndShare:chat.html.twig", "/Users/rrtaya/Site Symfony/Symfony/src/PW/MainBundle/Resources/views/CreateAndShare/chat.html.twig");
    }
}
