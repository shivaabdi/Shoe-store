<?php

/* order_detail/show.html.twig */
class __TwigTemplate_6ea391f4cd483d99303765ac69a15a9d090408d54c288abab3632da183f8873c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order_detail/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_detail/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_detail/show.html.twig"));

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

        echo "OrderDetail";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>OrderDetail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Orderid</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 16, $this->source); })()), "orderid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 20, $this->source); })()), "userid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 24, $this->source); })()), "productid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 28, $this->source); })()), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 32, $this->source); })()), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 36, $this->source); })()), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 40, $this->source); })()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 44, $this->source); })()), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_detail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_detail_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order_detail"]) || array_key_exists("order_detail", $context) ? $context["order_detail"] : (function () { throw new Twig_Error_Runtime('Variable "order_detail" does not exist.', 51, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "order_detail/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order_detail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  149 => 51,  144 => 49,  136 => 44,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}OrderDetail{% endblock %}

{% block body %}
    <h1>OrderDetail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ order_detail.id }}</td>
            </tr>
            <tr>
                <th>Orderid</th>
                <td>{{ order_detail.orderid }}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ order_detail.userid }}</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>{{ order_detail.productid }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ order_detail.price }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ order_detail.quantity }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ order_detail.amount }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ order_detail.name }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ order_detail.status }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('order_detail_index') }}\">back to list</a>

    <a href=\"{{ path('order_detail_edit', {'id': order_detail.id}) }}\">edit</a>

    {{ include('order_detail/_delete_form.html.twig') }}
{% endblock %}
", "order_detail/show.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\order_detail\\show.html.twig");
    }
}
