<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_35559a4edd42f31669a8d45b0a4d4639757c1018493614bbdb0c3209ff60620b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_dfeee38da9a27b8a8550293b3152013831cf8d5b144fc199c4e0e368c8ff94d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeee38da9a27b8a8550293b3152013831cf8d5b144fc199c4e0e368c8ff94d6->enter($__internal_dfeee38da9a27b8a8550293b3152013831cf8d5b144fc199c4e0e368c8ff94d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_afd412f7c68a3b13c67f836423e5acde715d97160c69919724624d19ff67bb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd412f7c68a3b13c67f836423e5acde715d97160c69919724624d19ff67bb46->enter($__internal_afd412f7c68a3b13c67f836423e5acde715d97160c69919724624d19ff67bb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfeee38da9a27b8a8550293b3152013831cf8d5b144fc199c4e0e368c8ff94d6->leave($__internal_dfeee38da9a27b8a8550293b3152013831cf8d5b144fc199c4e0e368c8ff94d6_prof);

        
        $__internal_afd412f7c68a3b13c67f836423e5acde715d97160c69919724624d19ff67bb46->leave($__internal_afd412f7c68a3b13c67f836423e5acde715d97160c69919724624d19ff67bb46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1127447531d8a35a6de9c9fd7357b63db53536b16fea34b4de6f4dc23ef058f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1127447531d8a35a6de9c9fd7357b63db53536b16fea34b4de6f4dc23ef058f1->enter($__internal_1127447531d8a35a6de9c9fd7357b63db53536b16fea34b4de6f4dc23ef058f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3912b68a6d4f12ff40b1629b237acfb471e402aa4f83f6e836bb099e038ef2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3912b68a6d4f12ff40b1629b237acfb471e402aa4f83f6e836bb099e038ef2fa->enter($__internal_3912b68a6d4f12ff40b1629b237acfb471e402aa4f83f6e836bb099e038ef2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3912b68a6d4f12ff40b1629b237acfb471e402aa4f83f6e836bb099e038ef2fa->leave($__internal_3912b68a6d4f12ff40b1629b237acfb471e402aa4f83f6e836bb099e038ef2fa_prof);

        
        $__internal_1127447531d8a35a6de9c9fd7357b63db53536b16fea34b4de6f4dc23ef058f1->leave($__internal_1127447531d8a35a6de9c9fd7357b63db53536b16fea34b4de6f4dc23ef058f1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a14ce2be1dc97a6741804c29aa97d65c09926830c9a741805d2d785fff1333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a14ce2be1dc97a6741804c29aa97d65c09926830c9a741805d2d785fff1333->enter($__internal_70a14ce2be1dc97a6741804c29aa97d65c09926830c9a741805d2d785fff1333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8614e00a34277d881151caa600ccff89e133929cccb7bb42dbcefd897e27944c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8614e00a34277d881151caa600ccff89e133929cccb7bb42dbcefd897e27944c->enter($__internal_8614e00a34277d881151caa600ccff89e133929cccb7bb42dbcefd897e27944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8614e00a34277d881151caa600ccff89e133929cccb7bb42dbcefd897e27944c->leave($__internal_8614e00a34277d881151caa600ccff89e133929cccb7bb42dbcefd897e27944c_prof);

        
        $__internal_70a14ce2be1dc97a6741804c29aa97d65c09926830c9a741805d2d785fff1333->leave($__internal_70a14ce2be1dc97a6741804c29aa97d65c09926830c9a741805d2d785fff1333_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_18759914e2b2dfab11fc36c37f2d04d2140f4a03d496557594f19401e3f24b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18759914e2b2dfab11fc36c37f2d04d2140f4a03d496557594f19401e3f24b87->enter($__internal_18759914e2b2dfab11fc36c37f2d04d2140f4a03d496557594f19401e3f24b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4018c1c39714ba8fc391ea653fa873807afecd4d360f26e141b2b2f8c43bef54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4018c1c39714ba8fc391ea653fa873807afecd4d360f26e141b2b2f8c43bef54->enter($__internal_4018c1c39714ba8fc391ea653fa873807afecd4d360f26e141b2b2f8c43bef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4018c1c39714ba8fc391ea653fa873807afecd4d360f26e141b2b2f8c43bef54->leave($__internal_4018c1c39714ba8fc391ea653fa873807afecd4d360f26e141b2b2f8c43bef54_prof);

        
        $__internal_18759914e2b2dfab11fc36c37f2d04d2140f4a03d496557594f19401e3f24b87->leave($__internal_18759914e2b2dfab11fc36c37f2d04d2140f4a03d496557594f19401e3f24b87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
