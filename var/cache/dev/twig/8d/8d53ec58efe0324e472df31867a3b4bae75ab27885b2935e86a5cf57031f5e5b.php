<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4036b8255bbcb3852aa039cd37771a97203f2e40e37450eca75f80e2d1ae4156 extends Twig_Template
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
        $__internal_ac1f7d8473adcc9e94f25b6abd21cbd15607d72e54035c3035f413d06df7fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1f7d8473adcc9e94f25b6abd21cbd15607d72e54035c3035f413d06df7fed0->enter($__internal_ac1f7d8473adcc9e94f25b6abd21cbd15607d72e54035c3035f413d06df7fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a6a15b26732395c447376983be81deb1d6e9884cb1431b75be1b49a90d12e398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a15b26732395c447376983be81deb1d6e9884cb1431b75be1b49a90d12e398->enter($__internal_a6a15b26732395c447376983be81deb1d6e9884cb1431b75be1b49a90d12e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ac1f7d8473adcc9e94f25b6abd21cbd15607d72e54035c3035f413d06df7fed0->leave($__internal_ac1f7d8473adcc9e94f25b6abd21cbd15607d72e54035c3035f413d06df7fed0_prof);

        
        $__internal_a6a15b26732395c447376983be81deb1d6e9884cb1431b75be1b49a90d12e398->leave($__internal_a6a15b26732395c447376983be81deb1d6e9884cb1431b75be1b49a90d12e398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
