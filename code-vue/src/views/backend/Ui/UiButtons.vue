<template>
  <b-container fluid>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-1 >
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;button type="button" class="mt-2 btn btn-primary btn-with-icon"&gt;&lt;i class="ri-bill-fill"&gt;&lt;/i&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="primary" class="mt-2 mr-1">Primary</b-button>
            <b-button variant="secondary" class="mt-2 mr-1">Secondary</b-button>
            <b-button variant="success" class="mt-2 mr-1">Success</b-button>
            <b-button variant="danger" class="mt-2 mr-1">Danger</b-button>
            <b-button variant="warning" class="mt-2 mr-1">Warning</b-button>
            <b-button variant="info" class="mt-2 mr-1">Info</b-button>
            <b-button variant="light" class="mt-2 mr-1">Light</b-button>
            <b-button variant="dark" class="mt-2 mr-1">Dark</b-button>
            <b-button variant="link" class="mt-2 mr-1">Link</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Rounded Shape</h4>
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
                  <pre class="text-white" id="default-buttons-round-shape">
                    <code>
&lt;button type="button" class="btn btn-primary rounded-pill mt-2"&gt;&lt;i class="ri-bill-fill"&gt;&lt;/i&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button pill variant="primary" class="mt-2 mr-1">Primary</b-button>
            <b-button pill variant="secondary" class="mt-2 mr-1">Secondary</b-button>
            <b-button pill variant="success" class="mt-2 mr-1">Success</b-button>
            <b-button pill variant="danger" class="mt-2 mr-1">Danger</b-button>
            <b-button pill variant="warning" class="mt-2 mr-1">Warning</b-button>
            <b-button pill variant="info" class="mt-2 mr-1">Info</b-button>
            <b-button pill variant="light" class="mt-2 mr-1">Light</b-button>
            <b-button pill variant="dark" class="mt-2 mr-1">Dark</b-button>
            <b-button pill variant="link" class="mt-2 mr-1">Link</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Outline Buttons</h4>
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
                  <pre class="text-white" id="outline-buttons">
                    <code>
&lt;button type="button" class="btn btn-outline-primary mt-2 btn-with-icon"&gt;&lt;i class="ri-heart-line"&gt;&lt;/i&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="outline-primary" class="mt-2 mr-1">Primary</b-button>
            <b-button variant="outline-secondary" class="mt-2 mr-1">Secondary</b-button>
            <b-button variant="outline-success" class="mt-2 mr-1">Success</b-button>
            <b-button variant="outline-danger" class="mt-2 mr-1">Danger</b-button>
            <b-button variant="outline-warning" class="mt-2 mr-1">Warning</b-button>
            <b-button variant="outline-info" class="mt-2 mr-1">Info</b-button>
            <b-button variant="outline-dark" class="mt-2 mr-1">Dark</b-button>
            <b-button variant="outline-link" class="mt-2 mr-1">Link</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Rounded Outline Buttons</h4>
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
                  <pre class="text-white" id="round-outlines-buttons">
                    <code>
&lt;button type="button" class="btn btn-outline-primary rounded-pill mt-2 btn-with-icon"&gt;&lt;i class="ri-heart-line"&gt;&lt;/i&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button pill variant="outline-primary" class="mt-2 mr-1">Primary</b-button>
            <b-button pill variant="outline-secondary" class="mt-2 mr-1">Secondary</b-button>
            <b-button pill variant="outline-success" class="mt-2 mr-1">Success</b-button>
            <b-button pill variant="outline-danger" class="mt-2 mr-1">Danger</b-button>
            <b-button pill variant="outline-warning" class="mt-2 mr-1">Warning</b-button>
            <b-button pill variant="outline-info" class="mt-2 mr-1">Info</b-button>
            <b-button pill variant="outline-dark" class="mt-2 mr-1">Dark</b-button>
            <b-button pill variant="outline-link" class="mt-2 mr-1">Link</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons</h4>
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
                  <pre class="text-white" id="default-buttons-icon">
                    <code>
