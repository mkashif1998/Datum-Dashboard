<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-1>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-1">
                    <code>
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
   &lt;div class=&quot;toast-header&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
         &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
      &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;
      &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;toast-body&quot;&gt;
      Hello, world! This is a toast message.
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
              <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#007aff"></rect>
              </svg>
              <strong class="mr-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="toast-body">
              Hello, world! This is a toast message.
          </div>
          </div>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Stacking</h4>
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
                  <pre class="text-white" id="notification-2">
                    <code>
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
   &lt;div class=&quot;toast-header&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
         &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
      &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
      &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
      &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;toast-body&quot;&gt;
      See? Just like this.
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
   &lt;div class=&quot;toast-header&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
         &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
      &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
      &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
      &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;toast-body&quot;&gt;
      Heads up, toasts will stack automatically
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>When you have multiple toasts, we default to vertically stacking them in a readable manner.</p>
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="mr-auto">Bootstrap</strong>
                    <small class="text-muted">just now</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    See? Just like this.
                </div>
              </div>
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="mr-auto">Bootstrap</strong>
                    <small class="text-muted">2 seconds ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Heads up, toasts will stack automatically
                </div>
              </div>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications horizontally and/or vertically</h4>
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
                  <pre class="text-white" id="notification-3">
                    <code>
&lt;div class=&quot;p-3 bg-dark&quot;&gt;
   &lt;!-- Flexbox container for aligning the toasts --&gt;
   &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;d-flex justify-content-center align-items-center&quot; style=&quot;min-height: 200px;&quot;&gt;
      &lt;!-- Then put toasts within --&gt;
      &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
         &lt;div class=&quot;toast-header&quot;&gt;
            &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
               &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
            &lt;/svg&gt;
            &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>
            <div class="p-3 bg-dark">
              <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                          <rect width="100%" height="100%" fill="#007aff"></rect>
                      </svg>
                      <strong class="mr-auto">Bootstrap</strong>
                      <small>11 mins ago</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="toast-body">
                      Hello, world! This is a toast message.
                    </div>
                </div>
              </div>
            </div>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-4 >
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-4">
                    <code>
&lt;div class=&quot;p-3 bg-dark&quot;&gt;
   &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
      &lt;div class=&quot;toast-header&quot;&gt;
         &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
            &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
         &lt;/svg&gt;
         &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
         &lt;small&gt;11 mins ago&lt;/small&gt;
         &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
         &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;
         &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;toast-body&quot;&gt;
         Hello, world! This is a toast message.
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
      <div class="p-3 bg-dark">
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
              </svg>
              <strong class="mr-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="toast-body">
              Hello, world! This is a toast message.
            </div>
        </div>
      </div>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Stacking Placement</h4>
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
                  <pre class="text-white" id="notification-5">
                    <code>
&lt;div class=&quot;bg-dark p-3&quot;&gt;
   &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
      &lt;div class=&quot;toast fade show&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;
         &lt;div class=&quot;toast-header&quot;&gt;
            &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
               &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
            &lt;/svg&gt;
            &lt;strong class=&quot;mr-auto&quot;&gt;Bootstrap&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>.</p>
      <div class="p-3 bg-dark">
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
          <div class="toast fade show" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
          </div>
      </div>
      </div>
      <p class="mt-3">For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>
      <div class="bg-dark p-3 mt-3">
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
          <div style="position: absolute; top: 0; right: 0;">
          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
              </svg>
              <strong class="mr-auto">Bootstrap</strong>
              <small class="text-muted">just now</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              See? Just like this.
            </div>
        </div>
          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                  </svg>
                  <strong class="mr-auto">Bootstrap</strong>
                  <small class="text-muted">2 seconds ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  Heads up, toasts will stack automatically
                </div>
            </div>
          </div>
        </div>
      </div>
          </template>
        </card>
      </b-col>
      <b-col sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
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
                  <pre class="text-white" id="notification-6">
                    <code>
&lt;div class=&quot;toast fade show bg-primary text-white border-0 rounded p-2&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
   &lt;div class=&quot;toast-header bg-primary text-white&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
         &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#fff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;mr-auto text-white&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close text-white&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
      &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;
      &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;toast-body&quot;&gt;
      Hello, world! This is a toast message.
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast fade show bg-success text-white border-0 rounded p-2 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
   &lt;div class=&quot;toast-header bg-success text-white&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded mr-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
         &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#fff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;mr-auto text-white&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button type=&quot;button&quot; class=&quot;ml-2 mb-1 close text-white&quot; data-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
      &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;
      &lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;toast-body&quot;&gt;
      Hello, world! This is a toast message.
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
        <div class="toast fade show bg-primary text-white border-0 rounded p-2" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-primary text-white">
              <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#fff"></rect>
              </svg>
              <strong class="mr-auto text-white">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="toast-body">
              Hello, world! This is a toast message.
          </div>
        </div>
      <div class="toast fade show bg-success text-white border-0 rounded p-2 mt-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white">
            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <rect width="100%" height="100%" fill="#fff"></rect>
            </svg>
            <strong class="mr-auto text-white">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
      </div>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiNotifications',
  methods: {
    makeToast (append = false) {
      this.$bvToast.toast('This is toast numbe', {
        title: 'BootstrapVue Toast',
        autoHideDelay: 5000,
        appendToast: append
      })
    }
  }
}
</script>
<style>
.b-toast .toast {
  opacity: 1 !important;
  background-color: unset;
}
</style>
