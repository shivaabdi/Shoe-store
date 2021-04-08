<?php

/* home/products/product-detail.html.twig */
class __TwigTemplate_ba2256275b919496c9247bcf56fff02c70024f1bdd76bed7bb7204da9506d60e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "home/products/product-detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/products/product-detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/products/product-detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mert Bilgisayar Anasayfa";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "home/_header.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "    ";
        echo twig_include($this->env, $context, "home/_menu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "/css/flexslider.css\" type=\"text/css\" media=\"screen\">
    <div style=\"padding: 40px\" class=\"container\">
        <div class=\"col-md-4 single-right-left \">
            <div class=\"grid images_3_of_2\">
                <div class=\"flexslider\">


                    <div class=\"clearfix\"></div>
                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-273px, 0px, 0px);\">
                            ";
        // line 25
        $context["sayac"] = 1;
        // line 26
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resimler"]) || array_key_exists("resimler", $context) ? $context["resimler"] : (function () { throw new Twig_Error_Runtime('Variable "resimler" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resim"]) {
            // line 27
            echo "                                <li data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads"), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resim"], "resim", array()), "html", null, true);
            echo "\" class=\"clone\" aria-hidden=\"true\" style=\"width: 273px; float: left; display: block;\">
                                    <div style=\"height: 100%;\" class=\"thumb-image\"> <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads"), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resim"], "resim", array()), "html", null, true);
            echo "\" data-imagezoom=\"true\" class=\"img-responsive\" draggable=\"false\"> </div>
                                </li>
                                ";
            // line 30
            $context["sayac"] = ((isset($context["sayac"]) || array_key_exists("sayac", $context) ? $context["sayac"] : (function () { throw new Twig_Error_Runtime('Variable "sayac" does not exist.', 30, $this->source); })()) + 1);
            // line 31
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </ul>
                    </div>

                    <ul class=\"flex-direction-nav\">
                        <li class=\"flex-nav-prev\">
                            <a class=\"flex-prev\" href=\"#\">Önceki</a>
                        </li>
                        <li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Sonraki</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-8 single-right-left simpleCart_shelfItem\">
            <h3>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->source); })()), "urunadi", array()), "html", null, true);
        echo "</h3>
            <p><span class=\"item_price\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 46, $this->source); })()), "fiyat", array()), "html", null, true);
        echo "</span> ₺</p>
            <div class=\"rating1\">
