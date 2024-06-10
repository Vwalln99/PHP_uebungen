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

/* user.html */
class __TwigTemplate_038577526ebc6eed63896949144532a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
        <p class=\"text-center text-gray-500\">Joined: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        <img class=\"mx-auto\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "uploads/";
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 11)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 11), "html", null, true)) : (yield "placeholder.jpg"));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 11), "html", null, true);
        yield "\">
    </section>
    <section class=\"flex flex-wrap p-8\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            yield "            <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "article.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 17)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 17), "html", null, true)) : (yield "blank.png"));
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 17), "html", null, true);
            yield "\">
                    <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 18), "html", null, true);
            yield "</h2>
                    <p class=\"text-gray-500 pb-2.5\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                </a>
                <p class=\"credit-text-xs\">
                    Posted in <a class=\"text-pink-400\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 23), "html", null, true);
            yield "
                    </a>
                    by <a class=\"text-pink-400\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 26), "html", null, true);
            yield "
                    </a>
                </p>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    </section>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user.html";
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
        return array (  154 => 31,  143 => 26,  137 => 25,  132 => 23,  126 => 22,  120 => 19,  116 => 18,  108 => 17,  102 => 16,  99 => 15,  95 => 14,  83 => 11,  79 => 10,  73 => 9,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{ title }}{% endblock %}
{% block description %}{{ description }}{% endblock %}

{% block content %}
<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">{{ user.forename }} {{ user.surname }}</h1>
        <p class=\"text-center text-gray-500\">Joined: {{ user.joined}}</p>
        <img class=\"mx-auto\" src=\"{{ doc_root }}uploads/{{ user.profile_pic ?? 'placeholder.jpg' }}\" alt=\"{{ user.forename }} {{ user.surname }}\">
    </section>
    <section class=\"flex flex-wrap p-8\">
        {% for article in articles %}
            <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                <a href=\"{{ doc_root }}article.php?id={{ article.id }}\">
                    <img src=\"{{ doc_root }}uploads/{{ article.image_file ?? 'blank.png' }}\" alt=\"{{ article.image_file }}\">
                    <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{ article.title }}</h2>
                    <p class=\"text-gray-500 pb-2.5\">{{ article.summary }}</p>
                </a>
                <p class=\"credit-text-xs\">
                    Posted in <a class=\"text-pink-400\" href=\"{{ doc_root }}category.php?id={{ article.category_id }}\">
                        {{ article.category }}
                    </a>
                    by <a class=\"text-pink-400\" href=\"{{ doc_root }}user.php?id={{ article.user_id }}\">
                        {{ article.author }}
                    </a>
                </p>
            </article>
        {% endfor %}
    </section>
</main>
{% endblock %}
", "user.html", "C:\\xampp\\htdocs\\templates\\user.html");
    }
}
