<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/details-produit.htm */
class __TwigTemplate_47704715a551bb0c437c9553807ae8497fc1cd83480071fd12ed3badb9cbb131 extends Twig_Template
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
        echo "<section>
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
          <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
          <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "titre", array()), "html", null, true);
        echo "\">
          ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", array());
        echo "
        </div>
        <div class=\"col-md-6\">
          ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "description", array());
        echo "
        </div>
    </div>
  </div>
</section>

<!-- ******************************************************************* -->
<div class=\"Disponible\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"TitleDispo\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Fournisseurs"));
        echo "</div>
          <div class=\"AllDispo\">
            <div id=\"owl-disponile\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "              <div class=\"item\">
                <div class=\"ContDispo\">
                  <div class=\"ImgDispo\">
                    <img src=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/tus.jpg");
            echo "\" alt=\"TUS Technology\" class=\"img-responsive\" />
                  </div>
                  <div class=\"descDispo\">
                    <h3>Nibh euismod tincidunt</h3>
                    <div class=\"ExtraitDispo\">
                      Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit
                    </div>
                  </div>
                </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ******************************************************************* -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/details-produit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  74 => 28,  69 => 25,  65 => 24,  59 => 21,  45 => 10,  39 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
          <h1>{{produit.titre}}</h1>
          <img src=\"{{supplier.image.path}}\" alt=\"{{supplier.titre}}\">
          {{produit.description|raw }}
        </div>
        <div class=\"col-md-6\">
          {{produit.description|raw }}
        </div>
    </div>
  </div>
</section>

<!-- ******************************************************************* -->
<div class=\"Disponible\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"TitleDispo\">{{'Fournisseurs'|_}}</div>
          <div class=\"AllDispo\">
            <div id=\"owl-disponile\">
              {% for i in 0..10 %}
              <div class=\"item\">
                <div class=\"ContDispo\">
                  <div class=\"ImgDispo\">
                    <img src=\"{{ '/assets/images/tus.jpg'|theme }}\" alt=\"TUS Technology\" class=\"img-responsive\" />
                  </div>
                  <div class=\"descDispo\">
                    <h3>Nibh euismod tincidunt</h3>
                    <div class=\"ExtraitDispo\">
                      Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit
                    </div>
                  </div>
                </div>
              </div>
              {% endfor %}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ******************************************************************* -->", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/details-produit.htm", "");
    }
}
