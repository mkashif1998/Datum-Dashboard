<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Popovers</h4>
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
                  <pre class="text-white" id="popover-1">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-danger mt-2&quot; data-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-content=&quot;And here&apos;s some amazing content. It&apos;s very engaging. Right?&quot;&gt;Click to toggle popover&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <b-button size="lg" variant="danger" id="popover-button-variant">Click to toggle popover</b-button>
            <b-popover target="popover-button-variant">
              <template v-slot:title>Popover title</template>
              And here's some amazing content. It's very engaging. Right?
            </b-popover>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Dismiss on next click</h4>
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
                  <pre class="text-white" id="popover-2">
                    <code>
&lt;a tabindex=&quot;0&quot; class=&quot;btn btn-danger mt-2&quot; role=&quot;button&quot; data-toggle=&quot;popover&quot; data-trigger=&quot;focus&quot; title=&quot;Dismissible popover&quot; data-content=&quot;And here&apos;s some amazing content. It&apos;s very engaging. Right?&quot;&gt;Dismissible popover&lt;/a&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
            <b-button href="#" variant="danger" id="popover-button-dismiss">Dismissible popover</b-button>
            <b-popover target="popover-button-dismiss"  triggers="focus">
              <template v-slot:title>Dismissible popover</template>
              And here's some amazing content. It's very engaging. Right?
            </b-popover>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled elements</h4>
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
                  <pre class="text-white" id="popover-3">
                    <code>
&lt;span class=&quot;d-inline-block&quot; data-toggle=&quot;popover&quot; data-content=&quot;Disabled popover&quot;&gt;
   &lt;button class=&quot;btn btn-primary mt-2&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> and override the <code>pointer-events</code> on the disabled element.</p>
            <span class="d-inline-block" tabindex="0" v-b-popover title="Disabled popover">
              <b-button variant="primary" style="pointer-events: none;" disabled>Disabled button</b-button>
            </span>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Hover elements</h4>
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
                  <pre class="text-white" id="popover-4">
                    <code>
&lt;span class=&quot;d-inline-block&quot; data-trigger=&quot;hover&quot; data-toggle=&quot;popover&quot; data-content=&quot;Disabled popover&quot;&gt;
   &lt;button class=&quot;btn btn-primary mt-2&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>For disabled popover triggers, you may also prefer <code>data-trigger="hover"</code> so that the popover appears as immediate visual feedback to your users as they may not expect to <em>click</em> on a disabled element.</p>
            <span class="d-inline-block" tabindex="0" v-b-popover.hover title="Disabled popover">
              <b-button variant="primary" style="pointer-events: none;" disabled>Disabled button</b-button>
            </span>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Four directions</h4>
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
                  <pre class="text-white" id="popover-5">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
              <p>Four options are available: top, right, bottom, and left aligned.</p>
            <b-button v-b-popover.click.top="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="">
              Popover on top
            </b-button>
            <b-button v-b-popover.click.right="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on right
            </b-button>
            <b-button v-b-popover.click.bottom="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on bottom
            </b-button>
            <b-button v-b-popover.click.left="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on left
            </b-button>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Popovers With Color</h4>
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
                  <pre class="text-white" id="popover-6">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Four options are available: top, right, bottom, and left aligned.</p>
            <b-button variant="primary" v-b-popover.click.top="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'">
              Popover on top
            </b-button>
            <b-button variant="success" v-b-popover.click.right="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on right
            </b-button>
            <b-button variant="danger" v-b-popover.click.bottom="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on bottom
            </b-button>
            <b-button variant="info" v-b-popover.click.left="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" class="ml-3">
              Popover on left
            </b-button>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Popovers With Color</h4>
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
                  <pre class="text-white" id="popover-7">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-primary mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on top&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-success mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on right&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-danger mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on bottom&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn iq-bg-info mt-2&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Popover on left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Four options are available: top, right, bottom, and left aligned.</p>
            <b-button  variant="none" class="btn btn-secondary" v-b-popover.click.top="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'" >
              Popover on top
            </b-button>
            <b-button  variant="none" class="ml-2 btn btn-secondary" v-b-popover.click.right="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'">
              Popover on right
            </b-button>
            <b-button  variant="none" class="ml-2 btn btn-secondary" v-b-popover.click.bottom="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'">
              Popover on bottom
            </b-button>
            <b-button  variant="none" class="ml-2 btn btn-secondary" v-b-popover.click.left="'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'">
              Popover on left
            </b-button>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiPopovers',
}
</script>