&lt;button type="button" class="mt-2 btn btn-primary btn-with-icon"&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="primary" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Primary</b-button>
            <b-button variant="secondary" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Secondary</b-button>
            <b-button variant="success" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Success</b-button>
            <b-button variant="danger" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Danger</b-button>
            <b-button variant="warning" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Warning</b-button>
            <b-button variant="info" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Info</b-button>
            <b-button variant="light" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Light</b-button>
            <b-button variant="dark" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Dark</b-button>
            <b-button variant="link" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Link</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Rounded Shape</h4>
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
                  <pre class="text-white" id="default-buttons-round-shape-icon">
                    <code>
&lt;button type="button" class="mt-2 btn btn-primary rounded-pill btn-with-icon"&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button pill variant="primary" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Primary</b-button>
            <b-button pill variant="secondary" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Secondary</b-button>
            <b-button pill variant="success" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Success</b-button>
            <b-button pill variant="danger" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Danger</b-button>
            <b-button pill variant="warning" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Warning</b-button>
            <b-button pill variant="info" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Info</b-button>
            <b-button pill variant="light" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Light</b-button>
            <b-button pill variant="dark" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Dark</b-button>
            <b-button pill variant="link" class="mt-2 mr-1"><i class="ri-bill-fill"></i> Link</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Outline Buttons</h4>
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
                  <pre class="text-white" id="outline-buttons-icons">
                    <code>
&lt;button type="button" class="btn btn-primary mt-2"&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="outline-primary" class="mt-2 mr-1"><i class="ri-heart-line"></i> Primary</b-button>
            <b-button variant="outline-secondary" class="mt-2 mr-1"><i class="ri-alert-line"></i> Secondary</b-button>
            <b-button variant="outline-success" class="mt-2 mr-1"><i class="ri-heart-line"></i> Success</b-button>
            <b-button variant="outline-danger" class="mt-2 mr-1"><i class="ri-alert-line"></i> Danger</b-button>
            <b-button variant="outline-warning" class="mt-2 mr-1"><i class="ri-heart-line"></i> Warning</b-button>
            <b-button variant="outline-info" class="mt-2 mr-1"><i class="ri-alert-line"></i> Info</b-button>
            <b-button variant="outline-dark" class="mt-2 mr-1"><i class="ri-alert-line"></i> Dark</b-button>
            <b-button variant="outline-link" class="mt-2 mr-1"><i class="ri-heart-line"></i> Link</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Rounded Outline Buttons</h4>
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
                  <pre class="text-white" id="round-outlines-buttons-icons">
                    <code>
&lt;button type="button" class="btn btn-primary mt-2"&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button pill variant="outline-primary" class="mt-2 mr-1"><i class="ri-heart-line"></i> Primary</b-button>
            <b-button pill variant="outline-secondary" class="mt-2 mr-1"><i class="ri-alert-line"></i> Secondary</b-button>
            <b-button pill variant="outline-success" class="mt-2 mr-1"><i class="ri-heart-line"></i> Success</b-button>
            <b-button pill variant="outline-danger" class="mt-2 mr-1"><i class="ri-alert-line"></i> Danger</b-button>
            <b-button pill variant="outline-warning" class="mt-2 mr-1"><i class="ri-heart-line"></i> Warning</b-button>
            <b-button pill variant="outline-info" class="mt-2 mr-1"><i class="ri-alert-line"></i> Info</b-button>
            <b-button pill variant="outline-dark" class="mt-2 mr-1"><i class="ri-alert-line"></i> Dark</b-button>
            <b-button pill variant="outline-link" class="mt-2 mr-1"><i class="ri-heart-line"></i> Link</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Tags</h4>
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
                  <pre class="text-white" id="buttons-tags">
                    <code>
