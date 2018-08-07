<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/candidature-spontannee.htm */
class __TwigTemplate_43cb75123ed0108f2b78fec8f0cf3647bf20428c8451bcd95b46138424186167 extends Twig_Template
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
        echo "<section id=\"main\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-6 col-lg-6 col col-xs-12\">
        <p>Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.
Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.
Typi non habent claritatem insitam...</p>
<p>Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.
Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.
Typi non habent claritatem insitam...</p>
      </div>
      <div class=\"col-md-6 col-lg-6 col col-xs-12\">
        <h2>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Postuler"));
        echo "</h2>

      <div class=\"websiteForm\">
        ";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("postulerform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "
        </div>
      </div>
    </div>
  </div>
</sections>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/candidature-spontannee.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  44 => 17,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"main\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-6 col-lg-6 col col-xs-12\">
        <p>Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.
Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.
Typi non habent claritatem insitam...</p>
<p>Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.
Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.
Typi non habent claritatem insitam...</p>
      </div>
      <div class=\"col-md-6 col-lg-6 col col-xs-12\">
        <h2>{{ 'Postuler'|_ }}</h2>

      <div class=\"websiteForm\">
        {% component 'postulerform' %}

        </div>
      </div>
    </div>
  </div>
</sections>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/candidature-spontannee.htm", "");
    }
}
