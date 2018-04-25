<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e88e4c45aa70a93b31e89512786129cb420b5e8eee1159d23f90e962112b70ab extends Twig_Template
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
        $__internal_2b1f5de2caefb04731c421d90b530a1945a46b6f209b455eafa69087de682c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1f5de2caefb04731c421d90b530a1945a46b6f209b455eafa69087de682c04->enter($__internal_2b1f5de2caefb04731c421d90b530a1945a46b6f209b455eafa69087de682c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_195f8abb8aef7f6701c91bd400ea79ee3088c1a08c6d6ad780dfa1a0f1087b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195f8abb8aef7f6701c91bd400ea79ee3088c1a08c6d6ad780dfa1a0f1087b6d->enter($__internal_195f8abb8aef7f6701c91bd400ea79ee3088c1a08c6d6ad780dfa1a0f1087b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2b1f5de2caefb04731c421d90b530a1945a46b6f209b455eafa69087de682c04->leave($__internal_2b1f5de2caefb04731c421d90b530a1945a46b6f209b455eafa69087de682c04_prof);

        
        $__internal_195f8abb8aef7f6701c91bd400ea79ee3088c1a08c6d6ad780dfa1a0f1087b6d->leave($__internal_195f8abb8aef7f6701c91bd400ea79ee3088c1a08c6d6ad780dfa1a0f1087b6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Etienne/Documents/Uni/PW6/sites/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
