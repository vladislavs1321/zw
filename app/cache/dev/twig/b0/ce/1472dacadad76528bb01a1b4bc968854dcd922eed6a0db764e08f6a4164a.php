<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_b0ce1472dacadad76528bb01a1b4bc968854dcd922eed6a0db764e08f6a4164a extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  524 => 90,  515 => 85,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  467 => 72,  461 => 70,  456 => 68,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  366 => 33,  363 => 32,  350 => 26,  313 => 15,  311 => 14,  290 => 5,  285 => 3,  281 => 411,  278 => 410,  273 => 394,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  245 => 335,  243 => 327,  238 => 312,  222 => 297,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  191 => 246,  189 => 240,  181 => 232,  179 => 224,  174 => 217,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  134 => 161,  131 => 160,  129 => 148,  124 => 132,  116 => 116,  114 => 111,  111 => 110,  106 => 104,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  89 => 47,  61 => 2,  710 => 149,  704 => 210,  701 => 209,  699 => 142,  693 => 205,  683 => 135,  678 => 133,  666 => 126,  663 => 199,  660 => 198,  652 => 193,  649 => 122,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 105,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 91,  525 => 166,  522 => 165,  513 => 160,  509 => 83,  507 => 157,  504 => 156,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  480 => 75,  477 => 127,  470 => 73,  464 => 71,  462 => 146,  459 => 69,  453 => 142,  450 => 64,  448 => 140,  443 => 138,  427 => 136,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 47,  397 => 119,  395 => 118,  391 => 117,  385 => 41,  381 => 115,  371 => 35,  358 => 106,  355 => 27,  346 => 102,  344 => 24,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  323 => 92,  321 => 91,  316 => 16,  308 => 13,  304 => 86,  294 => 83,  288 => 4,  283 => 79,  269 => 75,  266 => 366,  251 => 67,  247 => 66,  244 => 65,  235 => 311,  233 => 304,  225 => 298,  220 => 290,  205 => 56,  200 => 55,  194 => 248,  188 => 49,  184 => 233,  178 => 45,  173 => 42,  152 => 38,  149 => 182,  146 => 181,  139 => 169,  121 => 131,  118 => 28,  115 => 27,  107 => 24,  79 => 32,  76 => 31,  64 => 3,  57 => 154,  49 => 111,  44 => 73,  42 => 61,  39 => 60,  37 => 53,  34 => 52,  32 => 13,  29 => 11,  312 => 143,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  280 => 131,  274 => 77,  265 => 126,  260 => 363,  256 => 121,  248 => 336,  242 => 113,  236 => 109,  230 => 303,  219 => 101,  214 => 99,  209 => 96,  197 => 249,  192 => 88,  187 => 87,  185 => 86,  182 => 85,  176 => 223,  170 => 79,  165 => 77,  160 => 76,  158 => 75,  153 => 72,  147 => 69,  144 => 176,  141 => 175,  138 => 61,  136 => 168,  132 => 59,  128 => 58,  123 => 30,  120 => 56,  110 => 25,  104 => 90,  86 => 46,  72 => 198,  54 => 153,  51 => 24,  35 => 16,  392 => 104,  389 => 103,  383 => 101,  377 => 37,  374 => 36,  368 => 34,  365 => 95,  362 => 94,  354 => 92,  352 => 104,  349 => 90,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  309 => 76,  305 => 74,  302 => 73,  299 => 8,  293 => 6,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 395,  271 => 374,  268 => 373,  263 => 365,  246 => 51,  240 => 326,  234 => 48,  231 => 47,  227 => 301,  224 => 103,  218 => 43,  216 => 100,  203 => 93,  186 => 239,  183 => 37,  180 => 36,  175 => 43,  157 => 41,  150 => 27,  143 => 26,  126 => 147,  122 => 23,  119 => 117,  112 => 26,  109 => 105,  105 => 106,  103 => 64,  95 => 20,  93 => 58,  90 => 18,  88 => 36,  85 => 35,  83 => 22,  80 => 41,  74 => 20,  71 => 19,  69 => 13,  66 => 12,  62 => 165,  55 => 12,  52 => 112,  46 => 21,  43 => 20,  41 => 6,  38 => 17,  36 => 4,  30 => 15,  24 => 13,  101 => 89,  98 => 21,  92 => 19,  87 => 17,  84 => 41,  81 => 40,  78 => 40,  75 => 39,  73 => 24,  70 => 33,  67 => 184,  59 => 164,  53 => 16,  50 => 15,  47 => 74,  12 => 34,);
    }
}
