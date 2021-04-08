<?php

/* admin/orders/show.html.twig */
class __TwigTemplate_cdd4217631bfc0396d691b50e63989d3da3bbd36b25adca2cbcba299b7a88050 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/orders/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/orders/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/orders/show.html.twig"));

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

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
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
            background: #E4292F;
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
    <div style=\"margin-top:-100px;padding-bottom:0;padding-top: 5px\" class=\"content-panel\">
        ";
        // line 102
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
        <h4><i class=\"fa fa-angle-right\"></i> Sipariş Detayı</h4>
        <form name=\"orders\" method=\"post\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Sipariş No</th>
                    <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 109, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Kullanıcı Kodu</th>
                    <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 113, $this->source); })()), "userid", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Müşteri Adı</th>
                    <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 117, $this->source); })()), "name", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Tutar</th>
                    <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 121, $this->source); })()), "amount", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adres</th>
                    <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 125, $this->source); })()), "address", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Şehir</th>
                    <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 129, $this->source); })()), "city", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Telefon</th>
                    <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 133, $this->source); })()), "phone", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teslimat Durumu</th>
                    <td><input type=\"text\" id=\"orders_shipinfo\"
                               name=\"orders[shipinfo]\" maxlength=\"255\"
                               value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 139, $this->source); })()), "shipinfo", array()), "html", null, true);
        echo "\">
                    </td>
                </tr>
                ";
        // line 143
        echo "                ";
        // line 144
        echo "                ";
        // line 145
        echo "                ";
        // line 146
        echo "                ";
        // line 147
        echo "                ";
        // line 148
        echo "                ";
        // line 149
        echo "                ";
        // line 150
        echo "                <tr>
                    <th>Notu</th>
                    <td>
                        <input type=\"text\" id=\"orders_note\" name=\"orders[note]\"
                               maxlength=\"255\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 154, $this->source); })()), "note", array()), "html", null, true);
        echo "\">

                    </td>
                </tr>
                <tr>
                    <th>Sipariş Durumu</th>
                    <td><select name=\"orders[status]\" class=\"form-control\">
                            <option value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 161, $this->source); })()), "status", array()), "html", null, true);
        echo "\">
                                ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 162, $this->source); })()), "status", array()) == "new")) {
            echo " Yeni
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 163
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 163, $this->source); })()), "status", array()) == "accepted")) {
            echo " Onaylandı
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 164
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 164, $this->source); })()), "status", array()) == "inshipping")) {
            echo " Kargoda
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 165
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 165, $this->source); })()), "status", array()) == "canceled")) {
            echo " İptal Edildi
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 166
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 166, $this->source); })()), "status", array()) == "completed")) {
            echo " Tamamlandı
                                ";
        }
        // line 168
        echo "                                </option>
                            <option value=\"new\">Yeni</option>
                            <option value=\"accepted\">Onaylandı</option>
                            <option value=\"inshipping\">Kargoda</option>
                            <option value=\"canceled\">İptal Edildi</option>
                            <option value=\"completed\">Tamamlandı</option>
                        </select></td>
                </tr>
                <tr>
                    <th><button class=\"btn btn-primary\">Güncelle</button></th>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>
            <h4 style=\"margin-top:-25px\"><i class=\"fa fa-angle-right\"></i> Ürünler</h4>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Ürün Kodu</th>
                    <th>Fiyat</th>
                    <th>Adet</th>
                    <th>Toplam Fiyat</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new Twig_Error_Runtime('Variable "details" does not exist.', 195, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 196
            echo "                    <tr>
                        <td>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "productid", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "amount", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                </tbody>
            </table>
            <input type=\"hidden\"  name=\"orders[userid]\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 206, $this->source); })()), "userid", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\"  name=\"orders[amount]\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 207, $this->source); })()), "amount", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\"  name=\"orders[name]\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 208, $this->source); })()), "name", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\"  name=\"orders[address]\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 209, $this->source); })()), "address", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\"  name=\"orders[city]\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 210, $this->source); })()), "city", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\"  name=\"orders[phone]\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 211, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">

            <input type=\"hidden\" id=\"orders__token\" name=\"orders[_token]\"
                   value=\"Lw_m6u8HKyC-ac10tJFQqRP2W5GAq2wu9RFGapQpwV0\">
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/orders/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 211,  372 => 210,  368 => 209,  364 => 208,  360 => 207,  356 => 206,  352 => 204,  343 => 201,  339 => 200,  335 => 199,  331 => 198,  327 => 197,  324 => 196,  320 => 195,  291 => 168,  286 => 166,  282 => 165,  278 => 164,  274 => 163,  270 => 162,  266 => 161,  256 => 154,  250 => 150,  248 => 149,  246 => 148,  244 => 147,  242 => 146,  240 => 145,  238 => 144,  236 => 143,  230 => 139,  221 => 133,  214 => 129,  207 => 125,  200 => 121,  193 => 117,  186 => 113,  179 => 109,  169 => 102,  72 => 7,  63 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}{{ title }}{% endblock %}


