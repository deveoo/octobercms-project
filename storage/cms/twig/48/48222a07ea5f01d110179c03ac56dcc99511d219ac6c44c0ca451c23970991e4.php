<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/site/breadcrumb.htm */
class __TwigTemplate_051ad5a50f2926fcba2ca20987ad235e2503f25b851f3f4ee88f545a63172b7b extends Twig_Template
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
        echo "<section id=\"breadcrumbs\">
  \t<div class=\"container\">
  \t\t<div class=\"row\">
  \t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
  \t\t\t\t\t<a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "</a>  &gt; <span>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</span>
  \t\t\t</div>
  \t\t</div>
  \t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/breadcrumb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"breadcrumbs\">
  \t<div class=\"container\">
  \t\t<div class=\"row\">
  \t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
  \t\t\t\t\t<a href=\"{{ 'home'|page }}\" title=\"{{ 'Accueil'|_ }}\">{{ 'Accueil'|_ }}</a>  &gt; <span>{{ this.page.title|_ }}</span>
  \t\t\t</div>
  \t\t</div>
  \t</div>
</section>", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/breadcrumb.htm", "");
    }
}
