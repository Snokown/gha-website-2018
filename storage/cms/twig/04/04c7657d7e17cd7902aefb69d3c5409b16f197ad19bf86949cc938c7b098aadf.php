<?php

/* F:\Desktop\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_f402303cc71f6ec4c346884f11f9ba0d07510d31ae33969a904bc9e13dd40677 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
