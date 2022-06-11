<template>
  <b-container fluid>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
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
                  <pre class="text-white" id="tooltips-1">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. The data-placement attribute specifies the tooltip position.</p>
            <b-button v-b-tooltip.top="'Tooltip on top'" variant="secondary" class="mt-2 mr-2">Tooltip on top</b-button>
            <b-button v-b-tooltip.right="'Tooltip on right'" variant="secondary" class="mt-2 mr-2">Tooltip on right</b-button>
            <b-button v-b-tooltip.bottom="'Tooltip on bottom'" variant="secondary" class="mt-2 mr-2">Tooltip on bottom</b-button>
            <b-button v-b-tooltip.left="'Tooltip on left'" variant="secondary" class="mt-2 mr-2">Tooltip on left</b-button>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
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
                  <pre class="text-white" id="tooltips-2">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left Using background colors</p>
            <b-button v-b-tooltip.top="'Tooltip on top'" variant="primary" class="mt-2 mr-2">Tooltip on top</b-button>
            <b-button v-b-tooltip.right="'Tooltip on right'" variant="success" class="mt-2 mr-2">Tooltip on right</b-button>
            <b-button v-b-tooltip.bottom="'Tooltip on bottom'" variant="danger" class="mt-2 mr-2">Tooltip on bottom</b-button>
            <b-button v-b-tooltip.left="'Tooltip on left'" variant="info" class="mt-2 mr-2">Tooltip on left</b-button>
          </template>
        </card>
        
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled elements</h4>
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
                  <pre class="text-white" id="disabled-1">
                    <code>
&lt;span class=&quot;d-inline-block&quot; tabindex=&quot;0&quot; data-toggle=&quot;tooltip&quot; title=&quot;Disabled tooltip&quot;&gt;
   &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot focus, hover, or click them to trigger a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex="0"</code>, and override the <code>pointer-events</code> on the disabled element.</p>
            <span class="d-inline-block" tabindex="0" v-b-tooltip.top title="Disabled tooltip">
              <b-button variant="primary" style="pointer-events: none;" disabled>Disabled button</b-button>
            </span>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
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
                  <pre class="text-white" id="tooltips-2">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-primary mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-success mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-danger mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-info mt-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left Using Light background colors</p>
            <b-button v-b-tooltip.top="'Tooltip on top'" variant="none" class="btn iq-bg-primary bg-primary-light mt-2">Tooltip on top</b-button>
            <b-button v-b-tooltip.right="'Tooltip on right'" variant="none" class="iq-bg-success mt-2  mr-2">Tooltip on right</b-button>
            <b-button v-b-tooltip.bottom="'Tooltip on bottom'" variant="none" class="iq-bg-danger mt-2  mr-2">Tooltip on bottom</b-button>
            <b-button v-b-tooltip.left="'Tooltip on left'" variant="none" class="iq-bg-info mt-2  mr-2">Tooltip on left</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Hover elements</h4>
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
                  <pre class="text-white" id="tooltips-5">
                    <code>
&lt;a href=&quot;#&quot; data-toggle=&quot;tooltip&quot; title=&quot;Some tooltip text!&quot;&gt;Hover over me&lt;/a&gt;
&lt;!-- Generated markup by the plugin --&gt;
&lt;div class=&quot;tooltip bs-tooltip-top&quot; role=&quot;tooltip&quot;&gt;
   &lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;
   &lt;div class=&quot;tooltip-inner&quot;&gt;Some tooltip text!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Hover over the buttons below to see the tooltip.</p>
            <b-button href="#" v-b-tooltip.hover="'Some tooltip text!'" variant="link" >Hover over me</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiTooltips',
}
</script>
