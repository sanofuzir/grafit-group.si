<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_c0c8ab40fa8ffbc0c7fdf56d707f11bf0c58f86f595df6600834909610b8ce78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StaticBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-signin\">
    <h2 class=\"form-signin-heading\" style=\"margin-top: 80px;\">User register</h2>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn btn-large btn-primary\"  value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registration", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  76 => 19,  65 => 15,  113 => 33,  83 => 20,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 43,  74 => 30,  77 => 17,  58 => 11,  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 28,  96 => 24,  37 => 7,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 47,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 31,  108 => 36,  102 => 44,  71 => 19,  67 => 17,  63 => 20,  59 => 14,  47 => 8,  38 => 6,  94 => 28,  89 => 24,  85 => 22,  79 => 18,  75 => 20,  68 => 26,  56 => 12,  50 => 11,  29 => 4,  87 => 25,  72 => 19,  55 => 15,  21 => 1,  26 => 6,  98 => 31,  93 => 26,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 4,  43 => 7,  41 => 8,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 61,  166 => 62,  163 => 61,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 39,  123 => 50,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 26,  91 => 24,  69 => 18,  66 => 13,  62 => 12,  49 => 11,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 56,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 42,  92 => 23,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 13,  60 => 13,  57 => 14,  54 => 12,  51 => 11,  48 => 9,  45 => 9,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
