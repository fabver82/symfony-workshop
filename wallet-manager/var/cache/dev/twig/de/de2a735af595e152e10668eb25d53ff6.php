<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a7c678640d1e19672b9469dbfe8c632c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/icon.png\" />

    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap\"
      rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" href=\"style.css\" />
    <title>My Wallet</title>
  </head>
  <body>
    <!-- TOP NAVIGATION -->
    <nav>
      <p class=\"welcome\">Log in to get started</p>
      <img src=\"logo.png\" alt=\"Logo\" class=\"logo\" />
      <form class=\"login\">
        <input
          type=\"text\"
          placeholder=\"user\"
          class=\"login__input login__input--user\"
        />
        <!-- In practice, use type=\"password\" -->
        <input
          type=\"text\"
          placeholder=\"PIN\"
          maxlength=\"4\"
          class=\"login__input login__input--pin\"
        />
        <button class=\"login__btn\">&rarr;</button>
      </form>
    </nav>

    <main class=\"app\">
      <!-- BALANCE -->
      <div class=\"balance\">
        <div>
          <p class=\"balance__label\">Current balance</p>
          <p class=\"balance__date\">
            As of <span class=\"date\">05/03/2037</span>
          </p>
        </div>
        <p class=\"balance__value\">0000€</p>
      </div>

      <!-- MOVEMENTS -->
      <div class=\"movements\">
        <div class=\"movements__row\">
          <div class=\"movements__type movements__type--in\">in</div>
          <div class=\"movements__date\">3 days ago</div>
          <div class=\"movements__subject\">beers</div>
          <div class=\"movements__value\">4 000€</div>
        </div>
        <div class=\"movements__row\">
          <div class=\"movements__type movements__type--out\">
            out
          </div>
          <div class=\"movements__date\">24/01/2037</div>
          <div class=\"movements__subject\">maximum 20 characters</div>
          <div class=\"movements__value\">-378€</div>
        </div>
      </div>

      <!-- SUMMARY -->
      <div class=\"summary\">
        <p class=\"summary__label\">In</p>
        <p class=\"summary__value summary__value--in\">0000€</p>
        <p class=\"summary__label\">Out</p>
        <p class=\"summary__value summary__value--out\">0000€</p>
        <button class=\"btn--sort\">&downarrow; SORT</button>
      </div>

      <!-- OPERATION: income -->
      <div class=\"operation operation--income\">
        <h2>Add Income</h2>
        <form class=\"form form--movement\">
          <input type=\"number\" class=\"form__input form__input--movement-amount\" />
          <input type=\"text\" class=\"form__input\" />
          <button class=\"form__btn form__btn--movement\">&rarr;</button>
          <label class=\"form__label form__label--movement\">Amount</label>
          <label class=\"form__label\">Subject</label>
        </form>
      </div>

      <!-- OPERATION: expense -->
      <div class=\"operation operation--expense\">
        <h2>Add Expense</h2>
        <form class=\"form form--movement\">
          <input type=\"number\" class=\"form__input form__input--movement-amount\" />
          <input type=\"text\" class=\"form__input\" />
          <button class=\"form__btn form__btn--movement\">&rarr;</button>
          <label class=\"form__label form__label--movement\">Amount</label>
          <label class=\"form__label\">Subject</label>
        </form>
      </div>

      <!-- LOGOUT TIMER -->
      <p class=\"logout-timer\">
        You will be logged out in <span class=\"timer\">05:00</span>
      </p>
    </main>

  </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/icon.png\" />

    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap\"
      rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" href=\"style.css\" />
    <title>My Wallet</title>
  </head>
  <body>
    <!-- TOP NAVIGATION -->
    <nav>
      <p class=\"welcome\">Log in to get started</p>
      <img src=\"logo.png\" alt=\"Logo\" class=\"logo\" />
      <form class=\"login\">
        <input
          type=\"text\"
          placeholder=\"user\"
          class=\"login__input login__input--user\"
        />
        <!-- In practice, use type=\"password\" -->
        <input
          type=\"text\"
          placeholder=\"PIN\"
          maxlength=\"4\"
          class=\"login__input login__input--pin\"
        />
        <button class=\"login__btn\">&rarr;</button>
      </form>
    </nav>

    <main class=\"app\">
      <!-- BALANCE -->
      <div class=\"balance\">
        <div>
          <p class=\"balance__label\">Current balance</p>
          <p class=\"balance__date\">
            As of <span class=\"date\">05/03/2037</span>
          </p>
        </div>
        <p class=\"balance__value\">0000€</p>
      </div>

      <!-- MOVEMENTS -->
      <div class=\"movements\">
        <div class=\"movements__row\">
          <div class=\"movements__type movements__type--in\">in</div>
          <div class=\"movements__date\">3 days ago</div>
          <div class=\"movements__subject\">beers</div>
          <div class=\"movements__value\">4 000€</div>
        </div>
        <div class=\"movements__row\">
          <div class=\"movements__type movements__type--out\">
            out
          </div>
          <div class=\"movements__date\">24/01/2037</div>
          <div class=\"movements__subject\">maximum 20 characters</div>
          <div class=\"movements__value\">-378€</div>
        </div>
      </div>

      <!-- SUMMARY -->
      <div class=\"summary\">
        <p class=\"summary__label\">In</p>
        <p class=\"summary__value summary__value--in\">0000€</p>
        <p class=\"summary__label\">Out</p>
        <p class=\"summary__value summary__value--out\">0000€</p>
        <button class=\"btn--sort\">&downarrow; SORT</button>
      </div>

      <!-- OPERATION: income -->
      <div class=\"operation operation--income\">
        <h2>Add Income</h2>
        <form class=\"form form--movement\">
          <input type=\"number\" class=\"form__input form__input--movement-amount\" />
          <input type=\"text\" class=\"form__input\" />
          <button class=\"form__btn form__btn--movement\">&rarr;</button>
          <label class=\"form__label form__label--movement\">Amount</label>
          <label class=\"form__label\">Subject</label>
        </form>
      </div>

      <!-- OPERATION: expense -->
      <div class=\"operation operation--expense\">
        <h2>Add Expense</h2>
        <form class=\"form form--movement\">
          <input type=\"number\" class=\"form__input form__input--movement-amount\" />
          <input type=\"text\" class=\"form__input\" />
          <button class=\"form__btn form__btn--movement\">&rarr;</button>
          <label class=\"form__label form__label--movement\">Amount</label>
          <label class=\"form__label\">Subject</label>
        </form>
      </div>

      <!-- LOGOUT TIMER -->
      <p class=\"logout-timer\">
        You will be logged out in <span class=\"timer\">05:00</span>
      </p>
    </main>

  </body>
</html>

", "base.html.twig", "/home/fabien/beCode/workshop-symfony-starter/wallet-manager/templates/base.html.twig");
    }
}
