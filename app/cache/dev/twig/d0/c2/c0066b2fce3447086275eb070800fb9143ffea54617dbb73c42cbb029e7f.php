<?php

/* ::base.html.twig */
class __TwigTemplate_d0c2c0066b2fce3447086275eb070800fb9143ffea54617dbb73c42cbb029e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  662 => 125,  614 => 111,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  512 => 84,  503 => 81,  493 => 78,  490 => 77,  433 => 60,  426 => 58,  405 => 49,  390 => 43,  311 => 14,  245 => 335,  345 => 147,  340 => 145,  328 => 139,  290 => 5,  259 => 103,  672 => 345,  664 => 342,  640 => 119,  631 => 327,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 85,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 59,  412 => 222,  410 => 221,  376 => 205,  295 => 178,  363 => 32,  190 => 76,  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  549 => 411,  532 => 410,  449 => 198,  446 => 197,  441 => 196,  380 => 158,  373 => 156,  226 => 84,  207 => 269,  353 => 149,  857 => 210,  854 => 273,  849 => 206,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 183,  794 => 248,  791 => 247,  785 => 178,  783 => 177,  780 => 176,  774 => 241,  772 => 172,  769 => 171,  766 => 238,  762 => 221,  757 => 218,  751 => 163,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  698 => 471,  677 => 465,  675 => 132,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 337,  644 => 335,  642 => 238,  638 => 118,  635 => 117,  629 => 326,  626 => 325,  624 => 231,  619 => 113,  613 => 320,  608 => 223,  603 => 194,  596 => 106,  588 => 308,  584 => 174,  569 => 300,  566 => 167,  563 => 298,  521 => 154,  501 => 80,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 72,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  378 => 157,  367 => 155,  357 => 123,  350 => 26,  330 => 105,  297 => 179,  598 => 107,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 291,  529 => 92,  524 => 90,  517 => 404,  485 => 143,  478 => 74,  473 => 254,  458 => 107,  451 => 134,  447 => 102,  442 => 62,  418 => 224,  404 => 126,  401 => 172,  394 => 168,  382 => 127,  334 => 141,  320 => 127,  317 => 185,  307 => 128,  195 => 54,  392 => 120,  389 => 160,  377 => 37,  349 => 90,  332 => 20,  324 => 113,  287 => 68,  282 => 66,  276 => 395,  234 => 48,  231 => 83,  218 => 59,  12 => 34,  710 => 149,  704 => 203,  701 => 202,  699 => 142,  693 => 205,  683 => 135,  666 => 126,  660 => 340,  652 => 193,  649 => 122,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 317,  593 => 105,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 284,  530 => 168,  527 => 91,  522 => 279,  507 => 157,  495 => 138,  477 => 127,  470 => 73,  464 => 71,  459 => 69,  450 => 64,  425 => 175,  411 => 129,  406 => 123,  400 => 47,  397 => 213,  395 => 118,  385 => 41,  371 => 35,  352 => 123,  344 => 24,  339 => 100,  336 => 99,  333 => 98,  329 => 188,  266 => 366,  244 => 65,  205 => 108,  200 => 72,  188 => 102,  178 => 59,  118 => 49,  306 => 107,  303 => 106,  300 => 180,  286 => 112,  280 => 131,  274 => 110,  263 => 365,  236 => 109,  216 => 79,  70 => 19,  170 => 56,  194 => 248,  181 => 232,  161 => 202,  694 => 138,  685 => 406,  680 => 134,  678 => 133,  668 => 344,  663 => 199,  658 => 124,  654 => 123,  647 => 336,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 319,  599 => 192,  592 => 351,  585 => 307,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  557 => 96,  542 => 321,  538 => 319,  526 => 310,  518 => 153,  514 => 152,  509 => 83,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  439 => 195,  429 => 188,  422 => 226,  420 => 127,  415 => 180,  396 => 141,  383 => 207,  366 => 33,  361 => 152,  335 => 21,  331 => 140,  326 => 138,  304 => 181,  291 => 102,  272 => 158,  267 => 101,  242 => 59,  186 => 239,  152 => 46,  114 => 111,  104 => 90,  76 => 31,  321 => 135,  318 => 111,  316 => 16,  288 => 4,  284 => 72,  279 => 70,  275 => 105,  256 => 96,  250 => 341,  232 => 88,  222 => 297,  215 => 280,  191 => 246,  153 => 77,  150 => 55,  110 => 38,  553 => 162,  550 => 94,  548 => 292,  541 => 290,  537 => 178,  531 => 283,  525 => 280,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 268,  496 => 79,  489 => 262,  483 => 258,  479 => 256,  475 => 152,  462 => 202,  448 => 240,  443 => 132,  424 => 88,  421 => 126,  414 => 52,  408 => 50,  403 => 48,  399 => 124,  391 => 117,  388 => 42,  386 => 159,  375 => 106,  372 => 105,  354 => 92,  348 => 140,  346 => 102,  342 => 23,  325 => 129,  313 => 15,  310 => 80,  308 => 13,  302 => 125,  296 => 121,  292 => 135,  255 => 353,  237 => 64,  184 => 233,  155 => 47,  146 => 181,  126 => 147,  124 => 132,  270 => 102,  253 => 342,  233 => 304,  212 => 279,  210 => 270,  206 => 58,  198 => 35,  192 => 53,  185 => 74,  180 => 49,  175 => 58,  172 => 57,  167 => 48,  160 => 59,  137 => 59,  90 => 27,  65 => 17,  129 => 148,  97 => 39,  84 => 41,  77 => 20,  358 => 151,  351 => 192,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  301 => 80,  299 => 8,  293 => 6,  289 => 113,  281 => 411,  277 => 78,  271 => 374,  265 => 105,  262 => 98,  260 => 363,  257 => 149,  251 => 67,  248 => 336,  239 => 97,  228 => 52,  225 => 298,  213 => 78,  211 => 81,  202 => 266,  197 => 249,  174 => 217,  165 => 83,  148 => 35,  134 => 161,  127 => 35,  113 => 48,  53 => 5,  34 => 5,  100 => 39,  81 => 40,  58 => 15,  20 => 1,  23 => 1,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 61,  435 => 258,  430 => 130,  427 => 89,  423 => 57,  413 => 130,  409 => 98,  407 => 127,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 118,  379 => 126,  374 => 36,  368 => 34,  365 => 197,  362 => 178,  360 => 126,  355 => 27,  341 => 189,  337 => 22,  322 => 101,  314 => 85,  312 => 130,  309 => 129,  305 => 74,  298 => 120,  294 => 83,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 2,  258 => 354,  252 => 70,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 99,  177 => 48,  169 => 210,  140 => 58,  132 => 57,  128 => 47,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 67,  219 => 101,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 55,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 18,  59 => 6,  87 => 26,  21 => 2,  38 => 5,  31 => 4,  26 => 3,  25 => 12,  28 => 3,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  24 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 216,  166 => 209,  163 => 53,  158 => 62,  156 => 195,  151 => 188,  142 => 58,  138 => 49,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 11,  27 => 3,  79 => 32,  72 => 18,  69 => 11,  47 => 12,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 52,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 33,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 7,  32 => 5,  29 => 5,  209 => 96,  203 => 73,  199 => 265,  193 => 33,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 176,  141 => 175,  133 => 154,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 38,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 16,  64 => 10,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 10,  45 => 8,  42 => 10,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
