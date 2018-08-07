<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/formateurs-consultants.htm */
class __TwigTemplate_0ddc17c360eacd196e3a79c38e5ada2a0b089b39f5cf92bbeaf65b77ef761f5b extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "
<ul class=\"record-list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "        <li>
            ";
            // line 12
            echo "            ";
            ob_start();
            // line 13
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 14
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 16
            echo "
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null)), "html", null, true);
            echo "

                ";
            // line 19
            if (($context["detailsPage"] ?? null)) {
                // line 20
                echo "                    </a>
                ";
            }
            // line 22
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 23
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>

";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 30
            echo "    <ul class=\"pagination\">
        ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 32
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 37
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 42
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 44
            echo "    </ul>
";
        }
        // line 46
        echo "
<section id=\"mainFormateurs\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-xs-12\">
<article class=\"clearfix\">
<div class=\"Filter\"><span class=\"titleFilter\">Filtrer par</span><select>
<option selected=\"selected\" value=\"menu_order\">Cat&eacute;gorie</option>
<option value=\"popularity\">Cat&eacute;gorie 1</option>
<option value=\"popularity\">Cat&eacute;gorie 2</option>
<option value=\"popularity\">Cat&eacute;gorie 3</option>
</select><select>
<option selected=\"selected\" value=\"menu_order\">Sp&eacute;cialit&eacute;</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 1</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 2</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 3</option>
</select><select>
<option selected=\"selected\" value=\"menu_order\">Pays</option>
<option value=\"popularity\">Pays 1</option>
<option value=\"popularity\">Pays 2</option>
<option value=\"popularity\">Pays 3</option>
</select><input type=\"submit\" value=\"OK\" /></div>
<div class=\"BloxFormateurs clearfix\">
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
</div>
<a class=\"plusFormateurs\" title=\"Voir plus\" href=\"#\">Voir plus</a></article>
</div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/formateurs-consultants.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  142 => 44,  136 => 42,  134 => 41,  131 => 40,  120 => 37,  115 => 36,  111 => 35,  108 => 34,  102 => 32,  100 => 31,  97 => 30,  95 => 29,  91 => 27,  82 => 25,  76 => 23,  73 => 22,  69 => 20,  67 => 19,  62 => 17,  59 => 16,  53 => 14,  50 => 13,  47 => 12,  44 => 10,  39 => 9,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ attribute(record, displayColumn) }}

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

<section id=\"mainFormateurs\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-xs-12\">
<article class=\"clearfix\">
<div class=\"Filter\"><span class=\"titleFilter\">Filtrer par</span><select>
<option selected=\"selected\" value=\"menu_order\">Cat&eacute;gorie</option>
<option value=\"popularity\">Cat&eacute;gorie 1</option>
<option value=\"popularity\">Cat&eacute;gorie 2</option>
<option value=\"popularity\">Cat&eacute;gorie 3</option>
</select><select>
<option selected=\"selected\" value=\"menu_order\">Sp&eacute;cialit&eacute;</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 1</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 2</option>
<option value=\"popularity\">Sp&eacute;cialit&eacute; 3</option>
</select><select>
<option selected=\"selected\" value=\"menu_order\">Pays</option>
<option value=\"popularity\">Pays 1</option>
<option value=\"popularity\">Pays 2</option>
<option value=\"popularity\">Pays 3</option>
</select><input type=\"submit\" value=\"OK\" /></div>
<div class=\"BloxFormateurs clearfix\">
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.Proin suscipit venenatis arcu, ut cursus sapien interdum vitae. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
<div class=\"BlocFormateur\">
<div class=\"imgFormateur\"><a title=\"Formateur\" href=\"#\"> <img src=\"/nasp/storage/app/media/nom-formateur.png\" alt=\"Formateur\" /> </a></div>
<div class=\"infoFormateur\">
<h3><a title=\"Nom du formateur\" href=\"#\">Nom du formateur</a></h3>
<div class=\"ExtraitFormateur\">Praesent eget ultricies leo. Donec eu aliquam ipsum. Proin suscipit venenatis arcu, ut cursus sapien interdum vitae.</div>
</div>
</div>
</div>
<a class=\"plusFormateurs\" title=\"Voir plus\" href=\"#\">Voir plus</a></article>
</div>
</div>
</div>
</section>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/formateurs-consultants.htm", "");
    }
}
