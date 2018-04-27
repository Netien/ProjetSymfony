<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_037ae85d0493d952e10e9dab56c4a0d869b839b63dadadfce8ea1e82033789c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c98db3163ebdef0ac5a5bc2754a5611a7400761305f99666119e3e2be7cba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c98db3163ebdef0ac5a5bc2754a5611a7400761305f99666119e3e2be7cba3->enter($__internal_e9c98db3163ebdef0ac5a5bc2754a5611a7400761305f99666119e3e2be7cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c8cd3414a9c463120dbf24addfb57a1480f0f83f304f27a7ce63a8f72c2b7a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cd3414a9c463120dbf24addfb57a1480f0f83f304f27a7ce63a8f72c2b7a98->enter($__internal_c8cd3414a9c463120dbf24addfb57a1480f0f83f304f27a7ce63a8f72c2b7a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e9c98db3163ebdef0ac5a5bc2754a5611a7400761305f99666119e3e2be7cba3->leave($__internal_e9c98db3163ebdef0ac5a5bc2754a5611a7400761305f99666119e3e2be7cba3_prof);

        
        $__internal_c8cd3414a9c463120dbf24addfb57a1480f0f83f304f27a7ce63a8f72c2b7a98->leave($__internal_c8cd3414a9c463120dbf24addfb57a1480f0f83f304f27a7ce63a8f72c2b7a98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29dbd9cf14a1365635d5c552ef366c172b5145d6f5d882b426d2a2e4a3b9409b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dbd9cf14a1365635d5c552ef366c172b5145d6f5d882b426d2a2e4a3b9409b->enter($__internal_29dbd9cf14a1365635d5c552ef366c172b5145d6f5d882b426d2a2e4a3b9409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60a2eb4f45a95e309f534c2ae6c0e29496e196e3dc3de919635ec1e47aac76f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a2eb4f45a95e309f534c2ae6c0e29496e196e3dc3de919635ec1e47aac76f7->enter($__internal_60a2eb4f45a95e309f534c2ae6c0e29496e196e3dc3de919635ec1e47aac76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60a2eb4f45a95e309f534c2ae6c0e29496e196e3dc3de919635ec1e47aac76f7->leave($__internal_60a2eb4f45a95e309f534c2ae6c0e29496e196e3dc3de919635ec1e47aac76f7_prof);

        
        $__internal_29dbd9cf14a1365635d5c552ef366c172b5145d6f5d882b426d2a2e4a3b9409b->leave($__internal_29dbd9cf14a1365635d5c552ef366c172b5145d6f5d882b426d2a2e4a3b9409b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a3e325956fb6cf2eec469c08179753ab7955d045a68707101a6c1d4d78a8cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3e325956fb6cf2eec469c08179753ab7955d045a68707101a6c1d4d78a8cc3->enter($__internal_9a3e325956fb6cf2eec469c08179753ab7955d045a68707101a6c1d4d78a8cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7d71ffa9da8a6799d07e6db056ce39b460f83333dc48f275d95865a763eeec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d71ffa9da8a6799d07e6db056ce39b460f83333dc48f275d95865a763eeec5->enter($__internal_f7d71ffa9da8a6799d07e6db056ce39b460f83333dc48f275d95865a763eeec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f7d71ffa9da8a6799d07e6db056ce39b460f83333dc48f275d95865a763eeec5->leave($__internal_f7d71ffa9da8a6799d07e6db056ce39b460f83333dc48f275d95865a763eeec5_prof);

        
        $__internal_9a3e325956fb6cf2eec469c08179753ab7955d045a68707101a6c1d4d78a8cc3->leave($__internal_9a3e325956fb6cf2eec469c08179753ab7955d045a68707101a6c1d4d78a8cc3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe789b9d42231ced7c33d6ae4f66b3e24832f6e047bf1aecea65a08a882cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe789b9d42231ced7c33d6ae4f66b3e24832f6e047bf1aecea65a08a882cf4a->enter($__internal_afe789b9d42231ced7c33d6ae4f66b3e24832f6e047bf1aecea65a08a882cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061a17c9c08cddd78f152a5098755c5f6e00b28d65c71e6bc461af91800f604d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061a17c9c08cddd78f152a5098755c5f6e00b28d65c71e6bc461af91800f604d->enter($__internal_061a17c9c08cddd78f152a5098755c5f6e00b28d65c71e6bc461af91800f604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_061a17c9c08cddd78f152a5098755c5f6e00b28d65c71e6bc461af91800f604d->leave($__internal_061a17c9c08cddd78f152a5098755c5f6e00b28d65c71e6bc461af91800f604d_prof);

        
        $__internal_afe789b9d42231ced7c33d6ae4f66b3e24832f6e047bf1aecea65a08a882cf4a->leave($__internal_afe789b9d42231ced7c33d6ae4f66b3e24832f6e047bf1aecea65a08a882cf4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
