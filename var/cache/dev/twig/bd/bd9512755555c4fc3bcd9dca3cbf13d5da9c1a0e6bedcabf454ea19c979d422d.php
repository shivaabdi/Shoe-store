<?php

/* adminbase.html.twig */
class __TwigTemplate_8b290e9fd1110f377c81df5eac4ccdcd57b7484bbff3366482520469a2005ecf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/css/material-dashboard.css?v=2.1.1\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/demo/demo.css\" rel=\"stylesheet\" />
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/ckeditor/ckeditor.js\"></script>

</head>

<body class=\"\">
<div class=\"wrapper \">
    ";
        // line 26
        $this->displayBlock('sidebar', $context, $blocks);
        // line 27
        echo "    <div class=\"main-panel\">
        <!-- Navbar -->
        ";
        // line 29
        $this->displayBlock('navbar', $context, $blocks);
        // line 30
        echo "        <!-- End Navbar -->
        <div class=\"content\">
            ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "        </div>
        ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "    </div>
</div>
";
        // line 105
        echo "<!--   Core JS Files   -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/core/jquery.min.js\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/core/popper.min.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/core/bootstrap-material-design.min.js\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
<!-- Plugin for the momentJs  -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/moment.min.js\"></script>
<!--  Plugin for Sweet Alert -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/sweetalert2.js\"></script>
<!-- Forms Validations Plugin -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/jquery.validate.min.js\"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/jquery.bootstrap-wizard.js\"></script>
<!--\tPlugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/bootstrap-selectpicker.js\"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/bootstrap-datetimepicker.min.js\"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/jquery.dataTables.min.js\"></script>
<!--\tPlugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/bootstrap-tagsinput.js\"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/jasny-bootstrap.min.js\"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/fullcalendar.min.js\"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/jquery-jvectormap.js\"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/nouislider.min.js\"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js\"></script>
<!-- Library for adding dinamically elements -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/arrive.min.js\"></script>
<!--  Google Maps Plugin    -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!-- Chartist JS -->
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/chartist.min.js\"></script>
<!--  Notifications Plugin    -->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/plugins/bootstrap-notify.js\"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/js/material-dashboard.js?v=2.1.1\" type=\"text/javascript\"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "/assets/demo/demo.js\"></script>
<script>
    \$(document).ready(function() {
        \$().ready(function() {
            \$sidebar = \$('.sidebar');

            \$sidebar_img_container = \$sidebar.find('.sidebar-background');

            \$full_page = \$('.full-page');

            \$sidebar_responsive = \$('body > .navbar-collapse');

            window_width = \$(window).width();

            fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if (\$('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    \$('.fixed-plugin .dropdown').addClass('open');
                }

            }

            \$('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if (\$(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            \$('.fixed-plugin .active-color span').click(function() {
                \$full_page_background = \$('.full-page-background');

                \$(this).siblings().removeClass('active');
                \$(this).addClass('active');

                var new_color = \$(this).data('color');

                if (\$sidebar.length != 0) {
                    \$sidebar.attr('data-color', new_color);
                }

                if (\$full_page.length != 0) {
                    \$full_page.attr('filter-color', new_color);
                }

                if (\$sidebar_responsive.length != 0) {
                    \$sidebar_responsive.attr('data-color', new_color);
                }
            });

            \$('.fixed-plugin .background-color .badge').click(function() {
                \$(this).siblings().removeClass('active');
                \$(this).addClass('active');

                var new_color = \$(this).data('background-color');

                if (\$sidebar.length != 0) {
                    \$sidebar.attr('data-background-color', new_color);
                }
            });

            \$('.fixed-plugin .img-holder').click(function() {
                \$full_page_background = \$('.full-page-background');

                \$(this).parent('li').siblings().removeClass('active');
                \$(this).parent('li').addClass('active');


                var new_image = \$(this).find(\"img\").attr('src');

                if (\$sidebar_img_container.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                    \$sidebar_img_container.fadeOut('fast', function() {
                        \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                        \$sidebar_img_container.fadeIn('fast');
                    });
                }

                if (\$full_page_background.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                    \$full_page_background.fadeOut('fast', function() {
                        \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                        \$full_page_background.fadeIn('fast');
                    });
                }

                if (\$('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = \$('.fixed-plugin li.active .img-holder').find(\"img\").attr('src');
                    var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                    \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                    \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                }

                if (\$sidebar_responsive.length != 0) {
                    \$sidebar_responsive.css('background-image', 'url(\"' + new_image + '\")');
                }
            });

            \$('.switch-sidebar-image input').change(function() {
                \$full_page_background = \$('.full-page-background');

                \$input = \$(this);

                if (\$input.is(':checked')) {
                    if (\$sidebar_img_container.length != 0) {
                        \$sidebar_img_container.fadeIn('fast');
                        \$sidebar.attr('data-image', '#');
                    }

                    if (\$full_page_background.length != 0) {
                        \$full_page_background.fadeIn('fast');
                        \$full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if (\$sidebar_img_container.length != 0) {
                        \$sidebar.removeAttr('data-image');
                        \$sidebar_img_container.fadeOut('fast');
                    }

                    if (\$full_page_background.length != 0) {
                        \$full_page.removeAttr('data-image', '#');
                        \$full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            \$('.switch-sidebar-mini input').change(function() {
                \$body = \$('body');

                \$input = \$(this);

                if (md.misc.sidebar_mini_active == true) {
                    \$('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        \$('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    \$(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
<script>
    function openWin(site,width,height) {
        window.open(site,\"_blank\",\"toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=\"+ width +\", height=\"+ height);
    }
</script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 34,  449 => 32,  432 => 29,  415 => 26,  398 => 10,  200 => 147,  195 => 145,  190 => 143,  185 => 141,  178 => 137,  171 => 133,  166 => 131,  161 => 129,  156 => 127,  151 => 125,  146 => 123,  141 => 121,  136 => 119,  131 => 117,  126 => 115,  121 => 113,  116 => 111,  111 => 109,  107 => 108,  103 => 107,  99 => 106,  96 => 105,  92 => 35,  90 => 34,  87 => 33,  85 => 32,  81 => 30,  79 => 29,  75 => 27,  73 => 26,  64 => 20,  60 => 19,  55 => 17,  47 => 11,  45 => 10,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        {% block title %}{% endblock %}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"{{ asset('admin') }}/assets/css/material-dashboard.css?v=2.1.1\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"{{ asset('admin') }}/assets/demo/demo.css\" rel=\"stylesheet\" />
    <script src=\"{{ asset('admin') }}/assets/js/ckeditor/ckeditor.js\"></script>

</head>

<body class=\"\">
<div class=\"wrapper \">
    {% block sidebar %}{% endblock %}
    <div class=\"main-panel\">
        <!-- Navbar -->
        {% block navbar %}{% endblock %}
        <!-- End Navbar -->
        <div class=\"content\">
            {% block content %}{% endblock %}
        </div>
        {% block footer %}{% endblock %}
    </div>
</div>
{#<div class=\"fixed-plugin\">#}
{#<div class=\"dropdown show-dropdown\">#}
{#<a href=\"#\" data-toggle=\"dropdown\">#}
{#<i class=\"fa fa-cog fa-2x\"> </i>#}
{#</a>#}
{#<ul class=\"dropdown-menu\">#}
{#<li class=\"header-title\"> Sidebar Filters</li>#}
{#<li class=\"adjustments-line\">#}
{#<a href=\"javascript:void(0)\" class=\"switch-trigger active-color\">#}
{#<div class=\"badge-colors ml-auto mr-auto\">#}
{#<span class=\"badge filter badge-purple\" data-color=\"purple\"></span>#}
{#<span class=\"badge filter badge-azure\" data-color=\"azure\"></span>#}
{#<span class=\"badge filter badge-green\" data-color=\"green\"></span>#}
{#<span class=\"badge filter badge-warning\" data-color=\"orange\"></span>#}
{#<span class=\"badge filter badge-danger\" data-color=\"danger\"></span>#}
{#<span class=\"badge filter badge-rose active\" data-color=\"rose\"></span>#}
{#</div>#}
{#<div class=\"clearfix\"></div>#}
{#</a>#}
{#</li>#}
{#<li class=\"header-title\">Images</li>#}
{#<li class=\"active\">#}
{#<a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">#}
{#<img src=\"../assets/img/sidebar-1.jpg\" alt=\"\">#}
{#</a>#}
{#</li>#}
{#<li>#}
{#<a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">#}
{#<img src=\"../assets/img/sidebar-2.jpg\" alt=\"\">#}
{#</a>#}
{#</li>#}
{#<li>#}
{#<a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">#}
{#<img src=\"../assets/img/sidebar-3.jpg\" alt=\"\">#}
{#</a>#}
{#</li>#}
{#<li>#}
{#<a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">#}
{#<img src=\"../assets/img/sidebar-4.jpg\" alt=\"\">#}
{#</a>#}
{#</li>#}
{#<li class=\"button-container\">#}
{#<a href=\"https://www.creative-tim.com/product/material-dashboard\" target=\"_blank\" class=\"btn btn-primary btn-block\">Free Download</a>#}
{#</li>#}
{#<!-- <li class=\"header-title\">Want more components?</li>#}
{#<li class=\"button-container\">#}
{#<a href=\"https://www.creative-tim.com/product/material-dashboard-pro\" target=\"_blank\" class=\"btn btn-warning btn-block\">#}
{#Get the pro version#}
{#</a>#}
{#</li> -->#}
{#<li class=\"button-container\">#}
{#<a href=\"https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html\" target=\"_blank\" class=\"btn btn-default btn-block\">#}
{#View Documentation#}
{#</a>#}
{#</li>#}
{#<li class=\"button-container github-star\">#}
{#<a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star ntkme/github-buttons on GitHub\">Star</a>#}
{#</li>#}
{#<li class=\"header-title\">Thank you for 95 shares!</li>#}
{#<li class=\"button-container text-center\">#}
{#<button id=\"twitter\" class=\"btn btn-round btn-twitter\"><i class=\"fa fa-twitter\"></i> &middot; 45</button>#}
{#<button id=\"facebook\" class=\"btn btn-round btn-facebook\"><i class=\"fa fa-facebook-f\"></i> &middot; 50</button>#}
{#<br>#}
{#<br>#}
{#</li>#}
{#</ul>#}
{#</div>#}
{#</div>#}
<!--   Core JS Files   -->
<script src=\"{{ asset('admin') }}/assets/js/core/jquery.min.js\"></script>
<script src=\"{{ asset('admin') }}/assets/js/core/popper.min.js\"></script>
<script src=\"{{ asset('admin') }}/assets/js/core/bootstrap-material-design.min.js\"></script>
<script src=\"{{ asset('admin') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
<!-- Plugin for the momentJs  -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/moment.min.js\"></script>
<!--  Plugin for Sweet Alert -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/sweetalert2.js\"></script>
<!-- Forms Validations Plugin -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/jquery.validate.min.js\"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/jquery.bootstrap-wizard.js\"></script>
<!--\tPlugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/bootstrap-selectpicker.js\"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/bootstrap-datetimepicker.min.js\"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/jquery.dataTables.min.js\"></script>
<!--\tPlugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/bootstrap-tagsinput.js\"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/jasny-bootstrap.min.js\"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/fullcalendar.min.js\"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/jquery-jvectormap.js\"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/nouislider.min.js\"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js\"></script>
<!-- Library for adding dinamically elements -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/arrive.min.js\"></script>
<!--  Google Maps Plugin    -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!-- Chartist JS -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/chartist.min.js\"></script>
<!--  Notifications Plugin    -->
<script src=\"{{ asset('admin') }}/assets/js/plugins/bootstrap-notify.js\"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src=\"{{ asset('admin') }}/assets/js/material-dashboard.js?v=2.1.1\" type=\"text/javascript\"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src=\"{{ asset('admin') }}/assets/demo/demo.js\"></script>
<script>
    \$(document).ready(function() {
        \$().ready(function() {
            \$sidebar = \$('.sidebar');

            \$sidebar_img_container = \$sidebar.find('.sidebar-background');

            \$full_page = \$('.full-page');

            \$sidebar_responsive = \$('body > .navbar-collapse');

            window_width = \$(window).width();

            fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if (\$('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    \$('.fixed-plugin .dropdown').addClass('open');
                }

            }

            \$('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if (\$(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            \$('.fixed-plugin .active-color span').click(function() {
                \$full_page_background = \$('.full-page-background');

                \$(this).siblings().removeClass('active');
                \$(this).addClass('active');

                var new_color = \$(this).data('color');

                if (\$sidebar.length != 0) {
                    \$sidebar.attr('data-color', new_color);
                }

                if (\$full_page.length != 0) {
                    \$full_page.attr('filter-color', new_color);
                }

                if (\$sidebar_responsive.length != 0) {
                    \$sidebar_responsive.attr('data-color', new_color);
                }
            });

            \$('.fixed-plugin .background-color .badge').click(function() {
                \$(this).siblings().removeClass('active');
                \$(this).addClass('active');

                var new_color = \$(this).data('background-color');

                if (\$sidebar.length != 0) {
                    \$sidebar.attr('data-background-color', new_color);
                }
            });

            \$('.fixed-plugin .img-holder').click(function() {
                \$full_page_background = \$('.full-page-background');

                \$(this).parent('li').siblings().removeClass('active');
                \$(this).parent('li').addClass('active');


                var new_image = \$(this).find(\"img\").attr('src');

                if (\$sidebar_img_container.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                    \$sidebar_img_container.fadeOut('fast', function() {
                        \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                        \$sidebar_img_container.fadeIn('fast');
                    });
                }

                if (\$full_page_background.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                    \$full_page_background.fadeOut('fast', function() {
                        \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                        \$full_page_background.fadeIn('fast');
                    });
                }

                if (\$('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = \$('.fixed-plugin li.active .img-holder').find(\"img\").attr('src');
                    var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                    \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                    \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                }

                if (\$sidebar_responsive.length != 0) {
                    \$sidebar_responsive.css('background-image', 'url(\"' + new_image + '\")');
                }
            });

            \$('.switch-sidebar-image input').change(function() {
                \$full_page_background = \$('.full-page-background');

                \$input = \$(this);

                if (\$input.is(':checked')) {
                    if (\$sidebar_img_container.length != 0) {
                        \$sidebar_img_container.fadeIn('fast');
                        \$sidebar.attr('data-image', '#');
                    }

                    if (\$full_page_background.length != 0) {
                        \$full_page_background.fadeIn('fast');
                        \$full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if (\$sidebar_img_container.length != 0) {
                        \$sidebar.removeAttr('data-image');
                        \$sidebar_img_container.fadeOut('fast');
                    }

                    if (\$full_page_background.length != 0) {
                        \$full_page.removeAttr('data-image', '#');
                        \$full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            \$('.switch-sidebar-mini input').change(function() {
                \$body = \$('body');

                \$input = \$(this);

                if (md.misc.sidebar_mini_active == true) {
                    \$('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        \$('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    \$(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
<script>
    function openWin(site,width,height) {
        window.open(site,\"_blank\",\"toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=\"+ width +\", height=\"+ height);
    }
</script>
</body>

</html>
", "adminbase.html.twig", "/opt/lampp/htdocs/shivaphp/templates/adminbase.html.twig");
    }
}
