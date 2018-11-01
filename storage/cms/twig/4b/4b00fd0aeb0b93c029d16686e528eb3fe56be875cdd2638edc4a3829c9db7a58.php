<?php

/* F:\Desktop\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_7039e6fb8f13fdecdf48d05f7c07690885febf0b8990b5d0ace9118c8086bc8f extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
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
        return new Twig_Source("{% component 'blogPosts' %}", "F:\\Desktop\\GHA_Website_2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
