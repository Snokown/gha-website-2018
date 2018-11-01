<?php

/* F:\Desktop\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_5dbdcac87dfda15ca5fdcbd711b95c8ffc441a23b25e8662920fb8a78498f5a4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 15
        echo "        <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/layout.css\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 18
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "
  </head>
  <body>

\t";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "filename", array()) == "home.htm")) {
            // line 25
            echo "  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "      ";
        } else {
            // line 27
            echo "      <br><br>
    ";
        }
        // line 29
        echo "
  <section id=\"page\" class=\"container m-b-3\">
     <div class=\"row\">
         <div class=\"col-md-8\">
             ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 34
        echo "         </div>
         <div class=\"col-md-4\">
             ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "         </div>
     </div>
  </section>

    <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 49
        echo "\"></script>
    ";
        // line 50
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 51
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 52
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  116 => 51,  101 => 50,  98 => 49,  96 => 41,  90 => 37,  86 => 36,  82 => 34,  80 => 33,  74 => 29,  70 => 27,  67 => 26,  62 => 25,  59 => 24,  55 => 23,  49 => 19,  45 => 18,  43 => 14,  39 => 15,  37 => 14,  34 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% put styles %}
        <link href=\"/themes/hambern-hambern-blank-bootstrap-4/assets/css/layout.css\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700\" rel=\"stylesheet\">
    {% endput %}
    {% styles %}

  </head>
  <body>

\t{% partial 'navbar' %}
    {%  if this.page.filename == 'home.htm' %}
  {% partial 'jumbotron' %}
      {% else %}
      <br><br>
    {% endif %}

  <section id=\"page\" class=\"container m-b-3\">
     <div class=\"row\">
         <div class=\"col-md-8\">
             {% page %}
         </div>
         <div class=\"col-md-4\">
             {% partial 'sidebar' %}
         </div>
     </div>
  </section>

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "F:\\Desktop\\gha-website-2018/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
