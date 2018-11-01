<?php

/* F:\Desktop\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_1f73689a185221d49c0a26ed3f2eed110dbf95896b0b7198af70e6a51ac43990 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Contact Us</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
{% component 'contactForm' %}", "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
