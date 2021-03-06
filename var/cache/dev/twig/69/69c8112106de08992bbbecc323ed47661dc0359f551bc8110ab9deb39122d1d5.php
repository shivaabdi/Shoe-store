<?php

/* home/security/signup.html.twig */
class __TwigTemplate_1a01b3beabebd4d4e82df2e4584f927633227de90da10ef7732852991f60fe66 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontbase.html.twig", "home/security/signup.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/security/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/security/signup.html.twig"));

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
        echo "    <div class=\"content\">
<div style=\"background: white\" class=\"contact-form\">
    <form style=\"background: white\" name=\"user\" method=\"post\">
        <div id=\"user\">
            <div>
                <label for=\"user_name\">??sim</label>
                <input style=\"color:black\" type=\"text\" id=\"user_name\" name=\"user[name]\" maxlength=\"50\">
            </div>
            <div>
                <label for=\"user_email\" class=\"required\">E-Mail Adresi</label>
                <input style=\"color:black\" type=\"text\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\">
            </div>
            <div>
                <label for=\"user_password\" class=\"required\">??ifre</label>
                <input style=\"color:black\" type=\"text\" id=\"user_password\" name=\"user[password]\" required=\"required\">
            </div>
            <div>
                <label for=\"user_address\">Adres</label>
                <input style=\"color:black\" type=\"text\" id=\"user_address\" name=\"user[address]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"user_phone\">Telefon</label>
                <input style=\"color:black\" type=\"text\" id=\"user_phone\" name=\"user[phone]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"user_city\">??ehir</label>
                <select style=\"color:#444;font-weight: bolder;font-size:120%;width:99.5%;height:35px\" name=\"user[city]\">
                    <option value=\"\">??l Se??iniz</option>
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
            </div>

            <input type=\"hidden\" id=\"user__token\" name=\"token\"
                   value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("user-form"), "html", null, true);
        echo "\"></div>
            <input type=\"submit\" value=\"Kay??t Ol\">
    </form>
</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
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
        return "home/security/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 134,  238 => 127,  124 => 15,  115 => 14,  101 => 11,  92 => 10,  80 => 7,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
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
    <div class=\"content\">
<div style=\"background: white\" class=\"contact-form\">
    <form style=\"background: white\" name=\"user\" method=\"post\">
        <div id=\"user\">
            <div>
                <label for=\"user_name\">??sim</label>
                <input style=\"color:black\" type=\"text\" id=\"user_name\" name=\"user[name]\" maxlength=\"50\">
            </div>
            <div>
                <label for=\"user_email\" class=\"required\">E-Mail Adresi</label>
                <input style=\"color:black\" type=\"text\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\">
            </div>
            <div>
                <label for=\"user_password\" class=\"required\">??ifre</label>
                <input style=\"color:black\" type=\"text\" id=\"user_password\" name=\"user[password]\" required=\"required\">
            </div>
            <div>
                <label for=\"user_address\">Adres</label>
                <input style=\"color:black\" type=\"text\" id=\"user_address\" name=\"user[address]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"user_phone\">Telefon</label>
                <input style=\"color:black\" type=\"text\" id=\"user_phone\" name=\"user[phone]\" maxlength=\"255\">
            </div>
            <div>
                <label for=\"user_city\">??ehir</label>
                <select style=\"color:#444;font-weight: bolder;font-size:120%;width:99.5%;height:35px\" name=\"user[city]\">
                    <option value=\"\">??l Se??iniz</option>
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
            </div>

            <input type=\"hidden\" id=\"user__token\" name=\"token\"
                   value=\"{{ csrf_token('user-form') }}\"></div>
            <input type=\"submit\" value=\"Kay??t Ol\">
    </form>
</div>
    </div>
{% endblock %}

{% block footer %} {{ include ('home/_footer.html.twig') }} {% endblock %}


", "home/security/signup.html.twig", "/opt/lampp/htdocs/shivaphp/templates/home/security/signup.html.twig");
    }
}
