<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0638a19ad3582a4374291c7e61b1d9579cf8dc93f9751f0e3e53e2e297a04d00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04654c13cc1140b97db87e74a1bf2f4c58b2845c05e82475b50b3d5a47319f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04654c13cc1140b97db87e74a1bf2f4c58b2845c05e82475b50b3d5a47319f2d->enter($__internal_04654c13cc1140b97db87e74a1bf2f4c58b2845c05e82475b50b3d5a47319f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e7f250ab2094b90f0d4ebff12bbfe8379f6b8c6ae7b664267f1a735b72fb4dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f250ab2094b90f0d4ebff12bbfe8379f6b8c6ae7b664267f1a735b72fb4dd8->enter($__internal_e7f250ab2094b90f0d4ebff12bbfe8379f6b8c6ae7b664267f1a735b72fb4dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04654c13cc1140b97db87e74a1bf2f4c58b2845c05e82475b50b3d5a47319f2d->leave($__internal_04654c13cc1140b97db87e74a1bf2f4c58b2845c05e82475b50b3d5a47319f2d_prof);

        
        $__internal_e7f250ab2094b90f0d4ebff12bbfe8379f6b8c6ae7b664267f1a735b72fb4dd8->leave($__internal_e7f250ab2094b90f0d4ebff12bbfe8379f6b8c6ae7b664267f1a735b72fb4dd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dccd87528b5aa637cebb7b362f5f5cb3efe6fb5781111c9cebc7cbf5ca91a27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccd87528b5aa637cebb7b362f5f5cb3efe6fb5781111c9cebc7cbf5ca91a27c->enter($__internal_dccd87528b5aa637cebb7b362f5f5cb3efe6fb5781111c9cebc7cbf5ca91a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7fc1a06af7b1abb99057bbf8f34c895f8e4f050eacd688bb0465f9dfa523610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fc1a06af7b1abb99057bbf8f34c895f8e4f050eacd688bb0465f9dfa523610->enter($__internal_d7fc1a06af7b1abb99057bbf8f34c895f8e4f050eacd688bb0465f9dfa523610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d7fc1a06af7b1abb99057bbf8f34c895f8e4f050eacd688bb0465f9dfa523610->leave($__internal_d7fc1a06af7b1abb99057bbf8f34c895f8e4f050eacd688bb0465f9dfa523610_prof);

        
        $__internal_dccd87528b5aa637cebb7b362f5f5cb3efe6fb5781111c9cebc7cbf5ca91a27c->leave($__internal_dccd87528b5aa637cebb7b362f5f5cb3efe6fb5781111c9cebc7cbf5ca91a27c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6b740eb4042cff70a88650a2e3886b89f56435e1573ac6fb78abdd13b4de42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6b740eb4042cff70a88650a2e3886b89f56435e1573ac6fb78abdd13b4de42->enter($__internal_1f6b740eb4042cff70a88650a2e3886b89f56435e1573ac6fb78abdd13b4de42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fa4f2bf4136f4d623faff49bd2065af4b75ad68e8b4eb8c9b33704f9cb30eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa4f2bf4136f4d623faff49bd2065af4b75ad68e8b4eb8c9b33704f9cb30eec->enter($__internal_7fa4f2bf4136f4d623faff49bd2065af4b75ad68e8b4eb8c9b33704f9cb30eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7fa4f2bf4136f4d623faff49bd2065af4b75ad68e8b4eb8c9b33704f9cb30eec->leave($__internal_7fa4f2bf4136f4d623faff49bd2065af4b75ad68e8b4eb8c9b33704f9cb30eec_prof);

        
        $__internal_1f6b740eb4042cff70a88650a2e3886b89f56435e1573ac6fb78abdd13b4de42->leave($__internal_1f6b740eb4042cff70a88650a2e3886b89f56435e1573ac6fb78abdd13b4de42_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d00c7a4ae422582190e645f2f302852e8a538ef08f49ae7f790ac844b921cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d00c7a4ae422582190e645f2f302852e8a538ef08f49ae7f790ac844b921cb->enter($__internal_11d00c7a4ae422582190e645f2f302852e8a538ef08f49ae7f790ac844b921cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_893a8da0e1b8d7cd418f9414ab9f4bb90d8bd91bf5cf50e7750076c156bff0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893a8da0e1b8d7cd418f9414ab9f4bb90d8bd91bf5cf50e7750076c156bff0ea->enter($__internal_893a8da0e1b8d7cd418f9414ab9f4bb90d8bd91bf5cf50e7750076c156bff0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_893a8da0e1b8d7cd418f9414ab9f4bb90d8bd91bf5cf50e7750076c156bff0ea->leave($__internal_893a8da0e1b8d7cd418f9414ab9f4bb90d8bd91bf5cf50e7750076c156bff0ea_prof);

        
        $__internal_11d00c7a4ae422582190e645f2f302852e8a538ef08f49ae7f790ac844b921cb->leave($__internal_11d00c7a4ae422582190e645f2f302852e8a538ef08f49ae7f790ac844b921cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
