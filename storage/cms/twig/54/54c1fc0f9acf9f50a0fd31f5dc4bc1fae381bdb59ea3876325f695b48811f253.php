<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/home.htm */
class __TwigTemplate_544a74b77925cbb2a4f16814070092562f59a71046d87d249c282be4a1609f85 extends Twig_Template
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
        echo "<div class=\"BlocxEvenements\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"BlocEvenements\">
                    <div id=\"owl-evenements\">
                        <!-- Slider begin -->
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bandeaux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bandeau"]) {
            // line 9
            echo "                            <div class=\"item\">
                                <div class=\"Evenement\">
                                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bandeau"], "lien", array()), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bandeau"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"ContEnv\">
                                        <div class=\"TitleEnv\">

                                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bandeau"], "titre", array()), "html", null, true);
            echo "
                                        </div>
                                        <div class=\"DescEnv\">
                                            <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bandeau"], "description", array()), "html", null, true);
            echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bandeau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        <!-- Slider end -->

                    </div>
                </div>
                <div class=\"BlocBanniere1\">
                    <div id=\"owl-banniere1\">
                        <div class=\"item\">
                            <div class=\"Banniere1\">
                                <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-banniere.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                <div class=\"ContBanniere1\">
                                    banniere
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"Banniere1\">
                                <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-banniere.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                <div class=\"ContBanniere1\">
                                    banniere
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"Blocx\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"aside1\">
                    <div class=\"BlocAside\">
                        <ul class=\"youtube-video-gallery\">
                            <li>
                            <a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("interview");
        echo "\" title=\"Interviews\" class=\"interview-side\">
                              <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/interview.png");
        echo "\" alt=\"Interviews\" class=\"img-responsive\">
                              <span>Interviews</span>
                              </a>
                              </li>
                        </ul>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Emploi\">
                            <span class=\"TitleAside\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Emploi"));
        echo "  </span>
                            <div class=\"LinkEmploi clearfix\">
                                <a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("emploi");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres Demploi"));
        echo "\" class=\"Offre OffreEmploi\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres"));
        echo "</a>
                                <a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("candidature-spontannee");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Demande Demploi"));
        echo "\" class=\"Demande DemandeEmploi\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Demande"));
        echo " </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Formateur\">
                            <span class=\"TitleAside\">";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Formateur"));
        echo "  </span>
                            <div class=\"LinkFormateur clearfix\">
                                <a href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("formateurs-consultants");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres formateurs"));
        echo "\" class=\"Offre OffreFormateur\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres"));
        echo "</a>
                                <a href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cv-formateur");
        echo "\" title=\"Demande Formateur\" class=\"Demande DemandeFormateur\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Demande"));
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Consultant\">
                            <span class=\"TitleAside\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Consultant"));
        echo "  </span>
                            <div class=\"LinkConsultant clearfix\">
                                <a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("formateurs-consultants");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres consultants"));
        echo "\" class=\"Offre OffreConsultant\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Offres"));
        echo "</a>
                                <a href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cv-consultant");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Demande consultant"));
        echo "\" class=\"Demande DemandeConsultant\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Demande"));
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-sm-12\">
                <div class=\"ListBlocx\">
                    <div class=\"Opportunites\">
                        <div class=\"TitleOpportunites\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Opportunités d’affaires"));
        echo " </div>
                        <div class=\"TabOpportunites\">
                            <div id=\"tabs\">
                                <ul>
                                    <li><a href=\"#tabs-1\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Algérie"));
        echo "</a></li>
                                    <li><a href=\"#tabs-2\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Maroc"));
        echo "</a></li>
                                    <li><a href=\"#tabs-3\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tunisie"));
        echo "</a></li>
                                </ul>
                                <div class=\"contentTab\" id=\"tabs-1\">
                                    <a href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opportunites-affaire");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Algérie"));
        echo "\">
                                      <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-opportunites.jpg");
        echo "\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                                <div class=\"contentTab\" id=\"tabs-2\">
                                    <a href=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opportunites-affaire");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("maroc"));
        echo "\">
                                      <img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-opportunites1.jpg");
        echo "\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                                <div class=\"contentTab\" id=\"tabs-3\">
                                    <a href=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("opportunites-affaire");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tunisie"));
        echo "\">
                                      <img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-opportunites.jpg");
        echo "\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"Products\">
                            <a href=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("produits-services");
        echo "\" title=\"Produits\" class=\"TitleProduits\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Produits"));
        echo " </a>
                            <div class=\"ContProduits\">
                                <div id=\"owl-products\">
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product1.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product2.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product3.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 171
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product4.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product1.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/product2.jpg");
        echo "\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 BlocxAside2\">
                <div class=\"aside2\">
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside1\">
                            <div id=\"owl-BanniereAside1\">
                                <div class=\"item\">
                                    <div class=\"Banniere2\">
                                        <img src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban2.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere2\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere2\">
                                        <img src=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban2.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere2\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside21\">
                            <div id=\"owl-BanniereAside2\">
                                <div class=\"item\">
                                    <div class=\"Banniere3\">
                                        <img src=\"";
        // line 234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban3.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere3\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere3\">
                                        <img src=\"";
        // line 242
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban3.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere3\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside3\">
                            <div id=\"owl-BanniereAside3\">
                                <div class=\"item\">
                                    <div class=\"Banniere4\">
                                        <img src=\"";
        // line 256
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban4.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere4\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere4\">
                                        <img src=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/img-ban4.jpg");
        echo "\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere4\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 264,  434 => 256,  417 => 242,  406 => 234,  389 => 220,  378 => 212,  354 => 191,  343 => 183,  328 => 171,  317 => 163,  302 => 151,  291 => 143,  279 => 136,  267 => 127,  261 => 126,  251 => 119,  245 => 118,  235 => 111,  229 => 110,  223 => 107,  219 => 106,  215 => 105,  208 => 101,  192 => 92,  184 => 91,  179 => 89,  168 => 83,  160 => 82,  155 => 80,  142 => 74,  134 => 73,  129 => 71,  118 => 63,  114 => 62,  91 => 42,  80 => 34,  70 => 26,  58 => 20,  52 => 17,  44 => 12,  40 => 11,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"BlocxEvenements\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"BlocEvenements\">
                    <div id=\"owl-evenements\">
                        <!-- Slider begin -->
                        {% for bandeau in bandeaux %}
                            <div class=\"item\">
                                <div class=\"Evenement\">
                                    <a href=\"{{ bandeau.lien }}\">
                                        <img src=\"{{ bandeau.image.path }}\" alt=\"NASP\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"ContEnv\">
                                        <div class=\"TitleEnv\">

                                            {{ bandeau.titre }}
                                        </div>
                                        <div class=\"DescEnv\">
                                            <span>{{ bandeau.description }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        <!-- Slider end -->

                    </div>
                </div>
                <div class=\"BlocBanniere1\">
                    <div id=\"owl-banniere1\">
                        <div class=\"item\">
                            <div class=\"Banniere1\">
                                <img src=\"{{ '/assets/images/img-banniere.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                <div class=\"ContBanniere1\">
                                    banniere
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"Banniere1\">
                                <img src=\"{{ '/assets/images/img-banniere.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                <div class=\"ContBanniere1\">
                                    banniere
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"Blocx\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"aside1\">
                    <div class=\"BlocAside\">
                        <ul class=\"youtube-video-gallery\">
                            <li>
                            <a href=\"{{'interview'|page}}\" title=\"Interviews\" class=\"interview-side\">
                              <img src=\"{{ '/assets/images/interview.png'|theme }}\" alt=\"Interviews\" class=\"img-responsive\">
                              <span>Interviews</span>
                              </a>
                              </li>
                        </ul>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Emploi\">
                            <span class=\"TitleAside\">{{ 'Emploi'|_ }}  </span>
                            <div class=\"LinkEmploi clearfix\">
                                <a href=\"{{ 'emploi'|page }}\" title=\"{{ 'Offres Demploi'|_ }}\" class=\"Offre OffreEmploi\"> {{ 'Offres'|_ }}</a>
                                <a href=\"{{ 'candidature-spontannee'|page }}\" title=\"{{ 'Demande Demploi'|_ }}\" class=\"Demande DemandeEmploi\">{{ 'Demande'|_ }} </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Formateur\">
                            <span class=\"TitleAside\">{{ 'Formateur'|_ }}  </span>
                            <div class=\"LinkFormateur clearfix\">
                                <a href=\"{{ 'formateurs-consultants'|page }}\" title=\"{{ 'Offres formateurs'|_ }}\" class=\"Offre OffreFormateur\">{{ 'Offres'|_ }}</a>
                                <a href=\"{{ 'cv-formateur'|page }}\" title=\"Demande Formateur\" class=\"Demande DemandeFormateur\">{{ 'Demande'|_ }}</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"Consultant\">
                            <span class=\"TitleAside\">{{ 'Consultant'|_ }}  </span>
                            <div class=\"LinkConsultant clearfix\">
                                <a href=\"{{ 'formateurs-consultants'|page }}\" title=\"{{ 'Offres consultants'|_ }}\" class=\"Offre OffreConsultant\">{{ 'Offres'|_ }}</a>
                                <a href=\"{{ 'cv-consultant'|page }}\" title=\"{{ 'Demande consultant'|_ }}\" class=\"Demande DemandeConsultant\">{{ 'Demande'|_ }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-sm-12\">
                <div class=\"ListBlocx\">
                    <div class=\"Opportunites\">
                        <div class=\"TitleOpportunites\">{{ 'Opportunités d’affaires'|_ }} </div>
                        <div class=\"TabOpportunites\">
                            <div id=\"tabs\">
                                <ul>
                                    <li><a href=\"#tabs-1\">{{ 'Algérie'|_ }}</a></li>
                                    <li><a href=\"#tabs-2\">{{ 'Maroc'|_ }}</a></li>
                                    <li><a href=\"#tabs-3\">{{ 'Tunisie'|_ }}</a></li>
                                </ul>
                                <div class=\"contentTab\" id=\"tabs-1\">
                                    <a href=\"{{ 'opportunites-affaire'|page }}\" title=\"{{'Algérie'|_}}\">
                                      <img src=\"{{ '/assets/images/img-opportunites.jpg'|theme }}\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                                <div class=\"contentTab\" id=\"tabs-2\">
                                    <a href=\"{{ 'opportunites-affaire'|page }}\" title=\"{{'maroc'|_}}\">
                                      <img src=\"{{ '/assets/images/img-opportunites1.jpg'|theme }}\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                                <div class=\"contentTab\" id=\"tabs-3\">
                                    <a href=\"{{ 'opportunites-affaire'|page }}\" title=\"{{'Tunisie'|_}}\">
                                      <img src=\"{{ '/assets/images/img-opportunites.jpg'|theme }}\" alt=\"Opportunites\" class=\"img-responsive\" />
                                    </a>
                                    <div class=\"DescTab\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diadesem nonummy nibh euismod tincidunt ut laoreet dolore magna al habent claritatem insitam.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"Products\">
                            <a href=\"{{ 'produits-services'|page }}\" title=\"Produits\" class=\"TitleProduits\">{{ 'Produits'|_ }} </a>
                            <div class=\"ContProduits\">
                                <div id=\"owl-products\">
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product1.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product2.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product3.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product4.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"rowProducts\">
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product1.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                            <div class=\"colProduct\">
                                                <a href=\"#\" title=\"Product\">
                                                    <img src=\"{{ '/assets/images/product2.jpg'|theme }}\" alt=\"Product\" />
                                                    <span class=\"TitleProduct\">Nibh euismod tincidunt</span>
                                                </a>
                                                <div class=\"DescProduct\">rem ipsum dolor sit amet, consectetuer kjatdadipdescing elit</div>
                                                <a class=\"LoopProduct\" href=\"#\" title=\"Produit\"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 BlocxAside2\">
                <div class=\"aside2\">
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside1\">
                            <div id=\"owl-BanniereAside1\">
                                <div class=\"item\">
                                    <div class=\"Banniere2\">
                                        <img src=\"{{ '/assets/images/img-ban2.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere2\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere2\">
                                        <img src=\"{{ '/assets/images/img-ban2.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere2\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside21\">
                            <div id=\"owl-BanniereAside2\">
                                <div class=\"item\">
                                    <div class=\"Banniere3\">
                                        <img src=\"{{ '/assets/images/img-ban3.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere3\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere3\">
                                        <img src=\"{{ '/assets/images/img-ban3.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere3\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"BlocAside\">
                        <div class=\"BanniereAside3\">
                            <div id=\"owl-BanniereAside3\">
                                <div class=\"item\">
                                    <div class=\"Banniere4\">
                                        <img src=\"{{ '/assets/images/img-ban4.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere4\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"Banniere4\">
                                        <img src=\"{{ '/assets/images/img-ban4.jpg'|theme }}\" alt=\"NASP\" class=\"img-responsive\" />
                                        <div class=\"ContBanniere4\">
                                            banniere
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/home.htm", "");
    }
}
