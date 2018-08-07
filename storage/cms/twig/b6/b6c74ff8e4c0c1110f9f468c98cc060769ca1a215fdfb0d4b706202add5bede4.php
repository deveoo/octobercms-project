<?php

/* C:\xampp\htdocs\nasp/themes/nasp/layouts/interne.htm */
class __TwigTemplate_a464af21580f1cc66ec1f81b5d4f482e4120dd6e76851a108f675fb5015dc5f0 extends Twig_Template
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
<html>
    <head>
\t<META content=\"IE=10.000\" http-equiv=\"X-UA-Compatible\">
        <META charset=\"UTF-8\">
        <title> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <!-- ========================  CSS Files  ========================== -->
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/search.css");
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.transitions.css");
        echo "\">
        <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/youtube-video-gallery.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-ui.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.css");
        echo "\" rel=\"stylesheet\">


        ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 28
        echo "    </head>
    <body>
\t\t\t";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        </header>

        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/breadcrumb"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
        <section id=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<h1>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</h1>
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>



        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "        </footer>

        <!-- Scripts
        <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>-->

        <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/uisearch.js");
        echo "\"></script>
        <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/classie-search.js");
        echo "\"></script>
        <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/fontawesome-all.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.youtubevideogallery.js");
        echo "\"></script>
        <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.js");
        echo "\"></script>
        <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.slicknav.js");
        echo "\"></script>
        <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.js");
        echo "\"></script>

        <script>
            \$(document).ready(function () {
                \$('#mainNav').slicknav();
            });
        </script>
            <script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
