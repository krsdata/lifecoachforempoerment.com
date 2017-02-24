<?php

/* @galleries/view.twig */
class __TwigTemplate_5ac45c2bc1a04408aa53e9cf9162fd4ccba7fd9b151de0f673d5b586e6c5e4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/view.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array()), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            ";
        // line 15
        echo "            ";
        // line 28
        echo "
            <li title=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>

            <li>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>

            <li class=\"separator\">|</li>

            ";
        // line 60
        echo "
            <li>
                <button class=\"button\" data-button=\"remove\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                    ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
                </button>
            </li>

            <li class=\"separator\">|</li>
            <li>
                <input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
            </li>

            <li style=\"float: right\">
                <button class=\"button button-primary\" data-button=\"sortbtn\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    Ok
                </button>
            </li>

            <li id=\"sortToLi\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"float: right;";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "randomly")) {
            echo " display:none; ";
        }
        echo " }}\">
                ";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
                <select name=\"sortto\" style=\"height: 34px;\">
                    <option value=\"asc\" ";
        // line 83
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()) == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
                    <option value=\"desc\" ";
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()) == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
                </select>
            </li>

            <li title=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 93
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    ";
        // line 96
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 97
        echo "                    <option value=\"randomly\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "randomly")) {
            echo "selected";
        }
        echo ">Randomly</option>
                </select>
            </li>

            ";
        // line 118
        echo "        </ul>
    </section>


    <section class=\"supsystic-bar\" id=\"images-gallery-toolbar\" style=\"padding-right: 15px;\">
        <ul class=\"supsystic-bar-controls\">
        ";
        // line 124
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            // line 125
            echo "            <li>
                <select name=\"bulkactions\" style=\"height: 34px;\">
                    ";
            // line 127
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 128
                echo "                        <option value=\"add\">Add Category</option>
                    ";
            }
            // line 130
            echo "                    <option value=\"newcat\">Create New Category</option>
                    ";
            // line 131
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 132
                echo "                        <option value=\"delcat\">Delete Category</option>
                        <option value=\"rencat\">Rename Category</option>
                    ";
            }
            // line 135
            echo "                </select>
            </li>

            <li>
                ";
            // line 139
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 140
                echo "                    <select name=\"catactions\" style=\"height: 34px;\">
                        ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array()));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 142
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                        <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                    </select>
                ";
            }
            // line 147
            echo "                <input type=\"text\" name=\"newTag\" ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
            </li>

            <li>
                <button class=\"button button-primary\" data-button=\"allimagetags\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    ";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                </button>
            </li>

        ";
        }
        // line 158
        echo "        </ul>
    </section>


