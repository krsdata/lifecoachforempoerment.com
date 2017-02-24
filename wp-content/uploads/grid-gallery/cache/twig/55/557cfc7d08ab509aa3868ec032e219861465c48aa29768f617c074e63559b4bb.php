<?php

/* @galleries/settings.twig */
class __TwigTemplate_a8b3ae6ed181ec61e63e7cf209242abbbc84968eb92ea1a0057a895ab480258f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'area' => array($this, 'block_area'),
            'openByLink' => array($this, 'block_openByLink'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'icons' => array($this, 'block_icons'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
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

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
            ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
            ";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
            ";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "
        </a>
        ";
        // line 59
        $this->displayBlock('tabs', $context, $blocks);
        // line 60
        echo "    </h2>
";
    }

    // line 59
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 63
    public function block_preview($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "watermark", array(), "any", true, true)) {
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "watermark", array()))), "html", null, true);
            echo "
    ";
        }
        // line 67
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 67);
        // line 68
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 80
        echo "
                <li title=\"";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <a class=\"button button-primary\" target=\"_blank\"
                       href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-eye\"></i>
                        ";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 107
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 112
        if ( !twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()))) {
            // line 113
            echo "            <div style=\"
            ";
            // line 114
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width", array())))) {
                // line 115
                echo "                width:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width", array()), "html", null, true);
                echo "px;
            ";
            }
            // line 117
            echo "            margin: 10px auto;
            max-width: 380px;
            clear:both;
            \">
                <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\">
                   ";
            // line 122
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 123
            echo "
                    ";
            // line 124
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 125
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
                // line 126
                echo "                    ";
            }
            // line 127
            echo "
                    ";
            // line 128
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 129
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
                // line 130
                echo "                    ";
            }
            // line 131
            echo "
                    ";
            // line 132
            if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3"))) {
                // line 133
                echo "                        ";
                $context["crop"] = 1;
                // line 134
                echo "                    ";
            } else {
                // line 135
                echo "                        ";
                $context["height"] = null;
                // line 136
                echo "                    ";
            }
            // line 137
            echo "
                    ";
            // line 138
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 139
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "cropQuality", array());
                // line 140
                echo "                    ";
            } else {
                // line 141
                echo "                        ";
                $context["cropQuality"] = null;
                // line 142
                echo "                    ";
            }
            // line 143
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), (isset($context["crop"]) ? $context["crop"] : null), (isset($context["cropQuality"]) ? $context["cropQuality"] : null))), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array())), "html", null, true);
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array());
            echo "\" style=\"width: auto; height: auto;\"/>
                    <figcaption style=\"";
            // line 144
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                        <div style=\"display: table; height: 100%; width: 100%;\">
                            <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                <span>Gallery by Supsystic</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        ";
        } else {
            // line 154
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 156
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 160
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\">
            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 177
    public function block_content($context, array $blocks = array())
    {
        // line 178
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 178);
        // line 179
        echo "    ";
        $context["f"] = $this;
        // line 180
        echo "
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 181
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 182
        echo $context["form"]->getopen("post", $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null))), "method"), array("id" => "form-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>

        <div data-tab=\"area\">
            ";
        // line 189
        $this->displayBlock('area', $context, $blocks);
        // line 312
        echo "
            ";
        // line 313
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 457
        echo "
            ";
        // line 458
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 496
        echo "
            <div class=\"load-more-button-preview\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 499
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 501
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 504
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 514
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 515
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

            ";
        // line 521
        $this->displayBlock('border', $context, $blocks);
        // line 566
        echo "
            ";
        // line 567
        $this->displayBlock('shadow', $context, $blocks);
        // line 633
        echo "
            ";
        // line 634
        $this->displayBlock('popup', $context, $blocks);
        // line 883
        echo "
            ";
        // line 884
        $this->displayBlock('preload', $context, $blocks);
        // line 936
        echo "        </div>

        ";
        // line 938
        $this->displayBlock('post', $context, $blocks);
        // line 955
        echo "
        <div data-tab=\"overlay\">
            <table class=\"form-table\" name=\"captions\">
                <thead>
                    ";
        // line 960
        echo "                    ";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 989
        echo "                    ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 996
        echo "                    ";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 997
        echo "                    ";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 998
        echo "
                    ";
        // line 1000
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((        // line 1001
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), ((        // line 1004
(isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 1006
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .         // line 1010
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), ((        // line 1013
(isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1015
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1020
        echo "

                    ";
        // line 1023
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), (        // line 1024
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")) .         // line 1029
$context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1031
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"))), "chooseEffect");
        // line 1035
        echo "

                    ";
        // line 1038
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1039
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1042
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1046
        echo "

                    ";
        // line 1049
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1050
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1053
(isset($context["polaroidIsEnable"]) ? $context["polaroidIsEnable"] : null), array("style" => "width: auto;")), "polaroid-effect");
        // line 1057
        echo "

                    ";
        // line 1060
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1061
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1064
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1068
        echo "

                    ";
        // line 1071
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1072
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1075
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1079
        echo "

                    ";
        // line 1082
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1083
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1086
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width");
        // line 1090
        echo "

                    ";
        // line 1093
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1094
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1096
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1100
        echo "

                    ";
        // line 1103
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1104
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1106
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1110
        echo "

                    ";
        // line 1113
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1114
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1117
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1121
        echo "

                    ";
        // line 1124
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1125
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1128
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1131
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1134
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1138
        echo "

                    ";
        // line 1141
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1142
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1145
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1149
        echo "

                    ";
        // line 1152
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1153
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1156
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1160
        echo "

                    ";
        // line 1163
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1164
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1166
(isset($context["fontList"]) ? $context["fontList"] : null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1167
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1171
        echo "


                    ";
        // line 1175
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")),         // line 1176
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1179
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1183
        echo "

                    ";
        // line 1186
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")),         // line 1187
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1190
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1193
        echo "

                    ";
        // line 1196
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1197
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1200
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1203
        echo "
                </thead>
            </table>

            <div class=\"separator\"></div>

            ";
        // line 1209
        $this->displayBlock('icons', $context, $blocks);
        // line 1336
        echo "        </div>

        ";
        // line 1338
        $this->displayBlock('categories', $context, $blocks);
        // line 1369
        echo "
        ";
        // line 1370
        $this->displayBlock('watermark', $context, $blocks);
        // line 1385
        echo "
        ";
        // line 1386
        $this->displayBlock('form', $context, $blocks);
        // line 1388
        echo "
        ";
        // line 1389
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1394
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1398
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1399
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1403
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1405
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1407
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1410
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1412
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1419
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1423
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1428
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1433
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1442
        echo "
                ";
        // line 1443
        if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
            // line 1444
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null), array("theme_1_pro" => "Fullscreen popup"));
            // line 1445
            echo "                ";
        }
        // line 1446
        echo "
                ";
        // line 1447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1448
            echo "                    <div class=\"grid-gallery-caption\">
                        <img data-name=\"";
            // line 1449
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1450
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 1451
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1453
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1457
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1461
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1464
            echo "                    ";
            if (($context["type"] == "direction-aware")) {
                // line 1465
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1473
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1476
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } elseif ((            // line 1479
$context["type"] == "3d-cube")) {
                // line 1480
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
                // line 1491
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1493
                echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1495
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1501
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1505
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1506
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1507
                echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1510
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1515
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1519
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1520
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1521
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
        // line 1523
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1547
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1551
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1553
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1556
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1628
        echo "

                ";
        // line 1630
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shadowPresets"]) ? $context["shadowPresets"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1631
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1632
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1633
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1634
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1637
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1641
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1664
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1668
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1672
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1672);
        // line 1673
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1674
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1677
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1678
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1679
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1682
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1684
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1691
        $this->displayBlock('modals', $context, $blocks);
    }

    // line 189
    public function block_area($context, array $blocks = array())
    {
        // line 190
        echo "                <table class=\"form-table\" name=\"area\">
                    <thead>
                        ";
        // line 192
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 193
$context["form"]->getselect("area[grid]", array(0 => "Fixed", 1 => "Vertical", 2 => "Horizontal", 3 => "Fixed Columns"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        echo "
        \t\t\t\t
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 198
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 199
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 209
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 210
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 211
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 213
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 214
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 216
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 217
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 218
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        echo "

                        ";
        // line 222
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 223
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 224
$context["form"]->getinput("text", "title", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 225
        echo "

                        ";
        // line 227
        echo $context["form"]->getrow($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Gallery Position"), "method"),         // line 228
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        echo "


                        ";
        // line 231
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), (        // line 232
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 233
$context["form"]->getspan("", "pixels")), "distance");
        echo "

                        ";
        // line 235
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 236
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 237
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        echo "

                        ";
        // line 240
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 241
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 244
(isset($context["settings"]) ? $context["settings"] : null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "enabled");
        // line 247
        echo "

                        ";
        // line 249
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 250
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        echo "

                        ";
        // line 257
        echo "
                        ";
        // line 258
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 259
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 260
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        echo "


                        ";
        // line 263
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 264
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 265
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        echo "

                        ";
        // line 267
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 268
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 269
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        echo "
                   
                        ";
        // line 272
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 284
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 285
$context["form"]->getselect("thumbnail[cropQuality]",         // line 287
(isset($context["qualityList"]) ? $context["qualityList"] : null), (($this->getAttribute($this->getAttribute(        // line 288
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 291
        echo "

                        ";
        // line 293
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 294
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo");
        echo "

                        ";
        // line 296
        $this->displayBlock('openByLink', $context, $blocks);
        // line 304
        echo "

                        ";
        // line 306
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 308
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 296
    public function block_openByLink($context, array $blocks = array())
    {
        // line 297
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 300
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 302
        echo "
                        ";
    }

    // line 306
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 307
        echo "                        ";
    }

    // line 313
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 314
        echo "                <table class=\"form-table\">
                    <thead>
                    ";
        // line 316
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((        // line 317
$context["form"]->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .         // line 318
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .         // line 319
$context["form"]->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .         // line 320
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 323
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "pluginInstalled", array())) {
            // line 324
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectsList", array()))) {
                // line 325
                echo "

                            ";
                // line 327
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")),                 // line 328
$context["form"]->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute(                // line 329
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute(                // line 330
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 332
                echo "

                            ";
                // line 334
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),                 // line 335
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                echo "

                            ";
                // line 337
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 338
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 344
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 346
                echo "

                            ";
                // line 348
                echo $context["form"]->getrow("",                 // line 349
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                echo "

                            ";
                // line 351
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 352
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),                 // line 353
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, ((((isset($context["enabled"]) ? $context["enabled"] : null) != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                echo "

                            ";
                // line 355
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 356
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 363
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 365
                echo "

                            ";
                // line 367
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 368
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 374
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 376
                echo "

                            ";
                // line 378
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 379
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 385
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 387
                echo "

                            ";
                // line 389
                echo $context["form"]->getrow("",                 // line 390
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                echo "

                            ";
                // line 392
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 393
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),                 // line 394
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, ((((isset($context["enabled"]) ? $context["enabled"] : null) != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                echo "

                            ";
                // line 396
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 397
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 404
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 406
                echo "

                            ";
                // line 408
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 409
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 415
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 417
                echo "

                            ";
                // line 419
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 420
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 426
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 428
                echo "

                        ";
            } else {
                // line 431
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 433
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 436
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 437
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 441
            echo "                    ";
        } else {
            // line 442
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 444
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 446
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 447
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 448
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 453
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 458
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 459
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 461
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 462
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 463
$context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 464
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 465
$context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 466
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 469
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 470
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        echo "

                        ";
        // line 472
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 473
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 487
(isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 488
        echo "

                        ";
        // line 490
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 492
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 490
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 491
        echo "                        ";
    }

    // line 521
    public function block_border($context, array $blocks = array())
    {
        // line 522
        echo "                <table class=\"form-table\" name=\"border\">
                    <thead>
                        ";
        // line 524
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 535
        echo "
                        ";
        // line 551
        echo "
                        ";
        // line 552
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (        // line 553
$context["form"]->getselect("thumbnail[border][type]", (isset($context["borderTypes"]) ? $context["borderTypes"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .         // line 554
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        echo "

                        ";
        // line 556
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),         // line 557
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        echo "

                        ";
        // line 559
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (        // line 560
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 561
$context["form"]->getspan("", "pixels")), "border-width");
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 567
    public function block_shadow($context, array $blocks = array())
    {
        // line 568
        echo "                <table class=\"form-table\" name=\"shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 573
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 577
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 578
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 579
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 580
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 587
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 591
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 598
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 602
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 603
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 605
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 606
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 608
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 609
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 615
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 616
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        echo "

                        ";
        // line 618
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 619
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        echo "

                        ";
        // line 621
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 622
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        echo "

                        ";
        // line 624
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 625
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        echo "

                        ";
        // line 627
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 628
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 634
    public function block_popup($context, array $blocks = array())
    {
        // line 635
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 638
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 639
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 640
$context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), ((        // line 643
(isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 645
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 649
$context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), ((        // line 652
(isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 654
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 658
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 662
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 663
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 668
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 670
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()))) .         // line 672
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 674
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 677
        echo "

                        ";
        // line 680
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 681
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 684
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 687
        echo "

                        ";
        // line 690
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 691
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 699
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")));
        // line 702
        echo "

                        ";
        // line 705
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 706
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 709
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 712
        echo "

                        ";
        // line 714
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")),         // line 715
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 718
(isset($context["settings"]) ? $context["settings"] : null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 720
        echo "

                        ";
        // line 723
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 724
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 726
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 730
        echo "
                        
                        ";
        // line 733
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 734
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 749
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 752
        echo "

                        ";
        // line 755
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),         // line 756
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(        // line 759
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 763
        echo "

                        ";
        // line 766
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 767
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 770
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 774
        echo "

                        ";
        // line 777
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 778
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 781
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 786
        echo "

                        ";
        // line 789
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 790
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 793
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 797
        echo "

                        ";
        // line 800
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 801
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 804
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 807
$context["form"]->getspan("", "x")) .         // line 808
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 811
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 814
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 816
        echo "


                        ";
        // line 820
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 822
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 825
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 828
        echo "

                        ";
        // line 831
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 879
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 831
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 832
        echo "                            ";
        // line 833
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 836
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 838
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 841
$context["form"]->getspan("", "x")) .         // line 842
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 844
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 847
$context["form"]->getspan("", "pixels")));
        // line 848
        echo "

                            ";
        // line 851
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 854
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 857
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 860
        echo "
                            
                            ";
        // line 863
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 866
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 873
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 876
        echo "

                        ";
    }

    // line 884
    public function block_preload($context, array $blocks = array())
    {
        // line 885
        echo "                <table class=\"form-table\" name=\"preload\">
                    <thead>
                        ";
        // line 887
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 888
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 889
$context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 890
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 891
$context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 892
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>
                ";
        // line 894
        if ( !$this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
            // line 895
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 899
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 901
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 905
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 908
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 918
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 922
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 924
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 928
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 929
            echo twig_escape_filter($this->env, (isset($context["piconImg"]) ? $context["piconImg"] : null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 934
        echo "                </table>
            ";
    }

    // line 938
    public function block_post($context, array $blocks = array())
    {
        // line 939
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 941
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 944
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 949
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1209
    public function block_icons($context, array $blocks = array())
    {
        // line 1210
        echo "                <table class=\"form-table\" name=\"icons\">
                    <thead>
                        ";
        // line 1212
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1213
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), (((        // line 1214
$context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 1215
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .         // line 1216
$context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1217
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 1220
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), (        // line 1221
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")) .         // line 1222
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"))));
        // line 1223
        echo "
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsColor\">
                                    ";
        // line 1227
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsHoverColor\">
                                    ";
        // line 1237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundColor\">
                                    ";
        // line 1247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundHoverColor\">
                                    ";
        // line 1257
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1261
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsSize\">
                                    ";
        // line 1267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsMargin\">
                                    ";
        // line 1277
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsOverlay\">
                                    ";
        // line 1287
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
                                    <option value=\"true\" ";
        // line 1292
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">
                                        ";
        // line 1293
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"false\" ";
        // line 1295
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">
                                        ";
        // line 1296
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayColor\">
                                    ";
        // line 1304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1308
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayTransparency\">
                                    ";
        // line 1314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
                                    <option value=\"0\" ";
        // line 1319
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
                                    <option value=\"1\" ";
        // line 1320
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
                                    <option value=\"2\" ";
        // line 1321
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
                                    <option value=\"3\" ";
        // line 1322
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
                                    <option value=\"4\" ";
        // line 1323
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
                                    <option value=\"5\" ";
        // line 1324
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
                                    <option value=\"6\" ";
        // line 1325
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
                                    <option value=\"7\" ";
        // line 1326
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
                                    <option value=\"8\" ";
        // line 1327
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
                                    <option value=\"9\" ";
        // line 1328
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
                                    <option value=\"10\" ";
        // line 1329
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
    }

    // line 1338
    public function block_categories($context, array $blocks = array())
    {
        // line 1339
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1341
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1344
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1348
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1352
        $this->displayBlock('pagination', $context, $blocks);
        // line 1367
        echo "            </div>
        ";
    }

    // line 1352
    public function block_pagination($context, array $blocks = array())
    {
        // line 1353
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1354
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1357
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1361
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1362
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1370
    public function block_watermark($context, array $blocks = array())
    {
        // line 1371
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1373
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1376
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1379
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1380
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1386
    public function block_form($context, array $blocks = array())
    {
        // line 1387
        echo "        ";
    }

    // line 1523
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1524
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1525
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1526
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1527
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1533
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1535
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1536
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1542
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1546
        echo "                    ";
    }

    // line 1691
    public function block_modals($context, array $blocks = array())
    {
        // line 1692
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1694
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1711
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsEffects"]) ? $context["iconsEffects"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1712
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background: no-repeat; overflow: hidden;\" data-background-src=\"holder.js/150x150?theme=industrial&text=\\t\">
                    <a href=\"#\" class=\"hi-icon icon-link\" data-effect=\"";
            // line 1713
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1716
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1719
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1720
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1723
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1724
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 1727
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 1728
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 1731
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 1732
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 3
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2504 => 4,  2491 => 3,  2483 => 1732,  2479 => 1731,  2473 => 1728,  2469 => 1727,  2463 => 1724,  2459 => 1723,  2453 => 1720,  2449 => 1719,  2444 => 1716,  2433 => 1713,  2424 => 1712,  2419 => 1711,  2417 => 1694,  2412 => 1692,  2409 => 1691,  2405 => 1546,  2395 => 1542,  2386 => 1536,  2382 => 1535,  2377 => 1533,  2368 => 1527,  2364 => 1526,  2359 => 1525,  2354 => 1524,  2351 => 1523,  2347 => 1387,  2344 => 1386,  2335 => 1380,  2331 => 1379,  2325 => 1376,  2319 => 1373,  2315 => 1371,  2312 => 1370,  2303 => 1362,  2299 => 1361,  2292 => 1357,  2286 => 1354,  2283 => 1353,  2280 => 1352,  2275 => 1367,  2273 => 1352,  2267 => 1349,  2263 => 1348,  2256 => 1344,  2250 => 1341,  2246 => 1339,  2243 => 1338,  2232 => 1329,  2228 => 1328,  2224 => 1327,  2220 => 1326,  2216 => 1325,  2209 => 1324,  2205 => 1323,  2201 => 1322,  2197 => 1321,  2193 => 1320,  2189 => 1319,  2181 => 1314,  2172 => 1308,  2165 => 1304,  2154 => 1296,  2150 => 1295,  2145 => 1293,  2141 => 1292,  2133 => 1287,  2124 => 1281,  2117 => 1277,  2108 => 1271,  2101 => 1267,  2092 => 1261,  2085 => 1257,  2076 => 1251,  2069 => 1247,  2060 => 1241,  2053 => 1237,  2044 => 1231,  2037 => 1227,  2031 => 1223,  2029 => 1222,  2028 => 1221,  2027 => 1220,  2021 => 1217,  2020 => 1216,  2019 => 1215,  2018 => 1214,  2016 => 1213,  2014 => 1212,  2010 => 1210,  2007 => 1209,  1998 => 950,  1994 => 949,  1986 => 944,  1980 => 941,  1976 => 939,  1973 => 938,  1968 => 934,  1960 => 929,  1956 => 928,  1949 => 924,  1944 => 922,  1938 => 918,  1928 => 908,  1922 => 905,  1915 => 901,  1910 => 899,  1904 => 895,  1902 => 894,  1897 => 892,  1896 => 891,  1895 => 890,  1894 => 889,  1892 => 888,  1890 => 887,  1886 => 885,  1883 => 884,  1877 => 876,  1875 => 873,  1874 => 866,  1872 => 863,  1868 => 860,  1866 => 857,  1865 => 854,  1863 => 851,  1859 => 848,  1857 => 847,  1856 => 844,  1855 => 842,  1854 => 841,  1853 => 838,  1852 => 836,  1850 => 833,  1848 => 832,  1845 => 831,  1838 => 879,  1835 => 831,  1831 => 828,  1829 => 825,  1828 => 822,  1826 => 820,  1821 => 816,  1819 => 814,  1818 => 811,  1817 => 808,  1816 => 807,  1815 => 804,  1814 => 801,  1812 => 800,  1808 => 797,  1806 => 793,  1805 => 790,  1803 => 789,  1799 => 786,  1797 => 781,  1796 => 778,  1794 => 777,  1790 => 774,  1788 => 770,  1787 => 767,  1785 => 766,  1781 => 763,  1779 => 759,  1778 => 756,  1776 => 755,  1772 => 752,  1770 => 749,  1769 => 734,  1767 => 733,  1763 => 730,  1761 => 726,  1760 => 724,  1758 => 723,  1754 => 720,  1752 => 718,  1751 => 715,  1750 => 714,  1746 => 712,  1744 => 709,  1743 => 706,  1741 => 705,  1737 => 702,  1735 => 699,  1734 => 691,  1732 => 690,  1728 => 687,  1726 => 684,  1725 => 681,  1723 => 680,  1719 => 677,  1717 => 674,  1716 => 672,  1715 => 670,  1714 => 668,  1713 => 663,  1711 => 662,  1706 => 658,  1704 => 654,  1703 => 652,  1702 => 649,  1701 => 645,  1700 => 643,  1699 => 640,  1697 => 639,  1694 => 638,  1690 => 635,  1687 => 634,  1678 => 628,  1677 => 627,  1672 => 625,  1671 => 624,  1666 => 622,  1665 => 621,  1660 => 619,  1659 => 618,  1654 => 616,  1653 => 615,  1644 => 609,  1638 => 608,  1633 => 606,  1627 => 605,  1622 => 603,  1616 => 602,  1609 => 598,  1599 => 591,  1592 => 587,  1582 => 580,  1576 => 579,  1572 => 578,  1566 => 577,  1559 => 573,  1552 => 568,  1549 => 567,  1540 => 561,  1539 => 560,  1538 => 559,  1533 => 557,  1532 => 556,  1527 => 554,  1526 => 553,  1525 => 552,  1522 => 551,  1519 => 535,  1517 => 524,  1513 => 522,  1510 => 521,  1506 => 491,  1503 => 490,  1496 => 492,  1494 => 490,  1490 => 488,  1488 => 487,  1487 => 473,  1486 => 472,  1481 => 470,  1480 => 469,  1474 => 466,  1473 => 465,  1472 => 464,  1471 => 463,  1469 => 462,  1467 => 461,  1463 => 459,  1460 => 458,  1453 => 453,  1445 => 448,  1441 => 447,  1437 => 446,  1432 => 444,  1428 => 442,  1425 => 441,  1418 => 437,  1414 => 436,  1408 => 433,  1404 => 431,  1399 => 428,  1397 => 426,  1396 => 420,  1395 => 419,  1391 => 417,  1389 => 415,  1388 => 409,  1387 => 408,  1383 => 406,  1381 => 404,  1380 => 397,  1379 => 396,  1374 => 394,  1372 => 393,  1370 => 392,  1365 => 390,  1364 => 389,  1360 => 387,  1358 => 385,  1357 => 379,  1356 => 378,  1352 => 376,  1350 => 374,  1349 => 368,  1348 => 367,  1344 => 365,  1342 => 363,  1341 => 356,  1340 => 355,  1335 => 353,  1333 => 352,  1331 => 351,  1326 => 349,  1325 => 348,  1321 => 346,  1319 => 344,  1318 => 338,  1317 => 337,  1312 => 335,  1311 => 334,  1307 => 332,  1305 => 330,  1304 => 329,  1303 => 328,  1302 => 327,  1298 => 325,  1295 => 324,  1293 => 323,  1287 => 320,  1286 => 319,  1285 => 318,  1284 => 317,  1283 => 316,  1279 => 314,  1276 => 313,  1272 => 307,  1269 => 306,  1264 => 302,  1262 => 300,  1260 => 297,  1257 => 296,  1250 => 308,  1248 => 306,  1244 => 304,  1242 => 296,  1237 => 294,  1236 => 293,  1232 => 291,  1230 => 288,  1229 => 287,  1228 => 285,  1226 => 284,  1223 => 272,  1218 => 269,  1217 => 268,  1216 => 267,  1211 => 265,  1210 => 264,  1209 => 263,  1203 => 260,  1202 => 259,  1201 => 258,  1198 => 257,  1193 => 250,  1192 => 249,  1188 => 247,  1186 => 244,  1185 => 241,  1183 => 240,  1178 => 237,  1177 => 236,  1176 => 235,  1171 => 233,  1170 => 232,  1169 => 231,  1163 => 228,  1162 => 227,  1158 => 225,  1156 => 224,  1155 => 223,  1152 => 222,  1147 => 218,  1146 => 217,  1145 => 216,  1144 => 214,  1143 => 213,  1142 => 211,  1141 => 210,  1140 => 209,  1133 => 205,  1124 => 199,  1120 => 198,  1112 => 193,  1111 => 192,  1107 => 190,  1104 => 189,  1100 => 1691,  1090 => 1684,  1085 => 1682,  1079 => 1679,  1075 => 1678,  1071 => 1677,  1065 => 1674,  1060 => 1673,  1058 => 1672,  1051 => 1668,  1044 => 1664,  1019 => 1641,  1009 => 1637,  1003 => 1634,  993 => 1633,  983 => 1632,  980 => 1631,  976 => 1630,  972 => 1628,  970 => 1556,  964 => 1553,  959 => 1551,  953 => 1547,  951 => 1523,  946 => 1521,  943 => 1520,  937 => 1519,  930 => 1515,  919 => 1510,  913 => 1507,  909 => 1506,  904 => 1505,  897 => 1501,  888 => 1495,  883 => 1493,  878 => 1491,  863 => 1480,  861 => 1479,  855 => 1476,  849 => 1473,  837 => 1465,  834 => 1464,  830 => 1463,  825 => 1461,  819 => 1457,  809 => 1453,  804 => 1451,  798 => 1450,  792 => 1449,  789 => 1448,  785 => 1447,  782 => 1446,  779 => 1445,  776 => 1444,  774 => 1443,  771 => 1442,  769 => 1433,  763 => 1430,  758 => 1428,  750 => 1423,  743 => 1419,  733 => 1412,  728 => 1410,  722 => 1407,  717 => 1405,  712 => 1403,  705 => 1399,  701 => 1398,  694 => 1394,  688 => 1391,  683 => 1389,  680 => 1388,  678 => 1386,  675 => 1385,  673 => 1370,  670 => 1369,  668 => 1338,  664 => 1336,  662 => 1209,  654 => 1203,  652 => 1200,  651 => 1197,  649 => 1196,  645 => 1193,  643 => 1190,  642 => 1187,  640 => 1186,  636 => 1183,  634 => 1179,  633 => 1176,  631 => 1175,  626 => 1171,  624 => 1167,  623 => 1166,  622 => 1164,  620 => 1163,  616 => 1160,  614 => 1156,  613 => 1153,  611 => 1152,  607 => 1149,  605 => 1145,  604 => 1142,  602 => 1141,  598 => 1138,  596 => 1134,  595 => 1131,  594 => 1128,  593 => 1125,  591 => 1124,  587 => 1121,  585 => 1117,  584 => 1114,  582 => 1113,  578 => 1110,  576 => 1106,  575 => 1104,  573 => 1103,  569 => 1100,  567 => 1096,  566 => 1094,  564 => 1093,  560 => 1090,  558 => 1086,  557 => 1083,  555 => 1082,  551 => 1079,  549 => 1075,  548 => 1072,  546 => 1071,  542 => 1068,  540 => 1064,  539 => 1061,  537 => 1060,  533 => 1057,  531 => 1053,  530 => 1050,  528 => 1049,  524 => 1046,  522 => 1042,  521 => 1039,  519 => 1038,  515 => 1035,  513 => 1031,  512 => 1029,  511 => 1024,  509 => 1023,  505 => 1020,  503 => 1015,  502 => 1013,  501 => 1010,  500 => 1006,  499 => 1004,  498 => 1001,  496 => 1000,  493 => 998,  490 => 997,  487 => 996,  484 => 989,  481 => 960,  475 => 955,  473 => 938,  469 => 936,  467 => 884,  464 => 883,  462 => 634,  459 => 633,  457 => 567,  454 => 566,  452 => 521,  443 => 515,  442 => 514,  430 => 505,  426 => 504,  418 => 501,  413 => 499,  408 => 496,  406 => 458,  403 => 457,  401 => 313,  398 => 312,  396 => 189,  390 => 186,  386 => 185,  382 => 184,  378 => 183,  374 => 182,  370 => 181,  367 => 180,  364 => 179,  361 => 178,  358 => 177,  350 => 172,  338 => 165,  330 => 164,  324 => 160,  317 => 156,  313 => 154,  300 => 144,  291 => 143,  288 => 142,  285 => 141,  282 => 140,  279 => 139,  277 => 138,  274 => 137,  271 => 136,  268 => 135,  265 => 134,  262 => 133,  260 => 132,  257 => 131,  254 => 130,  251 => 129,  249 => 128,  246 => 127,  243 => 126,  240 => 125,  238 => 124,  235 => 123,  233 => 122,  226 => 117,  220 => 115,  218 => 114,  215 => 113,  213 => 112,  205 => 107,  195 => 100,  190 => 98,  181 => 92,  176 => 90,  167 => 84,  162 => 82,  158 => 81,  155 => 80,  149 => 69,  146 => 68,  143 => 67,  137 => 65,  134 => 64,  131 => 63,  126 => 59,  121 => 60,  119 => 59,  114 => 57,  106 => 52,  98 => 47,  90 => 42,  82 => 37,  71 => 31,  64 => 29,  56 => 27,  53 => 8,  50 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/home/hospistuff/public_html/lifecoaching/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
