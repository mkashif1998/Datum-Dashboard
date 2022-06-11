<template>
  <b-container fluid>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Embeds Video</h4>
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
                  <pre class="text-white" id="embeds-video">
                    <code>
&lt;div class=&quot;embed-responsive embed-responsive-16by9&quot;&gt;
   &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a parent element with <code class="highlighter-rouge">.embed-responsive</code> and an aspect ratio. The <code class="highlighter-rouge">.embed-responsive-item</code> isn’t strictly required, but we encourage it.</p>
            <b-embed
              type="iframe"
              aspect="16by9"
              src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
              allowfullscreen
            ></b-embed>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 4:3</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-2>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="ratios-1">
                    <code>
&lt;div class=&quot;embed-responsive embed-responsive-4by3&quot;&gt;
   &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <b-embed
              type="iframe"
              aspect="4by3"
              src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
              allowfullscreen
            ></b-embed>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 21:9</h4>
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
                  <pre class="text-white" id="ratios-2">
                    <code>
&lt;div class=&quot;embed-responsive embed-responsive-21by9&quot;&gt;
   &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <b-embed
              type="iframe"
              aspect="21by9"
              src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
              allowfullscreen
            ></b-embed>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 1:1</h4>
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
                  <pre class="text-white" id="ratios-3">
                    <code>
&lt;div class=&quot;embed-responsive embed-responsive-1by1&quot;&gt;
   &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <b-embed
              type="iframe"
              aspect="1by1"
              src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
              allowfullscreen
            ></b-embed>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiEmbedVideo',
}
</script>