\t\t<script>
\t\t\t\$(document).ready(function () {
\t\t\t\tvar owl = \$(\"#owl-evenements\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : true,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-banniere1 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside1 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside2 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside3 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-partenaires\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 2],
\t\t\t\t  [700, 3],
\t\t\t\t  [1000, 4],
\t\t\t\t  [1200, 5],
\t\t\t\t  [1400, 6],
\t\t\t\t  [1600, 6]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-products\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 2],
\t\t\t\t  [1000, 2],
\t\t\t\t  [1200, 2],
\t\t\t\t  [1400, 2],
\t\t\t\t  [1600, 2]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-disponile\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 2],
\t\t\t\t  [1000, 3],
\t\t\t\t  [1200, 3],
\t\t\t\t  [1400, 4],
\t\t\t\t  [1600, 4]
\t\t\t\t   ],
\t\t\t\t   navigation : true,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t</script>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"ul.youtube-video-gallery\").youtubeVideoGallery(  );
\t\t\t});
\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\$(\"<span class='pictoVideo'></span>\").insertBefore(\"ul.youtube-video-gallery li a span.youtube-videogallery-title\");

\t\t\t});
\t\t</script>
\t\t<script>
\t\t\t jQuery(document).ready(function(\$){
\t\t\t// browser window scroll (in pixels) after which the \"back to top\" link is shown
\t\t\tvar offset = 300,
\t\t\t\t//browser window scroll (in pixels) after which the \"back to top\" link opacity is reduced
\t\t\t\toffset_opacity = 1200,
\t\t\t\t//duration of the top scrolling animation (in ms)
\t\t\t\tscroll_top_duration = 700,
\t\t\t\t//grab the \"back to top\" link
\t\t\t\t\$back_to_top = \$('.cd-top');

\t\t\t//hide or show the \"back to top\" link
\t\t\t\$(window).scroll(function(){
\t\t\t\t( \$(this).scrollTop() > offset ) ? \$back_to_top.addClass('cd-is-visible') : \$back_to_top.removeClass('cd-is-visible cd-fade-out');
\t\t\t\tif( \$(this).scrollTop() > offset_opacity ) {
\t\t\t\t\t\$back_to_top.addClass('cd-fade-out');
\t\t\t\t}
\t\t\t});

\t\t\t//smooth scroll to top
\t\t\t\$back_to_top.on('click', function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('body,html').animate({
\t\t\t\t\tscrollTop: 0 ,
\t\t\t\t\t}, scroll_top_duration
\t\t\t\t);
\t\t\t});

\t\t});
\t\t</script>
\t\t<script>
\t\t\t\$( function() {
\t\t\t\$( \"#tabs\" ).tabs();
\t\t\t} );
\t\t</script>
\t\t<script>
\t\t\tjQuery(\"document\").ready(function(\$){
\t\t\t\tvar nav = \$('header');
\t\t\t\t\$(window).scroll(function () {
\t\t\t\t\tif (\$(this).scrollTop() > 0) {
\t\t\t\t\t\tnav.addClass(\"f-nav\");
\t\t\t\t\t} else {
\t\t\t\t\t\tnav.removeClass(\"f-nav\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>

        ";
        // line 325
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 326
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 327
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/layouts/interne.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 327,  467 => 326,  460 => 325,  202 => 70,  198 => 69,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  166 => 61,  161 => 59,  157 => 58,  153 => 57,  148 => 54,  144 => 53,  133 => 44,  131 => 43,  127 => 42,  120 => 37,  116 => 36,  112 => 34,  108 => 33,  104 => 31,  100 => 30,  96 => 28,  93 => 27,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
\t<META content=\"IE=10.000\" http-equiv=\"X-UA-Compatible\">
        <META charset=\"UTF-8\">
        <title> {{ this.page.meta_title }}</title>
        <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.ico' |theme }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <!-- ========================  CSS Files  ========================== -->
        <link href=\"{{ 'assets/css/bootstrap.css' |theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/style.css' |theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/search.css' |theme }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css' |theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css' |theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.css' |theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.transitions.css' |theme }}\">
        <link href=\"{{ 'assets/css/youtube-video-gallery.css' |theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/jquery-ui.css' |theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/slicknav.css' |theme }}\" rel=\"stylesheet\">


        {% styles %}
    </head>
    <body>
\t\t\t{% component 'session' %}
        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        {% partial 'site/breadcrumb' %}

        <section id=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<h1>{{ this.page.title|_ }}</h1>
\t\t\t\t\t\t{% page %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>



        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>-->

        <script src=\"{{ 'assets/js/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/uisearch.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/classie-search.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/fontawesome-all.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.youtubevideogallery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery-ui.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.slicknav.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.inview.js'|theme }}\"></script>

        <script>
            \$(document).ready(function () {
                \$('#mainNav').slicknav();
            });
        </script>
            <script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
\t\t<script>
\t\t\t\$(document).ready(function () {
\t\t\t\tvar owl = \$(\"#owl-evenements\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : true,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-banniere1 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside1 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside2 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-BanniereAside3 \");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 1],
\t\t\t\t  [1000, 1],
\t\t\t\t  [1200, 1],
\t\t\t\t  [1400, 1],
\t\t\t\t  [1600, 1]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-partenaires\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 2],
\t\t\t\t  [700, 3],
\t\t\t\t  [1000, 4],
\t\t\t\t  [1200, 5],
\t\t\t\t  [1400, 6],
\t\t\t\t  [1600, 6]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-products\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 2],
\t\t\t\t  [1000, 2],
\t\t\t\t  [1200, 2],
\t\t\t\t  [1400, 2],
\t\t\t\t  [1600, 2]
\t\t\t\t   ],
\t\t\t\t   navigation : false,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});

\t\t\t\tvar owl = \$(\"#owl-disponile\");
\t\t\t\towl.owlCarousel({

\t\t\t\t   itemsCustom : [
\t\t\t\t  [0, 1],
\t\t\t\t  [450, 1],
\t\t\t\t  [600, 1],
\t\t\t\t  [700, 2],
\t\t\t\t  [1000, 3],
\t\t\t\t  [1200, 3],
\t\t\t\t  [1400, 4],
\t\t\t\t  [1600, 4]
\t\t\t\t   ],
\t\t\t\t   navigation : true,
\t\t\t\t   pagination : false,
\t\t\t\t   autoPlay: true,
\t\t\t\t   slideSpeed: 500,
\t\t\t\t   autoplayTimeout:4000,
\t\t\t\t   autoplayHoverPause:true,
\t\t\t\t   paginationSpeed : 800,
\t\t\t\t   margin: 20,
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t</script>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"ul.youtube-video-gallery\").youtubeVideoGallery(  );
\t\t\t});
\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\$(\"<span class='pictoVideo'></span>\").insertBefore(\"ul.youtube-video-gallery li a span.youtube-videogallery-title\");

\t\t\t});
\t\t</script>
\t\t<script>
\t\t\t jQuery(document).ready(function(\$){
\t\t\t// browser window scroll (in pixels) after which the \"back to top\" link is shown
\t\t\tvar offset = 300,
\t\t\t\t//browser window scroll (in pixels) after which the \"back to top\" link opacity is reduced
\t\t\t\toffset_opacity = 1200,
\t\t\t\t//duration of the top scrolling animation (in ms)
\t\t\t\tscroll_top_duration = 700,
\t\t\t\t//grab the \"back to top\" link
\t\t\t\t\$back_to_top = \$('.cd-top');

\t\t\t//hide or show the \"back to top\" link
\t\t\t\$(window).scroll(function(){
\t\t\t\t( \$(this).scrollTop() > offset ) ? \$back_to_top.addClass('cd-is-visible') : \$back_to_top.removeClass('cd-is-visible cd-fade-out');
\t\t\t\tif( \$(this).scrollTop() > offset_opacity ) {
\t\t\t\t\t\$back_to_top.addClass('cd-fade-out');
\t\t\t\t}
\t\t\t});

\t\t\t//smooth scroll to top
\t\t\t\$back_to_top.on('click', function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('body,html').animate({
\t\t\t\t\tscrollTop: 0 ,
\t\t\t\t\t}, scroll_top_duration
\t\t\t\t);
\t\t\t});

\t\t});
\t\t</script>
\t\t<script>
\t\t\t\$( function() {
\t\t\t\$( \"#tabs\" ).tabs();
\t\t\t} );
\t\t</script>
\t\t<script>
\t\t\tjQuery(\"document\").ready(function(\$){
\t\t\t\tvar nav = \$('header');
\t\t\t\t\$(window).scroll(function () {
\t\t\t\t\tif (\$(this).scrollTop() > 0) {
\t\t\t\t\t\tnav.addClass(\"f-nav\");
\t\t\t\t\t} else {
\t\t\t\t\t\tnav.removeClass(\"f-nav\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\nasp/themes/nasp/layouts/interne.htm", "");
    }
}
