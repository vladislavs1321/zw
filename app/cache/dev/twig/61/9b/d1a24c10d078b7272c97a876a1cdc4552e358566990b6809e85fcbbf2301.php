<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_619bd1a24c10d078b7272c97a876a1cdc4552e358566990b6809e85fcbbf2301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 147,  340 => 145,  328 => 139,  290 => 119,  259 => 103,  672 => 345,  664 => 342,  640 => 334,  631 => 327,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 276,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 230,  412 => 222,  410 => 221,  376 => 205,  295 => 178,  363 => 153,  190 => 76,  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  549 => 411,  532 => 410,  449 => 198,  446 => 197,  441 => 196,  380 => 158,  373 => 156,  226 => 84,  207 => 75,  353 => 149,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 489,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  698 => 471,  677 => 465,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 337,  644 => 335,  642 => 238,  638 => 237,  635 => 236,  629 => 326,  626 => 325,  624 => 231,  619 => 228,  613 => 320,  608 => 223,  603 => 194,  596 => 189,  588 => 308,  584 => 174,  569 => 300,  566 => 167,  563 => 298,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  378 => 157,  367 => 155,  357 => 123,  350 => 327,  330 => 105,  297 => 179,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 291,  529 => 409,  524 => 162,  517 => 404,  485 => 143,  478 => 127,  473 => 254,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 224,  404 => 126,  401 => 172,  394 => 168,  382 => 127,  334 => 141,  320 => 127,  317 => 185,  307 => 128,  195 => 54,  392 => 120,  389 => 160,  377 => 99,  349 => 90,  332 => 116,  324 => 113,  287 => 68,  282 => 66,  276 => 111,  234 => 48,  231 => 83,  218 => 59,  12 => 34,  710 => 475,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 340,  652 => 193,  649 => 462,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 317,  593 => 310,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 284,  530 => 168,  527 => 281,  522 => 279,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 246,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 214,  397 => 213,  395 => 118,  385 => 116,  371 => 156,  352 => 123,  344 => 119,  339 => 100,  336 => 99,  333 => 98,  329 => 188,  266 => 66,  244 => 65,  205 => 108,  200 => 72,  188 => 102,  178 => 59,  118 => 49,  306 => 107,  303 => 106,  300 => 180,  286 => 112,  280 => 131,  274 => 110,  263 => 95,  236 => 109,  216 => 79,  70 => 15,  170 => 56,  194 => 68,  181 => 65,  161 => 63,  694 => 470,  685 => 406,  680 => 200,  678 => 202,  668 => 344,  663 => 199,  658 => 190,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 319,  599 => 192,  592 => 351,  585 => 307,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  557 => 295,  542 => 321,  538 => 319,  526 => 310,  518 => 153,  514 => 152,  509 => 272,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 195,  429 => 188,  422 => 226,  420 => 127,  415 => 180,  396 => 141,  383 => 207,  366 => 210,  361 => 152,  335 => 134,  331 => 140,  326 => 138,  304 => 181,  291 => 102,  272 => 158,  267 => 101,  242 => 59,  186 => 51,  152 => 46,  114 => 44,  104 => 32,  76 => 17,  321 => 135,  318 => 111,  316 => 89,  288 => 118,  284 => 72,  279 => 70,  275 => 105,  256 => 96,  250 => 60,  232 => 88,  222 => 83,  215 => 78,  191 => 67,  153 => 77,  150 => 55,  110 => 42,  553 => 162,  550 => 161,  548 => 292,  541 => 290,  537 => 178,  531 => 283,  525 => 280,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 268,  496 => 161,  489 => 262,  483 => 258,  479 => 256,  475 => 152,  462 => 202,  448 => 240,  443 => 132,  424 => 88,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 159,  375 => 106,  372 => 105,  354 => 92,  348 => 140,  346 => 102,  342 => 137,  325 => 129,  313 => 183,  310 => 80,  308 => 287,  302 => 125,  296 => 121,  292 => 135,  255 => 101,  237 => 64,  184 => 63,  155 => 47,  146 => 99,  126 => 48,  124 => 52,  270 => 102,  253 => 100,  233 => 87,  212 => 78,  210 => 77,  206 => 58,  198 => 35,  192 => 53,  185 => 74,  180 => 49,  175 => 58,  172 => 57,  167 => 48,  160 => 59,  137 => 59,  90 => 20,  65 => 22,  129 => 49,  97 => 39,  84 => 40,  77 => 20,  358 => 151,  351 => 192,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  301 => 80,  299 => 72,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 59,  265 => 105,  262 => 98,  260 => 63,  257 => 149,  251 => 67,  248 => 97,  239 => 97,  228 => 52,  225 => 58,  213 => 78,  211 => 81,  202 => 77,  197 => 69,  174 => 65,  165 => 83,  148 => 35,  134 => 39,  127 => 35,  113 => 48,  53 => 11,  34 => 4,  100 => 39,  81 => 30,  58 => 13,  20 => 1,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 197,  362 => 178,  360 => 126,  355 => 150,  341 => 189,  337 => 87,  322 => 101,  314 => 85,  312 => 130,  309 => 129,  305 => 74,  298 => 120,  294 => 83,  285 => 175,  283 => 115,  278 => 98,  268 => 58,  264 => 2,  258 => 94,  252 => 70,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 48,  169 => 69,  140 => 58,  132 => 57,  128 => 47,  107 => 143,  61 => 12,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 65,  238 => 57,  235 => 89,  230 => 61,  227 => 86,  224 => 81,  221 => 67,  219 => 101,  217 => 79,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 55,  119 => 40,  102 => 24,  71 => 13,  67 => 14,  63 => 18,  59 => 17,  87 => 34,  21 => 2,  38 => 6,  31 => 3,  26 => 3,  25 => 12,  28 => 3,  94 => 21,  89 => 35,  85 => 23,  75 => 19,  68 => 20,  56 => 16,  24 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 102,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 58,  138 => 49,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 12,  49 => 14,  19 => 1,  93 => 27,  88 => 28,  78 => 24,  46 => 13,  44 => 9,  27 => 3,  79 => 18,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 47,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 56,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 33,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 62,  147 => 43,  144 => 42,  141 => 73,  133 => 154,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 27,  106 => 51,  103 => 38,  99 => 23,  95 => 39,  92 => 27,  86 => 36,  82 => 25,  80 => 32,  73 => 16,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
