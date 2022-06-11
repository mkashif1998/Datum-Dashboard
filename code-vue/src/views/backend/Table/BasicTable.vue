<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tables</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-1>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-1">
                    <code>
&lt;table class=&quot;table&quot;&gt;
&lt;thead&gt;
   &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
   &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
   &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
   &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>The <code>.table </code> class adds basic styling to a table.</p>
            <b-table :items="items"></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Table Head Options</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-2>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-2">
                    <code>
&lt;table class=&quot;table&quot;&gt;
   &lt;thead class=&quot;thead-dark&quot;&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
&lt;table class=&quot;table&quot;&gt;
   &lt;thead class=&quot;thead-light&quot;&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
            <b-table :items="items" head-variant="dark"></b-table>
            <b-table :items="items" head-variant="light"></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Borderless table</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-3>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-3">
                    <code>
&lt;table class=&quot;table table-borderless&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders.</p>
            <b-table :items="items" borderless></b-table>
            <p><code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</p>
            <b-table :items="items" table-variant="dark" borderless></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Small table</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-4>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-4">
                    <code>
&lt;table class=&quot;table table-sm&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
&lt;table class=&quot;table table-sm table-dark&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
            <b-table small :items="items"></b-table>
            <b-table small :items="items" table-variant="dark"></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Captions</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-5>
                  <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                  </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-5">
                    <code>
&lt;table class=&quot;table&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
            <b-table :items="items">
              <template v-slot:table-caption>List of users</template>
            </b-table>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Table Dark</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-6">
                    <code>
&lt;table class=&quot;table table-dark&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
            <b-table :items="items" table-variant="dark"></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Striped rows</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-7>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-7" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-7">
                    <code>
&lt;table class=&quot;table table-striped&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
&lt;table class=&quot;table table-striped table-dark&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Larry&lt;/td&gt;
         &lt;td&gt;the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
            <b-table :items="items" striped></b-table>
            <b-table :items="items" table-variant="dark" striped></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Hoverable rows</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-8>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-8" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-8">
                    <code>
&lt;table class=&quot;table table-hover&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
&lt;table class=&quot;table table-hover table-dark&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Mark&lt;/td&gt;
         &lt;td&gt;Otto&lt;/td&gt;
         &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Jacob&lt;/td&gt;
         &lt;td&gt;Thornton&lt;/td&gt;
         &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
         &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
            <b-table :items="items" hover></b-table>
            <b-table :items="items" table-variant="dark" hover></b-table>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Contextual classes</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-9>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-9" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-9">
                    <code>
&lt;table class=&quot;table&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr class=&quot;table-active&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Active&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;Default&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-primary&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Primary&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-secondary&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Secondary&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-success&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Success&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-danger&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Danger&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-warning&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Warning&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;table-info&quot;&gt;
         &lt;th scope=&quot;row&quot;&gt;Info&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use contextual classes to color table rows or individual cells.</p>
            <b-table-simple>
              <b-thead>
                <b-th>Variant</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
              </b-thead>
              <b-tbody>
                <b-tr variant="active">
                  <b-th>Active</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>Default</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="primary">
                  <b-th>Primary</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="secondary">
                  <b-th>Secondary</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="success">
                  <b-th>Success</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="danger">
                  <b-th>Danger</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="warning">
                  <b-th>Warning</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr variant="info">
                  <b-th>Info</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
              </b-tbody>
            </b-table-simple>
            <p>Regular table background variants are not available with the dark table, however, you may use <a href="https://getbootstrap.com/" target="_blank">text or background utilities</a> to achieve similar styles.</p>
            <b-table-simple table-variant="dark">
              <b-thead>
                <b-th>#</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
              </b-thead>
              <b-tbody>
                <b-tr class="bg-primary">
                  <b-th>1</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>2</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr class="bg-success">
                  <b-th>3</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>4</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr class="bg-info">
                  <b-th>5</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>6</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr class="bg-warning">
                  <b-th>7</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>8</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr class="bg-danger">
                  <b-th>9</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
              </b-tbody>
            </b-table-simple>
          </template>
        </card>
      </b-col>
      <b-col sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive tables</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-10>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-10" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="table-10">
                    <code>
&lt;table class=&quot;table&quot;&gt;
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
         &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
         &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
         &lt;td&gt;Cell&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
            <b-table-simple responsive>
              <b-thead>
                <b-th>#</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
                <b-th>Heading</b-th>
              </b-thead>
              <b-tbody>
                <b-tr>
                  <b-th>1</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>2</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
                <b-tr>
                  <b-th>3</b-th>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                  <b-td>Cell</b-td>
                </b-tr>
              </b-tbody>
            </b-table-simple>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'TablesBasic',
  data () {
    return {
      items: [
        { '#': '1', first: 'Mark', last: 'Otto', handle: '@mdo' },
        { '#': '2', first: 'Jacob', last: 'Thornton', handle: '@fat' },
        { '#': '3', first: 'Larry', last: 'the Bird', handle: '@twitter' }
      ]
    }
  }
}
</script>
