<?php

/* includes/header.twig */
class __TwigTemplate_e663b9d04482b2ef1ad4903bb20d83c4205e1f2b4e6d207392bc24deeee4ce8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"banner navbar navbar-default navbar-static-top\" role=\"banner\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "home_url", array(), "method");
        echo "\">";
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bloginfo", array(0 => "name"), "method");
        echo "</a>
    </div>

    <nav class=\"collapse navbar-collapse\" role=\"navigation\">
        ";
        // line 14
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "has_nav_menu", array(0 => "primary_navigation"), "method")) {
            // line 15
            echo "            <div class=\"collapse navbar-collapse\">
                ";
            // line 16
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_nav_menu", array(0 => array("theme_location" => "primary_navigation", "menu_class" => "nav navbar-nav", "walker" => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "returnObject", array(0 => "wp_bootstrap_navwalker"), "method"), "container" => false, "depth" => 2, "fallback_cb" => "wp_bootstrap_navwalker::fallback")), "method");
            // line 23
            echo "
                <form id=\"searchform\" class=\"navbar-form navbar-right\" role=\"search\" action=\"";
            // line 24
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "site_url", array(), "method");
            echo "\" method=\"get\">
                    <div class=\"form-group\">
                        <input id=\"s\" name=\"s\" type=\"text\" class=\"form-control\" placeholder=\"\" value=\"";
            // line 26
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_search_query", array(), "method");
            echo "\">
                    </div>
                    <button id=\"searchsubmit\" type=\"submit\" class=\"btn btn-default\">Search</button>
                </form>
            </div>
        ";
        }
        // line 32
        echo "    </nav>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "includes/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 32,  54 => 26,  49 => 24,  46 => 23,  44 => 16,  41 => 15,  39 => 14,  30 => 10,  19 => 1,);
    }
}
