<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/produits-services.htm */
class __TwigTemplate_614b4066031e33c66323163d32839072f977760cb56ce24c033af658bd463455 extends Twig_Template
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <a href=\"\" title=\"\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "</a> > <span>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Produits et services"));
        echo "</span>
            </div>
        </div>
    </div>
</section>
<section id=\"mainProduct\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <article class=\"clearfix\">

                  <!----------------------------------- fILTER BEGIN -------------------------------------------->
                    <div class=\"Filter\">
                        <span class=\"titleFilter\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Filtrer par"));
        echo " </span>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Produits</option>
                            <option value=\"popularity\">Produits 1</option>
                            <option value=\"popularity\">Produits 2</option>
                            <option value=\"popularity\">Produits 3</option>
                        </select>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Cameras</option>
                            <option value=\"popularity\">Cameras 1</option>
                            <option value=\"popularity\">Cameras 2</option>
                            <option value=\"popularity\">Cameras 3</option>
                        </select>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Analogue /IP (AN /IP)</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 1</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 2</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 3</option>
                        </select>
                        <input type=\"submit\" value=\"OK\">
                    </div>
                  <!------------------------------------ filer End ------------------------------------------->
                  
                    <div class=\"BloxProducts clearfix\">

                      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                        <div class=\"BlocProduct\">
                            <div class=\"imgProduct\">
                                <a href=\"details-produit/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titre", array()), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 47
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product1.jpg");
            echo "\" alt=\"Product\" class=\"img-responsive\" />
                                </a>
                            </div>
                            <div class=\"infoProduct\">
                                <h3><a href=\"#\" title=\"Nibh euismod tincidunt\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                <div class=\"ExtraitProduct\">
                                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titre", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                            <a class=\"LoopProduct\" href=\"details-produit/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titre", array()), "html", null, true);
            echo "\"></a>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "





                    </div>
                </article>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/produits-services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 59,  107 => 56,  101 => 53,  96 => 51,  89 => 47,  83 => 46,  79 => 44,  75 => 43,  47 => 18,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <a href=\"\" title=\"\">{{ 'Accueil'|_ }}</a> > <span>{{ 'Produits et services'|_ }}</span>
            </div>
        </div>
    </div>
</section>
<section id=\"mainProduct\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <article class=\"clearfix\">

                  <!----------------------------------- fILTER BEGIN -------------------------------------------->
                    <div class=\"Filter\">
                        <span class=\"titleFilter\">{{ 'Filtrer par'|_ }} </span>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Produits</option>
                            <option value=\"popularity\">Produits 1</option>
                            <option value=\"popularity\">Produits 2</option>
                            <option value=\"popularity\">Produits 3</option>
                        </select>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Cameras</option>
                            <option value=\"popularity\">Cameras 1</option>
                            <option value=\"popularity\">Cameras 2</option>
                            <option value=\"popularity\">Cameras 3</option>
                        </select>
                        <select>
                            <option value=\"menu_order\" selected=\"selected\">Analogue /IP (AN /IP)</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 1</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 2</option>
                            <option value=\"popularity\">Analogue /IP (AN /IP) 3</option>
                        </select>
                        <input type=\"submit\" value=\"OK\">
                    </div>
                  <!------------------------------------ filer End ------------------------------------------->
                  
                    <div class=\"BloxProducts clearfix\">

                      {% for product in products %}
                        <div class=\"BlocProduct\">
                            <div class=\"imgProduct\">
                                <a href=\"details-produit/{{product.slug}}\" title=\"{{product.titre}}\">
                                    <img src=\"{{ 'assets/images/product1.jpg'|theme }}\" alt=\"Product\" class=\"img-responsive\" />
                                </a>
                            </div>
                            <div class=\"infoProduct\">
                                <h3><a href=\"#\" title=\"Nibh euismod tincidunt\">{{product.titre}}</a></h3>
                                <div class=\"ExtraitProduct\">
                                    {{product.titre}}
                                </div>
                            </div>
                            <a class=\"LoopProduct\" href=\"details-produit/{{product.slug}}\" title=\"{{product.titre}}\"></a>
                          </div>
                        {% endfor %}






                    </div>
                </article>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/produits-services.htm", "");
    }
}
