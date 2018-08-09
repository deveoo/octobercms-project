<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/user/fournisseur.htm */
class __TwigTemplate_bd3ede5e686ce8b4e58a6d53529ea073c664d9139a3c86b7ae00d5ae5ac70eb1 extends Twig_Template
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
        echo "<h1>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</h1>

<ul class=\"dashboard-menu-vertical\">

  <li>
    <a href=\"dashboard\" title=\"dashborad\">
        <span class=\"dashIco\">
          <i class=\"fa fa-home\"></i>
        </span>
        <span class=\"dashTitle\">
          ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tableau de bord"));
        echo "
        </span>
    </a>
  </li>
    <li>
      <a href=\"#\" title=\"dashborad\">
          <span class=\"dashIco\">
            <i class=\"fa fa-suitcase\"></i>
          </span>
          <span class=\"dashTitle\">
            ";
        // line 21
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
        // line 32
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
        // line 44
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
        // line 55
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
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Déconnexion"));
        echo "
          </span>
      </a>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/user/fournisseur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 67,  93 => 55,  79 => 44,  64 => 32,  50 => 21,  37 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ this.page.title|_ }}</h1>

<ul class=\"dashboard-menu-vertical\">

  <li>
    <a href=\"dashboard\" title=\"dashborad\">
        <span class=\"dashIco\">
          <i class=\"fa fa-home\"></i>
        </span>
        <span class=\"dashTitle\">
          {{'Tableau de bord' |_}}
        </span>
    </a>
  </li>
    <li>
      <a href=\"#\" title=\"dashborad\">
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
</ul>", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/user/fournisseur.htm", "");
    }
}
