<?php

/* StaticBundle:Default:about.html.twig */
class __TwigTemplate_cffac68ebd750d68a665721ffafaba6bb866569491fb9a12cc9ea00936bcdf56 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
        echo "</h1>
<hr>
<div style=\"text-align: justify; padding: 10px 50px;\">
    <br />
    <p style=\"font-size: 120%;\">
        <b>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dobrodošli na naši spletni strani", array(), "messages");
        echo "</b></p>
    
    <p class=\"about\">
        ";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Smo podjetje, ki se ukvarja z grafičnimi storitvami.", array(), "messages");
        // line 15
        echo "    </p>   
    <p class=\"about\">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis orci metus, eu tincidunt lorem bibendum sed. Duis augue metus, tincidunt sit amet cursus vel, dignissim ut massa. Etiam facilisis nisl et rutrum fermentum. Curabitur vitae sapien porttitor, faucibus nibh ac, dapibus nisi. Praesent imperdiet massa rutrum lacus sollicitudin, sed tempor neque rutrum. Nulla sem eros, consectetur ac mi at, imperdiet scelerisque mauris. Proin iaculis ut augue vel vestibulum. Sed consectetur felis orci, ut interdum risus ultricies ac. Aliquam ac felis semper eros fermentum fringilla ac quis quam. Aliquam volutpat augue urna.
    </p>
    <p class=\"about\">
        ";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Za vse informacije nas lahko kontaktirate preko telefona ali elektronske pošte. V najkrajšem možnem času Vas bomo kontaktirali in Vam posredovali željene informacije.", array(), "messages");
        // line 21
        echo "    </p>
    <br />
    <p><b>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zahvaljujemo se Vam za obisk naše spletne strani.", array(), "messages");
        echo "</b></p>
</div>
    <p>&nbsp;</p>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  64 => 21,  62 => 20,  55 => 15,  53 => 14,  47 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
