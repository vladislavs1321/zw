<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_04a5729c81acb4fb8a117b871ae2a18075fc1d0a363fa615757e9dda10865e24 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val"));
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 188,  594 => 187,  586 => 184,  575 => 180,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 129,  478 => 127,  473 => 110,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  418 => 113,  404 => 87,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 86,  307 => 82,  195 => 54,  392 => 104,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 166,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 55,  236 => 109,  216 => 42,  70 => 29,  170 => 55,  194 => 53,  181 => 80,  161 => 71,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 330,  542 => 321,  538 => 319,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 100,  429 => 255,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  335 => 86,  331 => 187,  326 => 83,  304 => 81,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  186 => 51,  152 => 63,  114 => 50,  104 => 43,  76 => 35,  321 => 91,  318 => 80,  316 => 89,  288 => 81,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  250 => 93,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 58,  110 => 144,  553 => 186,  550 => 326,  548 => 170,  541 => 168,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 140,  443 => 138,  424 => 88,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 132,  386 => 111,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  346 => 102,  342 => 88,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  237 => 64,  184 => 47,  155 => 38,  146 => 47,  126 => 25,  124 => 49,  270 => 4,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  198 => 55,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 46,  167 => 48,  160 => 59,  137 => 59,  90 => 38,  65 => 29,  129 => 56,  97 => 69,  84 => 36,  77 => 33,  358 => 106,  351 => 121,  347 => 134,  343 => 132,  338 => 130,  327 => 118,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 83,  225 => 58,  213 => 126,  211 => 81,  202 => 68,  197 => 54,  174 => 47,  165 => 52,  148 => 35,  134 => 59,  127 => 32,  113 => 42,  53 => 27,  34 => 16,  23 => 12,  100 => 70,  81 => 20,  58 => 22,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 99,  177 => 48,  169 => 74,  140 => 53,  132 => 57,  128 => 152,  107 => 143,  61 => 29,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 46,  224 => 60,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 107,  159 => 39,  143 => 26,  135 => 45,  119 => 148,  102 => 79,  71 => 27,  67 => 32,  63 => 20,  59 => 27,  87 => 28,  21 => 11,  38 => 21,  31 => 15,  26 => 14,  25 => 12,  28 => 14,  94 => 40,  89 => 34,  85 => 36,  75 => 31,  68 => 24,  56 => 28,  24 => 12,  201 => 56,  196 => 65,  183 => 50,  171 => 102,  166 => 100,  163 => 60,  158 => 75,  156 => 68,  151 => 36,  142 => 61,  138 => 46,  136 => 155,  121 => 51,  117 => 49,  105 => 80,  91 => 39,  62 => 28,  49 => 28,  19 => 11,  93 => 39,  88 => 37,  78 => 21,  46 => 22,  44 => 21,  27 => 14,  79 => 30,  72 => 19,  69 => 26,  47 => 19,  40 => 24,  37 => 24,  22 => 11,  246 => 66,  157 => 58,  145 => 53,  139 => 51,  131 => 153,  123 => 52,  120 => 48,  115 => 47,  111 => 41,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 28,  66 => 17,  55 => 21,  52 => 23,  50 => 21,  43 => 25,  41 => 20,  35 => 20,  32 => 19,  29 => 15,  209 => 96,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 44,  164 => 72,  162 => 40,  154 => 67,  149 => 62,  147 => 69,  144 => 33,  141 => 67,  133 => 154,  130 => 57,  125 => 46,  122 => 149,  116 => 147,  112 => 145,  109 => 45,  106 => 45,  103 => 38,  99 => 41,  95 => 35,  92 => 28,  86 => 25,  82 => 23,  80 => 31,  73 => 34,  64 => 24,  60 => 15,  57 => 18,  54 => 22,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  39 => 17,  36 => 16,  33 => 15,  30 => 13,);
    }
}