\t\t\t\t\t\t<span class=\"starRating\">
\t\t\t\t\t\t\t<input id=\"rating5\" type=\"radio\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t<label for=\"rating5\">5</label>
\t\t\t\t\t\t\t<input id=\"rating4\" type=\"radio\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t<label for=\"rating4\">4</label>
\t\t\t\t\t\t\t<input id=\"rating3\" type=\"radio\" name=\"rating\" value=\"3\" checked=\"\">
\t\t\t\t\t\t\t<label for=\"rating3\">3</label>
\t\t\t\t\t\t\t<input id=\"rating2\" type=\"radio\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t<label for=\"rating2\">2</label>
\t\t\t\t\t\t\t<input id=\"rating1\" type=\"radio\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t<label for=\"rating1\">1</label>
\t\t\t\t\t\t</span>
            </div>


            <form action=\"#\" method=\"post\">
            <div class=\"color-quality\">
                <div class=\"color-quality-right\">
                    <h5>Quantity :</h5>
                    <input type=\"number\" value=\"1\" max=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 67, $this->source); })()), "stok", array()), "html", null, true);
        echo "\" id=\"shopcart_quantity\" style=\"width:40px;\" name=\"shopcart[quantity]\" required=\"required\">

                </div>
            </div>


                <div class=\"occasion-cart\">
                <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">


                            <input type=\"submit\" name=\"submit\" value=\"Add to Cart\" class=\"button\">


                </div>

            </div>
                ";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 84
            echo "                    <input type=\"hidden\" id=\"shopcart_userid\" name=\"shopcart[userid]\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->source); })()), "user", array()), "id", array()), "html", null, true);
            echo "\">
                ";
        }
        // line 86
        echo "                <input type=\"hidden\" id=\"shopcart_productid\" name=\"shopcart[productid]\" required=\"required\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 86, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" id=\"shopcart__token\" name=\"token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shopcart-token"), "html", null, true);
        echo "\">
            </form>

            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls\">
                <li class=\"share\">Ürünü Paylaşın : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>

        </div>
        <div class=\"clearfix\"> </div>
        <!-- /new_arrivals -->
        <div class=\"responsive_tabs_agileits\">
            <div id=\"horizontalTab\" style=\"display: block; width: 100%; margin: 0px;\">
                <ul class=\"resp-tabs-list\">
                    <li class=\"resp-tab-item resp-tab-active\" aria-controls=\"tab_item-0\" role=\"tab\">Teknik Özellikler</li>
                    <li class=\"resp-tab-item\" aria-controls=\"tab_item-1\" role=\"tab\">Diğer Özellikler</li>
                </ul>
                <div class=\"resp-tabs-container\">
                    <!--/tab_one-->
                    <h2 class=\"resp-accordion resp-tab-active\" role=\"tab\" aria-controls=\"tab_item-0\"><span class=\"resp-arrow\"></span>Description</h2><div class=\"tab1 resp-tab-content resp-tab-content-active\" aria-labelledby=\"tab_item-0\" style=\"display:block\">

                        <div class=\"single_page_agile_its_w3ls\">
                        <p>";
        // line 120
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 120, $this->source); })()), "teknikozellikler", array());
        echo "</p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-1\"><span class=\"resp-arrow\"></span>Reviews</h2><div class=\"tab2 resp-tab-content\" aria-labelledby=\"tab_item-1\">

                        <div class=\"single_page_agile_its_w3ls\">
                            <p>";
        // line 127
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 127, $this->source); })()), "digerozellikler", array());
        echo "</p>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //new_arrivals -->
        <!--/slider_owl-->


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        echo twig_include($this->env, $context, "home/_footer.html.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/products/product-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 143,  287 => 127,  277 => 120,  241 => 87,  236 => 86,  230 => 84,  228 => 83,  209 => 67,  185 => 46,  181 => 45,  166 => 32,  160 => 31,  158 => 30,  151 => 28,  144 => 27,  139 => 26,  137 => 25,  123 => 15,  114 => 14,  101 => 11,  92 => 10,  80 => 7,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontbase.html.twig' %}

{% block title %}Mert Bilgisayar Anasayfa{% endblock %}

{% block header %}
    {{ include ('home/_header.html.twig') }}
    {{ include ('alerts.html.twig') }}
{% endblock %}

{% block menu %}
    {{ include ('home/_menu.html.twig') }}
{% endblock %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('home') }}/css/flexslider.css\" type=\"text/css\" media=\"screen\">
    <div style=\"padding: 40px\" class=\"container\">
        <div class=\"col-md-4 single-right-left \">
            <div class=\"grid images_3_of_2\">
                <div class=\"flexslider\">


                    <div class=\"clearfix\"></div>
                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-273px, 0px, 0px);\">
                            {% set sayac = 1 %}
                            {% for resim in resimler %}
                                <li data-thumb=\"{{ asset('uploads') }}/images/{{ resim.resim }}\" class=\"clone\" aria-hidden=\"true\" style=\"width: 273px; float: left; display: block;\">
                                    <div style=\"height: 100%;\" class=\"thumb-image\"> <img src=\"{{ asset('uploads') }}/images/{{ resim.resim }}\" data-imagezoom=\"true\" class=\"img-responsive\" draggable=\"false\"> </div>
                                </li>
                                {% set sayac = sayac + 1 %}
                            {% endfor %}
                        </ul>
                    </div>

                    <ul class=\"flex-direction-nav\">
                        <li class=\"flex-nav-prev\">
                            <a class=\"flex-prev\" href=\"#\">Önceki</a>
                        </li>
                        <li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Sonraki</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-8 single-right-left simpleCart_shelfItem\">
            <h3>{{ product.urunadi }}</h3>
            <p><span class=\"item_price\">{{ product.fiyat }}</span> ₺</p>
            <div class=\"rating1\">
