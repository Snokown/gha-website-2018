<?php

/* F:\Desktop\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_c8e663363cfe1924622e39c9264e911d57c02c920ff5e735948ddedcd865c7bb extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) != "home")) ? (" m-b-3") : (""));
        echo "\">
\t<nav class=\"navbar navbar-light bg-light navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img style=\"height: 55px;\" src=\"/themes/hambern-hambern-blank-bootstrap-4/assets/svgs/gha-logo.svg\"></a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "blog")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  62 => 15,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 7,  35 => 6,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"{{ this.page.baseFileName != 'home' ? ' m-b-3' }}\">
\t<nav class=\"navbar navbar-light bg-light navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img style=\"height: 55px;\" src=\"/themes/hambern-hambern-blank-bootstrap-4/assets/svgs/gha-logo.svg\"></a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'blog' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
