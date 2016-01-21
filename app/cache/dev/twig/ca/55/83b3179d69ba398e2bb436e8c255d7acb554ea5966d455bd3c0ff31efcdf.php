<?php

/* OCPlatformBundle:Default:viewAdverts.html.twig */
class __TwigTemplate_ca5583b3179d69ba398e2bb436e8c255d7acb554ea5966d455bd3c0ff31efcdf extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <title>Liste des annonces</title>

</head>
<body>

    <div style=\"background-color:#f9ecec; margin:auto 10%; padding:2% 2%; max-width:90%  \">
        <h1>LA listes de nos annonces</h1>
            <table border=\"1\">
                <tr>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>Autheur</th>
                    <th>Contenue</th>
                    <th>Date update</th>
                    <th>Le lien de l'image</th>

                </tr>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 22
            echo "                <tr>
                    <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date")), "html", null, true);
            echo " </td>
                    <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title"), "html", null, true);
            echo " </td>
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author"), "html", null, true);
            echo " </td>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content"), "html", null, true);
            echo " </td>
                    <td>  ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "updatedAt")), "html", null, true);
            echo " </td>
                    <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image"), "url"), "html", null, true);
            echo " </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </table>

    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:viewAdverts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  48 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }
}
