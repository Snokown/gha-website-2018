<?php

/* F:\Desktop\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm */
class __TwigTemplate_8962f6658c166f775d94c4ba17d5dffa892b919c336a6c5fdf49925af986fd05 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm", "");
    }
}
