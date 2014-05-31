<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fa2f45b349ba7b9be768a1c38ab43d2ac1cd2b902aa732a5603ddb1a37bc9fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StaticBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StaticBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <h2 class=\"form-signin-heading\" style=\"margin-top: 80px;\">Prijava</h2>
        <p>
            <span>Uporabnik:</span>
            <input type=\"text\" class=\"input-block-level\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Uporabniško ime", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        </p>
        <p>
            <span>Geslo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type=\"password\" class=\"input-block-level\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Geslo", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        </p>
        
        <label for=\"remember_me\" class=\"checkbox\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Zapomni si me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
        <input class=\"btn btn-large btn-primary\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prijava", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  74 => 24,  67 => 20,  58 => 16,  51 => 12,  46 => 11,  40 => 9,  38 => 8,  35 => 7,  29 => 3,);
    }
}
