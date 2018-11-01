<?php

/* F:\Desktop\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_02c88dbe0da38bb09ae0e0e78470fcd76d57b221d0a6cf5da8afc7d2c14122c2 extends Twig_Template
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
        return "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
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
        return new Twig_Source("{% component 'blogPosts' %}", "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
