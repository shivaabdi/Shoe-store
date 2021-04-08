<?php

/* home/shopcart/show.html.twig */
class __TwigTemplate_3c2a7437400e876600f96c299b31376f16ec477cf7696b2a9a6b889e00d302c4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/shopcart/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/shopcart/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/shopcart/show.html.twig"));

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

        echo "Shopcart";
        
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
        echo "    <h1>Shopcart</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 16, $this->source); })()), "userid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 20, $this->source); })()), "productid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 24, $this->source); })()), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 28, $this->source); })()), "createdAt", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 28, $this->source); })()), "createdAt", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Update_at</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 32, $this->source); })()), "updateAt", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 32, $this->source); })()), "updateAt", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["shopcart"]) || array_key_exists("shopcart", $context) ? $context["shopcart"] : (function () { throw new Twig_Error_Runtime('Variable "shopcart" does not exist.', 39, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "shopcart/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/shopcart/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  128 => 39,  123 => 37,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Shopcart{% endblock %}

{% block body %}
    <h1>Shopcart</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ shopcart.id }}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ shopcart.userid }}</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>{{ shopcart.productid }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ shopcart.quantity }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ shopcart.createdAt ? shopcart.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Update_at</th>
                <td>{{ shopcart.updateAt ? shopcart.updateAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('shopcart_index') }}\">back to list</a>

    <a href=\"{{ path('shopcart_edit', {'id': shopcart.id}) }}\">edit</a>

    {{ include('shopcart/_delete_form.html.twig') }}
{% endblock %}
", "home/shopcart/show.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\home\\shopcart\\show.html.twig");
    }
}
