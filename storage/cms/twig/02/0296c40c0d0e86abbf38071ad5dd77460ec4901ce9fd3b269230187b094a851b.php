<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/tableau-de-bord-fournisseur.htm */
class __TwigTemplate_c8707772770f2287da88c37400507bcf1aa6a812f7941c98cf234942e83f058e extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<div class=\"dashboard\">
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <!--  <h2>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Bienvenue dans votre espace professionnel"));
        echo " </h2>-->
          <ul class=\"dashboard-menu\">

              <li>
                <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ma-societe");
        echo "\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-suitcase\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      ";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ma société"));
        echo "
                    </span>
                </a>
              </li>

              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-camera\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      ";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mes produits"));
        echo "
                    </span>
                </a>
              </li>


              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-calendar\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      ";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Abonnements"));
        echo "
                    </span>
                </a>
              </li>

              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-user\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      ";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mon Profil"));
        echo "
                    </span>
                </a>
              </li>


              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      ";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Déconnexion"));
        echo "
                    </span>
                </a>
              </li>
          </ul>
        <div>
      </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/tableau-de-bord-fournisseur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 62,  92 => 50,  78 => 39,  63 => 27,  49 => 16,  41 => 11,  34 => 7,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}

<div class=\"dashboard\">
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <!--  <h2>{{'Bienvenue dans votre espace professionnel' |_}} </h2>-->
          <ul class=\"dashboard-menu\">

              <li>
                <a href=\"{{'ma-societe'|page}}\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-suitcase\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      {{'Ma société' |_}}
                    </span>
                </a>
              </li>

              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-camera\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      {{'Mes produits' |_}}
                    </span>
                </a>
              </li>


              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-calendar\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      {{'Abonnements' |_}}
                    </span>
                </a>
              </li>

              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-user\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      {{'Mon Profil' |_}}
                    </span>
                </a>
              </li>


              <li>
                <a href=\"#\" title=\"dashborad\">
                    <span class=\"dashIco\">
                      <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                    </span>
                    <span class=\"dashTitle\">
                      {{'Déconnexion' |_}}
                    </span>
                </a>
              </li>
          </ul>
        <div>
      </div>
  </div>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/tableau-de-bord-fournisseur.htm", "");
    }
}
