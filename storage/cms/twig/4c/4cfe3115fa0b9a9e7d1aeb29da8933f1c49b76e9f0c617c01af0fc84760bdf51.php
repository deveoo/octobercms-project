<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/login.htm */
class __TwigTemplate_94515c90cec2fdcca1b3f34389f62d620d42a94c8313e7df6f8b5c2d3269dd54 extends Twig_Template
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
        echo "<div>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
         <!-- <h2>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Login"));
        echo "&nbsp;</h2>-->
          <div class=\"websiteForm\">
              ";
        // line 7
        if ( !($context["user"] ?? null)) {
            // line 8
            echo "
                    <div class=\"col-md-6\">
                        <div class=\"websiteForm\">
                            <h3>";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("connexion"));
            echo "</h3>
                            ";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/signin"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"websiteForm\">
                            <h3>";
            // line 19
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Inscription"));
            echo "</h3>
                            ";
            // line 20
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/register"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "                        </div>
                    </div>

                ";
        } else {
            // line 25
            echo "
                    ";
            // line 26
            $context["params"] = twig_array_merge(($context["params"] ?? null), array("redirect_uri" => "/tableau-de-bord"));
            // line 27
            echo "
                ";
        }
        // line 29
        echo "

                                    <!--";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
                                    ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
                                    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->

            <!--<form data-request=\"onSend\">
              <ul>
                <li>
                  <input name=\"email\" type=\"email\" value=\"\" placeholder=\"";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\">
                </li>
                <li>
                  <input name=\"password\" type=\"password\" value=\"\" placeholder=\"";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("mot de passe"));
        echo "\">
                </li>
                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\"";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Connexion"));
        echo "\" tabindex=\"9\"></li>
                <li><a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("user-reset-password");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mot de passe oublié?"));
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mot de passe oublié?"));
        echo "</a></li>
            </ul>
          </form>-->
          </div>
        </div>
        <!--<div class=\"col-md-6\">
          <h2>";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Enregistrement"));
        echo "</h2>
          <div class=\"websiteForm\">
            <form data-request=\"onSend\">
              <ul>
                <li>
                  <input name=\"nom\" type=\"text\" value=\"\" placeholder=\"";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & prénom"));
        echo "\">
                </li>

                <li>
                  <input name=\"pays\" type=\"text\" value=\"\" placeholder=\"";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "\">
                </li>

                <li>
                  <input name=\"societe\" type=\"text\" value=\"\" placeholder=\"";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Societé"));
        echo "\">
                </li>

                <li>
                  <input name=\"secteur\" type=\"text\" value=\"\" placeholder=\"";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Secteur d'activité"));
        echo "\">
                </li>

                <h3>";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Paramètres de connexion"));
        echo "</h3>
                <li>
                  <input name=\"email\" type=\"email\" value=\"\" placeholder=\"";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\">
                </li>
                <li>
                  <input name=\"password\" type=\"password\" value=\"\" placeholder=\"";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("mot de passe"));
        echo "\">
                </li>
                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\" ";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Inscription"));
        echo "\" tabindex=\"9\"></li>

            </ul>
          </form>
          </div>
        </div>-->
      </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 79,  182 => 77,  176 => 74,  171 => 72,  165 => 69,  158 => 65,  151 => 61,  144 => 57,  136 => 52,  123 => 46,  119 => 45,  114 => 43,  108 => 40,  98 => 35,  95 => 34,  91 => 33,  88 => 32,  84 => 31,  80 => 29,  76 => 27,  74 => 26,  71 => 25,  65 => 21,  61 => 20,  57 => 19,  49 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
         <!-- <h2>{{ 'Login'|_ }}&nbsp;</h2>-->
          <div class=\"websiteForm\">
              {% if not user %}

                    <div class=\"col-md-6\">
                        <div class=\"websiteForm\">
                            <h3>{{ 'connexion'|_ }}</h3>
                            {% partial 'account/signin' %}

                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"websiteForm\">
                            <h3>{{ 'Inscription'|_ }}</h3>
                            {% partial 'account/register' %}
                        </div>
                    </div>

                {% else %}

                    {% set params = params|merge({'redirect_uri': '/tableau-de-bord'}) %}

                {% endif %}


                                    <!--{% partial account ~ '::activation_check' %}

                                    {% partial account ~ '::update' %}

                                    {% partial account ~ '::deactivate_link' %}-->

            <!--<form data-request=\"onSend\">
              <ul>
                <li>
                  <input name=\"email\" type=\"email\" value=\"\" placeholder=\"{{ 'E-mail'|_ }}\">
                </li>
                <li>
                  <input name=\"password\" type=\"password\" value=\"\" placeholder=\"{{ 'mot de passe'|_ }}\">
                </li>
                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\"{{ 'Connexion'|_ }}\" tabindex=\"9\"></li>
                <li><a href=\"{{'user-reset-password' | page}}\" title=\"{{ 'Mot de passe oublié?'|_ }}\">{{ 'Mot de passe oublié?'|_ }}</a></li>
            </ul>
          </form>-->
          </div>
        </div>
        <!--<div class=\"col-md-6\">
          <h2>{{ 'Enregistrement'|_ }}</h2>
          <div class=\"websiteForm\">
            <form data-request=\"onSend\">
              <ul>
                <li>
                  <input name=\"nom\" type=\"text\" value=\"\" placeholder=\"{{ 'Nom & prénom'|_ }}\">
                </li>

                <li>
                  <input name=\"pays\" type=\"text\" value=\"\" placeholder=\"{{ 'Pays'|_ }}\">
                </li>

                <li>
                  <input name=\"societe\" type=\"text\" value=\"\" placeholder=\"{{ 'Societé'|_ }}\">
                </li>

                <li>
                  <input name=\"secteur\" type=\"text\" value=\"\" placeholder=\"{{ 'Secteur d\\'activité'|_ }}\">
                </li>

                <h3>{{ 'Paramètres de connexion'|_ }}</h3>
                <li>
                  <input name=\"email\" type=\"email\" value=\"\" placeholder=\"{{ 'E-mail'|_ }}\">
                </li>
                <li>
                  <input name=\"password\" type=\"password\" value=\"\" placeholder=\"{{ 'mot de passe'|_ }}\">
                </li>
                <li><input type=\"submit\" id=\"gform_submit_button_1\" class=\"gform_button button\" value=\" {{ 'Inscription'|_ }}\" tabindex=\"9\"></li>

            </ul>
          </form>
          </div>
        </div>-->
      </div>
  </div>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/login.htm", "");
    }
}
