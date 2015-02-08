<?php

/* includes/footer.twig */
class __TwigTemplate_5cfb1d8cecb92a0915a404c321c3e225a7f46611ac317f796f2cb4db46ce243b extends Twig_Template
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