\t\t\t\t\t\t<span class=\"starRating\">
\t\t\t\t\t\t\t<input id=\"rating5\" type=\"radio\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t<label for=\"rating5\">5</label>
\t\t\t\t\t\t\t<input id=\"rating4\" type=\"radio\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t<label for=\"rating4\">4</label>
\t\t\t\t\t\t\t<input id=\"rating3\" type=\"radio\" name=\"rating\" value=\"3\" checked=\"\">
\t\t\t\t\t\t\t<label for=\"rating3\">3</label>
\t\t\t\t\t\t\t<input id=\"rating2\" type=\"radio\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t<label for=\"rating2\">2</label>
\t\t\t\t\t\t\t<input id=\"rating1\" type=\"radio\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t<label for=\"rating1\">1</label>
\t\t\t\t\t\t</span>
            </div>


            <form action=\"#\" method=\"post\">
            <div class=\"color-quality\">
                <div class=\"color-quality-right\">
                    <h5>Quantity :</h5>
                    <input type=\"number\" value=\"1\" max=\"{{ product.stok }}\" id=\"shopcart_quantity\" style=\"width:40px;\" name=\"shopcart[quantity]\" required=\"required\">

                </div>
            </div>


                <div class=\"occasion-cart\">
                <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">


                            <input type=\"submit\" name=\"submit\" value=\"Add to Cart\" class=\"button\">


                </div>

            </div>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <input type=\"hidden\" id=\"shopcart_userid\" name=\"shopcart[userid]\" required=\"required\" value=\"{{ app.user.id }}\">
                {% endif %}
                <input type=\"hidden\" id=\"shopcart_productid\" name=\"shopcart[productid]\" required=\"required\" value=\"{{ product.id }}\">
                <input type=\"hidden\" id=\"shopcart__token\" name=\"token\" value=\"{{ csrf_token('shopcart-token') }}\">
            </form>

            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls\">
                <li class=\"share\">Ürünü Paylaşın : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>

        </div>
        <div class=\"clearfix\"> </div>
        <!-- /new_arrivals -->
        <div class=\"responsive_tabs_agileits\">
            <div id=\"horizontalTab\" style=\"display: block; width: 100%; margin: 0px;\">
                <ul class=\"resp-tabs-list\">
                    <li class=\"resp-tab-item resp-tab-active\" aria-controls=\"tab_item-0\" role=\"tab\">Teknik Özellikler</li>
                    <li class=\"resp-tab-item\" aria-controls=\"tab_item-1\" role=\"tab\">Diğer Özellikler</li>
                </ul>
                <div class=\"resp-tabs-container\">
                    <!--/tab_one-->
                    <h2 class=\"resp-accordion resp-tab-active\" role=\"tab\" aria-controls=\"tab_item-0\"><span class=\"resp-arrow\"></span>Description</h2><div class=\"tab1 resp-tab-content resp-tab-content-active\" aria-labelledby=\"tab_item-0\" style=\"display:block\">

                        <div class=\"single_page_agile_its_w3ls\">
                        <p>{{ product.teknikozellikler|raw }}</p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-1\"><span class=\"resp-arrow\"></span>Reviews</h2><div class=\"tab2 resp-tab-content\" aria-labelledby=\"tab_item-1\">

                        <div class=\"single_page_agile_its_w3ls\">
                            <p>{{ product.digerozellikler|raw }}</p>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //new_arrivals -->
        <!--/slider_owl-->


    </div>

{% endblock %}

{% block footer %} {{ include ('home/_footer.html.twig') }}{% endblock %}", "home/products/product-detail.html.twig", "/opt/lampp/htdocs/shivaphp/templates/home/products/product-detail.html.twig");
    }
}
