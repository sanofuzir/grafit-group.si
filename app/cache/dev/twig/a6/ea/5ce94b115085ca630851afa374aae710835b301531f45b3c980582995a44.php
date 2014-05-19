<?php

/* StaticBundle:Email:email.html.twig */
class __TwigTemplate_a6ea5ce94b115085ca630851afa374aae710835b301531f45b3c980582995a44 extends Twig_Template
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
        echo "<h2>Prejeli ste povpraševanje od osebe ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</h2>

<p><b>Ime:</b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>
<p><b>Priimek:</b>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "surname"), "html", null, true);
        echo "</p>
";
        // line 5
        if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company")))) {
            // line 6
            echo "    <p><b>Podjetje:</b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company"), "html", null, true);
            echo "</p>
";
        }
        // line 8
        echo "<p><b>Telefon:</b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "telephone"), "html", null, true);
        echo "</p>
<p><b>Email:</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</p>
<p><b>Vsebina:</b></p>
<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>

<p><b>Odgovori:</b>&nbsp;
    <a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</a>
</p>";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Email:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 11,  46 => 9,  41 => 8,  35 => 6,  33 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