";
    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        // line 165
        echo "    ";
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/view.twig", 165);
        // line 166
        echo "
    ";
        // line 167
        if (( !array_key_exists("gallery", $context) || (null === (isset($context["gallery"]) ? $context["gallery"] : null)))) {
            // line 168
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 170
            echo "        ";
            if (twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()))) {
                // line 171
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 173
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 175
                echo $context["importTypes"]->getshow("1000", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
                echo "
            </h2>
        ";
            } else {
                // line 178
                echo "            ";
                $context["view"] = $this->loadTemplate("@ui/type.twig", "@galleries/view.twig", 178);
                // line 179
                echo "            ";
                $context["entity"] = array("images" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()));
                // line 180
                echo "            ";
                $context["sliderSettings"] = (isset($context["settings"]) ? $context["settings"] : null);
                // line 181
                echo "
            ";
                // line 182
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "block")) {
                    // line 183
                    echo "                ";
                    echo $context["view"]->getblock_view((isset($context["entity"]) ? $context["entity"] : null));
                    echo "
            ";
                }
                // line 185
                echo "
            ";
                // line 186
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "list")) {
                    // line 187
                    echo "                ";
                    echo $context["view"]->getlist_view((isset($context["entity"]) ? $context["entity"] : null), (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
                    echo "
            ";
                }
                // line 189
                echo "        ";
            }
            // line 190
            echo "    ";
        }
        // line 191
        echo "
    <div id=\"importDialog\" title=\"";
        // line 192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 193
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 198
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 211
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 240
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 247
        echo "            ";
        ob_start();
        // line 248
        echo "                border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 249
        if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 250
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 251
                echo "                        background-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 253
            echo "                ";
        } else {
            // line 254
            echo "                    color:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
                    background-color:";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
                    font-size:";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 257
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 258
                echo "                        text-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 260
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 261
                echo "                        ";
                // line 262
                echo "                        bottom:0;
                    ";
            }
            // line 264
            echo "                ";
        }
        // line 265
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 266
        echo "
            ";
        // line 267
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "icons", array()), "enabled", array()) == "false")) {
            // line 268
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["name"]) {
                // line 269
                echo "                    ";
                if (($context["type"] == "direction-aware")) {
                    // line 270
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right ? Left</div>
                                <div class=\"box__left\">Left ? Right</div>
                                <div class=\"box__top\">Top ? Bottom</div>
                                <div class=\"box__bottom\">Bottom ? Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 278
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 281
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } elseif ((                // line 284
$context["type"] == "3d-cube")) {
                    // line 285
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 296
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                    // line 298
                    echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                    echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                    // line 300
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 306
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } else {
                    // line 310
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 311
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                    // line 312
                    echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                    echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\">
                                    <span>";
                    // line 314
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</span>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                    // line 318
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                }
                // line 322
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
            ";
        } else {
            // line 325
            echo "                <div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
            // line 327
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 351
            echo "                </div>
            ";
        }
        // line 353
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 357
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 364
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 365
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 368
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 369
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 327
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 328
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 329
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 330
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 331
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 337
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 346
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 350,  711 => 346,  702 => 340,  698 => 339,  693 => 337,  684 => 331,  680 => 330,  675 => 329,  670 => 328,  667 => 327,  658 => 369,  654 => 368,  648 => 365,  644 => 364,  638 => 361,  634 => 360,  628 => 357,  624 => 356,  619 => 353,  615 => 351,  613 => 327,  607 => 325,  603 => 323,  597 => 322,  590 => 318,  583 => 314,  578 => 312,  574 => 311,  569 => 310,  562 => 306,  553 => 300,  548 => 298,  543 => 296,  528 => 285,  526 => 284,  520 => 281,  514 => 278,  502 => 270,  499 => 269,  494 => 268,  492 => 267,  489 => 266,  486 => 265,  483 => 264,  479 => 262,  477 => 261,  474 => 260,  468 => 258,  466 => 257,  461 => 256,  457 => 255,  452 => 254,  449 => 253,  443 => 251,  440 => 250,  438 => 249,  433 => 248,  430 => 247,  427 => 240,  425 => 211,  420 => 209,  407 => 199,  403 => 198,  398 => 196,  392 => 193,  388 => 192,  385 => 191,  382 => 190,  379 => 189,  373 => 187,  371 => 186,  368 => 185,  362 => 183,  360 => 182,  357 => 181,  354 => 180,  351 => 179,  348 => 178,  342 => 175,  337 => 173,  333 => 171,  330 => 170,  324 => 168,  322 => 167,  319 => 166,  316 => 165,  313 => 164,  305 => 158,  297 => 153,  283 => 147,  278 => 144,  267 => 142,  263 => 141,  260 => 140,  258 => 139,  252 => 135,  247 => 132,  245 => 131,  242 => 130,  238 => 128,  236 => 127,  232 => 125,  230 => 124,  222 => 118,  212 => 97,  204 => 96,  198 => 95,  192 => 94,  186 => 93,  180 => 92,  174 => 91,  169 => 89,  165 => 88,  156 => 84,  150 => 83,  145 => 81,  137 => 80,  124 => 70,  115 => 64,  109 => 60,  100 => 49,  94 => 46,  85 => 40,  79 => 37,  71 => 32,  65 => 29,  62 => 28,  60 => 15,  50 => 9,  43 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/view.twig", "/home/hospistuff/public_html/lifecoaching/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/view.twig");
    }
}
