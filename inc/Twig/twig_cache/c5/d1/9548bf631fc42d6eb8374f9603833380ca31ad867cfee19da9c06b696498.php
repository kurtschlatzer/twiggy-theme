<?php

/* includes/footer.twig */
class __TwigTemplate_c5d19548bf631fc42d6eb8374f9603833380ca31ad867cfee19da9c06b696498 extends Twig_Template
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
        echo "<footer class=\"content-info\" role=\"contentinfo\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "sidebar-footer"), "method");
        echo "
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "includes/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