&lt;a class="mt-2 btn btn-primary" href="#" role="button"&gt;Link&lt;/a&gt;
&lt;button class="mt-2 btn btn-success" type="submit"&gt;Button&lt;/button&gt;
&lt;input class="mt-2 btn btn-danger" type="button" value="Input"&gt;
&lt;input class="mt-2 btn btn-warning" type="submit" value="Submit"&gt;
&lt;input class="mt-2 btn btn-info" type="reset" value="Reset"&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="primary" class="mr-1" type="button">Link</b-button>
            <b-button variant="success" class="mr-1" type="button">Button</b-button>
            <b-button variant="danger" class="mr-1" type="button">Input</b-button>
            <b-button variant="warning" class="mr-1" type="button">Submit</b-button>
            <b-button variant="info" class="mr-1" type="button">Reset</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Buttons Sizes</h4>
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
                  <pre class="text-white" id="buttons-sizes">
                    <code>
&lt;button type="button" class="btn btn-primary btn-sm mr-2"&gt;Small Button&lt;/button&gt;
&lt;button type="button" class="btn btn-success mr-2"&gt;Button&lt;/button&gt;
&lt;button type="button" class="btn btn-info btn-lg"&gt;Large Button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button size="sm" variant="primary" class="mr-2">Small Button</b-button>
            <b-button variant="success" class="mr-2">Button</b-button>
            <b-button size="lg" variant="info">Large Button</b-button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Block Buttons</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-11>
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-11" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="block-buttons-21">
                    <code>
&lt;button type="button" class="btn btn-primary btn-block"&gt;Block level button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button block variant="primary">Block level button</b-button>
            <b-button block variant="success">Block level button</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Icons Buttons</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-12>
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-12" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="block-buttons">
                    <code>
&lt;button type="button" class="btn btn-primary mt-2"&gt;&lt;i class="ri-heart-fill pr-0"&gt;&lt;/i&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-primary mt-2 btn-with-icon"&gt;&lt;i class="ri-heart-fill pr-0"&gt;&lt;/i&gt;Primary&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="primary" class="mt-2 mr-1"><i class="ri-heart-fill pr-0"></i></b-button>
            <b-button variant="secondary" class="mt-2 mr-1"><i class="ri-star-fill pr-0"></i></b-button>
            <b-button variant="success" class="mt-2 mr-1"><i class="ri-settings-4-fill pr-0"></i></b-button>
            <b-button variant="danger" class="mt-2 mr-1"><i class="ri-radio-button-fill pr-0"></i></b-button>
            <b-button variant="warning" class="mt-2 mr-1"><i class="ri-delete-bin-2-fill pr-0"></i></b-button>
            <b-button variant="info" class="mt-2 mr-1"><i class="ri-lock-fill pr-0"></i></b-button>
            <b-button variant="light" class="mt-2 mr-1"><i class="ri-time-fill pr-0"></i></b-button>
            <b-button variant="dark" class="mt-2 mr-1"><i class="ri-sun-fill pr-0"></i></b-button>
            <b-button variant="link" class="mt-2 mr-1"><i class="ri-moon-fill pr-0"></i></b-button>
            <div class="d-inline-block w-100">
              <b-button variant="primary" class="mt-2 mr-1"><i class="ri-heart-fill"></i> Buttons</b-button>
              <b-button variant="secondary" class="mt-2 mr-1"><i class="ri-star-fill"></i> Buttons</b-button>
              <b-button variant="success" class="mt-2 mr-1"><i class="ri-settings-4-fill"></i> Buttons</b-button>
              <b-button variant="danger" class="mt-2 mr-1"><i class="ri-radio-button-fill"></i> Buttons</b-button>
              <b-button variant="info" class="mt-2 mr-1"><i class="ri-lock-fill"></i> Buttons</b-button>
            </div>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Social Disabled State</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-13>
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-13" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="social-disabled-state">
                    <code>
&lt;button type="button" class="mt-2 btn btn-primary" disabled"&gt;Primary button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button disabled variant="primary" class="mt-2 mr-1">Primary button</b-button>
            <b-button disabled variant="success" class="mt-2 mr-1">Button</b-button>
            <b-button disabled variant="outline-primary" class="mt-2 mr-1">Button</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Buttons Toggle States</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-14>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-14" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-toggle-states">
                    <code>
