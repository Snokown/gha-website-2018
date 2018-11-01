<?php

/* F:\Desktop\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_73e801ef61c8f1259d02a8790af92c0093349c3f9360e5309745f2dcc6bd5a7a extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/navbar.css\" rel=\"stylesheet\" />
    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/jumbotron.css\" rel=\"stylesheet\" />
    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/homepage.css\" rel=\"stylesheet\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "<div class=\"container-fluid separator-dark\"></div>
<h1>Welcome</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nesciunt, vitae, unde voluptatibus tempora corporis pariatur commodi minima deserunt beatae recusandae dolores dignissimos cumque suscipit ipsam quae minus voluptatum! Voluptates.</p>";
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/navbar.css\" rel=\"stylesheet\" />
    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/jumbotron.css\" rel=\"stylesheet\" />
    <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/homepage.css\" rel=\"stylesheet\" />
{% endput %}
<div class=\"container-fluid separator-dark\"></div>
<h1>Welcome</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nesciunt, vitae, unde voluptatibus tempora corporis pariatur commodi minima deserunt beatae recusandae dolores dignissimos cumque suscipit ipsam quae minus voluptatum! Voluptates.</p>", "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