{% block content %}
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
            background: #E4292F;
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
    <div style=\"margin-top:-100px;padding-bottom:0;padding-top: 5px\" class=\"content-panel\">
        {{ include('alerts.html.twig') }}
        <h4><i class=\"fa fa-angle-right\"></i> Sipariş Detayı</h4>
        <form name=\"orders\" method=\"post\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Sipariş No</th>
                    <td>{{ order.id }}</td>
                </tr>
                <tr>
                    <th>Kullanıcı Kodu</th>
                    <td>{{ order.userid }}</td>
                </tr>
                <tr>
                    <th>Müşteri Adı</th>
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
                    <th>Teslimat Durumu</th>
                    <td><input type=\"text\" id=\"orders_shipinfo\"
                               name=\"orders[shipinfo]\" maxlength=\"255\"
                               value=\"{{ order.shipinfo }}\">
                    </td>
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
                    <th>Notu</th>
                    <td>
                        <input type=\"text\" id=\"orders_note\" name=\"orders[note]\"
                               maxlength=\"255\" value=\"{{ order.note }}\">

                    </td>
                </tr>
                <tr>
                    <th>Sipariş Durumu</th>
                    <td><select name=\"orders[status]\" class=\"form-control\">
                            <option value=\"{{ order.status }}\">
                                {% if order.status == \"new\" %} Yeni
                                {% elseif order.status == \"accepted\" %} Onaylandı
                                {% elseif order.status == \"inshipping\" %} Kargoda
                                {% elseif order.status == \"canceled\" %} İptal Edildi
                                {% elseif order.status == \"completed\" %} Tamamlandı
                                {% endif %}
                                </option>
                            <option value=\"new\">Yeni</option>
                            <option value=\"accepted\">Onaylandı</option>
                            <option value=\"inshipping\">Kargoda</option>
                            <option value=\"canceled\">İptal Edildi</option>
                            <option value=\"completed\">Tamamlandı</option>
                        </select></td>
                </tr>
                <tr>
                    <th><button class=\"btn btn-primary\">Güncelle</button></th>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>
            <h4 style=\"margin-top:-25px\"><i class=\"fa fa-angle-right\"></i> Ürünler</h4>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Ürün Kodu</th>
                    <th>Fiyat</th>
                    <th>Adet</th>
                    <th>Toplam Fiyat</th>
                </tr>
                </thead>
                <tbody>
                {% for detail in details %}
                    <tr>
                        <td>{{ detail.name }}</td>
                        <td>{{ detail.productid }}</td>
                        <td>{{ detail.price }}</td>
                        <td>{{ detail.quantity }}</td>
                        <td>{{ detail.amount }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <input type=\"hidden\"  name=\"orders[userid]\" value=\"{{ order.userid }}\">
            <input type=\"hidden\"  name=\"orders[amount]\" value=\"{{ order.amount }}\">
            <input type=\"hidden\"  name=\"orders[name]\" value=\"{{ order.name }}\">
            <input type=\"hidden\"  name=\"orders[address]\" value=\"{{ order.address }}\">
            <input type=\"hidden\"  name=\"orders[city]\" value=\"{{ order.city }}\">
            <input type=\"hidden\"  name=\"orders[phone]\" value=\"{{ order.phone }}\">

            <input type=\"hidden\" id=\"orders__token\" name=\"orders[_token]\"
                   value=\"Lw_m6u8HKyC-ac10tJFQqRP2W5GAq2wu9RFGapQpwV0\">
        </form>
    </div>
{% endblock %}
", "admin/orders/show.html.twig", "/opt/lampp/htdocs/shivaphp/templates/admin/orders/show.html.twig");
    }
}
