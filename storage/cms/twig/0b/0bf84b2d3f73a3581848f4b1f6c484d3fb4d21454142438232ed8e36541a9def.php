<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/site/header.htm */
class __TwigTemplate_d79dd1a7d972bd98454081d4d6b113d94170d844f090538d5efd75d29e5d8501 extends Twig_Template
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
        echo "<div class=\"contSlider\">
    <header>
        <div class=\"tophead\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"logo\">
                            <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"NASP\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"NASP\"/></a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <div class=\"ContRightTop clearfix\">
                                <div class=\"col-sm-12\">
                                    <div class=\"InscripCompte\">
                                        <i class=\"fas fa-user\"></i>
                                        <div class=\"ContInscri\">

                                          ";
        // line 19
        if (($context["user"] ?? null)) {
            // line 20
            echo "                                              <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tableau-de-bord-fournisseur");
            echo "\" title=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Profil"));
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Profil"));
            echo "</a> -
                                            <a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">";
            // line 21
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Déconnexion"));
            echo "</a>
                                          ";
        } else {
            // line 23
            echo "                                            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\" title=\"Login\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Login"));
            echo " </a>  -
                                            <a href=\"";
            // line 24
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\" title=\"Inscription\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Inscription"));
            echo "</a>
                                          ";
        }
        // line 26
        echo "

                                        </div>
                                    </div>
                                    <div class=\"reseaux\">
                                        <a target=\"_blank\" href=\"#\" title=\"Facebook\" class=\"Facebook\" ><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"#\" title=\"Twitter\" class=\"Twitter\" ><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"#\" title=\"Google plus\" class=\"Google\" ><i class=\"fab fa-google-plus-g\"></i></a>
                                    </div>
                                    <div class=\"langSelector\">
                                        <ul>
                                            <!--<li><a href=\"#\" title=\"English\">English</a></li>-->
                                            ";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-sm-12\">
                                    <div id=\"sb-search\" class=\"sb-search\">
                                        <form action=\"\">
                                            <input class=\"sb-search-input\" placeholder=\"Recherche\" type=\"text\" value=\"\" name=\"s\" id=\"search\">
                                            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                            <span class=\"sb-icon-search\"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"BottomHead\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <nav>
                            <ul id=\"mainNav\">
                                <li class=\"";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "\">
                                        ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "
                                    </a>
                                </li>
                                <li class=\"";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "produits-services")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("produits-services");
        echo "\" title=\"Produits et services \">
                                        ";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Produits et services"));
        echo "
                                    </a>
                                </li>
                                <li class=\"";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "fournisseurs")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fournisseurs");
        echo "\" title=\"Fournisseurs\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Fournisseurs"));
        echo "  </a>

                                </li>
                                <li class=\"";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "emploi")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("emploi");
        echo "\" title=\"Emploi\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Emploi"));
        echo "  </a>
                                </li>
                                <li class=\"";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "opportunites-affaire")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opportunites-affaire");
        echo "\" title=\"Opportunite d'affaire\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Opportunité d'affaires"));
        echo "  </a>
                                </li>
                                <li class=\"";
        // line 83
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "formateurs") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "consultants"))) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("formateurs-consultants");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Formateurs et consultants"));
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Formateurs et consultants"));
        echo "  </a>
                                    <!--<ul>
                                      <li><a href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("formateurs");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Formateurs"));
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Formateurs"));
        echo "  </a></li>
                                      <li><a href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("consultants");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Consultants"));
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Consultants"));
        echo "  </a></li>
                                    </ul>-->
                                </li>
                                <li class=\"";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "evenements")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("evenements");
        echo "\" title=\"Evènements\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evénements"));
        echo "  </a>
                                </li>
                                <li class=\"";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "documents-utiles")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("documents-utiles");
        echo "\" title=\"Documents utiles\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Documents utiles"));
        echo "  </a>
                                </li>
                                <li class=\"";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo " active ";
        }
        echo "\">
                                    <a href=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" title=\"Contact\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "  </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 97,  255 => 96,  248 => 94,  242 => 93,  235 => 91,  229 => 90,  219 => 87,  211 => 86,  202 => 84,  196 => 83,  189 => 81,  183 => 80,  176 => 78,  170 => 77,  162 => 74,  156 => 73,  150 => 70,  146 => 69,  140 => 68,  134 => 65,  128 => 64,  122 => 63,  96 => 39,  92 => 38,  78 => 26,  71 => 24,  64 => 23,  59 => 21,  50 => 20,  48 => 19,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"contSlider\">
    <header>
        <div class=\"tophead\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"logo\">
                            <a href=\"{{ 'home'|page }}\" title=\"NASP\"><img src=\"{{ 'assets/images/logo.png' |theme }}\" alt=\"NASP\"/></a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <div class=\"ContRightTop clearfix\">
                                <div class=\"col-sm-12\">
                                    <div class=\"InscripCompte\">
                                        <i class=\"fas fa-user\"></i>
                                        <div class=\"ContInscri\">

                                          {% if user %}
                                              <a href=\"{{'tableau-de-bord-fournisseur'|page}}\" title=\"{{ 'Profil'|_ }}\">{{ 'Profil'|_ }}</a> -
                                            <a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">{{ 'Déconnexion'|_ }}</a>
                                          {% else %}
                                            <a href=\"{{ 'login'|page }}\" title=\"Login\">{{ 'Login'|_ }} </a>  -
                                            <a href=\"{{ 'login'|page }}\" title=\"Inscription\">{{ 'Inscription'|_ }}</a>
                                          {% endif %}


                                        </div>
                                    </div>
                                    <div class=\"reseaux\">
                                        <a target=\"_blank\" href=\"#\" title=\"Facebook\" class=\"Facebook\" ><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"#\" title=\"Twitter\" class=\"Twitter\" ><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"#\" title=\"Google plus\" class=\"Google\" ><i class=\"fab fa-google-plus-g\"></i></a>
                                    </div>
                                    <div class=\"langSelector\">
                                        <ul>
                                            <!--<li><a href=\"#\" title=\"English\">English</a></li>-->
                                            {% component 'localePicker' %}
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-sm-12\">
                                    <div id=\"sb-search\" class=\"sb-search\">
                                        <form action=\"\">
                                            <input class=\"sb-search-input\" placeholder=\"Recherche\" type=\"text\" value=\"\" name=\"s\" id=\"search\">
                                            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                            <span class=\"sb-icon-search\"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"BottomHead\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <nav>
                            <ul id=\"mainNav\">
                                <li class=\"{% if this.page.id == 'home' %} active {% endif %}\">
                                    <a href=\"{{ 'home'|page }}\" title=\"{{ 'Accueil'|_ }}\">
                                        {{ 'Accueil'|_ }}
                                    </a>
                                </li>
                                <li class=\"{% if this.page.id == 'produits-services' %} active {% endif %}\">
                                    <a href=\"{{ 'produits-services'|page }}\" title=\"Produits et services \">
                                        {{ 'Produits et services'|_ }}
                                    </a>
                                </li>
                                <li class=\"{% if this.page.id == 'fournisseurs' %} active {% endif %}\">
                                    <a href=\"{{ 'fournisseurs'|page }}\" title=\"Fournisseurs\">{{ 'Fournisseurs'|_ }}  </a>

                                </li>
                                <li class=\"{% if this.page.id == 'emploi' %} active {% endif %}\">
                                    <a href=\"{{ 'emploi'|page }}\" title=\"Emploi\">{{ 'Emploi'|_ }}  </a>
                                </li>
                                <li class=\"{% if this.page.id == 'opportunites-affaire' %} active {% endif %}\">
                                    <a href=\"{{ 'opportunites-affaire'|page }}\" title=\"Opportunite d'affaire\">{{ 'Opportunité d\\'affaires'|_ }}  </a>
                                </li>
                                <li class=\"{% if this.page.id == 'formateurs' or this.page.id == 'consultants' %} active {% endif %}\">
                                    <a href=\"{{ 'formateurs-consultants'|page }}\" title=\"{{ 'Formateurs et consultants'|_ }}\">{{ 'Formateurs et consultants'|_ }}  </a>
                                    <!--<ul>
                                      <li><a href=\"{{ 'formateurs'|page }}\" title=\"{{ 'Formateurs'|_ }}\">{{ 'Formateurs'|_ }}  </a></li>
                                      <li><a href=\"{{ 'consultants'|page }}\" title=\"{{ 'Consultants'|_ }}\">{{ 'Consultants'|_ }}  </a></li>
                                    </ul>-->
                                </li>
                                <li class=\"{% if this.page.id == 'evenements' %} active {% endif %}\">
                                    <a href=\"{{ 'evenements'|page }}\" title=\"Evènements\">{{ 'Evénements'|_ }}  </a>
                                </li>
                                <li class=\"{% if this.page.id == 'documents-utiles' %} active {% endif %}\">
                                    <a href=\"{{ 'documents-utiles'|page }}\" title=\"Documents utiles\">{{ 'Documents utiles'|_ }}  </a>
                                </li>
                                <li class=\"{% if this.page.id == 'contact' %} active {% endif %}\">
                                    <a href=\"{{ 'contact'|page }}\" title=\"Contact\">{{ 'Contact'|_ }}  </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/site/header.htm", "");
    }
}
