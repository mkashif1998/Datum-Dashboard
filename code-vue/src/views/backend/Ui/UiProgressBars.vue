<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Examples</h4>
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
                  <pre class="text-white" id="examples-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don’t use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress">the HTML5 <code>&lt;progress&gt;</code> element</a>, ensuring you can stack progress bars, animate them, and place text labels over them.</p>
              <ul>
                <li>We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar.</li>
                <li>We use the inner <code>.progress-bar</code> to indicate the progress so far.</li>
                <li>The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width.</li>
                <li>The <code>.progress-bar</code> also requires some <code>role</code> and <code>aria</code> attributes to make it accessible.</li>
              </ul>
            <p>Put that all together, and you have the following examples.</p>
            <b-progress :value="0" max="100" class="mb-3"></b-progress>
            <b-progress :value="25" max="100" class="mb-3"></b-progress>
            <b-progress :value="50" max="100" class="mb-3"></b-progress>
            <b-progress :value="75" max="100" class="mb-3"></b-progress>
            <b-progress :value="100" max="100"></b-progress>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Height</h4>
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
                  <pre class="text-white" id="heights-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot; style=&quot;height: 3px;&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; style=&quot;height: 10px;&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%;&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;50%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; style=&quot;height: 15px;&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 75%;&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;75%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; style=&quot;height: 20px;&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 99%;&quot; aria-valuenow=&quot;99&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;99%&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize accordingly.</p>
            <b-progress :value="25" show-progress max="100" height="3px" class="mb-3"></b-progress>
            <b-progress :value="50" show-progress max="100" height="10px" class="mb-3"></b-progress>
            <b-progress :value="75" show-progress max="100" height="15px" class="mb-3"></b-progress>
            <b-progress :value="99" show-progress max="100" height="20px"></b-progress>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Animated stripes</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-3>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="animated-stripe-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-success&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
            <b-progress :value="75" animated max="100" class="mb-3"></b-progress>
            <b-progress :value="75" variant="success" animated max="100"></b-progress>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Labels</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-4>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="labels-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%;&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;50%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 75%;&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;75%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 99%;&quot; aria-valuenow=&quot;99&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;99%&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>
            <b-progress :value="25" show-progress max="100" class="mb-3"></b-progress>
            <b-progress :value="50" show-progress max="100" class="mb-3"></b-progress>
            <b-progress :value="75" show-progress max="100" class="mb-3"></b-progress>
            <b-progress :value="99" show-progress max="100"></b-progress>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Backgrounds</h4>
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
                  <pre class="text-white" id="backgrounds-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use background utility classes to change the appearance of individual progress bars.</p>
            <b-progress :value="25" variant="success" max="100" class="mb-3"></b-progress>
            <b-progress :value="50" variant="info" max="100" class="mb-3"></b-progress>
            <b-progress :value="75" variant="warning" max="100" class="mb-3"></b-progress>
            <b-progress :value="100" variant="danger" max="100"></b-progress>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Multiple bars</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="multiple-bars-1">
                    <code>
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 15%&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
   &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
   &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 20%&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Include multiple progress bars in a progress component if you need.</p>
            <b-progress max="100">
              <b-progress-bar variant="primary" :value="15"></b-progress-bar>
              <b-progress-bar variant="success" :value="30"></b-progress-bar>
              <b-progress-bar variant="info" :value="20"></b-progress-bar>
            </b-progress>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Striped</h4>
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
                  <pre class="text-white" id="striped-1">
                    <code>
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped&quot; role=&quot;progressbar&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
   &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.</p>
            <b-progress :value="10" striped max="100" class="mb-3"></b-progress>
            <b-progress :value="25" striped variant="success" max="100" class="mb-3"></b-progress>
            <b-progress :value="50" striped variant="info" max="100" class="mb-3"></b-progress>
            <b-progress :value="75" striped variant="warning" max="100" class="mb-3"></b-progress>
            <b-progress :value="100" striped variant="danger" max="100"></b-progress>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiProgressBars',
}
</script>
