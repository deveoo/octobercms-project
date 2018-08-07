<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/fournisseurs.htm */
class __TwigTemplate_edd290ae9eb94a784862afc4afc4ec78d2a40012d73a6cfdede7309296c67450 extends Twig_Template
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
        echo "<section id=\"mainFormateurs\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <article class=\"clearfix\">
          <div class=\"BloxFormateurs clearfix\">
          <!-- #query Begin -->
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 9
            echo "              <div class=\"BlocFormateur\">
                  <div class=\"imgFormateur\">
                    <a title=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "titre", array()), "html", null, true);
            echo "\" href=\"details-fournisseur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "slug", array()), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["supplier"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "titre", array()), "html", null, true);
            echo "\" /> </a>
                  </div>
                  <div class=\"infoFormateur\">
                    <h3><a title=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "titre", array()), "html", null, true);
            echo "\" href=\"details-fournisseur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "titre", array()), "html", null, true);
            echo "</a></h3>
                    <div class=\"ExtraitFormateur\">
                      ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "extrait", array()), "html", null, true);
            echo "
                    </div>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "              <!-- QueryEnd -->
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- Pagination -->
<div class=paginate>
    <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-md-12\">
               ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["suppliers"] ?? null), "render", array());
        echo "
          </div>
      </div>
    </div>
</div>
<!-- Pagination end -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/fournisseurs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  72 => 21,  61 => 16,  52 => 14,  40 => 11,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"mainFormateurs\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <article class=\"clearfix\">
          <div class=\"BloxFormateurs clearfix\">
          <!-- #query Begin -->
            {% for supplier in suppliers %}
              <div class=\"BlocFormateur\">
                  <div class=\"imgFormateur\">
                    <a title=\"{{ supplier.titre }}\" href=\"details-fournisseur/{{supplier.slug}}\"> <img src=\"{{ supplier.image.path }}\" alt=\"{{ supplier.titre }}\" /> </a>
                  </div>
                  <div class=\"infoFormateur\">
                    <h3><a title=\"{{ supplier.titre }}\" href=\"details-fournisseur/{{supplier.slug}}\">{{ supplier.titre }}</a></h3>
                    <div class=\"ExtraitFormateur\">
                      {{ supplier.extrait }}
                    </div>
                  </div>
                </div>
              {% endfor %}
              <!-- QueryEnd -->
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- Pagination -->
<div class=paginate>
    <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-md-12\">
               {{suppliers.render|raw}}
          </div>
      </div>
    </div>
</div>
<!-- Pagination end -->", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/fournisseurs.htm", "");
    }
}
