<?php

/* admin/orders/new.html.twig */
class __TwigTemplate_5eb49809f672f54a9d6f8c24fbdc9c2eb1fbfdcd2deba8881b521880d4c549a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "admin/orders/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'contenttop' => array($this, 'block_contenttop'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/orders/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/orders/new.html.twig"));

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

        echo "PHP Ödev";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " ";
        echo twig_include($this->env, $context, "home/_header.html.twig");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenttop($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenttop"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenttop"));

        echo twig_include($this->env, $context, "home/_contenttop.html.twig");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "<div class=\"contact-form\">
    <form name=\"orders\" method=\"post\">
        <div id=\"orders\">
            <div>
                <label for=\"orders_amount\">Tutar</label>
                <input type=\"text\" id=\"orders_amount\" name=\"orders[amount]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"orders_name\">İsim</label>
                <input type=\"text\" id=\"orders_name\" name=\"orders[name]\" maxlength=\"255\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "name", array()), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"orders_address\">Adres</label>
                <input type=\"text\" id=\"orders_address\" name=\"orders[address]\" maxlength=\"255\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "address", array()), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"orders_city\">Şehir</label>
                <input type=\"text\" id=\"orders_city\" name=\"orders[city]\" maxlength=\"255\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "city", array()), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"orders_phone\">Telefon</label>
                <input type=\"text\" id=\"orders_phone\" name=\"orders[phone]\" maxlength=\"255\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"orders_shipinfo\">Kargo Bilgileri</label>
                <input type=\"text\" id=\"orders_shipinfo\" name=\"orders[shipinfo]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"orders_note\">Not</label>
                <input type=\"text\" id=\"orders_note\" name=\"orders[note]\" maxlength=\"255\">
            </div>
            <input type=\"hidden\" id=\"orders__token\" name=\"orders[_token]\"
                   value=\"60IlC3JO_xv6Q62wjbsV9gNglzw9Fmt3xBaK6FKyNSI\">
            <input type=\"hidden\" id=\"orders_userid\" name=\"orders[userid]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"orders_status\" name=\"orders[status]\" maxlength=\"255\" value=\"true\">
            <span><input type=\"submit\" value=\"Sepeti Onayla\" class=\"myButton\"></span>

        </div>
    </form>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
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
        return "admin/orders/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 52,  164 => 43,  149 => 31,  142 => 27,  135 => 23,  128 => 19,  121 => 15,  114 => 10,  105 => 9,  86 => 7,  66 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontbase.html.twig' %}

{% block title %}PHP Ödev{% endblock %}

{% block navbar %} {{ include ('home/_header.html.twig') }} {% endblock %}

{% block contenttop %}{{ include ('home/_contenttop.html.twig') }} {% endblock %}

{% block main %}
<div class=\"contact-form\">
    <form name=\"orders\" method=\"post\">
        <div id=\"orders\">
            <div>
                <label for=\"orders_amount\">Tutar</label>
                <input type=\"text\" id=\"orders_amount\" name=\"orders[amount]\" value=\"{{ amount }}\">
            </div>
            <div>
                <label for=\"orders_name\">İsim</label>
                <input type=\"text\" id=\"orders_name\" name=\"orders[name]\" maxlength=\"255\" value=\"{{ user.name }}\">
            </div>
            <div>
                <label for=\"orders_address\">Adres</label>
                <input type=\"text\" id=\"orders_address\" name=\"orders[address]\" maxlength=\"255\" value=\"{{ user.address }}\">
            </div>
            <div>
                <label for=\"orders_city\">Şehir</label>
                <input type=\"text\" id=\"orders_city\" name=\"orders[city]\" maxlength=\"255\" value=\"{{ user.city }}\">
            </div>
            <div>
                <label for=\"orders_phone\">Telefon</label>
                <input type=\"text\" id=\"orders_phone\" name=\"orders[phone]\" maxlength=\"255\" value=\"{{ user.phone }}\">
            </div>
            <div>
                <label for=\"orders_shipinfo\">Kargo Bilgileri</label>
                <input type=\"text\" id=\"orders_shipinfo\" name=\"orders[shipinfo]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"orders_note\">Not</label>
                <input type=\"text\" id=\"orders_note\" name=\"orders[note]\" maxlength=\"255\">
            </div>
            <input type=\"hidden\" id=\"orders__token\" name=\"orders[_token]\"
                   value=\"60IlC3JO_xv6Q62wjbsV9gNglzw9Fmt3xBaK6FKyNSI\">
            <input type=\"hidden\" id=\"orders_userid\" name=\"orders[userid]\" value=\"{{ user.id }}\">
            <input type=\"hidden\" id=\"orders_status\" name=\"orders[status]\" maxlength=\"255\" value=\"true\">
            <span><input type=\"submit\" value=\"Sepeti Onayla\" class=\"myButton\"></span>

        </div>
    </form>
</div>

{% endblock %}
{% block footer %} {{ include ('home/_footer.html.twig') }} {% endblock %}", "admin/orders/new.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\orders\\new.html.twig");
    }
}
