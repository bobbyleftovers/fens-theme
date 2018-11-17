<?php
/**
 * Template Name: Bulma Framework Demo
 */
?>


<div id="app" role="document">
  <div class="hero">
    <div class="container">
      <div class="hero-body">
        <h1><span class="title is-1">Bulma: a quick rundown of the css</span><br><span class="subtitle is-3">Refer to this template file(template-bulma-demo.php) to see these examples</span></span></h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="columns">
      <div class="column">
        <h2 class="title is-2">Column Layout</h2>
        <h3 class="sutitle is-4">Bulma uses flexbox to create an easy nested column layout</h3>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h4 class="title is-4">Layout Basics</h4>
        <p>This is one of the most basic layout components. This is based on flexbbox so simplt adding new <code>.column</code> tags to a <code>.columns</code> tag will add new columns to that section. It works like so:</p>
        <code>
          <?= '&ltdiv class="columns"&gt
            &ltdiv class="column"&gt
              ...
              &lt/div&gt
            &lt/div&gt';?>
        </code> inside other <code>.columns</code> or <code>.column</code> tags to create nesting</p>
        <p>You can also nest <code>.columns</code></p>
        <p>In the case of this demo, we've placed all our <code>.columns</code> inside a <code>.container</code>. For fluid width you may either edit the css for the container, set padding on the body or other wrapping div, or whatever you prefer.</p>
        </div>
        <div class="column">
          <div class="columns">
            <div class="column">
              <h4 class="title is-4">Nested #1</h4>
              <p>This is one nested column.</p>
            </div>
            <div class="column">
            <h4 class="title is-4">Nested #1</h4>
            <p>This is another</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2 class="title is-2">Titles</h2>
        <h3 class="title">Use the "title" class or the "subtitle" class as needed to indicate h1, h2, h3 etc</h3>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <p>Usage: <code><?='&lth1 class="title is-1"&gtTitle copy&lt/h1&gt'?></code></p>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <strong>"title is-*"</strong>
        <h1 class="title is-1">h1 (always centered)</h1>
        <h2 class="title is-2">h2</h2>
        <h3 class="title is-3">h3</h3>
        <h4 class="title is-4">h4</h4>
        <h5 class="title is-5">h5</h5>
      </div>
      <div class="column">
        <strong>"subtitle  is-*"</strong>
        <h1 class="subtitle is-1">h1 (always centered)</h1>
        <h2 class="subtitle is-2">h2</h2>
        <h3 class="subtitle is-3">h3</h3>
        <h4 class="subtitle is-4">h4</h4>
        <h5 class="subtitle is-5">h5</h5>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2 class="title is-2">Buttons and Components</h2>
      </div>
    </div>
    <div class="columns">
      <div class="column"></div>
      <div class="column"></div>
    </div>
  </div>
</div>