<template>
  <b-container fluid>
    <b-row>
      <b-col md="12">
        <div class="card">
            <div class="card-body">
              <p class="mb-0">Datum has extrend bootstrap alert component <a href="https://getbootstrap.com/docs/4.0/components/alerts/">Documentation</a></p>
            </div>
        </div>
      </b-col>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
              <h4 class="card-title">Basic Alerts</h4>
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
                  <pre class="text-white" id="basic-alert"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant="primary">
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="secondary">
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="success">
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="danger">
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="warning">
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="info">
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="light">
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Alerts With Icons</h4>
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
                   <pre class="text-white" id="basic-alert-icon"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant="primary">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="secondary">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="success">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="danger">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="warning">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="info">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="light">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Line Alerts</h4>
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
                  <pre class="text-white" id="basic-line-alert"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant="primary" class="bg-white">
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="secondary" class="bg-white">
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="success" class="bg-white">
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="danger" class="bg-white">
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="warning" class="bg-white">
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="info" class="bg-white">
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="light" class="bg-white">
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Line Alerts With Icons</h4>
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
                  <pre class="text-white" id="basic-line-alert-icon"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant="primary" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="secondary" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="success" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="danger" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="warning" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="info" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant="light" class="bg-white">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alerts With Background</h4>
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
                   <pre class="text-white" id="alert-with-background"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant=" " class="text-white bg-primary">
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-secondary">
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-success">
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-danger">
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-warning">
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" "  class="text-white bg-info">
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="bg-light">
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Background Alerts With Icons</h4>
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
                  <pre class="text-white" id="alert-with-background-icon"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant=" " class="text-white bg-primary">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-secondary">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-success">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-danger">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-warning">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="text-white bg-info">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " class="bg-light">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alerts Dismissing</h4>
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
                  <pre class="text-white" id="alert-with-dismiss"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-primary">
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-secondary">
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-success">
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-danger">
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-warning">
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade  class="text-white bg-info">
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="bg-light">
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alerts Dismissing With Icons</h4>
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
                  <pre class="text-white" id="alert-with-dismiss-icon"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-primary">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-secondary">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-success">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-danger">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-warning">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="text-white bg-info">
              <div class="iq-alert-icon">
                <i class="ri-information-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
            </b-alert>
            <b-alert :show="true" variant=" " dismissible fade class="bg-light">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
            </b-alert>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Additional content</h4>
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
                 <pre class="text-white" id="alert-with-link-additional"><code>
&lt;div class="alert alert-primary" role="alert"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <div class="col-sm-12">
                <b-alert :show="true" variant="primary">
                  <div class="iq-alert-text">
                    <h5 class="alert-heading">Well done!</h5>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
                </b-alert>
            </div>
            <div class="col-sm-12">
                <b-alert :show="true" variant="success">
                  <div class="iq-alert-text">
                    <h5 class="alert-heading">Well done!</h5>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
                </b-alert>
            </div>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiAlerts',
}
</script>
