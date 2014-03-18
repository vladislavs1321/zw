<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_28848a5e9405fbb9a20887fc01d1c951b19570484bafc36b0261bef37ecdd63d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 186,  550 => 185,  548 => 184,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  443 => 137,  424 => 128,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 99,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 81,  255 => 74,  237 => 70,  184 => 64,  155 => 53,  146 => 49,  126 => 42,  124 => 31,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  198 => 66,  192 => 64,  185 => 59,  180 => 62,  175 => 53,  172 => 51,  167 => 48,  160 => 44,  137 => 46,  90 => 20,  65 => 83,  129 => 59,  97 => 47,  84 => 16,  77 => 36,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 113,  289 => 112,  281 => 110,  277 => 78,  271 => 108,  265 => 106,  262 => 105,  260 => 77,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 68,  225 => 87,  213 => 82,  211 => 81,  202 => 68,  197 => 74,  174 => 60,  165 => 47,  148 => 60,  134 => 45,  127 => 32,  113 => 31,  53 => 23,  34 => 16,  100 => 23,  81 => 25,  58 => 23,  20 => 11,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 116,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 87,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 3,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 57,  140 => 55,  132 => 44,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  243 => 83,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 67,  219 => 84,  217 => 75,  208 => 72,  204 => 66,  179 => 69,  159 => 61,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 17,  67 => 27,  63 => 24,  59 => 14,  87 => 33,  21 => 11,  38 => 6,  31 => 15,  26 => 13,  25 => 12,  28 => 14,  94 => 35,  89 => 43,  85 => 25,  75 => 28,  68 => 14,  56 => 23,  24 => 12,  201 => 65,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 63,  142 => 59,  138 => 36,  136 => 56,  121 => 46,  117 => 34,  105 => 27,  91 => 44,  62 => 82,  49 => 20,  19 => 11,  93 => 34,  88 => 6,  78 => 29,  46 => 11,  44 => 19,  27 => 8,  79 => 37,  72 => 10,  69 => 9,  47 => 19,  40 => 13,  37 => 18,  22 => 2,  246 => 99,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 37,  96 => 31,  83 => 25,  74 => 11,  66 => 25,  55 => 22,  52 => 17,  50 => 22,  43 => 18,  41 => 18,  35 => 15,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 40,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 45,  112 => 42,  109 => 40,  106 => 36,  103 => 50,  99 => 26,  95 => 22,  92 => 21,  86 => 17,  82 => 39,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 9,);
    }
}
