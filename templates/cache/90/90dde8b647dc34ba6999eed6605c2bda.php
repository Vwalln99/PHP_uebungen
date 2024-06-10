<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html */
class __TwigTemplate_93bc1b9ca81b87f10e43ec611856a7e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"de-DE\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 8
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "css/output.css\">
    <script src=\"https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce/min.js\" referrerpolicy=\"origin\"></script>
</head>

<body>
    <header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <div class=\"logo\">
                <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "index.php\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                    <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/page-logo.png\" alt=\"IT-Logo\" width=\"100\">
                    <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
                </a>
            </div>
            <nav>
                <button data-collapse-toggle=\"navbar-default\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-default\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Open main menu</span>
                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                        <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\" />
                    </svg>
                </button>
                <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                    <ul id=\"menu\" class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            yield "                            <li>
                                <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent 
                                ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, ($context["articles"] ?? null), "category_id", [], "any", false, false, false, 34))) {
                yield "text-pink-600";
            }
            // line 35
            yield "                                md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\" 
                                href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\">
                                ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                        <li>
                            <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "search.php\">
                                <object class=\"pointer-events-none\" data=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.svg\" type=\"image/svg+xml\">
                                    <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.png\" alt=\"Search\">
                                </object>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    ";
        // line 54
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 64
        yield "    ";
        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 8
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        yield "    <footer>
        <div class=\"mx-auto bg-slate-50  p-4\">
            &copy; ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
        </div>
    </footer>
    </body>
    
    </html>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  172 => 57,  168 => 55,  164 => 54,  157 => 8,  150 => 7,  145 => 64,  143 => 54,  130 => 44,  126 => 43,  122 => 42,  119 => 41,  109 => 37,  103 => 36,  100 => 35,  96 => 34,  92 => 32,  88 => 31,  72 => 18,  68 => 17,  57 => 9,  53 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}{% endblock %}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{doc_root}}css/output.css\">
    <script src=\"https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce/min.js\" referrerpolicy=\"origin\"></script>
</head>

<body>
    <header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <div class=\"logo\">
                <a href=\"{{doc_root}}index.php\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                    <img src=\"{{doc_root}}img/page-logo.png\" alt=\"IT-Logo\" width=\"100\">
                    <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
                </a>
            </div>
            <nav>
                <button data-collapse-toggle=\"navbar-default\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-default\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Open main menu</span>
                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                        <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\" />
                    </svg>
                </button>
                <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                    <ul id=\"menu\" class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                        {% for link in navigation %}
                            <li>
                                <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent 
                                {% if (link.id == articles.category_id)%}text-pink-600{%endif%}
                                md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\" 
                                href=\"{{doc_root}}category.php?id={{link.id}}\">
                                {{link.name}}
                                </a>
                            </li>
                        {% endfor %}
                        <li>
                            <a href=\"{{doc_root}}search.php\">
                                <object class=\"pointer-events-none\" data=\"{{doc_root}}img/material-search.svg\" type=\"image/svg+xml\">
                                    <img src=\"{{doc_root}}img/material-search.png\" alt=\"Search\">
                                </object>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    {% block content %}
    <footer>
        <div class=\"mx-auto bg-slate-50  p-4\">
            &copy; {{'now'|date('Y')}}
        </div>
    </footer>
    </body>
    
    </html>
    {% endblock %}
    ", "layout.html", "C:\\xampp\\htdocs\\templates\\layout.html");
    }
}
