<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/evenements.htm */
class __TwigTemplate_7cc4cd5fc434726efa73764012365a662ce50145f4b08be145c7ec64297efe9b extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/breadcrumb"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<section id=\"main\">
&nbsp;
</section>

<div class=\"AllEvenement\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"ContEven\">
                <!-- # blog begin # -->
                  ";
        // line 12
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", array());
        // line 13
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "                      <div class=\"OneEven\">
                          <div class=\"ImgOneEven\">
                              <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\" title=\"Evenement\">
                                  ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"Evènements\" class=\"img-responsive\" />
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                              </a>
                          </div>
                          <div class=\"DescOneEven\">
                              <h3 class=\"TitleOneEven\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                              <div class=\"ExtOnEven\">
                                  ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", array()), "html", null, true);
            echo "
                              </div>
                          </div>
                      </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                </div>
                <!--<a href=\"#\" title=\"Voir plus\" class=\"PlusEvent\">Voir plus</a>-->
            </div>
        </div>
    </div>
</div>

<!--
<section id=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <a href=\"\" title=\"\">Accueil</a> > <span>Titre evenement</span>
            </div>
        </div>
    </div>
</section>
<section id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <article class=\"clearfix\">
                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img.jpg");
        echo "\" alt=\"Evènements\" class=\"img-responsive alignleft\" />
                    <h1>Titre de l’evenement</h1>
                    <h2>Responsive Business and Proin dictum elemntum?</h2>
                    Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Aliquam erat volutpat. Vivamus et dapibus lacus. Suspendisse eget augue eleifend, sodales lectus sit amet, adipiscing ante. <br><br>

                    Nulla mattis, magna ac pellentesque condimentum, elit urna pulvinar magna, nec iaculis neque augue vel nisl hn odio diam, aliquam eget venenatis quis, iaculis ut lectus. Quisque feugiat suscipit ante, eget pharetra nisi volutpat  neque augue vel nisln <br><br>
                    <a href=\"#\" title=\"En savoir plus\" class=\"savoirEven\">En savoir plus</a>
                </article>
            </div>
        </div>
    </div>
</section>
<div class=\"AllEvenement\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"ContEven\">
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/even1.jpg");
        echo "\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/even2.jpg");
        echo "\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/even3.jpg");
        echo "\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/even4.jpg");
        echo "\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"#\" title=\"Voir plus\" class=\"PlusEvent\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/evenements.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 106,  168 => 95,  154 => 84,  140 => 73,  118 => 54,  93 => 31,  81 => 25,  72 => 23,  67 => 20,  58 => 18,  54 => 17,  50 => 16,  46 => 14,  41 => 13,  39 => 12,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/breadcrumb' %}
<section id=\"main\">
&nbsp;
</section>

<div class=\"AllEvenement\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"ContEven\">
                <!-- # blog begin # -->
                  {% set posts = blogPosts.posts %}
                    {% for post in posts %}
                      <div class=\"OneEven\">
                          <div class=\"ImgOneEven\">
                              <a href=\"{{ post.url }}\" title=\"Evenement\">
                                  {% for image in post.featured_images %}
                                    <img src=\"{{ image.path }}\" alt=\"Evènements\" class=\"img-responsive\" />
                                  {% endfor %}
                              </a>
                          </div>
                          <div class=\"DescOneEven\">
                              <h3 class=\"TitleOneEven\"><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}</a></h3>
                              <div class=\"ExtOnEven\">
                                  {{ post.excerpt }}
                              </div>
                          </div>
                      </div>

                    {% endfor %}

                </div>
                <!--<a href=\"#\" title=\"Voir plus\" class=\"PlusEvent\">Voir plus</a>-->
            </div>
        </div>
    </div>
</div>

<!--
<section id=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <a href=\"\" title=\"\">Accueil</a> > <span>Titre evenement</span>
            </div>
        </div>
    </div>
</section>
<section id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <article class=\"clearfix\">
                    <img src=\"{{ 'assets/images/img.jpg'|theme }}\" alt=\"Evènements\" class=\"img-responsive alignleft\" />
                    <h1>Titre de l’evenement</h1>
                    <h2>Responsive Business and Proin dictum elemntum?</h2>
                    Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Aliquam erat volutpat. Vivamus et dapibus lacus. Suspendisse eget augue eleifend, sodales lectus sit amet, adipiscing ante. <br><br>

                    Nulla mattis, magna ac pellentesque condimentum, elit urna pulvinar magna, nec iaculis neque augue vel nisl hn odio diam, aliquam eget venenatis quis, iaculis ut lectus. Quisque feugiat suscipit ante, eget pharetra nisi volutpat  neque augue vel nisln <br><br>
                    <a href=\"#\" title=\"En savoir plus\" class=\"savoirEven\">En savoir plus</a>
                </article>
            </div>
        </div>
    </div>
</section>
<div class=\"AllEvenement\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"ContEven\">
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"{{ 'assets/images/even1.jpg'|theme }}\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"{{ 'assets/images/even2.jpg'|theme }}\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"{{ 'assets/images/even3.jpg'|theme }}\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                    <div class=\"OneEven\">
                        <div class=\"ImgOneEven\">
                            <a href=\"#\" title=\"Evenement\"><img src=\"{{ 'assets/images/even4.jpg'|theme }}\" alt=\"Evènements\" class=\"img-responsive\" /></a>
                        </div>
                        <div class=\"DescOneEven\">
                            <h3 class=\"TitleOneEven\"><a href=\"#\" title=\"Titre de l’evenement\">Titre de l’evenement</a></h3>
                            <div class=\"ExtOnEven\">
                                Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"#\" title=\"Voir plus\" class=\"PlusEvent\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
-->", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/evenements.htm", "");
    }
}
