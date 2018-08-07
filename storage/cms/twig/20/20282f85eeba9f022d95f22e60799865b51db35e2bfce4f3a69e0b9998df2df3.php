<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/site/footer.htm */
class __TwigTemplate_f364768de8906b617c93c49fea20bda5a675ef9d86849ef62ed7b544d819263f extends Twig_Template
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
        echo "<div class=\"NosPartenaires\">
    <div class=\"TitlePart\"><span>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nos partenaires"));
        echo "  </span></div>
    <div id=\"owl-partenaires\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 5
            echo "            <div class=\"item\">
                <a title=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nom", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "lien", array()), "html", null, true);
            echo " \">
                    <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partenaire"], "logo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nom", array()), "html", null, true);
            echo "\" class=\"img-responsive\" />
                </a>
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        
    </div>
</div>
<footer>
    <div class=\"TopFooter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <a href=\"#\" title=\"Nasp\"><img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-bottom.png");
        echo "\" alt=\"Nasp\"/></a>
                    <div class=\"DescFooter\">
                        Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.<br> 
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.<br>
                        Typi non habent claritatem insitam...<br><br>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"FormContact\">
                        <span class=\"TitleContact\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contactez-nous"));
        echo " </span>
                        ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                        <!--<form>
                            <ul>
                                <li><input name=\"input_1\" id=\"input_1_1\" type=\"text\" value=\"\" placeholder=\"Nom\" /></li>
                                <li><input name=\"input_2\" id=\"input_1_2\" type=\"text\" value=\"\" placeholder=\"Prénom\" /></li>
                                <li><input name=\"input_3\" id=\"input_1_3\" type=\"text\" value=\"\" placeholder=\"E-mail\" /></li>
                                <li><textarea name=\"input_4\" id=\"input_1_4\"  tabindex=\"8\" placeholder=\"Message\" rows=\"3\" cols=\"50\"></textarea></li>
                                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\"Envoyer\" tabindex=\"9\" /></li>
                            </ul>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"BottomFooter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <a title=\"Top\" href=\"#\" class=\"cd-top\"><img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flesh-top.png");
        echo "\" alt=\"Top\"></a>
                    © 2018  | ";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tous droits réservés"));
        echo "  <a target=\"_blank\" href=\"http://www.digital-communication.tn/\" title=\"Digital Communication\">Digital Communication</a>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  106 => 48,  86 => 30,  82 => 29,  78 => 28,  66 => 19,  56 => 11,  44 => 7,  38 => 6,  35 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"NosPartenaires\">
    <div class=\"TitlePart\"><span>{{ 'Nos partenaires'|_ }}  </span></div>
    <div id=\"owl-partenaires\">
        {% for partenaire in partenaires %}
            <div class=\"item\">
                <a title=\"{{ partenaire.nom }}\" href=\"{{ partenaire.lien }} \">
                    <img src=\"{{ partenaire.logo.path }}\" alt=\"{{ partenaire.nom }}\" class=\"img-responsive\" />
                </a>
            </div>
         {% endfor %}
        
    </div>
</div>
<footer>
    <div class=\"TopFooter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <a href=\"#\" title=\"Nasp\"><img src=\"{{ 'assets/images/logo-bottom.png'|theme }}\" alt=\"Nasp\"/></a>
                    <div class=\"DescFooter\">
                        Lorem ipsum dolor sit amet, consectetuer kjatdadipdescing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet doloLorem ipsum dolor sit amet.<br> 
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.re magna al habent claritatem insitam.<br>
                        Typi non habent claritatem insitam...<br><br>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"FormContact\">
                        <span class=\"TitleContact\">{{ 'Contactez-nous'|_ }} </span>
                        {% component 'contactform' %}
                        <!--<form>
                            <ul>
                                <li><input name=\"input_1\" id=\"input_1_1\" type=\"text\" value=\"\" placeholder=\"Nom\" /></li>
                                <li><input name=\"input_2\" id=\"input_1_2\" type=\"text\" value=\"\" placeholder=\"Prénom\" /></li>
                                <li><input name=\"input_3\" id=\"input_1_3\" type=\"text\" value=\"\" placeholder=\"E-mail\" /></li>
                                <li><textarea name=\"input_4\" id=\"input_1_4\"  tabindex=\"8\" placeholder=\"Message\" rows=\"3\" cols=\"50\"></textarea></li>
                                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\"Envoyer\" tabindex=\"9\" /></li>
                            </ul>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"BottomFooter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <a title=\"Top\" href=\"#\" class=\"cd-top\"><img src=\"{{ 'assets/images/flesh-top.png'|theme }}\" alt=\"Top\"></a>
                    © 2018  | {{ 'Tous droits réservés'|_ }}  <a target=\"_blank\" href=\"http://www.digital-communication.tn/\" title=\"Digital Communication\">Digital Communication</a>
                </div>
            </div>
        </div>
    </div>
</footer>", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/footer.htm", "");
    }
}
