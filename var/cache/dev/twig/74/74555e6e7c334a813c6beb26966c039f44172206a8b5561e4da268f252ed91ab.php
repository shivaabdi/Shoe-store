<?php

/* home/myaccount/accountedit.html.twig */
class __TwigTemplate_a3b61664773e4a5611a38d9ce3615a9f534ee227e5d4b05220ced1b150c2b593 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "home/myaccount/accountedit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/myaccount/accountedit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/myaccount/accountedit.html.twig"));

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
        echo "    ";
        echo twig_include($this->env, $context, "alerts.html.twig");
        echo "
    <div style=\"background: white\" class=\"contact-form\">
        <form name=\"user\" method=\"post\">
            <div id=\"user\">
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_name\">??sim</label>
                    <input style=\"color:black;\" type=\"text\" id=\"user_name\" name=\"user[name]\" maxlength=\"50\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "name", array()), "html", null, true);
        echo "\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_address\">Adres</label>
                    <input style=\"color:black;\"type=\"text\" id=\"user_address\" name=\"user[address]\" maxlength=\"255\"
                           value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "address", array()), "html", null, true);
        echo "\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_phone\">Telefon</label
                    ><input style=\"color:black;\" type=\"text\" id=\"user_phone\" name=\"user[phone]\" maxlength=\"255\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_password\" class=\"required\">??ifre</label>
                    <input style=\"width:99.5%;font-size:120%;height:35px;\" type=\"password\" id=\"user_password\"
                           name=\"user[password]\" required=\"required\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "password", array()), "html", null, true);
        echo "\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_city\">??ehir</label>
                    <select style=\"color:#444;font-weight: bolder;font-size:120%;width:99.5%;height:35px\"
                            name=\"user[city]\">
                        <option value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "city", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "city", array()), "html", null, true);
        echo "</option>
                        <option value=\"??stanbul\">??stanbul</option>
                        <option value=\"Ankara\">Ankara</option>
                        <option value=\"??zmir\">??zmir</option>
                        <option value=\"Adana\">Adana</option>
                        <option value=\"Ad??yaman\">Ad??yaman</option>
                        <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                        <option value=\"A??r??\">A??r??</option>
                        <option value=\"Aksaray\">Aksaray</option>
                        <option value=\"Amasya\">Amasya</option>
                        <option value=\"Antalya\">Antalya</option>
                        <option value=\"Ardahan\">Ardahan</option>
                        <option value=\"Artvin\">Artvin</option>
                        <option value=\"Ayd??n\">Ayd??n</option>
                        <option value=\"Bal??kesir\">Bal??kesir</option>
                        <option value=\"Bart??n\">Bart??n</option>
                        <option value=\"Batman\">Batman</option>
                        <option value=\"Bayburt\">Bayburt</option>
                        <option value=\"Bilecik\">Bilecik</option>
                        <option value=\"Bing??l\">Bing??l</option>
                        <option value=\"Bitlis\">Bitlis</option>
                        <option value=\"Bolu\">Bolu</option>
                        <option value=\"Burdur\">Burdur</option>
                        <option value=\"Bursa\">Bursa</option>
                        <option value=\"??anakkale\">??anakkale</option>
                        <option value=\"??ank??r??\">??ank??r??</option>
                        <option value=\"??orum\">??orum</option>
                        <option value=\"Denizli\">Denizli</option>
                        <option value=\"Diyarbak??r\">Diyarbak??r</option>
                        <option value=\"D??zce\">D??zce</option>
                        <option value=\"Edirne\">Edirne</option>
                        <option value=\"Elaz????\">Elaz????</option>
                        <option value=\"Erzincan\">Erzincan</option>
                        <option value=\"Erzurum\">Erzurum</option>
                        <option value=\"Eski??ehir\">Eski??ehir</option>
                        <option value=\"Gaziantep\">Gaziantep</option>
                        <option value=\"Giresun\">Giresun</option>
                        <option value=\"G??m????hane\">G??m????hane</option>
                        <option value=\"Hakk??ri\">Hakk??ri</option>
                        <option value=\"Hatay\">Hatay</option>
                        <option value=\"I??d??r\">I??d??r</option>
                        <option value=\"Isparta\">Isparta</option>
                        <option value=\"Kahramanmara??\">Kahramanmara??</option>
                        <option value=\"Karab??k\">Karab??k</option>
                        <option value=\"Karaman\">Karaman</option>
                        <option value=\"Kars\">Kars</option>
                        <option value=\"Kastamonu\">Kastamonu</option>
                        <option value=\"Kayseri\">Kayseri</option>
                        <option value=\"K??r??kkale\">K??r??kkale</option>
                        <option value=\"K??rklareli\">K??rklareli</option>
                        <option value=\"K??r??ehir\">K??r??ehir</option>
                        <option value=\"Kilis\">Kilis</option>
                        <option value=\"Kocaeli\">Kocaeli</option>
                        <option value=\"Konya\">Konya</option>
                        <option value=\"K??tahya\">K??tahya</option>
                        <option value=\"Malatya\">Malatya</option>
                        <option value=\"Manisa\">Manisa</option>
                        <option value=\"Mardin\">Mardin</option>
                        <option value=\"Mersin\">Mersin</option>
                        <option value=\"Mu??la\">Mu??la</option>
                        <option value=\"Mu??\">Mu??</option>
                        <option value=\"Nev??ehir\">Nev??ehir</option>
                        <option value=\"Ni??de\">Ni??de</option>
                        <option value=\"Ordu\">Ordu</option>
                        <option value=\"Osmaniye\">Osmaniye</option>
                        <option value=\"Rize\">Rize</option>
                        <option value=\"Sakarya\">Sakarya</option>
                        <option value=\"Samsun\">Samsun</option>
                        <option value=\"Siirt\">Siirt</option>
                        <option value=\"Sinop\">Sinop</option>
                        <option value=\"Sivas\">Sivas</option>
                        <option value=\"????rnak\">????rnak</option>
                        <option value=\"Tekirda??\">Tekirda??</option>
                        <option value=\"Tokat\">Tokat</option>
                        <option value=\"Trabzon\">Trabzon</option>
                        <option value=\"Tunceli\">Tunceli</option>
                        <option value=\"??anl??urfa\">??anl??urfa</option>
                        <option value=\"U??ak\">U??ak</option>
                        <option value=\"Van\">Van</option>
                        <option value=\"Yalova\">Yalova</option>
                        <option value=\"Yozgat\">Yozgat</option>
                        <option value=\"Zonguldak\">Zonguldak</option>
                    </select>
                </div>
                <input value=\"Kaydet\" type=\"submit\" class=\"btn\">

            </div>
            <input type=\"hidden\" id=\"user_email\" name=\"role\" required=\"required\" maxlength=\"180\"
                   value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 131, $this->source); })()), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"user_email\" name=\"user[status]\" required=\"required\" maxlength=\"180\"
                   value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 133, $this->source); })()), "status", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\"
                   value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 135, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"user__token\" name=\"token\"
                   value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("useredit-form"), "html", null, true);
        echo "\">
    </div>
    </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
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
        return "home/myaccount/accountedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 144,  274 => 137,  269 => 135,  264 => 133,  259 => 131,  166 => 43,  157 => 37,  149 => 32,  142 => 28,  134 => 23,  124 => 17,  115 => 16,  101 => 11,  92 => 10,  80 => 7,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
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
    {{ include('alerts.html.twig') }}
    <div style=\"background: white\" class=\"contact-form\">
        <form name=\"user\" method=\"post\">
            <div id=\"user\">
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_name\">??sim</label>
                    <input style=\"color:black;\" type=\"text\" id=\"user_name\" name=\"user[name]\" maxlength=\"50\" value=\"{{ user.name }}\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_address\">Adres</label>
                    <input style=\"color:black;\"type=\"text\" id=\"user_address\" name=\"user[address]\" maxlength=\"255\"
                           value=\"{{ user.address }}\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_phone\">Telefon</label
                    ><input style=\"color:black;\" type=\"text\" id=\"user_phone\" name=\"user[phone]\" maxlength=\"255\" value=\"{{ user.phone }}\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_password\" class=\"required\">??ifre</label>
                    <input style=\"width:99.5%;font-size:120%;height:35px;\" type=\"password\" id=\"user_password\"
                           name=\"user[password]\" required=\"required\" value=\"{{ user.password }}\">
                </div>
                <div>
                    <label style=\"font-weight:bolder;color:#444;\" for=\"user_city\">??ehir</label>
                    <select style=\"color:#444;font-weight: bolder;font-size:120%;width:99.5%;height:35px\"
                            name=\"user[city]\">
                        <option value=\"{{ user.city }}\">{{ user.city }}</option>
                        <option value=\"??stanbul\">??stanbul</option>
                        <option value=\"Ankara\">Ankara</option>
                        <option value=\"??zmir\">??zmir</option>
                        <option value=\"Adana\">Adana</option>
                        <option value=\"Ad??yaman\">Ad??yaman</option>
                        <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                        <option value=\"A??r??\">A??r??</option>
                        <option value=\"Aksaray\">Aksaray</option>
                        <option value=\"Amasya\">Amasya</option>
                        <option value=\"Antalya\">Antalya</option>
                        <option value=\"Ardahan\">Ardahan</option>
                        <option value=\"Artvin\">Artvin</option>
                        <option value=\"Ayd??n\">Ayd??n</option>
                        <option value=\"Bal??kesir\">Bal??kesir</option>
                        <option value=\"Bart??n\">Bart??n</option>
                        <option value=\"Batman\">Batman</option>
                        <option value=\"Bayburt\">Bayburt</option>
                        <option value=\"Bilecik\">Bilecik</option>
                        <option value=\"Bing??l\">Bing??l</option>
                        <option value=\"Bitlis\">Bitlis</option>
                        <option value=\"Bolu\">Bolu</option>
                        <option value=\"Burdur\">Burdur</option>
                        <option value=\"Bursa\">Bursa</option>
                        <option value=\"??anakkale\">??anakkale</option>
                        <option value=\"??ank??r??\">??ank??r??</option>
                        <option value=\"??orum\">??orum</option>
                        <option value=\"Denizli\">Denizli</option>
                        <option value=\"Diyarbak??r\">Diyarbak??r</option>
                        <option value=\"D??zce\">D??zce</option>
                        <option value=\"Edirne\">Edirne</option>
                        <option value=\"Elaz????\">Elaz????</option>
                        <option value=\"Erzincan\">Erzincan</option>
                        <option value=\"Erzurum\">Erzurum</option>
                        <option value=\"Eski??ehir\">Eski??ehir</option>
                        <option value=\"Gaziantep\">Gaziantep</option>
                        <option value=\"Giresun\">Giresun</option>
                        <option value=\"G??m????hane\">G??m????hane</option>
                        <option value=\"Hakk??ri\">Hakk??ri</option>
                        <option value=\"Hatay\">Hatay</option>
                        <option value=\"I??d??r\">I??d??r</option>
                        <option value=\"Isparta\">Isparta</option>
                        <option value=\"Kahramanmara??\">Kahramanmara??</option>
                        <option value=\"Karab??k\">Karab??k</option>
                        <option value=\"Karaman\">Karaman</option>
                        <option value=\"Kars\">Kars</option>
                        <option value=\"Kastamonu\">Kastamonu</option>
                        <option value=\"Kayseri\">Kayseri</option>
                        <option value=\"K??r??kkale\">K??r??kkale</option>
                        <option value=\"K??rklareli\">K??rklareli</option>
                        <option value=\"K??r??ehir\">K??r??ehir</option>
                        <option value=\"Kilis\">Kilis</option>
                        <option value=\"Kocaeli\">Kocaeli</option>
                        <option value=\"Konya\">Konya</option>
                        <option value=\"K??tahya\">K??tahya</option>
                        <option value=\"Malatya\">Malatya</option>
                        <option value=\"Manisa\">Manisa</option>
                        <option value=\"Mardin\">Mardin</option>
                        <option value=\"Mersin\">Mersin</option>
                        <option value=\"Mu??la\">Mu??la</option>
                        <option value=\"Mu??\">Mu??</option>
                        <option value=\"Nev??ehir\">Nev??ehir</option>
                        <option value=\"Ni??de\">Ni??de</option>
                        <option value=\"Ordu\">Ordu</option>
                        <option value=\"Osmaniye\">Osmaniye</option>
                        <option value=\"Rize\">Rize</option>
                        <option value=\"Sakarya\">Sakarya</option>
                        <option value=\"Samsun\">Samsun</option>
                        <option value=\"Siirt\">Siirt</option>
                        <option value=\"Sinop\">Sinop</option>
                        <option value=\"Sivas\">Sivas</option>
                        <option value=\"????rnak\">????rnak</option>
                        <option value=\"Tekirda??\">Tekirda??</option>
                        <option value=\"Tokat\">Tokat</option>
                        <option value=\"Trabzon\">Trabzon</option>
                        <option value=\"Tunceli\">Tunceli</option>
                        <option value=\"??anl??urfa\">??anl??urfa</option>
                        <option value=\"U??ak\">U??ak</option>
                        <option value=\"Van\">Van</option>
                        <option value=\"Yalova\">Yalova</option>
                        <option value=\"Yozgat\">Yozgat</option>
                        <option value=\"Zonguldak\">Zonguldak</option>
                    </select>
                </div>
                <input value=\"Kaydet\" type=\"submit\" class=\"btn\">

            </div>
            <input type=\"hidden\" id=\"user_email\" name=\"role\" required=\"required\" maxlength=\"180\"
                   value=\"{{ user.roles[0] }}\">
            <input type=\"hidden\" id=\"user_email\" name=\"user[status]\" required=\"required\" maxlength=\"180\"
                   value=\"{{ user.status }}\">
            <input type=\"hidden\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\"
                   value=\"{{ user.email }}\">
            <input type=\"hidden\" id=\"user__token\" name=\"token\"
                   value=\"{{ csrf_token('useredit-form') }}\">
    </div>
    </form>
    </div>

{% endblock %}

{% block footer %} {{ include ('home/_footer.html.twig') }} {% endblock %}", "home/myaccount/accountedit.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\home\\myaccount\\accountedit.html.twig");
    }
}
