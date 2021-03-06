<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>index2</title>
  <style type="text/css">
      code{white-space: pre-wrap;}
      span.smallcaps{font-variant: small-caps;}
      span.underline{text-decoration: underline;}
      div.column{display: inline-block; vertical-align: top; width: 50%;}
  </style>
  <link rel="stylesheet" href="pandoc.css" />
  <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" type="text/javascript"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js?"></script>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono" />
</head>
<body>
<h2 id="exponent-rules">Exponent Rules</h2>
<details>
<summary>Power Rules</summary>
<p>
<h3 id="power-of-a-product">Power of a Product</h3>
<h4 id="single-term-in-parentheses">Single Term in Parentheses</h4>
<h6 id="rule">Rule</h6>
<p><span class="math display">\[\left(a^m\right)^n=a^{m \cdot n}\]</span></p>
<blockquote>
<p>When raising an exponent to another exponent, such as <span class="math inline">\(\left(a^m\right)^n=a^{m \cdot n}\)</span>, you <em>multiply</em> the exponents.</p>
</blockquote>
<h6 id="examples">Examples</h6>
<ol type="1">
<li><p>Given: <span class="math inline">\(\left(x^2\right)^5\)</span> apply the <code>power of a product rule</code> to simplify the expression.</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<span class="math display">\[\begin{align*}
         \left(x^2\right)^5 &amp;=&amp; \\ 
         &amp;= \left(x^{2 \cdot 5}\right)  \textrm{ You multiply the exponents.}\\ 
         &amp;= x^{10} \textrm{ } \blacksquare
     \end{align*}\]</span>
</p>
</details></li>
</ol>
<h4 id="multiple-terms-in-parentheses">Multiple Terms in Parentheses</h4>
<h6 id="rule-1">Rule</h6>
<p><span class="math display">\[(ab)^c=\left(a^c \cdot b^c\right)\]</span></p>
<blockquote>
<p>If there are multiple items inside the parentheses like <span class="math inline">\((ab)^c\)</span> then you must distribute the outer exponent to <em>each term</em> such that <span class="math inline">\((ab)^c = (a^c \cdot b^c)\)</span>.</p>
</blockquote>
<h6 id="examples-1">Examples</h6>
<ol type="1">
<li>Given: <span class="math inline">\(\left(2x^{3}\right)^2\)</span> apply the <code>power rule of a product rule</code> to simplify the expression.</li>
</ol>
<details>
<summary>Show/Hide Solution</summary>
<p>
<p><span class="math display">\[\begin{align*}
  \left(2x^3\right)^2 &amp;=&amp; \\ 
  &amp;= \left(2^{1 \cdot 2}x^{3 \cdot 2}\right) \textrm{ Distribute multiply exponents.}\\ 
  &amp;= 2^2x^6 \\
  &amp;= 4x^6 \textrm{ } \blacksquare
\end{align*}\]</span></p>
</p>
</details>
<h3 id="power-of-a-quotient">Power of a Quotient</h3>
<h6 id="general-rule">General Rule</h6>
<p><span class="math display">\[\left(\frac{a}{b} \right )^m = \frac{a^m}{b^m}\]</span></p>
<blockquote>
<p>If you have a fraction raised to an exponent distribute multiply the outside exponent to the exponents of the numerator and denominator bases.</p>
</blockquote>
<h4 id="fraction-terms-have-no-exponents">Fraction Terms Have No Exponents</h4>
<h6 id="rule-2">Rule</h6>
<p><span class="math display">\[\left(\frac{a}{b} \right )^m = \frac{a^m}{b^m}\]</span></p>
<h4 id="fraction-terms-have-exponents">Fraction Terms Have Exponents</h4>
<h6 id="rule-3">Rule</h6>
<p><span class="math display">\[\left(\frac{a^m}{b^n} \right )^p = \frac{a^{m \cdot p}}{b^{m \cdot p}}\]</span></p>
<h6 id="examples-2">Examples</h6>
<ol type="1">
<li><p>Given <span class="math inline">\(\left(\frac{2x^2y^5}{3z^7}\right)^2\)</span> simplify the expression using the <code>Product of a Quotient Rule</code>.</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<span class="math display">\[\begin{align*}
         \left(\frac{2x^2y^5}{3z^7}\right)^2 &amp;=&amp; \\
         &amp;= \frac{2^{1 \cdot 2}x^{2 \cdot 2}y^{5 \cdot 2}}{3^{1 \cdot 2}z^{7 \cdot 2}} \\
         &amp;= \frac{2^2x^4y^{10}}{3^2z^{14}} \\
         &amp;= \frac{4x^4y{10}}{9z^{14}} \blacksquare
     \end{align*}\]</span>
</p>
</details></li>
</ol>
</p>
</details>
<details>
<summary>Logarithmic Exponent Rule</summary>
<p>
<h6 id="rule-4">Rule</h6>
<p><span class="math display">\[\begin{equation}
  \textrm{If } a^m = a^n \textrm{ then  } m=n.
\end{equation}\]</span></p>
<p>Here is a more thorough explanation:</p>
<p><span class="math display">\[\begin{align*}
    a^m &amp;= a^n \\
    \ln{\left(a^m \right)} &amp;= \ln{\left(a^n\right)} \\
    \ln{(a)} \cdot m &amp;= \ln{(a)} \cdot n \\
    \frac{\ln{(a)}}{\ln{(a)}} \cdot m &amp;= \frac{\ln{(a)}}{\ln{(a)}} \cdot n \\
    \therefore m &amp;= n
\end{align*}\]</span></p>
<blockquote>
<p>If the bases are the same on both sides of the equals sign then the exponents are equal to each other.</p>
</blockquote>
<h6 id="examples-3">Examples</h6>
<ol type="1">
<li><p>For what value(s) of <span class="math inline">\(x\)</span> is the equation <span class="math inline">\(4^{2x+7}=4^{19}\)</span> <code>true</code>?</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<p><span class="math display">\[\begin{align*}
     4^{2x+7} &amp;= 4^{19} &amp;&amp; \textrm{ Given} \\
     \ln(4^{2x+7}) &amp;= \ln(4^{19}) &amp;&amp; \textrm{ Take the Natural Logarithm of both sides.} \\
     (2x+7) \cdot \ln(4) &amp;= (19) \cdot \ln(4) &amp;&amp; \textrm{ The exponents are now brought down in front.} \\
     (2x+7) \cdot \frac{\ln(4)}{\ln(4)} &amp;= (19) \cdot \frac{\ln(4)}{\ln(4)} &amp;&amp; \textrm{ Divide both sides by }\ln(4)\textrm{.} \\
     2x + 7 &amp;= 19 &amp;&amp; \textrm{ Simplify and get ready to solve this simple equation.} \\
     2x + 7 - 7 &amp;= 19 - 7 &amp;&amp; \textrm{ Subtraction property of equality.} \\
     2x &amp;= 12 &amp;&amp; \textrm{ Simplify.} \\
     \frac{2x}{2} &amp;= \frac{12}{2} &amp;&amp; \textrm{ Divide both sides by the }x\textrm{ coefficient of }2\textrm{.} \\
     x &amp;= 6 &amp;&amp; \textrm{ Simplify.} \\
     \therefore 4^{2x+7} &amp;= 4^{19} \textrm{ is true when } x \textrm{ = } 6\textrm{.}\blacksquare &amp;&amp;
\end{align*}\]</span></p>
</p>
</details></li>
</ol>
</body>
</html>