&lt;button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" &gt;
Single toggle
&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">Single toggle</button>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Active</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-15>
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-15" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-active">
                    <code>
&lt;button type="button" class="btn btn-primary active mt-2"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary active mt-2"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-warning active mt-2"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-accent disabled mt-2"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-primary disabled mt-2"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-primary disabled mt-2"&gt;Disabled&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button variant="primary" class="active mt-2 mr-1">Active</b-button>
            <b-button variant="secondary" class="active mt-2 mr-1">Active</b-button>
            <b-button variant="warning" class="active mt-2 mr-1">Active</b-button>
            <b-button variant="accent" class="mt-2 mr-1" disabled>Disabled</b-button>
            <b-button variant="primary" class="mt-2 mr-1" disabled>Disabled</b-button>
            <b-button variant="outline-primary" class="mt-2 mr-1" disabled>Disabled</b-button>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Group</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-17>
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-17" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-group">
                    <code>
&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Left&lt;&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Middle&lt;&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Right&lt;&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button-group>
              <b-button variant="primary">Left</b-button>
              <b-button variant="primary">Middle</b-button>
              <b-button variant="primary">Right</b-button>
            </b-button-group>
            <b-button-toolbar aria-label="Toolbar with button groups" class="mt-2">
              <b-button-group class="mr-2">
                <b-button variant="secondary">1</b-button>
                <b-button variant="secondary">2</b-button>
                <b-button variant="secondary">3</b-button>
                <b-button variant="secondary">4</b-button>
              </b-button-group>
              <b-button-group class="mr-2">
                <b-button variant="secondary">5</b-button>
                <b-button variant="secondary">6</b-button>
                <b-button variant="secondary">7</b-button>
              </b-button-group>
              <b-button-group class="mr-2">
                <b-button variant="secondary">8</b-button>
              </b-button-group>
            </b-button-toolbar>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Group Sizing</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-16 >
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-16" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="button-group-sizing">
                    <code>
&lt;button type="button" class="btn btn-primary mt-2"&gt;Left&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <div class="d-block">
              <b-button-group size="lg" class="mt-2">
                <b-button variant="primary">Left</b-button>
                <b-button variant="primary">Middle</b-button>
                <b-button variant="primary">Right</b-button>
              </b-button-group>
            </div>
            <div class="d-block">
              <b-button-group class="mt-2">
                <b-button variant="primary">Left</b-button>
                <b-button variant="primary">Middle</b-button>
                <b-button variant="primary">Right</b-button>
              </b-button-group>
              </div>
            <div class="d-block">
              <b-button-group size="sm" class="mt-2">
                <b-button variant="primary">Left</b-button>
                <b-button variant="primary">Middle</b-button>
                <b-button variant="primary">Right</b-button>
              </b-button-group>
            </div>
          </template>
        </card>
      </b-col>
      <b-col lg="6" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Dropdown</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-18 >
                 <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-18" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false"&gt;
         Dropdown
    &lt;/button&gt;
    &lt;div class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-button-group class="mr-2">
              <b-button variant="primary">1</b-button>
              <b-button variant="primary">2</b-button>
              <b-dropdown variant="primary">
                <template #button-content>
                 Dropdown  
                </template>
                <b-dropdown-item href="#">Dropdown link</b-dropdown-item>
                <b-dropdown-item href="#">Dropdown link</b-dropdown-item>
              </b-dropdown>
            </b-button-group>
            <div class="d-block mt-2">
              <b-button-group vertical>
                <b-button variant="primary">1</b-button>
                <b-button variant="primary">2</b-button>
                <b-dropdown variant="primary">
                  <template #button-content>
                 Dropdown  
                </template>
                  <b-dropdown-item href="#">Dropdown link</b-dropdown-item>
                  <b-dropdown-item href="#">Dropdown link</b-dropdown-item>
                </b-dropdown>
              </b-button-group>
            </div>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiButtons',
}
</script>
