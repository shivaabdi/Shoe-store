<?php

/* orders/show.html.twig */
class __TwigTemplate_8e49847ec132e97b82dbb3aaffaae8943eac8a7c330f33131f4dbaa797be8066 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "orders/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

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

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    <style>
        @media screen and (max-width: 580px) {
            body {
                font-size: 16px;
                line-height: 22px;
            }
        }

        .wrapper {
            margin: 0 auto;
            padding: 40px;
            max-width: 800px;
        }

        .table {
            margin: 0 0 40px 0;
            width: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            display: table;
        }

        @media screen and (max-width: 580px) {
            .table {
                display: block;
            }
        }

        .row {
            display: table-row;
            background: #f6f6f6;
        }

        .row:nth-of-type(odd) {
            background: #e9e9e9;
        }

        .row.header {
            font-weight: 900;
            color: #ffffff;
            background: #2fdab8;
        }

        .row.green {
            background: #27ae60;
        }

        .row.blue {
            background: #2980b9;
        }

        @media screen and (max-width: 580px) {
            .row {
                padding: 14px 0 7px;
                display: block;
            }

            .row.header {
                padding: 0;
                height: 6px;
            }

            .row.header .cell {
                display: none;
            }

            .row .cell {
                margin-bottom: 10px;
            }

            .row .cell:before {
                margin-bottom: 3px;
                content: attr(data-title);
                min-width: 98px;
                font-size: 10px;
                line-height: 10px;
                font-weight: bold;
                text-transform: uppercase;
                color: #969696;
                display: block;
            }
        }

        .cell {
            padding: 6px 12px;
            display: table-cell;
        }

        @media screen and (max-width: 580px) {
            .cell {
                padding: 2px 16px;
                display: block;
            }
        }
    </style>
    <link href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<div style=\"padding:30px\" class=\"content\">
    <table style=\"font-weight: bolder;font-size: 120%\" class=\"table\">
        <tbody>
            <tr>
                <th>Sipariş Kodu</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 117, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kullanıcı Kodu</th>
                <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 121, $this->source); })()), "userid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>İsim</th>
                <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 125, $this->source); })()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tutar</th>
                <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 129, $this->source); })()), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 133, $this->source); })()), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Şehir</th>
                <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 137, $this->source); })()), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefon</th>
                <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 141, $this->source); })()), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Teslimat Bilgileri</th>
                <td>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 145, $this->source); })()), "shipinfo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sipariş Durumu</th>
                <td>";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 149, $this->source); })()), "status", array()) == "new")) {
            // line 150
            echo "                        Yeni
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 151
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 151, $this->source); })()), "status", array()) == "accepted")) {
            // line 152
            echo "                        Onaylandı
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 153
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 153, $this->source); })()), "status", array()) == "onshipping")) {
            // line 154
            echo "                        Kargoda
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 155
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 155, $this->source); })()), "status", array()) == "canceled")) {
            // line 156
            echo "                        İptal Edildi
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 157
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 157, $this->source); })()), "status", array()) == "completed")) {
            // line 158
            echo "                        Tamamlandı
                    ";
        }
        // line 159
        echo "</td>
            </tr>
            ";
        // line 162
        echo "                ";
        // line 163
        echo "                ";
        // line 164
        echo "            ";
        // line 165
        echo "            ";
        // line 166
        echo "                ";
        // line 167
        echo "                ";
        // line 168
        echo "            ";
        // line 169
        echo "            <tr>
                <th>Note</th>
                <td>";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 171, $this->source); })()), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <div class=\"table\">
        <div class=\"row header\">
            <div class=\"cell\">
                Ürün Adı
            </div>
            <div class=\"cell\">
                Ürün Kodu
            </div>
            <div class=\"cell\">
                Fiyat
            </div>
            <div class=\"cell\">
                Adet
            </div>
            <div class=\"cell\">
                Toplam Fiyat
            </div>
        </div>
        ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new Twig_Error_Runtime('Variable "details" does not exist.', 195, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 196
            echo "            <div class=\"row\">
                <div class=\"cell\" data-title=\"Ürün Fiyatı\">
                    <span style=\"font-weight: bolder \">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "name", array()), "html", null, true);
            echo "</span>
                </div>
                <div class=\"cell\" data-title=\"Ürün Adedi\">
                    <span style=\"font-weight: bolder \">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "productid", array()), "html", null, true);
            echo "</span>
                </div>
                <div class=\"cell\" data-title=\"Toplam\">
                    <span style=\"font-weight: bolder \">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", array()), "html", null, true);
            echo "</span>
                </div>
                <div class=\"cell\" data-title=\"Toplam\">
                    <span style=\"font-weight: bolder \">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", array()), "html", null, true);
            echo "</span>
                </div>
                <div class=\"cell\" data-title=\"Occupation\">
                    <span style=\"font-weight: bolder \">";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "amount", array()), "html", null, true);
            echo "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "    </div>

    <div style=\"margin-left:-50px;background: white\" class=\"contact-form\">
    <a href=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_index");
        echo "\"><input type=\"submit\" value=\"Geri Dön\"></a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        echo twig_include($this->env, $context, "home/_footer.html.twig");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orders/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 221,  407 => 217,  402 => 214,  392 => 210,  386 => 207,  380 => 204,  374 => 201,  368 => 198,  364 => 196,  360 => 195,  333 => 171,  329 => 169,  327 => 168,  325 => 167,  323 => 166,  321 => 165,  319 => 164,  317 => 163,  315 => 162,  311 => 159,  307 => 158,  305 => 157,  302 => 156,  300 => 155,  297 => 154,  295 => 153,  292 => 152,  290 => 151,  287 => 150,  285 => 149,  278 => 145,  271 => 141,  264 => 137,  257 => 133,  250 => 129,  243 => 125,  236 => 121,  229 => 117,  220 => 111,  124 => 17,  115 => 16,  101 => 11,  92 => 10,  80 => 7,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
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
    <style>
        @media screen and (max-width: 580px) {
            body {
                font-size: 16px;
                line-height: 22px;
            }
        }

        .wrapper {
            margin: 0 auto;
            padding: 40px;
            max-width: 800px;
        }

        .table {
            margin: 0 0 40px 0;
            width: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            display: table;
        }

        @media screen and (max-width: 580px) {
            .table {
                display: block;
            }
        }

        .row {
            display: table-row;
            background: #f6f6f6;
        }

        .row:nth-of-type(odd) {
            background: #e9e9e9;
        }

        .row.header {
            font-weight: 900;
            color: #ffffff;
            background: #2fdab8;
        }

        .row.green {
            background: #27ae60;
        }

        .row.blue {
            background: #2980b9;
        }

        @media screen and (max-width: 580px) {
            .row {
                padding: 14px 0 7px;
                display: block;
            }

            .row.header {
                padding: 0;
                height: 6px;
            }

            .row.header .cell {
                display: none;
            }

            .row .cell {
                margin-bottom: 10px;
            }

            .row .cell:before {
                margin-bottom: 3px;
                content: attr(data-title);
                min-width: 98px;
                font-size: 10px;
                line-height: 10px;
                font-weight: bold;
                text-transform: uppercase;
                color: #969696;
                display: block;
            }
        }

        .cell {
            padding: 6px 12px;
            display: table-cell;
        }

        @media screen and (max-width: 580px) {
            .cell {
                padding: 2px 16px;
                display: block;
            }
        }
    </style>
    <link href=\"{{ asset('admin') }}/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<div style=\"padding:30px\" class=\"content\">
    <table style=\"font-weight: bolder;font-size: 120%\" class=\"table\">
        <tbody>
            <tr>
                <th>Sipariş Kodu</th>
                <td>{{ order.id }}</td>
            </tr>
            <tr>
                <th>Kullanıcı Kodu</th>
                <td>{{ order.userid }}</td>
            </tr>
            <tr>
                <th>İsim</th>
                <td>{{ order.name }}</td>
            </tr>
            <tr>
                <th>Tutar</th>
                <td>{{ order.amount }}</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>{{ order.address }}</td>
            </tr>
            <tr>
                <th>Şehir</th>
                <td>{{ order.city }}</td>
            </tr>
            <tr>
                <th>Telefon</th>
                <td>{{ order.phone }}</td>
            </tr>
            <tr>
                <th>Teslimat Bilgileri</th>
                <td>{{ order.shipinfo }}</td>
            </tr>
            <tr>
                <th>Sipariş Durumu</th>
                <td>{% if order.status == \"new\" %}
                        Yeni
                    {% elseif order.status == \"accepted\" %}
                        Onaylandı
                    {% elseif order.status == \"onshipping\" %}
                        Kargoda
                    {% elseif order.status == \"canceled\" %}
                        İptal Edildi
                    {% elseif order.status == \"completed\" %}
                        Tamamlandı
                    {% endif %}</td>
            </tr>
            {#<tr>#}
                {#<th>Update_at</th>#}
                {#<td>{{ order.updateAt ? order.updateAt|date('Y-m-d H:i:s') : '' }}</td>#}
            {#</tr>#}
            {#<tr>#}
                {#<th>Created_at</th>#}
                {#<td>{{ order.createdAt ? order.createdAt|date('Y-m-d H:i:s') : '' }}</td>#}
            {#</tr>#}
            <tr>
                <th>Note</th>
                <td>{{ order.note }}</td>
            </tr>
        </tbody>
    </table>


    <div class=\"table\">
        <div class=\"row header\">
            <div class=\"cell\">
                Ürün Adı
            </div>
            <div class=\"cell\">
                Ürün Kodu
            </div>
            <div class=\"cell\">
                Fiyat
            </div>
            <div class=\"cell\">
                Adet
            </div>
            <div class=\"cell\">
                Toplam Fiyat
            </div>
        </div>
        {% for detail in details %}
            <div class=\"row\">
                <div class=\"cell\" data-title=\"Ürün Fiyatı\">
                    <span style=\"font-weight: bolder \">{{ detail.name }}</span>
                </div>
                <div class=\"cell\" data-title=\"Ürün Adedi\">
                    <span style=\"font-weight: bolder \">{{ detail.productid }}</span>
                </div>
                <div class=\"cell\" data-title=\"Toplam\">
                    <span style=\"font-weight: bolder \">{{ detail.price }}</span>
                </div>
                <div class=\"cell\" data-title=\"Toplam\">
                    <span style=\"font-weight: bolder \">{{ detail.quantity }}</span>
                </div>
                <div class=\"cell\" data-title=\"Occupation\">
                    <span style=\"font-weight: bolder \">{{ detail.amount }}</span>
                </div>
            </div>
        {% endfor %}
    </div>

    <div style=\"margin-left:-50px;background: white\" class=\"contact-form\">
    <a href=\"{{ path('orders_index') }}\"><input type=\"submit\" value=\"Geri Dön\"></a>
    </div>
</div>
{% endblock %}
{% block footer %} {{ include ('home/_footer.html.twig') }} {% endblock %}", "orders/show.html.twig", "/opt/lampp/htdocs/shivaphp/templates/orders/show.html.twig");
    }
}
