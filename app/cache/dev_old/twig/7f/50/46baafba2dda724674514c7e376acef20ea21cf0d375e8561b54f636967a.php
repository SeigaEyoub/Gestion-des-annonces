<?php

/* OCPlatformBundle:Default:hello.html.twig */
class __TwigTemplate_7f5046baafba2dda724674514c7e376acef20ea21cf0d375e8561b54f636967a extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo " Votre annonce est bien enregistré!!!";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
